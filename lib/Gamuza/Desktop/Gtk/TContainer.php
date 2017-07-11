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
 * Class TContainer
 *
 * @property int         $BorderWidth
 * @property array       $FocusChain
 * @property TWidget     $FocusChild
 * @property TAdjustment $FocusHAdjustment
 * @property TAdjustment $FocusVAdjustment
 * @property bool        $ReallocateRedraws
 * @property TResizeMode $ResizeMode
 *
 * @property string|array $OnAdd
 * @property string|array $OnCheckResize
 * @property string|array $OnRemove
 * @property string|array $OnSetFocusChild
 */
abstract class TContainer extends TWidget
{
    /**
     * Methods
     */
    public function Add (TWidget $widget)
    {
        $this->Handle->add ($widget->Handle);
    }

    public function CheckResize ()
    {
        $this->Handle->check_resize ();
    }

    public function ChildType ()
    {
        return $this->Handle->child_type ();
    }

    public function Clear ()
    {
        foreach ($this->Children as $Child)
        {
            $this->Remove ($Child);
        }
    }

    public function GetBorderWidth ()
    {
        return $this->Handle->get_border_width ();
    }

    public function GetChildren ()
    {
        $result = array ();

        foreach ($this->Handle->get_children () as $child)
        {
            $result [] = $child->get_data ('__tobject');
        }

        return $result;
    }

    public function GetFocusChain ()
    {
        return $this->Handle->get_focus_chain ();
    }

    public function GetFocusHAdjustment ()
    {
        return $this->Handle->get_focus_hadjustment ();
    }

    public function GetFocusVAdjustment ()
    {
        return $this->Handle->get_focus_vadjustment ();
    }

    public function GetResizeMode ()
    {
        return $this->Handle->get_resize_mode ();
    }

    public function PropagateExpose (TWidget $child, $event)
    {
        $this->Handle->propagate_expose ($child->Handle, $event);
    }

    public function Remove (TWidget $widget)
    {
        $this->Handle->remove ($widget->Handle);
    }

    public function ResizeChildren ()
    {
        $this->Handle->resize_children ();
    }

    public function SetBorderWidth (int $border_width)
    {
        $this->Handle->set_border_width ($border_width);
    }

    public function SetFocusChain (array $widgets)
    {
        return $this->Handle->set_focus_chain ($widgets);
    }

    public function SetFocusChild (TWidget $child)
    {
        $this->Handle->set_focus_child ($child->Handle);
    }

    public function SetFocusHAdjustment (TAdjustment $adjustment)
    {
        $this->Handle->set_focus_hadjustment ($adjustment->Handle);
    }

    public function SetFocusVAdjustment (TAdjustment $adjustment)
    {
        $this->Handle->set_focus_vadjustment ($adjustment->Handle);
    }

    public function SetReallocateRedraws (bool $need_redraws)
    {
        $this->Handle->set_reallocate_redraws ($need_redraws);
    }

    public function SetResizeMode (TResizeMode $resize_mode)
    {
        $this->Handle->set_resize_mode ($resize_mode);
    }

    public function UnsetFocusChain ()
    {
        $this->Handle->unset_focus_chain ();
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'BorderWidth':      { $result = $this->GetBorderWidth ();      break; }
        case 'Children':         { $result = $this->GetChildren ();         break; }
        case 'FocusChain':       { $result = $this->GetFocusChain ();       break; }
        case 'FocusHAdjustment': { $result = $this->GetFocusHAdjustment (); break; }
        case 'FocusVAdjustment': { $result = $this->GetFocusVAdjustment (); break; }
        case 'ResizeMode':       { $result = $this->GetResizeMode ();       break; }
        default:                 { $result = parent::__get ($var);                 }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'BorderWidth':       { $this->SetBorderWidth ($val);       break; }
        case 'FocusChain':        { $this->SetFocusChain ($val);        break; }
        case 'FocusChild':        { $this->SetFocusChild ($val);        break; }
        case 'FocusHAdjustment':  { $this->SetFocusHAdjustment ($val);  break; }
        case 'FocusVAdjustment':  { $this->SetFocusVAdjustment ($val);  break; }
        case 'ReallocateRedraws': { $this->SetReallocateRedraws ($val); break; }
        case 'ResizeMode':        { $this->SetResizeMode ($val);        break; }
        default:                  { parent::__set ($var, $val);                }
        }
    }
}

