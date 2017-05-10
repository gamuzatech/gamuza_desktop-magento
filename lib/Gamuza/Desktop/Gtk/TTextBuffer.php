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
 * Class TTextBuffer
 *
 * @property bool  $Modified
 * @property array $Text
 *
 * @property string|array $OnApplyTags
 * @property string|array $OnBeginUserAction
 * @property string|array $OnChanged
 * @property string|array $OnDeleteRange
 * @property string|array $OnEndUserAction
 * @property string|array $OnInsertChildAnchor
 * @property string|array $OnInsertPixbuf
 * @property string|array $OnInsertText
 * @property string|array $OnMarkDeleted
 * @property string|array $OnMarkSet
 * @property string|array $OnModifiedChanged
 * @property string|array $OnRemoveTag
 */
class TTextBuffer extends System\TObject
{
    /**
     * Events
     */
    public function __construct (/* [ TTextTagTable $tag_table = null ] */)
    {
        parent::__construct ();

        $this->Handle = new GtkTextBuffer (/* $tag_table */ );
    }

    /**
     * Methods
     */
    public function AddSelectionClipboard (TClipboard $clipboard)
    {
        $this->Handle->add_selection_clipboard ($clipboard->Handle);
    }

    public function ApplyTag (TTextTag $tag, TTextIter $start, TTextIter $end)
    {
        $this->Handle->apply_tag ($tag->Handle, $start->Handle, $end->Handle);
    }

    public function ApplyTagByName (string $name, TTextIter $start, TTextIter $end)
    {
        $this->Handle->apply_tag_by_name ($name, $start->Handle, $end->Handle);
    }

    public function Backspace (TTextIter $iter, bool $interactive, bool $default_editable)
    {
        return $this->Handle->backspace ($iter->Handle, $interactive, $default_editable);
    }

    public function BeginUserAction ()
    {
        $this->Handle->begin_user_action ();
    }

    public function CopyClipboard (TClipboard $clipboard)
    {
        $this->Handle->copy_clipboard ($clipboard->Handle);
    }

    public function CreateChildAnchor (TTextIter $iter)
    {
        return $this->Handle->create_child_anchor ($iter->Handle);
    }

    public function CreateMark (string $name, TTextIter $location, bool $left_gravity)
    {
        return $this->Handle->create_mark ($name, $location, $left_gravity);
    }

    public function CutClipboard (TClipboard $clipboard, bool $default_editable)
    {
        return $this->Handle->cut_clipboard ($clipboard, $default_editable);
    }

    public function Delete (TTextIter $start, TTextIter $end)
    {
        $this->Handle->delete ($start->Handle, $end->Handle);
    }

    public function DeleteInteractive (TTextIter $start_iter, TTextIter $end_iter, bool $default_editable)
    {
        return $this->Handle->delete_interactive ($start_iter->Handle, $end_iter->Handle, $default_editable);
    }

    public function DeleteMark (TTextMark $mark)
    {
        $this->Handle->delete_mark ($mark->Handle);
    }

    public function DeleteMarkByName (string $name)
    {
        $this->Handle->delete_mark_by_name ($name);
    }

    public function DeleteSelection (bool $interactive, bool $default_editable)
    {
        return $this->Handle->delete_selection ($interactive, $default_interactive);
    }

    public function EndUserAction ()
    {
        $this->Handle->end_user_action ();
    }

    public function GetBounds (TTextIter $start, TTextIter $end)
    {
        $this->Handle->get_bounds ($start->Handle, $end->Handle);
    }

    public function GetCharCount ()
    {
        return $this->Handle->get_char_count ();
    }

    public function GetEndIter ()
    {
        $this->Handle->get_end_iter ();
    }

    public function GetInsert ()
    {
        return $this->Handle->get_insert ();
    }

    public function GetIterAtChildAnchor (TTextChildAnchor $anchor)
    {
        return $this->Handle->get_iter_at_child_anchor ($anchor);
    }

    public function GetIterAtLine (int $line_number)
    {
        return $this->Handle->get_iter_at_line ($line_number);
    }

    public function GetIterAtLineIndex (int $line_number, int $byte_offset)
    {
        return $this->Handle->getIter_at_line_index ($line_number, $byte_offset);
    }

    public function GetIterAtLineOffset (int $line_number, int $char_offset)
    {
        return $this->Handle->get_iter_at_line_offset ($line_number, $char_offset);
    }

    public function GetIterAtMark (TTextMark $mark)
    {
        return $this->Handle->get_iter_at_mark ($mark);
    }

    public function GetIterAtOffset (int $char_offset)
    {
        return $this->Handle->get_iter_at_offset ($char_offset);
    }

    public function GetLineCount ()
    {
        return $this->Handle->get_line_count ();
    }

    public function GetMark (string $name)
    {
        return $this->Handle->get_mark ($name);
    }

    public function GetModified ()
    {
        return $this->Handle->get_modified ();
    }

    public function GetSelectionBounds (TTextIter $start, TTextIter $end)
    {
        return $this->Handle->get_selection_bounds ($start->Handle, $end->Handle);
    }

    public function GetSlice (TTextIter $start, TTextIter $end, bool $include_hidden_chars)
    {
        return $this->Handle->get_slice ($start->Handle, $end->Handle, $include_hidden_chars);
    }

    public function GetStartIter ()
    {
        return $this->Handle->get_start_iter ();
    }

    public function GetTagTable ()
    {
        return $this->Handle->get_tag_table ();
    }

    public function GetText (TTextIter $start, TTextIter $end, bool $include_hidden_chars)
    {
        return $this->Handle->get_text ($start->Handle, $end->Handle, $include_hidden_chars);
    }

    public function Insert (TTextIter $iter, string $text, int $len)
    {
        $this->Handle->insert ($iter->Handle, $text, $len);
    }

    public function InsertAtCursor (string $text, /* int */ $len = -1)
    {
        $this->Handle->insert_at_cursor ($text, $len);
    }

    public function InsertChildAnchor (TTextIter $iter, TTextChildAnchor $anchor)
    {
        $this->Handle->insert_child_anchor ($iter->Handle, $anchor->Handle);
    }

    public function InsertInteractive (TTextIter $iter, string $text, int $len, bool $default_editable)
    {
        return $this->Handle->insert_interactive ($iter->Handle, $text, $len, $default_editable);
    }

    public function InsertInteractiveAtCursor (string $text, int $len, bool $default_editable)
    {
        return $this->handle->insert_interactive_at_cursor ($text, $len, $default_editable);
    }

    public function InsertPixbuf (TTextIter $location, GdkPixbuf $image)
    {
        $this->Handle->insert_pixbuf ($location, $image);
    }

    public function InsertRange (TTextIter $iter, TTextIter $start, TTextIter $end)
    {
        $this->Handle->insert_range ($iter->Handle, $start->Handle, $end->Handle);
    }

    public function InsertRangeInteractive (TTextIter $iter, TTextIter $start, TTextIter $end, bool $default_editable)
    {
        return $this->Handle->insert_range_interactive ($iter->Handle, $start->Handle, $end->Handle, $default_editable);
    }

    public function MoveMark (TTextMark $mark, TTextIter $where)
    {
        $this->Handle->move_mark ($mark->Handle, $where->Handle);
    }

    public function MoveMarkByName (string $name, TTextIter $where)
    {
        $this->Handle->move_mark_by_name ($name, $where->Handle);
    }

    public function PasteClipboard (TClipboard $clipboard, TTextIter $override_location, bool $default_editable)
    {
        $this->Handle->paste_clipboard ($clipboard->Handle, $override_location->Handle, $default_editable);
    }

    public function PlaceCursor (TTextIter $where)
    {
        $this->Handle->place_cursor ($where->Handle);
    }

    public function RemoveAllTags (TTextIter $start, TTextIter $end)
    {
        $this->Handle->remove_all_tags ($start->Handle, $end->Handle);
    }

    public function RemoveSelectionClipboard (TClipboard $clipboard)
    {
        $this->Handle->remove_selection_clipboard ($clipboard->Handle);
    }

    public function RemoveTag (TTextTag $tag, TTextIter $start, TTextIter $end)
    {
        $this->Handle->remove_tag ($tag->Handle, $start->Handle, $end->Handle);
    }

    public function RemoveTagByName (string $name, TTextIter $start, TTextIter $end)
    {
        $this->Handle->remove_tag_by_name ($name, $start->Handle, $end->Handle);
    }

    public function SelectRange (TTextIter $ins, TTextIter $bound)
    {
        $this->Handle->select_range ($iter->Handle, $bound->Handle);
    }

    public function SetModified (bool $setting)
    {
        $this->Handle->set_modified ($setting);
    }

    public function SetText (string $text, int $len)
    {
        $this->Handle->set_text ($text, $len);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'CharCount': { $result = $this->GetCharCount (); break; }
        case 'EndIter':   { $result = $this->GetEndIter ();   break; }
        case 'Insert':    { $result = $this->GetInsert ();    break; }
        case 'Modified':  { $result = $this->GetLabel ();     break; }
        case 'StartIter': { $result = $this->GetStartIter (); break; }
        case 'TagTable':  { $result = $this->GetTagTable ();  break; }
        default:          { $result = parent::__get ($var);          }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Modified': { $this->SetModified ($val); break; }
        case 'Text':
        {
            list ($text, $len) = $val;

            $this->SetText ($text, $len);

            break;
        }
        default:         { parent::__set ($var, $val);       }
        }
    }
}

