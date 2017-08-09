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
 * Class TTreeSelection
 *
 * @property TSelectionMode $Mode
 * @property callback       $SelectionFunction
 *
 * @property string|array $OnChanged
 */
class TTreeSelection extends System\TObject
{
    /**
     * Methods
     */
    public function GetCountSelectedRows ()
    {
        return $this->Handle->get_count_selected_rows ();
    }

    public function GetMode ()
    {
        return $this->Handle->get_mode ();
    }

    public function GetSelected ()
    {
        list ($model, $iter) = $this->Handle->get_selected ();

        $store = new TTreeStore ();
        $store->Handle = $model;

        return array ($store, /* TTreeIter */ $iter);
    }

    public function GetSelectedRows ()
    {
        return $this->Handle->get_selected_rows ();
    }

    public function GetTreeView ()
    {
        return $this->Handle->get_tree_view ();
    }

    public function IterIsSelected (TTreeIter $iter)
    {
        return $this->Handle->iter_is_selected ($iter);
    }

    public function PathIsSelected (string $path)
    {
        return $this->Handle->path_is_selected ($path);
    }

    public function SelectAll ()
    {
        return $this->Handle->select_all ();
    }

    public function SelectIter (TTreeIter $iter)
    {
        $this->Handle->select_iter ($iter);
    }

    public function SelectPath (string $path)
    {
        $this->Handle->select_path ($path);
    }

    public function SelectRange (int $lower, int $upper)
    {
        $this->Handle->select_range ($lower, $upper);
    }

    public function SelectedForeach (callback $function)
    {
        $this->Handle->selected_foreach ($function);
    }

    public function SetMode (TSelectionMode $type)
    {
        $this->Handle->set_mode ($type);
    }

    public function SetSelectFunction (callback $callback)
    {
        $this->Handle->set_select_function ($callback);
    }

    public function UnselectAll ()
    {
        $this->Handle->unselect_all ();
    }

    public function UnselectIter (TTreeIter $iter)
    {
        $this->Handle->unselect_iter ($iter);
    }

    public function UnselectPath (string $path)
    {
        $this->Handle->unselect_path ($path);
    }

    public function UnselectRange (int $lower, int $upper)
    {
        $this->Handle->unselect_range ($lower, $upper);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Mode':         { $result = $this->GetMode ();         break; }
        case 'Selected':     { $result = $this->GetSelected ();     break; }
        case 'SelectedRows': { $result = $this->GetSelectedRows (); break; }
        case 'TreeView':     { $result = $this->GetTreeView ();     break; }
        default:             { $result = parent::__get ($var);             }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Mode':           { $this->SetMode ($val);           break; }
        case 'SelectFunction': { $this->SetSelectFunction ($val); break; }
        default:               { parent::__set ($var, $val);             }
        }
    }
}

