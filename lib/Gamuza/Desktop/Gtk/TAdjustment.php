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
 * Class TAdjustment
 *
 * @property double $Value
 *
 * @property string|array $OnChanged
 * @property string|array $OnValueChanged
 */
class TAdjustment extends TObject
{
    /**
     * Events
     */
    public function __construct(
        /* double */ $value = 0.0, /* double */ $lower = 0.0, /* double */ $upper = 0.0,
        /* double */ $step_increment = 0.0, /* double */ $page_increment = 0.0, /* double */ $page_size = 0.0
    )
    {
        parent::__construct ();

        $this->Handle = new GtkAdjustment ($value, $lower, $upper, $step_increment, $page_increment, $page_size);
    }

    /**
     * Methods
     */
    public function Changed ()
    {
        $this->Handle->changed ();
    }

    public function ClampPage (double $lower, double $upper)
    {
        $this->Handle->clamp_page ($lower, $upper);
    }

    public function GetValue ()
    {
        return $this->Handle->get_value ();
    }

    public function SetValue (double $value)
    {
        $this->Handle->set_value ($value);
    }

    public function ValueChanged ()
    {
        $this->Handle->value_changed ();
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Lower':         { $result = $this->Handle->lower;          break; }
        case 'PageIncrement': { $result = $this->Handle->page_increment; break; }
        case 'PageSize':      { $result = $this->Handle->page_size;      break; }
        case 'StepIncrement': { $result = $this->Handle->step_increment; break; }
        case 'Upper':         { $result = $this->Handle->upper;          break; }
        case 'Value':         { $result = $this->GetValue();             break; }
        default:              { $result = parent::__get ($var);                 }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Value': { $this->setValue ($val);     break; }
        default:      { parent::__set ($var, $val);        }
        }
    }
}

