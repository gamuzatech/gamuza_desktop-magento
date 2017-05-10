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
 * Class TEntry
 *
 * @property bool             $ActivatesDefault
 * @property double           $Alignment
 * @property TEntryCompletion $Completion
 * @property bool             $HasFrame
 * @property int              $MaxLength
 * @property string           $Text
 * @property bool             $Visibility
 * @property int              $WidthChars
 *
 * @property string|array $OnActivate;
 * @property string|array $OnBackspace;
 * @property string|array $OnCopyClipboard;
 * @property string|array $OnCutClipboard;
 * @property string|array $OnDeleteFromCursor;
 * @property string|array $OnInsertAtCursor;
 * @property string|array $OnMoveCursor;
 * @property string|array $OnPasteClipboard;
 * @property string|array $OnPopulatePopup;
 * @property string|array $OnToggleOverwrite;
 */
class TEntry extends TWidget
{
    use TEditable;
    use TCellEditable;

    /**
     * Events
     */
    public function __construct (/* [ string $text [, int $max ]] */)
    {
        parent::__construct ();

        $this->Handle = new GtkEntry (/* $text, $max */);
    }

    /**
     * Methods
     */
    public function GetActivatesDefault ()
    {
        return $this->Handle->get_activates_default ();
    }

    public function GetAlignment ()
    {
        return $this->Handle->get_alignment ();
    }

    public function GetCompletion ()
    {
        return $this->Handle->get_completion ();
    }

    public function GetHasFrame ()
    {
        return $this->Handle->get_has_frame ();
    }

    public function GetLayout ()
    {
        return $this->Handle->get_layout ();
    }

    public function GetLayoutOffsets ()
    {
        return $this->Handle->get_layout_offsets ();
    }

    public function GetMaxLength ()
    {
        return $this->Handle->get_max_length ();
    }

    public function GetText ()
    {
        return $this->utf8 ($this->Handle->get_text ());
    }

    public function GetVisibility ()
    {
        return $this->Handle->get_visibility ();
    }

    public function GetWidthChars ()
    {
        return $this->Handle->get_width_chars ();
    }

    public function SetActivatesDefault (bool $setting)
    {
        $this->Handle->set_activates_default ($setting);
    }

    public function SetAligment (double $xalign)
    {
        $this->Handle->set_alignment ($xalign);
    }

    public function SetCompletion (TEntryCompletion $completion)
    {
        $this->Handle->set_completion ($completion);
    }

    public function SetHasFrame (bool $setting)
    {
        $this->Handle->set_has_frame ($setting);
    }

    public function SetMaxLength (int $max)
    {
        $this->Handle->set_max_length ($max);
    }

    public function SetText (string $text)
    {
        $this->Handle->set_text ($this->latin1 ($text));
    }

    public function SetVisiblity (bool $visible)
    {
        $this->Handle->set_visibility ($visible);
    }

    public function SetWidthChars (int $n_chars)
    {
        $this->Handle->set_width_chars ($n_chars);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'ActivatesDefault': { $result = $this->GetActivatesDefault (); break; }
        case 'Alignment':        { $result = $this->GetAlignment ();        break; }
        case 'Completion':       { $result = $this->GetCompletion ();       break; }
        case 'HasFrame':         { $result = $this->GetHasFrame ();         break; }
        case 'Layout':           { $result = $this->GetLayout ();           break; }
        case 'LayoutOffsets':    { $result = $this->GetLayoutOffsets ();    break; }
        case 'MaxLength':        { $result = $this->GetMaxLength ();        break; }
        case 'Text':             { $result = $this->GetText ();             break; }
        case 'Visibility':       { $result = $this->GetVisibility ();       break; }
        case 'WidthChars':       { $result = $this->GetWidthChars ();       break; }
        default:                 { $result = parent::__get ($var);                 }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'ActivatesDefault': { $this->SetHasFrame ($val);   break; }
        case 'Alignment':        { $this->SetAlignment ($val);  break; }
        case 'Completion':       { $this->SetCompletion ($val); break; }
        case 'HasFrame':         { $this->SetHasFrame ($val);   break; }
        case 'MaxLength':        { $this->SetMaxLength ($val);  break; }
        case 'Text':             { $this->SetText ($val);       break; }
        case 'Visiblity':        { $this->SetVisibility ($val); break; }
        case 'WidthChars':       { $this->SetWidthChars ($val); break; }
        default:                 { parent::__set ($var, $val);         }
        }
    }
}

