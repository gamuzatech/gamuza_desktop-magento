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
 * Class TTable
 *
 * @property int  $ColSpacings
 * @property bool $Homogeneous
 * @property int  $RowSpacings
 */
class TTable extends TContainer
{
    /**
     * Properties
     */
    public $AutoAttach = true;

    /**
     * Events
     */
    public function __construct (/* [int $n_rows = 1 [, int $n_columns = 1 [, bool $homogeneous = false]]] */)
    {
        parent::__construct ();

        $this->Handle = new GtkTable (/* $n_rows, $n_columns, $homogeneous */);
    }

    /**
     * Methods
     */
    public function Attach (TWidget $child, int $left_attach, int $right_attach, int $top_attach, int $bottom_attach,
        /* TAttachOptions */ $xoptions = attDefault, /* TAttachOptions */ $yoptions = attDefault,
        /* int */ $xpadding = attDefault, /* int */ $ypadding = attDefault)
    {
        $this->Handle->attach ($child->Handle, $left_attach, $right_attach, $top_attach, $bottom_attach,
            $xoptions, $yoptions, $xpadding, $ypadding);
    }

    public function AttachDefaults (TWidget $child, int $left_attach, int $right_attach, int $top_attach, int $bottom_attach)
    {
        $this->Handle->attach_defaults ($child->Handle, $left_attach, $right_attach, $top_attach, $bottom_attach);
    }

    public function GetColSpacing (int $column)
    {
        return $this->Handle->get_col_spacing ($column);
    }

    public function GetDefaultColSpacing ()
    {
        return $this->Handle->get_default_col_spacing ();
    }

    public function GetDefaultRowSpacing ()
    {
        return $this->Handle->get_default_row_spacing ();
    }

    public function GetHomogeneous ()
    {
        return $this->Handle->get_homogenous ();
    }

    public function GetNumColumns ()
    {
        return $this->Handle->get_property ('n-columns');
    }

    public function GetNumRows ()
    {
        return $this->Handle->get_property ('n-rows');
    }

    public function GetRowSpacing (int $row)
    {
        return $this->Handle->get_row_spacing ($row);
    }

    public function Resize (int $rows, int $columns)
    {
        $this->Handle->resize ($rows, $columns);
    }

    public function SetColSpacing (int $column, int $spacing)
    {
        $this->Handle->set_col_spacing ($column, $spacing);
    }

    public function SetColSpacings (int $spacing)
    {
        $this->Handle->set_col_spacings ($spacing);
    }

    public function SetHomogeneous (bool $homogeneous)
    {
        $this->Handle->set_homogeneous ($homogeneous);
    }

    public function SetRowSpacing (int $row, int $spacing)
    {
        $this->Handle->set_row_spacing ($column, $spacing);
    }

    public function SetRowSpacings (int $spacing)
    {
        $this->Handle->set_row_spacings ($spacing);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'DefaultColSpacing': { $result = $this->GetDefaultColSpacing (); break; }
        case 'DefaultRowSpacing': { $result = $this->GetDefaultRowSpacing (); break; }
        case 'Homogeneous':       { $result = $this->GetHomogeneous ();       break; }
        case 'Size':
        {
            $n_rows = $this->GetNumRows ();
            $n_columns = $this->GetNumColumns ();

            $result = array ($n_rows, $n_columns);

            break;
        }
        default:                  { $result = parent::__get ($var);                  }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'ColSpacings': { $this->SetColSpacings ($val); break; }
        case 'Homogeneous': { $this->SetHomogeneous ($val); break; }
        case 'RowSpacings': { $this->SetRowSpacings ($val); break; }
        case 'Size':
        {
            list ($n_rows, $n_columns) = $val;

            $this->Resize ($n_rows, $n_columns);

            break;
        }
        default:            { parent::__set ($var, $val);          }
        }
    }
}

