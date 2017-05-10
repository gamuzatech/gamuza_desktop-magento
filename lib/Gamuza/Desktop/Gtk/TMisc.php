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
 * Class TMisc
 *
 * @property array $Alignment
 * @property array $Padding
 */
abstract class TMisc extends TWidget
{
    /**
     * Methods
     */
    public function GetAlignment ()
    {
        return $this->Handle->get_alignment ();
    }

    public function GetPadding ()
    {
        return $this->Handle->get_padding ();
    }

    public function SetAlignment (double $xalign, double $yalign)
    {
        $this->Handle->set_alignment ($xalign, $yalign);
    }

    public function SetPadding (int $xpad, int $ypad)
    {
        $this->Handle->set_padding ($xpad, $ypad);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Alignment': { $result = $this->getAlignment (); break; }
        case 'Padding':   { $result = $this->getPadding ();   break; }
        default:          { $result = parent::__get ($var);          }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Alignment':
        {
            list ($xalign, $yalign) = $val;

            $this->SetAlignment ($xalign, $yalign);

            break;
        }
        case 'Padding':
        {
            list ($xpad, $ypad) = $val;

            $this->setPadding ($xpad, $ypad);

            break;
        }
        default: { parent::__set ($var, $val); }
        }
    }
}

