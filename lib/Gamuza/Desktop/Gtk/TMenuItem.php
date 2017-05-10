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
 * Class TMenuItem
 *
 * @property string  $Label
 * @property bool    $RightJustified
 * @property TWidget $Submenu
 * @property string  $ItemAccelPath
 *
 * @property string|array $OnActivate
 * @property string|array $OnActivateItem
 * @property string|array $OnToggleSizeAllocate
 * @property string|array $OnToggleSizeRequest
 */
class TMenuItem extends TItem
{
    /**
     * Events
     */
    public function __construct (/* string $label */)
    {
        parent::__construct ();

        $this->Handle = new GtkMenuItem (/* $label */);
    }

    /**
     * Methods
     */
    public function GetLabel ()
    {
        return $this->Handle->get_label ();
    }

    public function GetRightJustified ()
    {
        return $this->Handle->get_right_justified ();
    }

    public function GetSubmenu ()
    {
        return $this->Handle->get_submenu ();
    }

    public function RemoveSubmenu ()
    {
        $this->Handle->remove_submenu ();
    }

    public function SetLabel (string $label)
    {
        $this->Handle->set_label ($label);
    }

    public function SetRightJustified ()
    {
        $this->Handle->set_right_justified ();
    }

    public function SetSubmenu (TWidget $submenu)
    {
        $this->Handle->set_submenu ($submenu->Handle);
    }

    public function ToggleSizeAllocate (int $allocation)
    {
        $this->Handle->toggle_size_allocate ($allocation);
    }

    public function SetItemAccelPath (string $accel_path)
    {
        $this->Handle->set_item_accel_path ($accel_path);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Label':          { $result = $this->GetLabel ();          break; }
        case 'RightJustified': { $result = $this->GetRightJustified (); break; }
        case 'Submenu':        { $result = $this->GetSubmenu ();        break; }
        default:               { $result = parent::__get ($var);               }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Label':          { $this->SetLabel ($val);          break; }
        case 'RightJustified': { $this->SetRightJustified ($val); break; }
        case 'Submenu':        { $this->SetSubmenu ($val);        break; }
        case 'ItemAccelPath':  { $this->SetItemAccelPath ($val);  break; }
        default:               { parent::__set ($var, $val);             }
        }
    }
}

