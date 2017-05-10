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
 * Class TMenu
 *
 * @property TAccelGroup $AccelGroup
 * @property int         $Active
 * @property int         $Monitor
 * @property GdkScreen   $Screen
 * @property bool        $TearoffState
 * @property string      $Title
 * @property string      $MenuAccelPath
 *
 * @property string|array $OnMoveScroll
 */
class TMenu extends TMenuShell
{
    /**
     * Events
     */
    public function __construct ()
    {
        parent::__construct ();

        $this->Handle = new GtkMenu ();
    }

    /**
     * Methods
     */
    public function Attach (TWidget $child, int $left_attach, int $right_attach, int $top_attach, int $bottom_attach)
    {
        $this->Handle->attach ($child, $left_attach, $right_attach, $top_attach, $bottom_attach);
    }

    public function Detach ()
    {
        $this->handle->detach ();
    }

    public function GetAccelGroup ()
    {
        return $this->Handle->get_accel_group ();
    }

    public function GetActive ()
    {
        return $this->Handle->get_active ();
    }

    public function GetAttachWidget ()
    {
        return $this->Handle->get_attach_widget ();
    }

    public function GetTearoffState ()
    {
        return $this->Handle->get_tearoff_state ();
    }

    public function GetTitle ()
    {
        return $this->Handle->get_title ();
    }

    public function Popdown ()
    {
        $this->handle->popdown ();
    }

    public function Popup (TWidget $parent_menu_shell = null, TWidget $parent_menu_item = null, TMenuPositionFunc $pos_function = null, int $button, int $activate_time)
    {
        $this->Handle->poopup (
            $parent_menu_shell ? $parent_menu_shell->Handle : null,
            $parent_menu_item ? $parent_menu_item->Handle : null,
            $pos_function, $button, $activate_item
        );
    }

    public function ReorderChild (TWidget $child, int $position)
    {
        $this->Handle->reorder_child ($child->Handle, $position);
    }

    public function Reposition ()
    {
        $this->Handle->reposition ();
    }

    public function SetAccelGroup (TAccelGroup $accel_group)
    {
        $this->Handle->set_accel_group ($group->Handle);
    }

    public function SetActive (int $index)
    {
        $this->Handle->set_active ($index);
    }

    public function SetMonitor (int $monitor_num)
    {
        $this->Handle->set_monitor ($monitor_num);
    }

    public function SetScreen (GdkScreen $screen)
    {
        $this->Handle->set_screen ($screen);
    }

    public function SetTearoffState (bool $torn_off)
    {
        $this->Handle->set_tearoff_state ($torn_off);
    }

    public function SetTitle (string $title)
    {
        $this->Handle->set_title ($title);
    }

    public function SetMenuAccelPath ($accel_path)
    {
        $this->Handle->set_menu_accel_path ($accel_path);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'AccelGroup':      { $result = $this->GetAccelGroup ();   break; }
        case 'Active':          { $result = $this->GetActive ();       break; }
        case 'GetAttachWidget': { $result = $this->GetAttachWidget (); break; }
        case 'TearoffState':    { $result = $this->GetTearoffState (); break; }
        case 'Title':           { $result = $this->GetTitle ();        break; }
        default:                { $result = parent::__get ($var);             }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'AccelGroup':    { $this->SetAccelGroup ($val);   break; }
        case 'Active':        { $this->SetActive ($val);       break; }
        case 'Monitor':       { $this->SetMonitor ($val);      break; }
        case 'Screen':        { $this->SetScreen ($val);       break; }
        case 'TearoffState':  { $this->SetTearoffState ($val); break; }
        case 'Title':         { $this->SetTitle ($val);        break; }
        case 'MenuAccelPath': { $this->SetTitle ($val);        break; }
        default:              { parent::__set ($var, $val);           }
        }
    }
}

