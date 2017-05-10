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
 * Class TAlignment
 *
 * @property array $Padding
 */
class TAlignment extends TBin
{
    /**
     * Events
     */
    public function __construct (/* $xalign = 0.5, $yalign = 0.5, $xscale = 1.0, $yscale = 1.0 */)
    {
        parent::__construct ();

        $this->Handle = new GtkAlignment (/* $xalign, $yalign, $xscale, $yscale */);
    }

    /**
     * Methods
     */
    public function GetPadding ()
    {
        return $this->Handle->get_padding ();
    }

    public function Set (double $xalign, double $yalign, double $xscale, double $yscale)
    {
        $this->Handle->set ($xalign, $yalign, $xscale, $yscale);
    }

    public function SetPadding (int $padding_top, int $padding_bottom, int $padding_left, int $padding_right)
    {
        $this->Handle->set_padding ($padding_top, $padding_bottom, $padding_left, $padding_right);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Padding': { $result = $this->getPadding (); break; }
        default:        { $result = parent::__get ($var);        }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Padding':
        {
            list ($top, $bottom, $left, $right) = $val;

            $this->setPadding ($top, $bottom, $left, $right);

            break;
        }
        default: { parent::__set ($var, $val); }
        }
    }
}

