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
 * Class TCellLayout
 */
trait TCellLayout // extends TInterface
{
    public function AddAttribute (TCellRenderer $cell, string $attribute, int $column)
    {
        $this->Handle->add_attribute ($cell, $attribute, $column);
    }

    public function Clear ()
    {
        $this->Handle->clear ();
    }

    public function ClearAttributes (TCellRenderer $cell)
    {
        $this->Handle->clear_attributes ($cell);
    }

    public function PackEnd (TCellRenderer $cell, /* bool */ $expand = false)
    {
        $this->Handle->pack_end ($cell, $expand);
    }

    public function PackStart (TCellRenderer $cell, /* bool */ $expand = false)
    {
        $this->Handle->pack_start ($cell->Handle, $expand);
    }

    public function Reorder (TCellRenderer $cell, int $position)
    {
        $this->Handle->reorder ($cell, $position);
    }

    public function SetAttributes (TCellRenderer $cell, $attribute, $column)
    {
        $this->Handle->set_attributes ($cell, $attribute, $column);
    }

    public function SetCellDataFunc (TCellRenderer $cell, callback $callback)
    {
        $this->Handle->set_cell_data_func ($cell, $callback);
    }
}

