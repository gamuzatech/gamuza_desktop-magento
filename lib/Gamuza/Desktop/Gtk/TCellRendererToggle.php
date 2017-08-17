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
 * Class TCellRendererToggle
 *
 * @property bool $Activatable
 * @property bool $Active
 * @property bool $Radio
 *
 * @property string|array $OnToggled
 */
class TCellRendererToggle extends TCellRenderer
{
    /**
     * Events
     */
    public function __construct ()
    {
        parent::__construct ();

        $this->Handle = new GtkCellRendererToggle ();

        $this->Handle->Activatable = true;
    }

    /**
     * Methods
     */
    public function GetActivatable ()
    {
        return $this->Handle->get_activatable ();
    }

    public function GetActive ()
    {
        return $this->Handle->get_active ();
    }

    public function GetRadio ()
    {
        return $this->handle->get_radio ();
    }

    public function SetActivatable (bool $value)
    {
        $this->Handle->set_activatable ($value);
    }

    public function SetActive (bool $value)
    {
        $this->Handle->set_active ($value);
    }

    public function SetRadio (bool $value)
    {
        $this->handle->set_radio ($value);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Activatable': { $result = $this->GetActivatable (); break; }
        case 'Active':      { $result = $this->GetActive ();      break; }
        case 'Radio':       { $result = $this->GetRadio ();       break; }
        default:            { $result = parent::__get ($var);            }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Activatable': { $this->SetActivatable ($val); break; }
        case 'Active':      { $this->SetActive ($val);      break; }
        case 'Radio':       { $this->SetRadio ($val);       break; }
        default:            { parent::__set ($var, $val);          }
        }
    }
}

