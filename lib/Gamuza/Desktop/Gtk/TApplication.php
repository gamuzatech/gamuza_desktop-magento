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
 * Class TApplication
 *
 * @property string $Description
 * @property string $Title
 * @property string $Version
 *
 * @property TForm   $MainForm
 * @property TWindow $MainWindow
 *
 * @property string|array $OnTerminate
 */
class TApplication extends TObject
{
    protected $_description = null;
    protected $_title       = null;
    protected $_version     = null;

    /**
     * Components
     */
    public $MainForm;
    public $MainWindow;

    /**
     * Events
     */
    public $OnTerminate;

    public function OnFatalError ()
    {
        $error = error_get_last ();
        if (empty ($error)) return false;

        $this->ShowException (new Exception(
            sprintf ("%s: %d\n%s: %s\n%s: %s\n%s: %d\n",
                $this->__('Type'),    $error ['type'],
                $this->__('Message'), $error ['message'],
                $this->__('File'),    $error ['file'],
                $this->__('Line'),    $error ['line']
            )
        ));
    }

    /**
     * Methods
     */
    public function CreateBlock ($klass, & $reference)
    {
        $blockClassName = $this->GetConfig ()->getBlockClassName ($klass);

        if (class_exists ($blockClassName, true))
        {
            $reference = new $blockClassName;
        }
        else
        {
            throw new Exception ($this->__('Class not found: %s!', $blockClassName));
        }
    }

    public function CreateForm ($klass, & $reference)
    {
        $windowClassName = $this->GetConfig ()->GetWidgetClassName ($klass);

        $this->LoadDfmFile ($windowClassName, $reference);

        if (!$this->MainForm) $this->MainForm = $reference;

        $this->_call_user_func ($reference, $reference->OnLoaded);
    }

    public function CreateWidget ($klass, & $reference)
    {
        $widgetClassName = $this->GetConfig ()->GetWidgetClassName ($klass);

        if (class_exists ($widgetClassName, true))
        {
            $reference = new $widgetClassName;
        }
        else
        {
            throw new Exception ($this->__('Class not found: %s!', $widgetClassName));
        }
    }

    public function CreateWindow ($klass, & $reference)
    {
        $windowClassName = $this->GetConfig ()->GetWidgetClassName ($klass);

        $this->LoadDfmFile ($windowClassName, $reference);

        if (!$this->MainWindow) $this->MainWindow = $reference;

        $this->_call_user_func ($reference, $reference->OnLoaded);
    }

    public function EventsPending ()
    {
        return Gtk::events_pending ();
    }

    public function GetConfig ()
    {
        return Mage::getConfig ();
    }

    public function GetDescription ()
    {
        return $this->_description;
    }

    public function GetTitle ()
    {
        return $this->_title;
    }

    public function GetVersion ()
    {
        return $this->_version;
    }

    public function Init ()
    {
        Mage::app ('admin', 'store', array ('config_model' => Desktop::ConfigModel ()))->setUseSessionInUrl (false);

        Mage::app ()->setErrorHandler (function (
            $errno, $errstr, $errfile, $errline /* , $errcontext */
        )
        {
            if ($errno == E_RECOVERABLE_ERROR) return true; // cast

            echo sprintf ("%s: %d\n%s: %s\n%s: %s\n%s: %d\n",
                $this->__('Number'), $errno,
                $this->__('String'), $errstr,
                $this->__('File'),   $errfile,
                $this->__('Line'),   $errline
            );
        });

        $this->LoadLibrary ('cairo');
        $this->LoadLibrary ('php-gtk', 'php_gtk2');

        require GAMUZA_DESKTOP_GTK_DEFINES;
        require GAMUZA_DESKTOP_GTK_ENUMS;

        $config = $this->GetConfig ();

        $this->Description = $config->GetDescription ();
        $this->Title       = $config->GetTitle ();
        $this->Version     = $config->GetVersion ();

        register_shutdown_function (array ($this, 'OnFatalError'));
    }

    public function LoadDfmFile ($windowClassName, & $reference)
    {
        if (defined ("{$windowClassName}::DFM_FILE"))
        {
            $dfmFile = $windowClassName::DFM_FILE;
        }
        else
        {
            throw new Exception ("No DFM file defined for window class '{$windowClassName}'.");
        }

        $configModel = $this->GetConfig ();
        $dfmPath = Mage::getModuleDir ('dfm', $configModel::MODULE_NAME);

        $handle = fopen ($dfmPath . DS . $dfmFile, 'r');
        if (!$handle)
        {
            throw new Exception ("Cannot open DFM file '{$dfmFile}' for class '{$windowClassName}'.");
        }

        $reference = $this->_parseDfmFileObject ($dfmFile, $handle, $this, $this);

        if (!$this->MainWindow) $this->MainWindow = $reference;

        fclose ($handle);
    }

    private function LoadLibrary (string $libname, string $soname = null)
    {
        if (!extension_loaded ($libname))
        {
            $extension = ($soname ? $soname : $libname) . '.' . PHP_SHLIB_SUFFIX;

            if (!dl ($extension))
            {
                throw new Exception (__("Cannot load PHP dynamic library: %s", $extension));
            }
        }
    }

    public function MessageBox (
        string $text, string $caption,
        TButtonsType $buttons = null, TMessageType $style = null,
        TButtonsType $default = null, TButtonsType $escape = null
    )
    {
        $dialog = new GtkMessageDialog (null, Gtk::DIALOG_MODAL, $style, $buttons, $text);

        $_caption = $caption ? $caption : $this->Title;

        $dialog->set_markup ($this->latin1 ($text));
        $dialog->set_title ($this->latin1 ($_caption));
        // $dialog->set_transient_for (null);
        $dialog->set_position (Gtk::WIN_POS_CENTER);
        // $this->set_icon_from_file ();

        $result = $dialog->run ();
        $dialog->destroy();

        return $result;
    }

    public function Run ()
    {
        try
        {
            Gtk::main();

            $this->_call_user_func ($this, $this->OnTerminate);
        }
        catch (Exception $e)
        {
            $this->ShowException ($e);

            self::Run ();
        }
    }

    public function SetDescription (string $text)
    {
        $this->_description = $text;
    }

    public function SetTitle (string $text)
    {
        $this->_title = $text;
    }

    public function SetVersion (string $text)
    {
        $this->_version = $text;
    }

    public function ShowException (Exception $e)
    {
        $this->MessageBox ($e->getMessage (), $this->__("%s - Exception", $this->Title), btnOk, msgError);
    }

    public function Terminate ()
    {
        Gtk::main_quit ();
    }

    private function _parseDfmFileObject ($dfmFile, $handle, $owner, $parent)
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

        $token = $matches [1] ? $matches [1] : $sline;
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
        if ($object instanceof TWidget && $parent instanceof TScrolledWindow)
        {
            $parent->AddWithViewport ($object);
        }
        else if ($object instanceof TWidget && $parent instanceof TAssistant)
        {
            $parent->AppendPage ($object);
        }
        else if ($object instanceof TWidget && $parent instanceof TTable)
        {
            if ($parent->AutoAttach) $parent->Add ($object);
        }
        else if ($object instanceof TWidget && $parent instanceof TContainer)
        {
            $parent->Add ($object);
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

    private function _parseDfmFileProperty ($owner, $object, $sline)
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

    private function _parseDfmFileValue ($owner, $value)
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
        return $this->unquote ($value);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Description': { $result = $this->GetDescription (); break; }
        case 'Title':       { $result = $this->GetTitle ();       break; }
        case 'Version':     { $result = $this->GetVersion ();     break; }
        default:            { $result = parent::__get ($var);            }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Description': { $this->SetDescription ($val); break; }
        case 'Title':       { $this->SetTitle ($val);       break; }
        case 'Version':     { $this->SetVersion ($val);     break; }
        default:            { parent::__set ($var, $val);          }
        }
    }
}

