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
 * Class TScrolledWindow
 *
 * @property TAdjustment $HAdjustment
 * @property TCornerType $Placement
 * @property array       $Policy
 * @property TShadowType $ShadowType
 * @property TAdjustment $VAdjustment
 *
 * @property string|array $OnMoveFocusOut
 * @property string|array $OnScrollChild
 */
class TScrolledWindow extends TBin
{
    /**
     * Events
     */
    public function __construct (/* [ TAdjustment $hadjustment = null [, TAdjustment $vadjustment = null ]] */)
    {
        parent::__construct ();

        $this->Handle = new GtkScrolledWindow (/* $hadjustment, $vadjustment */);

        $this->Policy = array (polAutomatic, polAutomatic);
    }

    /**
     * Methods
     */
    public function AddWithViewport (TWidget $widget)
    {
        $this->Handle->add_with_viewport ($widget->Handle);
    }

    public function GetHAdjustment ()
    {
        return $this->Handle->get_hadjustment ();
    }

    public function GetPlacement ()
    {
        return $this->Handle->get_placement ();
    }

    public function GetPolicy ()
    {
        return $this->Handle->get_policy ();
    }

    public function GetShadowType ()
    {
        return $this->Handle->get_shadow_type ();
    }

    public function GetVAdjustment ()
    {
        return $this->Handle->get_vadjustment ();
    }

    public function SetHAdjustment (TAdjustment $hadjustment)
    {
        $this->Handle->set_hadjustment ($hadjustment->Handle);
    }

    public function SetPlacement (TCornerType $window_placement)
    {
        $this->Handle->set_placement ($window_placement);
    }

    public function SetPolicy (TPolicyType $hscrollbar_policy, TPolicyType $vscrollbar_policy)
    {
        $this->Handle->set_policy ($hscrollbar_policy, $vscrollbar_policy);
    }

    public function SetShadowType (TShadowType $type)
    {
        $this->Handle->set_shadow_type ($type);
    }

    public function SetVAdjustment (TAdjustment $hadjustment)
    {
        $this->Handle->set_vadjustment ($hadjustment->Handle);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'HAdjustment': { $result = $this->GetHAdjustment (); break; }
        case 'Placement':   { $result = $this->GetPlacement ();   break; }
        case 'Policy':      { $result = $this->GetPolicy ();      break; }
        case 'ShadowType':  { $result = $this->GetShadowType ();  break; }
        case 'VAdjustment': { $result = $this->GetVAdjustment (); break; }
        default:            { $result = parent::__get ($var);            }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'HAdjustment': { $this->SetHAdjustment ($val);  break; }
        case 'Placement':   { $this->SetPlacement ($val);    break; }
        case 'Policy':
        {
            list ($hspolicy, $vspolicy) = $val;

            $this->SetPolicy ($hspolicy, $vspolicy);

            break;
        }
        case 'ShadowType':  { $this->SetShadowType ($val);   break; }
        case 'VAdjustment': { $this->SetVAdjustment ($val);  break; }
        default:            { parent::__set ($var, $val);           }
        }
    }
}

