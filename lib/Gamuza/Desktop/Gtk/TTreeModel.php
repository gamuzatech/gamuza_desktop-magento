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
 * Class TTreeModel
 *
 * @property string|array $OnRowChanged
 * @property string|array $OnRowDeleted
 * @property string|array $OnRowHasChildToggled
 * @property string|array $OnRowInserted
 * @property string|array $OnRowsReordered
 */
trait TTreeModel // extends TInterface
{
    /**
     * Methods
     */
    public function Children (callback $callback_func, mixed $user_data)
    {
        $this->Handle->for_each ($callback_func, $user_data);
    }

    public function GetColumnType (int $column)
    {
        return $this->Handle->get_column_type ($column);
    }

    public function GetFlags ()
    {
        return $this->Handle->get_flags ();
    }

    public function GetIter (TTreePath $path)
    {
        return $this->Handle->get_iter ($path);
    }

    public function GetIterFirst ()
    {
        return $this->Handle->get_iter_first ();
    }

    public function GetIterFromString (string $path)
    {
        return $this->Handle->get_iter_from_string ($path);
    }

    public function GetNColumns ()
    {
        return $this->Handle->get_n_columns ();
    }

    public function GetPath (TTreeIter $iter)
    {
        return $this->Handle->get_path ($iter);
    }

    public function GetStringFromIter (TTreeIter $iter)
    {
        return $this->Handle->get_string_from_iter ($iter);
    }

    public function GetValue (TTreeIter $iter, int $n_column)
    {
        $result = $this->Handle->get_value ($iter, $n_column);

        return is_string ($result) ? $this->utf8 ($result) : $result;
    }

    public function IterChildren (TTreeIter $parent)
    {
        return $this->Handle->iter_children ($parent);
    }

    public function IterHasChild (TTreeIter $iter)
    {
        return $this->Handle->iter_has_child ($iter);
    }

    public function IterNChildren (TTreeIter $iter)
    {
        return $this->Handle->iter_n_children ($iter);
    }

    public function IterNext (TTreeIter $iter)
    {
        return $this->Handle->iter_next ($iter);
    }

    public function IterNthChild (TTreeIter $iter, TTreeIter $parent_item, int $n)
    {
        return $this->Handle->iter_nth_child ($iter, $parent, $n);
    }

    public function IterParent (TTreeIter $iter, TTreeIter $parent)
    {
        return $this->Handle->iter_parent ($iter, $parent);
    }

    public function RefNode (TTreeIter $iter)
    {
        $this->Handle->ref_node ($iter);
    }

    public function RowChanged (TTreePath $path, TTreeIter $iter)
    {
        $this->Handle->row_changed ($path, $iter);
    }

    public function RowDeleted (TTreePath $path)
    {
        $this->Handle->row_deleted ($path);
    }

    public function RowHasChildToggled (TTreePath $path, TTreeIter $iter)
    {
        $this->Handle->row_has_child_toggled ($path, $iter);
    }

    public function RowInserted (TTreePath $path, TTreeIter $iter)
    {
        $this->Handle->row_inserted ($path, $iter);
    }

    public function UnrefNode (TTreeIter $iter)
    {
        $this->Handle->unref_node ($iter);
    }

    public function Get (TTreeIter $iter /* , TTreeIter $iter2 , ... */)
    {
        return $this->Handle->get ($iter /* , $iter2 , ... */);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Flags':     { $result = $this->GetFlags ();      break; }
        case 'IterFirst': { $result = $this->GetIterFirst ();  break; }
        case 'NColumns':  { $result = $this->GetNColumns ();   break; }
        default:          { $result = parent::__get ($var);           }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        default: { parent::__set ($var, $val); }
        }
    }
}

