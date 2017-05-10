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
 * Class TActionGroup
 *
 * @property bool   $Sensitive
 * @property string $TranslationDomain
 * @property bool   $Visible
 *
 * @property string|array $OnConnectProxy
 * @property string|array $OnDisconnectProxy
 * @property string|array $OnPostActivate
 * @property string|array $OnPreActivate
 */
class TActionGroup extends System\TObject
{
    /**
     * Events
     */
    public function __construct (string $name = null)
    {
        parent::__construct ();

        $this->Handle = new GtkActionGroup ($name);
    }

    /**
     * Methods
     */
    public function AddAction (TAction $action)
    {
        $this->Handle->add_action ($action->Handle);
    }

    public function AddActionWithAccel (TAction $action, string $accelerator)
    {
        $this->Handle->add_action_with_accel ($action->Handle, $accelerator);
    }

    public function GetAction (string $action_name)
    {
        return $this->Handle->get_action ();
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

    public function RemoveAction (TAction $action)
    {
        $this->Handle->remove_action ($action->Handle);
    }

    public function SetSensitive (bool $sensitive)
    {
        $this->Handle->set_sensitive ($sensitive);
    }

    public function SetTranslationDomain (string $domain)
    {
        $this->Handle->set_translation_domain ($domain);
    }

    public function SetVisible (bool $visible)
    {
        $this->Handle->set_visible ($visible);
    }

    public function TranslateString (string $text)
    {
        return $this->Handle->translate_string ($text);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Name':      { $result = $this->GetName ();      break; }
        case 'Sensitive': { $result = $this->GetSensitive (); break; }
        case 'Visible':   { $result = $this->GetVisible ();   break; }
        default:          { $result = parent::__get ($var);          }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Sensitive':         { $this->SetSensitive ($val);         break; }
        case 'TranslationDomain': { $this->SetTranslationDomain ($val); break; }
        case 'Visible':           { $this->SetVisible ($val);           break; }
        default:                  { parent::__set ($var, $val);                }
        }
    }
}

