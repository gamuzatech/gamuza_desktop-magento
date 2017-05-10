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
 * Class TEditable
 *
 * @property bool $Editable
 * @property int  $Position
 *
 * @property string|array $OnChanged
 * @property string|array $OnDeleteText
 * @property string|array $OnInsertText
 */
trait TEditable // extends TInterface
{
    /**
     * Methods
     */
    public function CopyClipboard ()
    {
        $this->Handle->copy_clipboard ();
    }

    public function CutClipboard ()
    {
        $this->Handle->cut_clipboard ();
    }

    public function DeleteSelection ()
    {
        $this->Handle->delete_selection ();
    }

    public function DeleteText (int $start_pos, int $end_pos)
    {
        $this->Handle->delete_text ($start_pos, $end_pos);
    }

    public function GetChars (int $start_pos, int $end_pos)
    {
        return $this->Handle->get_chars ($start_pos, $end_pos);
    }

    public function GetEditable ()
    {
        return $this->Handle->get_editable ();
    }

    public function GetPosition ()
    {
        return $this->Handle->get_position ();
    }

    public function GetSelectionBounds ()
    {
        return $this->Handle->get_selection_bounds ();
    }

    public function InsertText (int $position, string $text)
    {
        $this->Handle->insert_text ($position, $text);
    }

    public function PasteClipboard ()
    {
        $this->Handle->paste_clipboard ();
    }

    public function SelectRegion (int $start, int $end)
    {
        $this->Handle->select_region ($start, $end);
    }

    public function SetEditable (bool $editable)
    {
        $this->Handle->set_editable ($editable);
    }

    public function SetPosition (int $position)
    {
        $this->Handle->set_position ($position);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Editable':        { $result = $this->GetEditable ();        break; }
        case 'Position':        { $result = $this->GetPosition ();        break; }
        case 'SelectionBounds': { $result = $this->GetSelectionBounds (); break; }
        default:                { $result = parent::__get ($var);                }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Editable': { $this->SetEditable ($val);  break; }
        case 'Position': { $this->SetPosition ($val);  break; }
        default:         { parent::__set ($var, $val);        }
        }
    }
}

