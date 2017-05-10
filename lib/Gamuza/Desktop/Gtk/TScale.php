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
 * Class TScale
 *
 * @property int           $Digits
 * @property bool          $DrawValue
 * @property TPositionType $ValuePos
 *
 * @property string|array $OnFormatValue
 */
abstract class TScale extends TRange
{
    /**
     * Methods
     */
    public function GetDigits ()
    {
        return $this->Handle->get_digits ();
    }

    public function GetDrawValue ()
    {
        return $this->Handle->get_draw_value ();
    }

    public function getLayout ()
    {
        return $this->Handle->get_layout ();
    }

    public function GetLayoutOffsets ()
    {
        return $this->Handle->get_layout_offsets ();
    }

    public function GetValuePos ()
    {
        return $this->Handle->get_value_pos ();
    }

    public function SetDigits (int $digits)
    {
        $this->Handle->set_digits ($digits);
    }

    public function SetDrawValue (bool $draw_value)
    {
        $this->Handle->set_draw_value ($draw_value);
    }

    public function SetValuePos (TPositionType $pos)
    {
        $this->Handle->set_value_pos ($pos);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Digits':        { $result = $this->GetDigits ();        break; }
        case 'DrawValue':     { $result = $this->GetDrawValue ();     break; }
        case 'Layout':        { $result = $this->GetLayout ();        break; }
        case 'LayoutOffsets': { $result = $this->GetLayoutOffsets (); break; }
        case 'ValuePos':      { $result = $this->GetValuePos ();      break; }
        default:              { $result = parent::__get ($var);              }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Digits':    { $this->SetDigits ($val);    break; }
        case 'DrawValue': { $this->SetDrawValue ($val); break; }
        case 'ValuePos':  { $this->SetValuePos ($val);  break; }
        default:          { parent::__set ($var, $val);        }
        }
    }
}

