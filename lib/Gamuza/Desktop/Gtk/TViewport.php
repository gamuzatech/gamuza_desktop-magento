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
 * Class TViewport
 *
 * @property TAdjustment $HAdjustment
 * @property TShadowType $ShadowType
 * @property TAdjustment $VAdjustment
 *
 * @property string|array $OnSetScrollAdjustments
 */
class TViewport extends TBin
{
    /**
     * Events
     */
    public function __construct (/* [GtkAdjustment hadjustment = null [, GtkAdjustment vadjustment = null]] */)
    {
        parent::__construct ();

        $this->Handle = new GtkViewport (/* $hadjustment, $vadjustment */);
    }

    /**
     * Methods
     */
    public function GetHAdjustment ()
    {
        return $this->Handle->get_hadjustment ();
    }

    public function getShadowType ()
    {
        return $this->Handle->get_shadow_type ();
    }

    public function GetVAdjustment ()
    {
        return $this->Handle->get_vadjustment ();
    }

    public function SetHAdjustment (TAdjustment $adjustment)
    {
        $this->Handle->set_hadjustment ($adjustment->Handle);
    }

    public function SetShadowType (TShadowType $type)
    {
        $this->Handle->set_shadow_type ($type);
    }

    public function SetVAdjustment (TAdjustment $adjustment)
    {
        $this->Handle->set_vadjustment ($adjustment->Handle);
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
        case 'HAdjustment': { $this->SetHAdjustment ($val); break; }
        case 'ShadowType':  { $this->SetShadowType ($val);  break; }
        case 'VAdjustment': { $this->SetVAdjustment ($val); break; }
        default:            { parent::__set ($var, $val);          }
        }
    }
}

