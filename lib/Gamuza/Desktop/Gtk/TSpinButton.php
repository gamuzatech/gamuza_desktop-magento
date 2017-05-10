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
 * Class TSpinButton
 *
 * @property TAdjustment             $Adjustment
 * @property int                     $Digits
 * @property array                   $Increments
 * @property bool                    $Numeric
 * @property array                   $Range
 * @property bool                    $SnapToTicks
 * @property TSpinButtonUpdatePolicy $UpdatePolicy
 * @property bool                    $Value
 * @property bool                    $Wrap
 *
 * @property string|array $OnChangeValue
 * @property string|array $OnInput
 * @property string|array $OnOutput
 * @property string|array $OnValueChanged
 */
class TSpinButton extends TEntry
{
    // use TCellEditable;
    // use TEditable;

    /**
     * Events
     */
    public function __construct (/* [TAdjustment $adjustment = null [, double $climb_rate = 0.0, int $digits]] */)
    {
        parent::__construct ();

        $this->Handle = new GtkSpinButton (/* $adjustment, $climb_rate, $digits */);
    }

    /**
     * Methods
     */
    public static function NewWithRange (double $min, double $max, double $step)
    {
        return GtkSpinButton::new_with_range ($min, $max, $step);
    }

    public function Configure (TAdjustment $adjustment, double $climb_rate, int $digits)
    {
        $this->Handle->configure ($adjustment, $climb_rate, $digits);
    }

    public function GetAdjustment ()
    {
        return $this->Handle->get_adjustment ();
    }

    public function GetDigits ()
    {
        return $this->Handle->get_digits ();
    }

    public function GetIncrements ()
    {
        return $this->Handle->get_increments ();
    }

    public function GetNumeric ()
    {
        return $this->Handle->get_numeric ();
    }

    public function GetRange ()
    {
        return $this->Handle->get_range ();
    }

    public function GetSnapToTicks ()
    {
        return $this->Handle->get_snap_to_ticks ();
    }

    public function GetUpdatePolicy ()
    {
        return $this->Handle->get_update_policy ();
    }

    public function GetValue ()
    {
        return $this->Handle->get_value ();
    }

    public function GetValueAsInt ()
    {
        return $this->Handle->get_value_as_int ();
    }

    public function GetWrap ()
    {
        return $this->Handle->get_wrap ();
    }

    public function SetAdjustment (TAdjustment $adjustment)
    {
        $this->Handle->set_adjustment ($adjustment);
    }

    public function SetDigits (int $digits)
    {
        $this->Handle->set_digits ($digits);
    }

    public function SetIncrements (double $step, double $page)
    {
        $this->Handle->set_increments ($step, $page);
    }

    public function SetNumeric (bool $numeric)
    {
        $this->Handle->set_numeric ($numeric);
    }

    public function SetRange (double $min, double $max)
    {
        $this->Handle->set_range ($min, $max);
    }

    public function SetSnapToTicks (bool $snap_to_ticks)
    {
        $this->Handle->set_snap_to_ticks ($snap_to_ticks);
    }

    public function SetUpdatePolicy (TSpinButtonUpdatePolicy $policy)
    {
        $this->Handle->set_update_policy ($policy);
    }

    public function SetValue (bool $value)
    {
        $this->Handle->set_value ($value);
    }

    public function SetWrap (bool $wrap)
    {
        $this->Handle->set_wrap ($wrap);
    }

    public function Spin (TSpinType $direction, double $increment)
    {
        $this->Handle->spin ($direction, $increment);
    }

    public function Update ()
    {
        $this->Handle->update ();
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
        case 'Digits':       { $result = $this->GetDigits ();       break; }
        case 'Increments':   { $result = $this->GetIncrements ();   break; }
        case 'Numeric':      { $result = $this->GetNumeric ();      break; }
        case 'Range':        { $result = $this->GetRange ();        break; }
        case 'SnapToTicks':  { $result = $this->GetSnapToTicks ();  break; }
        case 'UpdatePolicy': { $result = $this->GetUpdatePolicy (); break; }
        case 'Value':        { $result = $this->GetValue ();        break; }
        case 'ValueAsInt':   { $result = $this->GetValueAsInt ();   break; }
        case 'Wrap':         { $result = $this->GetWrap ();         break; }
        default:             { $result = parent::__get ($var);             }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Adjustment':   { $this->SetAdjustment ($val);   break; }
        case 'Digits':       { $this->SetDigits ($val);       break; }
        case 'Increments':
        {
            list ($step, $page) = $val;

            $this->SetIncrements ($step, $page);

            break;
        }
        case 'Numeric':      { $this->SetNumeric ($val);      break; }
        case 'Range':
        {
            list ($min, $max) = $val;

            $this->SetRange ($min, $max);

            break;
        }
        case 'SnapToTicks':  { $this->SetSnapToTicks ($val);  break; }
        case 'UpdatePolicy': { $this->SetUpdatePolicy ($val); break; }
        case 'Value':        { $this->SetValue ($val);        break; }
        case 'Wrap':         { $this->SetWrap ($val);         break; }
        default:             { parent::__set ($var, $val);           }
        }
    }
}

