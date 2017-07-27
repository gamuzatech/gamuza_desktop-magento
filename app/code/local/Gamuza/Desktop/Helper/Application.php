<?php
/**
 * @package     Gamuza_Desktop
 * @description Visual Component Library for Magento
 * @copyright   Copyright (c) 2017 Gamuza Technologies (http://www.gamuza.com.br/)
 * @author      Eneias Ramos de Melo <eneias@gamuza.com.br>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Library General Public
 * License as published by the Free Software Foundation; either
 * version 2 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Library General Public License for more details.
 *
 * You should have received a copy of the GNU Library General Public
 * License along with this library; if not, write to the
 * Free Software Foundation, Inc., 51 Franklin St, Fifth Floor,
 * Boston, MA 02110-1301, USA.
 */

/**
 * See the AUTHORS file for a list of people on the Gamuza Team.
 * See the ChangeLog files for a list of changes.
 * These files are distributed with gamuza_desktop-magento at http://github.com/gamuzatech/.
 */

/**
 * Class Gamuza_Desktop_Helper_Application
 */
class Gamuza_Desktop_Helper_Application extends Gamuza_Desktop_Helper_Data
{
    public function _parseDfmFileObject (string $dfmFile, resource $handle, TObject $owner, TObject $parent)
    {
        /**
         * Parse token: object
         */
        $sline = str_replace (PHP_EOL, chr (0), fgets ($handle));
        $iline = 1;

        if (feof ($handle))
        {
            throw new Exception ("Unexpected end of file in {$dfmFile} at line {$iline}. Expected token 'object'");
        }

        $result = preg_match ('/[\s]?([a-zA-Z]+)[\s]?([a-zA-Z0-9_]+)[\s]?([:])[\s]?([a-zA-Z0-9_]+)[\s]?/', $sline, $matches);

        $token = array_key_exists (1, $matches) && $matches [1] ? $matches [1] : $sline;
        if (!$result || strcmp (strtolower ($token), 'object'))
        {
            throw new Exception ("Unexpected value '{$token}' in {$dfmFile} at line {$iline}. Expected 'object objectName : className'");
        }

        /**
         * Validate object name & class
         */
        $objectName = $matches [2];

        $token = $matches [3];
        if (strcmp ($token, ':'))
        {
            throw new Exception ("Unexpected value '{$token}' in {$dfmFile} at line {$iline}. Expected token ':'");
        }

        $className = $matches [4];

        /**
         * Instance
         */
        $object = new $className;
        $object->Name = $objectName;
        $object->Owner = $owner;
        $object->Parent = $parent;

        $parent->$objectName = $object;

        /**
         * By default, a window owns all components that are on it.
         * In turn, the window is owned by application.
         */
        if ($object instanceof TWindow) $owner = $object;
        if ($owner instanceof TWindow) $owner->$objectName = $object;

        // Add gtkwidget to gtkcontainer
        if (($object instanceof TWidget && $parent instanceof TAssistant)
            || ($object instanceof TWidget && $parent instanceof TNotebook))
        {
            $parent->AppendPage ($object);
        }
        else if ($object instanceof TWidget && $parent instanceof TScrolledWindow)
        {
            $parent->AddWithViewport ($object);
        }
        else if ($object instanceof TWidget && $parent instanceof TTable)
        {
            if ($parent->AutoAttach) $parent->Add ($object);
        }
        else if ($object instanceof TTreeStore && $parent instanceof TTreeView)
        {
            $parent->SetModel ($object);
        }
        else if ($object instanceof TTreeViewColumn && $parent instanceof TTreeView)
        {
            $parent->AppendColumn ($object);
        }
        else if (($object instanceof TCellRenderer && $parent instanceof TTreeViewColumn)
                || ($object instanceof TCellRenderer && $parent instanceof TComboBox)
                || ($object instanceof TWidget && $parent instanceof TDialog))
        {
            $parent->PackStart ($object, true);
        }
        else if ($object instanceof TWidget && $parent instanceof TContainer)
        {
            $parent->Add ($object);
        }

        /**
         * Always show widgets
         */
        if ($object instanceof TWidget && !($object instanceof TWindow)) $object->Show ();

        /**
         * Parse remaining
         */
        while (!feof ($handle))
        {
            $offset = ftell ($handle);
            $sline = str_replace (PHP_EOL, chr (0), fgets ($handle));
            ++ $iline;

            if (feof ($handle))
            {
                throw new Exception ("Unexpected end of file in {$dfmFile} at line {$iline}. Expected token 'object', 'end' or a property");
            }

            if (preg_match ('/[\s]?([a-zA-Z]+)[\s]?([a-zA-Z0-9_]+)[\s]?([:])[\s]?([a-zA-Z0-9_]+)[\s]?/', $sline, $matches))
            {
                fseek ($handle, $offset);

                $this->_parseDfmFileObject ($dfmFile, $handle, $owner, $object);
            }
            else if (preg_match ('/[\s]?([a-zA-Z0-9_]+)[\s]?[=][\s]?(.*)[\s]?/', $sline))
            {
                $this->_parseDfmFileProperty ($owner, $object, $sline);
            }
            else if (!strlen (trim ($sline)))
            {
                continue; // empty line
            }
            else
            {
                break;
            }

            ++ $iline;
        }

        /**
         * Parse token: end
         */
        fseek ($handle, $offset);
        $sline = str_replace (PHP_EOL, chr (0), fgets ($handle));
        ++ $iline;

        if (feof ($handle))
        {
            throw new Exception ("Unexpected end of file in {$dfmFile} at line {$iline}. Expected token 'end'");
        }

        if (strcmp (strtolower (trim ($sline)), 'end'))
        {
            throw new Exception ("Unexpected value '{$sline}' in {$dfmFile} at line {$iline}. Expected token 'end'");
        }

        // if (method_exists ($object, '__onevent')) $object->__onevent ();
        if (method_exists ($object, 'OnLoaded')) $object->OnLoaded ();

        return $object;
    }

    public function _parseDfmFileProperty (TObject $owner, TObject $object, string $sline)
    {
        $objectName = get_class ($object);

        preg_match ('/[\s]?([a-zA-Z0-9_]+)[\s]?=[\s]?(.*)[\s]?/', $sline, $matches);

        $property = $matches [1];
        $value = trim ($matches [2]);

        if (preg_match ("/[\[](.*)[\]]/", $value, $matches))
        {
            $result = null;

            $parts = explode (',', $matches [1]);
            foreach ($parts as $_part)
            {
                $result [] = $this->_parseDfmFileValue ($owner, $_part);
            }

            $value = $result;
        }
        else
        {
            $value = $this->_parseDfmFileValue ($owner, $value);

            if ((is_callable (array ($owner, $value), true, $callableMethodName) && method_exists ($owner, $value))
                || (is_callable (array ($object, $value), true, $callableMethodName) && method_exists ($object, $value))
                || (is_callable (array ($objectName, $value), true, $callableMethodName) && method_exists ($objectName, $value))
                || (is_callable ($value, true, $callableMethodName) && function_exists ($value))
            )
            {
                $result = $callableMethodName;
            }
        }

        $object->$property = $value;
    }

    public function _parseDfmFileValue (TObject $owner, mixed $value)
    {
        $value = trim ($value);

        // Object
        if (property_exists ($owner, $value) && is_object ($owner->$value))
        {
            return $owner->$value;
        }

        // Constant
        if (defined ($value))
        {
            return constant ($value);
        }

        // Boolean
        if (!strcmp (strtolower ($value), 'true'))
        {
            return true;
        }
        else if (!strcmp (strtolower ($value), 'false'))
        {
            return false;
        }

        // String?
        return __($this->unquote ($value));
    }
}

