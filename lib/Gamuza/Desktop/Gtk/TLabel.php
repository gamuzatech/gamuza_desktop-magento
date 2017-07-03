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
 * Class TLabel
 *
 * @property int                $Angle
 * @property PangoAttrList      $Attributes
 * @property PangoEllipsizeMode $Ellipsize
 * @property TJustification     $Justify
 * @property string             $Label
 * @property bool               $LineWrap
 * @property string             $Markup
 * @property string             $MarkupWithMNemonic
 * @property int                $MaxWidthChars
 * @property TWidget            $MNemonicWidget
 * @property string             $Pattern
 * @property bool               $Selectable
 * @property bool               $SingleLineMode
 * @property string             $Text
 * @property string             $TextWithMNemonic
 * @property bool               $UseMarkup
 * @property bool               $UseUnderline
 * @proeprty int                $WidthChars
 *
 * @property string|array $OnCopyClipboard
 * @property string|array $OnMoveCursor
 * @property string|array $OnPopulatePopup
 */
class TLabel extends TMisc
{
    /**
     * Events
     */
    public function __construct (string $text = null, /* bool */ $parse_mnemonic = false)
    {
        parent::__construct ();

        $this->Handle = new GtkLabel ($text, $parse_mnemonic);
    }

    /**
     * Methods
     */
    public function GetAngle ()
    {
        return $this->Handle->get_angle ();
    }

    public function GetAttributes ()
    {
        return $this->Handle->get_attributes ();
    }

    public function GetEllipsize ()
    {
        return $this->Handle->get_ellipsize ();
    }

    public function GetJustify ()
    {
        return $this->Handle->get_justify ();
    }

    public function GetLabel ()
    {
        return $this->utf8 ($this->Handle->get_label ());
    }

    public function GetLayout ()
    {
        return $this->Handle->get_layout ();
    }

    public function GetLayoutOffsets ()
    {
        return $this->Handle->get_layout_offsets ();
    }

    public function GetLineWrap ()
    {
        return $this->Handle->get_line_wrap ();
    }

    public function GetMaxWidthChars ()
    {
        return $this->Handle->get_max_width_chars ();
    }

    public function GetMNemonicKeyval ()
    {
        return $this->Handle->get_mnemonic_keyval ();
    }

    public function GetMNemonicWidget ()
    {
        $widget = new TWidget;

        $widget->Handle = $this->Handle->get_mnemonic_widget ();

        return $widget;
    }

    public function GetSelectable ()
    {
        return $this->Handle->get_selectable ();
    }

    public function GetSelectionBounds ()
    {
        return $this->Handle->get_selection_bounds ();
    }

    public function GetSingleLineMode ()
    {
        return $this->Handle->get_single_line_mode ();
    }

    public function GetText ()
    {
        return $this->utf8 ($this->Handle->get_text ());
    }

    public function GetUseMarkup ()
    {
        return $this->Handle->get_use_markup ();
    }

    public function GetUseUnderline ()
    {
        return $this->Handle->get_use_underline ();
    }

    public function GetWidthChars ()
    {
        return $this->Handle->get_width_chars ();
    }

    public function SelectRegion (int $start_offset, int $end_offset)
    {
        $this->Handle->select_region ($start_offset, $end_offset);
    }

    public function SetAngle (int $angle)
    {
        $this->Handle->set_angle ($angle);
    }

    public function SetAttributes (PangoAttrList $list)
    {
        $this->Handle->set_attributes ($list);
    }

    public function SetEllipsize (PangoEllipsizeMode $ellipsization_mode)
    {
        $this->Handle->set_ellipsize ($ellipsization_mode);
    }

    public function SetJustify (TJustification $jtype)
    {
        $this->Handle->set_justify ($jtype);
    }

    public function SetLabel (string $str)
    {
        $this->Handle->set_label ($this->latin1 ($str));
    }

    public function SetLineWrap (bool $wrap)
    {
        $this->Handle->set_line_wrap ($wrap);
    }

    public function SetMarkup (string $str)
    {
        $this->Handle->set_markup ($this->latin1 ($str));
    }

    public function SetMarkupWithMNemonic (string $str)
    {
        $this->Handle->set_markup_with_mnemonic ($this->latin1 ($str));
    }

    public function SetMaxWidthChars (int $n_chars)
    {
        $this->Handle->set_max_width_chars ($n_chars);
    }

    public function SetMnemonicWidget (TWidget $widget)
    {
        $this->Handle->set_mnemonic_widget ($widget->Handle);
    }

    public function SetPattern (string $pattern)
    {
        $this->Handle->set_pattern ($pattern);
    }

    public function SetSelectable (bool $setting)
    {
        $this->Handle->set_selectable ($setting);
    }

    public function SetSingleLineMode (bool $single_line_mode)
    {
        $this->Handle->set_single_line_mode ($single_line_mode);
    }

    public function SetText (string $str)
    {
        $this->Handle->set_text ($this->latin1 ($str));
    }

    public function SetTextWithMNemonic (string $str)
    {
        $this->Handle->set_text_with_mnemonic ($this->latin1 ($str));
    }

    public function SetUseMarkup (bool $setting)
    {
        $this->Handle->set_use_markup ($setting);
    }

    public function SetUseUnderline (bool $setting)
    {
        $this->Handle->set_use_underline ($setting);
    }

    public function SetWidthChars (int $n_chars)
    {
        $this->Handle->set_with_chars ($n_chars);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Angle':           { $result = $this->GetAngle ();           break; }
        case 'Attributes':      { $result = $this->GetAttributes ();      break; }
        case 'Ellipsize':       { $result = $this->GetEllipsize ();       break; }
        case 'Justify':         { $result = $this->GetJustify ();         break; }
        case 'Label':           { $result = $this->GetLabel ();           break; }
        case 'Layout':          { $result = $this->GetLayout ();          break; }
        case 'LayoutOffsets':   { $result = $this->GetLayoutOffsets ();   break; }
        case 'LineWrap':        { $result = $this->GetLineWrap ();        break; }
        case 'MaxWidthChars':   { $result = $this->GetMaxWidthChars ();   break; }
        case 'MnemonicKeyval':  { $result = $this->GetMnemonicKeyval ();  break; }
        case 'MnemonicWidget':  { $result = $this->GetMnemonicWidget ();  break; }
        case 'Selectable':      { $result = $this->GetSelectable ();      break; }
        case 'SelectionBounds': { $result = $this->GetSelectionBounds (); break; }
        case 'SingleLineMode':  { $result = $this->GetSingleLineMode ();  break; }
        case 'Text':            { $result = $this->GetText ();            break; }
        case 'UseMarkup':       { $result = $this->GetUseMarkup ();       break; }
        case 'UseUnderline':    { $result = $this->GetUseUnderline ();    break; }
        case 'WidthChars':      { $result = $this->GetWidthChars ();      break; }
        default:                { $result = parent::__get ($var);                }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Angle':              { $this->SetAngle ($val);              break; }
        case 'Attributes':         { $this->SetAttributes ($val);         break; }
        case 'Ellipsize':          { $this->SetEllipsize ($val);          break; }
        case 'Justify':            { $this->SetJustify ($val);            break; }
        case 'Label':              { $this->SetLabel ($val);              break; }
        case 'LineWrap':           { $this->SetLineWrap ($val);           break; }
        case 'Markup':             { $this->SetMarkup ($val);             break; }
        case 'MarkupWithMnemonic': { $this->SetMarkupWithMnemonic ($val); break; }
        case 'MaxWidthChars':      { $this->SetMaxWidthChars ($val);      break; }
        case 'MnemonicWidget':     { $this->SetMnemonicWidget ($val);     break; }
        case 'Pattern':            { $this->SetPattern ($val);            break; }
        case 'Selectable':         { $this->SetSelectable ($val);         break; }
        case 'SingleLineMode':     { $this->SetSingleLineMode ($val);     break; }
        case 'Text':               { $this->SetText ($val);               break; }
        case 'TextWithMnemonic':   { $this->SetTextWithMnemonic ($val);   break; }
        case 'UseMarkup':          { $this->SetUseMarkup ($val);          break; }
        case 'UseUnserline':       { $this->SetUseUnderline ($val);       break; }
        case 'WidthChars':         { $this->SetWidthChars ($val);         break; }
        default:                   { parent::__set ($var, $val);                 }
        }
    }
}

