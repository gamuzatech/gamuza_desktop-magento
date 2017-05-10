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
 * Class TStatusbar
 *
 * @property bool $HasResizeGrip
 *
 * @property string|array $OnTextPopped
 * @property string|array $OnTextPushed
 */
class TStatusbar extends THBox
{
    /**
     * Events
     */
    public function __construct ()
    {
        parent::__construct ();

        $this->Handle = new GtkStatusbar ();
    }

    /**
     * Methods
     */
    public function GetContextId (string $context_description)
    {
        return $this->Handle->get_context_id ($context_description);
    }

    public function GetHasResizeGrip ()
    {
        return $this->Handle->get_has_resize_grip ();
    }

    public function Pop (int $context_id)
    {
        $this->Handle->pop ($context_id);
    }

    public function Push (int $context_id, string $text)
    {
        return $this->Handle->push ($context_id, $text);
    }

    public function SetHasResizeGrip (bool $setting)
    {
        $this->Handle->set_has_resize_grip ($setting);
    }

    public function RemoveMessage (int $context_id, int $message_id)
    {
        $this->Handle->remove_mesasge ($context_id, $message_id);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'HasResizeGrip': { $result = $this->GetHasResizeGrip (); break; }
        default:              { $result = parent::__get ($var);              }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'HasResizeGrip': { $this->SetHasResizeGrip ($val); break; }
        default:              { parent::__set ($var, $val);            }
        }
    }
}

