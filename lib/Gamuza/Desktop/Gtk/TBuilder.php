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
 * Class TBuilder
 *
 * @property string $TranslationDomain
 */
class TBuilder extends System\TObject
{
    /**
     * Events
     */
    public function __construct ()
    {
        parent::__construct ();

        $this->Handle = new GtkBuilder ();
    }

    /**
     * Methods
     */
    public function AddFromFile (string $filename, GError $error)
    {
        return $this->Handle->add_from_file ($filename, $error);
    }

    public function AddFromString (string $buffer, int $length, GError $error)
    {
        return $this->Handle->add_from_string ($buffer, $length, $error);
    }

    public function AddObjectsFromFile (string $filename, string $object_ids, GError $error)
    {
        return $this->Handle->add_objects_from_file ($filename, $object_ids, $error);
    }

    public function AddObjectsFromString (string $buffer, int $length, string $object_ids, GError $error)
    {
        return $this->Handle->add_objects_from_file ($buffer, $length, $object_ids, $error);
    }

    public function ConnectSignals (mixed $user_data)
    {
        $this->Handle->connect_signals ($user_data);
    }

    public function ConnectSignalsFull (TBuilderConnectFunc $callback, mixed $user_data)
    {
        $this->Handle->connect_signals_full ($callback, $user_data);
    }

    public function GetObject (string $name)
    {
        return $this->Handle->get_object ($name);
    }

    public function GetObjects ()
    {
        return $this->Handle->get_objects ();
    }

    public function GetTranslationDomain ()
    {
        return $this->Handle->get_translation_domain ();
    }

    public function GetTypeFromName (string $type_name)
    {
        return $this->Handle->get_type_from_name ($type_name);
    }

    public function SetTranslationDomain (string $domain)
    {
        $this->Handle->set_translation_domain ($domain);
    }

    public function ValueFromString (TParamSpec $pspec, string $str, GValue $value, GError $error)
    {
        return $this->Handle->value_from_string ($pspec, $str, $value, $error);
    }

    public function ValueFromStringType (GType $type, string $str, GValue $value, GError $error)
    {
        return $this->Handle->value_from_string_type ($type, $str, $value, $error);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
            case 'Objects':           { $result = $this->GetObjects ();               break; }
            case 'TranslationDomain': { $result = $this->GetTranslationDomain ($val); break; }
            default:                  { $result = parent::__get ($var);                      }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
            case 'TranslationDomain': { $this->SetTranslationDomain ($val); break; }
            default:                  { parent::__set ($var, $val);                }
        }
    }
}

