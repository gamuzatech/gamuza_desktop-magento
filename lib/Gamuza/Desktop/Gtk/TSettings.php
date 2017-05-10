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
 * Class TSettings
 */
abstract class TSettings extends System\TObject
{
    /**
     * Methods
     */
    public function GetDefault ()
    {
        return $this->Handle->get_default ();
    }

    public function GetForScreen (GdkScreen $screen)
    {
        return $this->Handle->get_for_screen ($screen);
    }

    public function SetDoubleProperty (string $name, double $v_double, string $origin)
    {
        $this->Handle->set_double_property ($name, $v_double, $origin);
    }

    public function SetLongProperty (string $name, int $v_long, string $origin)
    {
        $this->Handle->set_long_property ($name, $v_Long, $origin);
    }

    public function SetStringProperty (string $name, string $v_string, string $origin)
    {
        $this->Handle->set_string_property ($name, $v_string, $origin);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Default': { $result = $this->GetDefault (); break; }
        default:        { $result = parent::__get ($var);        }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        default: { parent::__set ($var, $val); }
        }
    }
}

