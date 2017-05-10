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
 * Class TAction
 *
 * @property TAccelGroup $AccelGroup
 * @property string      $AccelPath
 * @property bool        $Sensitive
 * @property bool        $Visible
 * @property TWidget     $UnblockActivateFrom
 *
 * @property string|array $OnActivate
 */
class TAction extends System\TObject
{
    /**
     * Events
     */
    public function __construct (string $name = null, string $label = null, string $tooltip = null, string $stock_id = null)
    {
        parent::__construct ();

        $this->Handle = new GtkAction ($name, $label, $tooltip, $stock_id);
    }

    /**
     * Methods
     */
    public function Activate ()
    {
        $this->Handle->activate ();
    }

    public function BlockActivateFrom (TWidget $proxy)
    {
        $this->Handle->block_activate_from ($proxy->Handle);
    }

    public function ConnectAccelerator ()
    {
        $this->Handle->connect_accelerator ();
    }

    public function ConnectProxy (TWidget $proxy)
    {
        $this->Handle->connect_proxy ($proxy->Handle);
    }

    public function CreateIcon (TIconSize $icon_size)
    {
        return $this->Handle->create_icon ($icon_size);
    }

    public function CreateMenuItem ()
    {
        return $this->Handle->create_menu_item ();
    }

    public function CreateToolItem ()
    {
        return $this->Handle->create_tool_item ();
    }

    public function DisconnectAccelerator ()
    {
        $this->Handle->disconnect_accelerator ();
    }

    public function DisconnectProxy (TWidget $proxy)
    {
        $this->Handle->disconnect_proxy ($proxy->Handle);
    }

    public function GetAccelPath ()
    {
        return $this->Handle->get_accel_path ();
    }

    public function GetName ()
    {
        return $this->Handle->get_name ();
    }

    public function GetSensitive ()
    {
        return $this->Handle->get_sensitive ();
    }

    public function GetVisible ()
    {
        return $this->Handle->get_visible ();
    }

    public function IsSensitive ()
    {
        return $this->Handle->is_sensitive ();
    }

    public function IsVisible ()
    {
        return $this->Handle->is_visible ();
    }

    public function SetAccelGroup (TAccelGroup $accel_group)
    {
        $this->Handle->set_accel_group ($accel_group->Handle);
    }

    public function SetAccelPath (string $accel_group)
    {
        $this->Handle->set_accel_accel ($accel_group);
    }

    public function SetSensitive (bool $sensitive)
    {
        $this->Handle->set_sensitive ($sensitive);
    }

    public function SetVisible (bool $visible)
    {
        $this->Handle->set_visible ($visible);
    }

    public function UnblockActivateFrom (TWidget $proxy)
    {
        $this->Handle->unblock_activate_from ($proxy->Handle);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'AccelPath':   { $result = $this->GetAccelPath ();   break; }
        case 'Name':        { $result = $this->GetName ();        break; }
        case 'Sensitive':   { $result = $this->GetSensitive ();   break; }
        case 'Visible':     { $result = $this->GetVisible ();     break; }
        case 'IsSensitive': { $result = $this->IsSensitive ();    break; }
        case 'IsVisible':   { $result = $this->IsVisible ();      break; }
        default:            { $result = parent::__get ($var);            }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'AccelGroup': { $this->SetAccelGroup ($val); break; }
        case 'AccelPath':  { $this->SetAccelPath ($val);  break; }
        case 'Sensitive':  { $this->SetSensitive ($val);  break; }
        case 'Visible':    { $this->SetVisible ($val);    break; }
        default:           { parent::__set ($var, $val);         }
        }
    }
}

