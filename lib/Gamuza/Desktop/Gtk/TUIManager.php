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
 * Class TUIManager
 *
 * @property bool $AddTearoffs
 *
 * @property string|array $OnActionsChanged;
 * @property string|array $OnAddWidget;
 * @property string|array $OnConnectProxy;
 * @property string|array $OnDisconnectProxy;
 * @property string|array $OnPostActivate;
 * @property string|array $OnPreActivate;
 */
class TUIManager extends System\TObject
{
    /**
     * Events
     */
    public function __construct ()
    {
        parent::__construct ();

        $this->Handle = new GtkUIManager ();
    }

    /**
     * Methods
     */
    public static function NewMergeId ()
    {
        return GtkUIManager::new_merge_id ();
    }

    public function AddUI (int $merge_id, string $path, string $name, string $action, TUIManagerItemType $type, bool $top)
    {
        $this->Handle->add_ui ($merge_id, $path, $name, $action, $type, $top);
    }

    public function AddUIFromFile (string $filename, TError $error)
    {
        return $this->Handle->add_ui_from_file ($filename, $error);
    }

    public function AddUIFromString (string $text)
    {
        return $this->Handle->add_ui_from_string ($text);
    }

    public function EnsureUpdate ()
    {
        $this->Handle->ensure_update ();
    }

    public function GetAccelGroup ()
    {
        return $this->Handle->get_accel_group ();
    }

    public function GetAction (string $path)
    {
        return $this->Handle->get_action ($path);
    }

    public function GetActionGroups ()
    {
        return $this->Handle->get_action_groups ();
    }

    public function GetAddTearoffs ()
    {
        return $this->Handle->get_add_tearoffs ();
    }

    public function GetToplevels (TUIManagerItemType $types)
    {
        return $this->Handle->get_topleves ($types);
    }

    public function GetUI ()
    {
        return $this->Handle->getUI ();
    }

    public function GetWidget (string $path)
    {
        return $this->Handle->get_widget ($path);
    }

    public function InsertActionGroup (TActionGroup $action_group, int $pos)
    {
        $this->Handle->insert_action_group ($action_group, $post);
    }

    public function RemoveActionGroup (TActionGroup $action_group)
    {
        $this->Handle->remove_action_group ($action_group);
    }

    public function RemoveUI (int $merge_id)
    {
        $this->Handle->remove_ui ($merge_id);
    }

    public function SetAddTearoffs (bool $add_tearoffs)
    {
        $this->Handle->set_add_tearoffs ($add_tearoffs);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'AccelGroup':   { $result = $this->GetAccelGroup ();   break; }
        case 'ActionGroups': { $result = $this->GetActionGroups (); break; }
        case 'AddTearoffs':  { $result = $this->GetAddTearoffs ();  break; }
        case 'UI':           { $result = $this->GetUI ();           break; }
        default:             { $result = parent::__get ($var);             }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'AddTearoffs': { $this->SetAddTearoffs ($val); break; }
        default:            { parent::__set ($var, $val);          }
        }
    }
}

