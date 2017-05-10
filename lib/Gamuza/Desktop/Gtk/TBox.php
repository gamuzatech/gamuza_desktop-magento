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
 * Class TBox
 *
 * @property bool $Homogeneous
 * @property int  $Spacing
 */
abstract class TBox extends TContainer
{
    /**
     * Methods
     */
    public function GetHomogeneous ()
    {
        return $this->Handle->get_homogeneous ();
    }

    public function GetSpacing ()
    {
        return $this->Handle->get_spacing ();
    }

    public function PackEnd (TWidget $child, /* bool */ $expand = true, /* bool */ $fill = true, /* int */ $padding = 0)
    {
        $this->Handle->pack_end ($child->Handle, $expand, $fill, $padding);
    }

    public function PackEndDefaults (TWidget $child)
    {
        $this->Handle->pack_end_defaults ($child->Handle);
    }

    public function PackStart (TWidget $child, /* bool */ $expand = true, /* bool */ $fill = true, /* int */ $padding = 0)
    {
        $this->Handle->pack_start ($child->Handle, $expand, $fill, $padding);
    }

    public function PackStartDefaults (TWidget $child)
    {
        $this->Handle->pack_start_defaults ($child->Handle);
    }

    public function ReorderChild (TWidget $child, int $position)
    {
        $this->Handle->reorder_child ($child->Handle, $position);
    }

    public function SetChildPacking (TWidget $child, bool $expand, bool $fill, int $padding, TPackType $pack_type)
    {
        $this->Handle->set_child_packing ($child->Handle, $expand, $fill, $padding, $pack_type);
    }

    public function SetHomogeneous (bool $homogeneous)
    {
        $this->Handle->set_homogeneous ($homogeneous);
    }

    public function SetSpacing (int $spacing)
    {
        $this->Handle->set_spacing ($spacing);
    }

    public function QueryChildPacking (TWidget $child)
    {
        return $this->Handle->query_child_packing ($child->Handle);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Homogeneous': { $result = $this->GetHomogeneous (); break; }
        case 'Spacing':     { $result = $this->GetSpacing ();     break; }
        default:            { $result = parent::__get ($var);            }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Homogeneous': { $this->SetHomogeneous ($val); break; }
        case 'Spacing':     { $this->SetSpacing ($val);     break; }
        default:            { parent::__set ($var, $val);          }
        }
    }
}

