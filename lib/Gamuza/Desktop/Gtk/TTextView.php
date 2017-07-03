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
 * Class TTextView
 *
 * @property bool           $AcceptsTab
 * @property array          $BorderWindowSize
 * @property TTextBuffer    $Buffer
 * @property bool           $CursorVisible
 * @property bool           $Editable
 * @property int            $Indent
 * @property TJustification $Justification
 * @property int            $LeftMargin
 * @property bool           $Overwrite
 * @property int            $PixelsAboveLines
 * @property int            $PixelsBelowLines
 * @property int            $PixelsInsideWrap
 * @property int            $RightMargin
 * @property PangoTabArray  $Tabs
 * @property TWrapMode      $WrapMode
 *
 * @property string|array $OnBackspace;
 * @property string|array $OnCopyClipboard;
 * @property string|array $OnCutClipboard;
 * @property string|array $OnDeleteFromCursor;
 * @property string|array $OnInsertAtCursor;
 * @property string|array $OnMoveCursor;
 * @property string|array $OnMoveFocus;
 * @property string|array $OnMoveViewport;
 * @property string|array $OnPageHorizontally;
 * @property string|array $OnPasteClipboard;
 * @property string|array $OnPopulatePopup;
 * @property string|array $OnSelectAll;
 * @property string|array $OnSetAnchor;
 * @property string|array $OnSetScrollAdjustments;
 * @property string|array $OnToggleOverwrite;
 */
class TTextView extends TContainer
{
    /**
     * Events
     */
    public function __construct ()
    {
        parent::__construct ();

        $this->Handle = new GtkTextView ();
    }

    /**
     * Methods
     */
    public function NewWithBuffer (TTextBuffer $buffer = null)
    {
        $widget = new TWidget ();

        $widget->Handle = GtkTextView::new_with_buffer ($buffer ? $buffer->Handle : null);

        return $widget;
    }

    public function AddChildAtAnchor (TWidget $child, TTextChildAnchor $anchor)
    {
        $this->Handle->add_child_at_anchor ($child->Handle, $anchor->Handle);
    }

    public function AddChildInWindow (TWidget $child, TTextWindowType $which_window, int $xpos, int $ypos)
    {
        $this->Handle->add_child_in_window ($child->Handle, $which_window, $xpos, $ypos);
    }

    public function BackwardDisplayLine (TTextIter $iter)
    {
        return $this->Handle->backward_display_line ($iter->Handle);
    }

    public function BackwardDisplayLineStart (TTextIter $iter)
    {
        return $this->Handle->backward_display_line_start ($iter->Handle);
    }

    public function BufferToWindowCoords (TTextWindowType $window_type, int $buffer_x, int $buffer_y)
    {
        $this->Handle->buffer_to_window_coords ($window_type, $buffer_x, $buffer_y);
    }

    public function ForwardDisplayLine (TTextIter $iter)
    {
        return $this->handle->forward_display_line ($iter->Handle);
    }

    public function ForwardDisplayLineEnd (TTextIter $iter)
    {
        return $this->handle->forward_display_line_end ($iter->Handle);
    }

    public function GetAcceptsTab ()
    {
        return $this->Handle->get_accepts_tab ();
    }

    public function GetBorderWindowSize (TTextWindowType $type)
    {
        return $this->Handle->get_border_window_size ($type);
    }

    public function GetBuffer ()
    {
        return $this->Handle->get_buffer ();
    }

    public function GetCursorVisible ()
    {
        return $this->Handle->get_cursor_visible ();
    }

    public function GetDefaultAttributes ()
    {
        return $this->Handle->get_default_attributes ();
    }

    public function GetEditable ()
    {
        return $this->Handle->get_editable ();
    }

    public function GetIndent ()
    {
        return $this->Handle->get_indent ();
    }

    public function GetIterAtLocation (int $x, int $y)
    {
        return $this->Handle->get_iter_at_location ($x, $y);
    }

    public function GetIterAtPosition (int $x, int $y)
    {
        return $this->Handle->get_iter_at_position ($x, $y);
    }

    public function GetIterLocation (TTextIter $iter)
    {
        return $this->Handle->get_iter_location ($iter);
    }

    public function GetJustification ()
    {
        return $this->Handle->get_justification ();
    }

    public function GetLeftMargin ()
    {
        return $this->Handle->get_left_margin ();
    }

    public function GetLineAtY (int $y)
    {
        return $this->Handle->get_line_at_y ($y);
    }

    public function GetLineYRange (TTextIter $iter)
    {
        return $this->Handle->get_line_yrange ($iter->Handle);
    }

    public function GetOverwrite ()
    {
        return $this->Handle->get_overwrite ();
    }

    public function GetPixelsAboveLines ()
    {
        return $this->Handle->get_pixels_above_lines ();
    }

    public function GetPixelsBelowLines ()
    {
        return $this->Handle->get_pixels_below_lines ();
    }

    public function GetPixelsInsideWrap ()
    {
        return $this->Handle->get_pixels_inside_wrap ();
    }

    public function GetRightMargin ()
    {
        return $this->Handle->get_right_margin ();
    }

    public function GetTabs ()
    {
        return $this->Handle->get_tabs ();
    }

    public function GetVisibleRect (GdkRectangle $visible_rect)
    {
        return $this->Handle->get_visible_rect ($visible_rect);
    }

    public function GetWindow (TTextWindowType $win)
    {
        return $this->Handle->get_window ($win);
    }

    public function GetWindowType (GdkWindow $window)
    {
        return $this->Handle->get_window_type ($window);
    }

    public function GetWrapMode ()
    {
        return $this->Handle->get_wrap_mode ();
    }

    public function MoveChild (TWidget $child, int $xpos, int $ypos)
    {
        $this->Handle->move_child ($child->Handle, $xpos, $ypos);
    }

    public function MoveMarkOnscreen (TTextMark $mark)
    {
        return $this->Handle->move_mark_onscreen ($mark->Handle);
    }

    public function MoveVisually (TTextIter $iter, int $count)
    {
        return $this->Handle->move_visually ($iter->Handle, $count);
    }

    public function PlaceCursorOnscreen ()
    {
        return $this->Handle->place_cursor_onscreen ();
    }

    public function ScrollMarkOnscreen (TTextMark $mark)
    {
        $this->Handle->scroll_mark_onscreen ($mark->Handle);
    }

    public function ScrollToIter (TTextIter $iter, double $within_margin, bool $use_align, double $xalign, double $yalign)
    {
        return $this->Handle->scroll_to_iter ($iter->Handle, $within_margin, $use_align, $xalign, $yalign);
    }

    public function ScrollToMark (TTextMark $mark, double $within_margin, /* bool */ $use_align = false, /* double */ $xalign = 0.5, /* double */ $yalign = 0.5)
    {
        $this->Handle->scroll_to_mark ($mark->Handle, $within_margin, $use_align, $xalign, $yalign);
    }

    public function SetAcceptsTab (bool $accepts_tab)
    {
        $this->Handle->set_accepts_tab ($accepts_tab);
    }

    public function SetBorderWindowSize (TTextWindowType $type, int $size)
    {
        $this->Handle->set_border_window_size ($type, $size);
    }

    public function SetBuffer (TTextBuffer $buffer)
    {
        $this->Handle->set_buffer ($buffer->Handle);
    }

    public function SetCursorVisible (bool $setting)
    {
        $this->Handle->set_cursor_visible ($setting);
    }

    public function SetEditable (bool $setting)
    {
        $this->Handle->set_editable ($setting);
    }

    public function SetIndent (int $indent)
    {
        $this->Handle->set_indent ($indent);
    }

    public function SetJustification (TJustification $justification)
    {
        $this->Handle->set_justification ($justification);
    }

    public function SetLeftMargin (int $left_margin)
    {
        $this->Handle->set_left_margin ($left_margin);
    }

    public function SetOverwrite (bool $overwrite)
    {
        $this->Handle->set_overwrite ($overwrite);
    }

    public function SetPixelsAboveLines (int $pixels_above_lines)
    {
        $this->Handle->set_pixels_above_lines ($pixels_above_lines);
    }

    public function SetPixelsBelowLines (int $pixels_below_lines)
    {
        $this->Handle->set_pixels_below_lines ($pixels_below_lines);
    }

    public function SetPixelsInsideWrap (int $pixels_inside_wrap)
    {
        $this->Handle->set_pixels_inside_wrap ($pixels_inside_wrap);
    }

    public function SetRightMargin (int $right_margin)
    {
        $this->Handle->set_right_margin ($right_margin);
    }

    public function SetTabs (PangoTabArray $tabs)
    {
        $this->Handle->set_tabs ($tabs);
    }

    public function SetWrapMode (TWrapMode $wrap_mode)
    {
        $this->Handle->set_wrap_mode ($wrap_mode);
    }

    public function StartsDisplayLine (TTextIter $iter)
    {
        return $this->Handle->starts_display_line ($iter->Handle);
    }

    public function WindowToBufferCoords (TTextWindowType $window_type, int $window_x, int $window_y)
    {
        $this->Handle->window_to_buffer_coords ($window_type, $window_x, $window_y);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'AcceptsTab':        { $result = $this->GetAcceptsTab ();         break; }
        case 'Buffer':            { $result = $this->GetBuffer ();             break; }
        case 'CursorVisible':     { $result = $this->GetCursorVisible ();      break; }
        case 'DefaultAttributes': { $result = $this->GetDefaultAttributes ();  break; }
        case 'Editable':          { $result = $this->GetEditable ();           break; }
        case 'Indent':            { $result = $this->GetIndent ();             break; }
        case 'Justification':     { $result = $this->GetJustification ();      break; }
        case 'LeftMargin':        { $result = $this->GetLeftMargin ();         break; }
        case 'Overwrite':         { $result = $this->GetOverwrite ();          break; }
        case 'PixelsAboveLines':  { $result = $this->GetPixelsAboveLines ();   break; }
        case 'PixelsBelowLines':  { $result = $this->GetPixelsBelowLines ();   break; }
        case 'PixelsInsideWrap':  { $result = $this->GetPIxelsInsideWrap ();   break; }
        case 'RightMargin':       { $result = $this->GetRightMargin ();        break; }
        case 'Tabs':              { $result = $this->GetTabs ();               break; }
        case 'WrapMode':          { $result = $this->GetWrapMode ();           break; }
        default:                  { $result = parent::__get ($var);                   }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'AcceptsTab':       { $this->SetAcceptsTab($val);        break; }
        case 'BorderWindowSize':
        {
            list ($type, $size) = $val;

            $this->SetBorderWindowSize ($type, $size);

            break;
        }
        case 'Buffer':           { $this->SetBuffer ($val);           break; }
        case 'CursorVisible':    { $this->SetCursorVisible ($val);    break; }
        case 'Editable':         { $this->SetEditable ($val);         break; }
        case 'Indent':           { $this->SetIndent ($val);           break; }
        case 'Justification':    { $this->SetJustification ($val);    break; }
        case 'LeftMargin':       { $this->SetLeftMargin ($val);       break; }
        case 'Overwrite':        { $this->SetOverwrite ($val);        break; }
        case 'PixelsAboveLines': { $this->SetPixelsAboveLines ($val); break; }
        case 'PixelsBelowLines': { $this->SetPixelsBelowLines ($val); break; }
        case 'PixelsInsideWrap': { $this->SetPixelsInsideWrap ($val); break; }
        case 'RightMargin':      { $this->SetRightMargin ($val);      break; }
        case 'Tabs':             { $this->SetTabs ($val);             break; }
        case 'WrapMode':         { $this->SetWrapMode ($val);         break; }
        default:                 { parent::__set ($var, $val);               }
        }
    }
}

