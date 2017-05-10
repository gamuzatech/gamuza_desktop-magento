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
 * Class TCurve
 *
 * @property TCurveType $CurveType
 * @property double     $Gamma
 *
 * @property string|array $OnCurveTypeChanged
 */
class TCurve extends TDrawingArea
{
    /**
     * Events
     */
    public function __construct ()
    {
        parent::__construct ();

        $this->Handle = new GtkCurve ();
    }

    /**
     * Methods
     */
    public function GetVector ($veclen, $vector)
    {
        $this->Handle->get_vector ();
    }

    public function Reset ()
    {
        $this->Handle->reset ();
    }

    public function SetCurveType (TCurveType $type)
    {
        $this->Handle->set_curve_type ($type);
    }

    public function SetGamma (double $gamma)
    {
        $this->Handle->set_gamma ($gamma);
    }

    public function SetRange (double $min_x, double $max_x, double $min_y, double $max_y)
    {
        $this->Handle->set_range ($min_x, $max_x, $min_y, $max_y);
    }

    public function SetVector ($veclen, $vector)
    {
        $this->Handle->set_vector ($veclen, $vector);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        default:             { $result = parent::__get ($var);             }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'CurveType': { $this->SetCurveType ($val); break; }
        case 'Gamma':     { $this->SetGamma ($val);     break; }
        default:          { parent::__set ($var, $val);        }
        }
    }
}

