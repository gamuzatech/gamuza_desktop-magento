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
 * Class TToggleButton
 *
 * @property bool $Active
 * @property bool $Inconsistent
 * @property bool $Mode
 *
 * @property string|array $OnToggled
 */
class TToggleButton extends TButton
{
    /**
     * Events
     */
    public function __construct (/* string $label = null, $use_underline = true */)
    {
        parent::__construct ();

        $this->Handle = new GtkToggleButton (/* $label, $use_underline */);
    }

    /**
     * Methods
     */
    public function GetActive ()
    {
        return $this->Handle->get_active ();
    }

    public function GetInconsistent ()
    {
        return $this->Handle->get_inconsistent ();
    }

    public function GetMode ()
    {
        return $this->Handle->get_mode ();
    }

    public function SetActive (bool $is_active)
    {
        $this->Handle->set_active ($is_active);
    }

    public function SetInconsistent (bool $setting)
    {
        $this->Handle->set_inconsistent ($setting);
    }

    public function SetMode (bool $draw_indicator)
    {
        $this->Handle->set_mode ($draw_indicator);
    }

    public function Toggled ()
    {
        $this->Handle->toggled ();
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Active':        { $result = $this->GetActive ();        break; }
        case 'Inconsistent':  { $result = $this->GetInconsistent ();  break; }
        case 'Mode':          { $result = $this->GetMode ();          break; }
        default:              { $result = parent::__get ($var);              }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Active':        { $this->SetActive ($val);        break; }
        case 'Inconsistent':  { $this->SetInconsistent ($val);  break; }
        case 'Mode':          { $this->SetMode ($val);          break; }
        default:              { parent::__set ($var, $val);            }
        }
    }
}

