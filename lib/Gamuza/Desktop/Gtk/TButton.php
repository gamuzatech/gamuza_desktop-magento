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
 * Class TButton
 *
 * @property array        $Alignment
 * @property bool         $FocusOnClick
 * @property TWidget      $Image
 * @property string       $Label
 * @property TReliefStyle $Relief
 * @property bool         $UseStock
 * @property bool         $UseUnderline
 *
 * @property string|array $OnActivate
 * @property string|array $OnClicked
 * @property string|array $OnEnter
 * @property string|array $OnLeave
 * @property string|array $OnPressed
 * @property string|array $OnReleased
 */
class TButton extends TBin
{
    /**
     * Events
     */
    public function __construct (/* string $label = null, bool $use_underline = false */)
    {
        parent::__construct ();

        $this->Handle = new GtkButton (/* $label, $use_underline */);
    }

    /**
     * Methods
     */
    public static function NewFromStock (string $stock_id)
    {
        $button = new TButton ();
        $button->Handle = GtkButton::new_from_stock ($stock_id);

        return $button;
    }

    public function Clicked ()
    {
        $this->Handle->clicked ();
    }

    public function Enter ()
    {
        $this->Handle->enter ();
    }

    public function GetAlignment()
    {
        return $this->Handle->get_alignment();
    }

    public function GetFocusOnClick ()
    {
        return $this->Handle->get_focus_on_click ();
    }

    public function GetImage ()
    {
        $image = $this->Handle->get_image ();

        return $image->get_data ('__tobject');
    }

    public function GetLabel ()
    {
        return $this->utf8 ($this->Handle->get_label ());
    }

    public function GetRelief ()
    {
        return $this->Handle->get_relief ();
    }

    public function GetUseStock ()
    {
        return $this->Handle->get_use_stock ();
    }

    public function GetUseUnderline ()
    {
        return $this->Handle->get_use_underline ();
    }

    public function Leave ()
    {
        $this->Handle->leave ();
    }

    public function Pressed ()
    {
        $this->Handle->pressed ();
    }

    public function Released ()
    {
        $this->Handle->released ();
    }

    public function SetAlignment (double $xalign, double $yalign)
    {
        $this->Handle->set_alignment ($xalign, $yalign);
    }

    public function SetFocusOnClick (bool $focus_on_click)
    {
        $this->Handle->set_focus_on_click ($focus_on_click);
    }

    public function SetImage (TWidget $image)
    {
        $this->Handle->set_image ($image->Handle);
    }

    public function SetLabel (string $label)
    {
        $this->Handle->set_label ($this->latin1 ($label));
    }

    public function SetRelief (TReliefStyle $newstyle)
    {
        $this->Handle->set_relief ($newstyle);
    }

    public function SetUseStock (bool $stock)
    {
        $this->Handle->set_use_stock ($stock);
    }

    public function SetUseUnderline (bool $underline)
    {
        $this->Handle->set_use_underline ($underline);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Alignment':    { $result = $this->GetAlignment ();    break; }
        case 'FocusOnClick': { $result = $this->GetFocusOnClick (); break; }
        case 'Image':        { $result = $this->GetImage ();        break; }
        case 'Label':        { $result = $this->GetLabel ();        break; }
        case 'Relief':       { $result = $this->GetRelief ();       break; }
        case 'UseStock':     { $result = $this->GetUseStock ();     break; }
        case 'UseUnserline': { $result = $this->GetUseUnderline (); break; }
        default:             { $result = parent::__get ($var);             }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Alignment':
        {
            list ($xalign, $yalign) = $val;

            $this->SetAlignment ($xalign, $yalign);

            break;
        }
        case 'FocusOnClick': { $this->SetFocusOnClick ($val); break; }
        case 'Image':        { $this->SetImage ($val);        break; }
        case 'Label':        { $this->SetLabel ($val);        break; }
        case 'Relief':       { $this->SetRelief ($val);       break; }
        case 'UseStock':     { $this->SetUseStock ($val);     break; }
        case 'UseUnderline': { $this->SetUseUnderline ($val); break; }
        default:             { parent::__set ($var, $val);           }
        }
    }
}

