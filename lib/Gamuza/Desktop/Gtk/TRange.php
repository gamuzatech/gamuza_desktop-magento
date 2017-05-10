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
 * Class TRange
 *
 * @property TAdjustment $Adjustment
 * @property array $Increments
 * @property bool $Inverted
 * @property array $Range
 * @property TUpdateType $UpdatePolicy
 * @property double $Value
 *
 * @property string|array $OnAdjustBounds
 * @property string|array $OnChangeValue
 * @property string|array $OnMoveSlider
 * @property string|array $OnValueChanged
 */
abstract class TRange extends TWidget
{
    /**
     * Methods
     */
    public function GetAdjustment ()
    {
        return $this->Handle->get_adjustment ();
    }

    public function GetInverted ()
    {
        return $this->Handle->get_inverted ();
    }

    public function GetUpdatePolicy ()
    {
        return $this->Handle->get_update_policy ();
    }

    public function GetValue ()
    {
        return $this->Handle->get_value ();
    }

    public function SetAdjustment (TAdjustment $adjustment)
    {
        $this->Handle->set_adjustment ($adjustment->Handle);
    }

    public function SetIncrements (double $step, double $page)
    {
        $this->Handle->set_increments ($step, $page);
    }

    public function SetInverted (bool $setting)
    {
        $this->Handle->set_inverted ($setting);
    }

    public function SetRange (double $min, double $max)
    {
        $this->Handle->set_range ($min, $max);
    }

    public function SetUpdatePolicy (TUpdateType $policy)
    {
        $this->Handle->set_update_policy ($policy);
    }

    public function SetValue (double $value)
    {
        $this->Handle->set_value ($value);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Adjustment':   { $result = $this->GetAdjustment ();   break; }
        case 'Inverted':     { $result = $this->GetInverted ();     break; }
        case 'UpdatePolicy': { $result = $this->GetUpdatePolicy (); break; }
        case 'Value':        { $result = $this->GetValue ();        break; }
        default:             { $result = parent::__get ($var);             }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Adjustment': { $this->SetAdjustment ($val); break; }
        case 'Increments':
        {
            list ($step, $page) = $val;

            $this->SetIncrements ($step, $page);

            break;
        }
        case 'Inverted':        { $this->SetInverted ($val);        break; }
        case 'Range':
        {
            list ($min, $max) = $val;

            $this->SetRange ($min, $max);

            break;
        }
        case 'UpdatePolicy': { $this->SetUpdatePolicy ($val);       break; }
        case 'Value':        { $this->SetValue ($val);              break; }
        default:             { parent::__set ($var, $val);                 }
        }
    }
}

