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
 * Class TEntryCompletion
 *
 * @property bool       $InlineCompletion
 * @property callback   $MatchFunc
 * @property int        $MinimumKeyLength
 * @property TTreeModel $Model
 * @property bool       $PopupCompletion
 * @property int        $TextColumn
 *
 * @property string|array $OnActionActivated
 * @property string|array $OnInsertPrefix
 * @property string|array $OnMatchSelected
 */
class TEntryCompletion extends System\TObject
{
    /**
     * Events
     */
    public function __construct ()
    {
        parent::__construct ();

        $this->Handle = new GtkEntryCompletion ();
    }

    /**
     * Methods
     */
    public function Complete ()
    {
        $this->Handle->complete ();
    }

    public function DeleteAction (int $index)
    {
        $this->Handle->delete_action ($index);
    }

    public function GetEntry ()
    {
        return $this->Handle->get_entry ();
    }

    public function GetInlineCompletion ()
    {
        return $this->Handle->get_inline_completion ();
    }

    public function GetMinimumKeyLength ()
    {
        return $this->Handle->get_minimum_key_length ();
    }

    public function GetModel ()
    {
        return $this->Handle->get_model ();
    }

    public function GetPopupCompletion ()
    {
        return $this->Handle->get_popup_completion ();
    }

    public function GetTextColumn ()
    {
        return $this->Handle->get_text_column ();
    }

    public function InsertActionMarkup (int $index, string $markup)
    {
        $this->Handle->insert_action_markup ($index, $markup);
    }

    public function InsertActionText (int $index, string $text)
    {
        $this->Handle->insert_action_text ($index, $text);
    }

    public function InsertPrefix ()
    {
        $this->Handle->insert_prefix ();
    }

    public function SetInlineCompletion (bool $inline_completion)
    {
        $this->Handle->set_inline_completion ($inline_completion);
    }

    public function SetMatchFunc ($callback)
    {
        $this->Handle->set_martch_func ($callback);
    }

    public function SetMinimumKeyLength (int $length)
    {
        $this->Handle->set_minimum_key_length ($length);
    }

    public function SetModel (TTreeModel $model)
    {
        $this->Handle->set_model ($model->Handle);
    }

    public function SetPopupCompletion (bool $popup_completion)
    {
        $this->Handle->set_popup_completion ($popup_completion);
    }

    public function SetTextColumn (int $column)
    {
        $this->Handle->set_text_column ($column);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Entry':            { $result = $this->GetEntry ();            break; }
        case 'InlineCompletion': { $result = $this->GetInlineCompletion (); break; }
        case 'MinimumKeyLength': { $result = $this->GetMinimumKeyLength (); break; }
        case 'Model':            { $result = $this->GetModel ();            break; }
        case 'PopupCompletion':  { $result = $this->GetPopupCompletion ();  break; }
        case 'TextColumn':       { $result = $this->GetTextColumn ();       break; }
        default:                 { $result = parent::__get ($var);                 }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'InlineCompletion': { $this->SetInlineCompletion ($val); break; }
        case 'MatchFunc':        { $this->SetMatchFunc ($val);        break; }
        case 'MinimumKeyLength': { $this->SetMinimumKeyLength ($val); break; }
        case 'Model':            { $this->SetModel ($val);            break; }
        case 'PopupCompletion':  { $this->SetPopupCompletion ($val);  break; }
        case 'TextColumn':       { $this->SetTextColumn ($val);       break; }
        default:                 { parent::__set ($var, $val);               }
        }
    }
}

