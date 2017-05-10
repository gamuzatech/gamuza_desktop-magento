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
 * Class TFileFilter
 *
 * @property string $Name
 */
class TFileFilter extends TObject
{
    /**
     * Events
     */
    public function __construct ()
    {
        parent::__construct ();

        $this->Handle = new GtkFileFilter ();
    }

    /**
     * Methods
     */
    public function AddCustom (TFileFilterFlags $flags, $callback /* [ , $user_param ] */)
    {
        $args = func_get_args ();

        $this->Handle->add_custom ($flags, $callback, $args);
    }

    public function AddMimeType (string $mime_type)
    {
        $this->Handle->add_mime_type ($mime_type);
    }

    public function AddPattern (string $pattern)
    {
        $this->Handle->add_pattern ($pattern);
    }

    public function AddPixbufFormats ()
    {
        $this->Handle->add_pixbuf_formats ();
    }

    public function Filter (array $file_info)
    {
        return $this->Handle->filter ($file_info);
    }

    public function GetName ()
    {
        return $this->Handle->get_name ();
    }

    public function GetNeeded ()
    {
        return $this->Handle->get_needed ();
    }

    public function SetName (string $name)
    {
        $this->Handle->set_name ($name);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Name':   { $result = $this->GetName ();    break; }
        case 'Needed': { $result = $this->GetNeeded ();  break; }
        default:       { $result = parent::__get ($var);        }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Name': { $this->SetName ($val);      break; }
        default:     { parent::__set ($var, $val);        }
        }
    }
}

