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
 * Class THSV
 *
 * @property array $Color
 * @property bool  $IsAdjusting
 * @property array $Metrics
 *
 * @property string|array $OnChanged
 * @property string|array $OnMove
 */
class THSV extends TWidget
{
    /**
     * Events
     */
    public function __construct ()
    {
        parent::__construct ();

        $this->Handle = new GtkHSV ();
    }

    /**
     * Methods
     */
    public function GetColor ()
    {
        return $this->Handle->get_color ();
    }

    public function GetMetrics ()
    {
        return $this->Handle->get_metrics ();
    }

    public function IsAdjusting ()
    {
        return $this->Handle->is_adjusting ();
    }

    public function SetColor (float $h, float $s, float $v)
    {
        $this->Handle->set_color ($h, $s, $v);
    }

    public function SetMetrics (int $size, int $ring_width)
    {
        $this->Handle->set_metrics ($size, $ring_width);
    }

    public function ToHSV (float $r, float $g, float $b)
    {
        return $this->Handle->to_hsv ($r, $g, $b);
    }

    public function ToRGB (float $h, float $s, float $v)
    {
        return $this->Handle->to_rgb ($h, $s, $v);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
            case 'Color':       { $result = $this->GetColor ();       break; }
            case 'IsAdjusting': { $result = $this->GetIsAdjusting (); break; }
            case 'Metrics':     { $result = $this->GetMetrics ();     break; }
            default:            { $result = parent::__get ($var);            }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
            case 'Color':
            {
                list ($h, $s, $v) = $val;

                $this->SetColor ($h, $s, $v);

                break;
            }
            case 'Metrics':
            {
                list ($size, $ring_width) = $val;

                $this->SetMetrics ($size, $ring_width);

                break;
            }
            default: { parent::__set ($var, $val); }
        }
    }
}

