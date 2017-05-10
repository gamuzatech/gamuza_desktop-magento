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
 * Class TClipboard
 *
 * @property string $Text
 *
 * @property string|array $OnOwnerChange
 */
class TClipboard extends System\TObject
{
    /**
     * Events
     */
    public function __construct ()
    {
        parent::__construct ();

        $this->Handle = new GtkClipboard ();
    }

    /**
     * Methods
     */
    public function Clear ()
    {
        $this->Handle->clear ();
    }

    public function GetDisplay ()
    {
        return $this->Handle->get_display ();
    }

    public function GetOwner ()
    {
        return $this->Handle->get_owner ();
    }

    public function RequestContents ()
    {
        $this->Handle->request_contents ();
    }

    public function RequestTargets ()
    {
        $this->Handle->request_targets ();
    }

    public function RequestText ()
    {
        $this->Handle->request_text ();
    }

    public function SetCanStore ()
    {
        $this->Handle->set_can_store ();
    }

    public function SetText (string $text, /* int */ $len = -1)
    {
        $this->Handle->set_text ($text, $len);
    }

    public function SetWithData ()
    {
        $this->Handle->set_with_data ();
    }

    public function Store ()
    {
        $this->Handle->store ();
    }

    public function WaitForContents ($target)
    {
        return $this->Handle->wait_for_contents ($target);
    }

    public function WaitForTargets ()
    {
        return $this->Handle->wait_for_targets ();
    }

    public function WaitForText ()
    {
        return $this->Handle->wait_for_text ();
    }

    public function WaitIsTargetAvailable ($target)
    {
        return $this->Handle->wait_is_target_available ($target);
    }

    public function WaitIsTextAvailable ()
    {
        return $this->Handle->wait_is_text_available ();
    }

    public static function Get ($selection)
    {
        return $this->Handle->get ($selection);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Display': { $result = $this->GetDisplay (); break; }
        case 'Owner':   { $result = $this->GetOwner ();   break; }
        default:        { $result = parent::__get ($var);        }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Text':
        {
            list ($text, $len) = $val;

            $this->SetText ($text, $len);

            break;
        }
        default: { parent::__set ($var, $val); }
        }
    }
}

