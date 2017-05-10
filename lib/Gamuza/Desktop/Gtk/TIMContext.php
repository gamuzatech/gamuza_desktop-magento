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
 * Class TIMContext
 *
 * @property GdkWindow    $ClientWindow
 * @property GdkRectangle $CursorLocation
 * @property array        $Surrounding
 * @property bool         $UsePreedit
 *
 * @property string|array $OnCommit
 * @property string|array $OnDeleteSurrounding
 * @property string|array $OnPreeditChanged
 * @property string|array $OnPreeditEnd
 * @property string|array $OnPreeditStart
 * @property string|array $OnRetrieveSurrouding
 */
abstract class TIMContext extends TObject
{
    /**
     * Methods
     */
    public function DeleteSurrounding (int $offset, int $n_chars)
    {
        return $this->delete_surrounding ($offset, $n_chars);
    }

    public function FilterKeypress ($event)
    {
        return $this->Handle->filter_keypress ($event);
    }

    public function FocusIn ()
    {
        $this->Handle->focus_in ();
    }

    public function FocusOut ()
    {
        $this->Handle->focus_out ();
    }

    public function Reset ()
    {
        $this->Handle->reset ();
    }

    public function SetClientWindow (GdkWindow $window)
    {
        $this->Handle->set_client_window ($window);
    }

    public function SetCursorLocation (GdkRectangle $area)
    {
        $this->Handle->set_cursor_location ($area);
    }

    public function SetSurrounding (string $text, int $len, int $cursor_index)
    {
        $this->Handle->set_surrounding ($text, $len, $cursor_index);
    }

    public function SetUsePreedit (bool $use_preedit)
    {
        $this->Handle->set_use_preedit ($use_preedit);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        default: { $result = parent::__get ($var); }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Surrounding':
        {
            list ($text, $len, $cursor_index) = $val;

            $this->SetSurrounding ($text, $len, $cursor_index);

            break;
        }
        case 'ClientWindow':   { $this->SetClientWindow ($val);   break; }
        case 'CursorLocation': { $this->SetCursorLocation ($val); break; }
        case 'UsePreedit':     { $this->SetUsePreedit ($val);     break; }
        default:               { parent::__set ($var, $val);             }
        }
    }
}

