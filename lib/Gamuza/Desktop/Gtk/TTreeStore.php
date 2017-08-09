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
 * Class GamuzaTreeStore
 */
class GamuzaTreeStore extends GtkTreeStore
{
    public function __construct (array $columnTypes = null)
    {
        if (!empty ($columnTypes))
        {
            return call_user_func_array ('parent::__construct', $columnTypes);
        }

        parent::__construct ();
    }
}

/**
 * Class TTreeStore
 *
 * @property array $ColumnTypes
 */
class TTreeStore extends System\TObject
{
    use TTreeModel;
    use TTreeDragSource;
    use TTreeDragDest;
    use TTreeSortable;
    // use Traversable;

    protected $_column_types;

    /**
     * Events
     */
    public function __construct (array $columnTypes = null)
    {
        parent::__construct ();

        $this->Handle = new GamuzaTreeStore ($columnTypes);
    }

    /**
     * Methods
     */
    public function Append (TTreeIter $parent = null, array $items = null)
    {
        if (is_object ($parent) || !empty ($items))
        {
            $result = null;
            foreach ($items as $_item)
            {
                $result [] = is_string ($_item) ? $this->latin1 ($_item) : $_item;
            }

            return $this->Handle->append ($parent, $result);
        }

        return $this->Handle->append ();
    }

    public function Clear ()
    {
        $this->Handle->clear ();
    }

    public function GetColumnTypes ()
    {
        return $this->_column_types;
    }

    public function GetValue (TTreeIter $iter, int $n_column)
    {
        $result = $this->Handle->get_value ($iter, $n_column);

        return is_string ($result) ? $this->utf8 ($result) : $result;
    }

    public function Insert (int $position, TTreeIter $parent, array $items)
    {
        return $this->Handle->insert ($position, $parent, $items);
    }

    public function InsertAfter (TTreeIter $sibling, TTreeIter $parent, array $items)
    {
        return $this->Handle->insert_after ($sibling, $parent, $items);
    }

    public function InsertBefore (TTreeIter $sibling, TTreeIter $parent, array $items)
    {
        return $this->Handle->insert_before ($sibling, $parent, $items);
    }

    public function IsAncestor (TTreeIter $iter, TTreeIter $descendant)
    {
        return $this->Handle->is_ancestor ($iter, $descendant);
    }

    public function IterDepth (TTreeIter $iter)
    {
        return $this->Handle->iter_depth ($iter);
    }

    public function IterIsValid (TTreeIter $iter)
    {
        return $this->Handle->iter_is_valid ($iter);
    }

    public function MoveAfter (TTreeIter $iter, TTreeIter $position)
    {
        $this->Handle->move_after ($iter, $position);
    }

    public function MoveBefore (TTreeIter $iter, TTreeIter $position)
    {
        $this->Handle->move_before ($iter, $position);
    }

    public function Prepend (TTreeIter $parent, array $items)
    {
        return $this->Handle->prepend ($parent, $items);
    }

    public function Remove (TTreeIter $iter)
    {
        return $this->Handle->remove ($iter);
    }

    public function Set (TTreeIter $iter, $column, $value /* , $column, $value, ... */)
    {
        $_value = is_string ($value) ? $this->latin1 ($value) : $value;

        $this->Handle->set ($iter, $column, $_value);
    }

    public function Swap (TTreeIter $iter1, TTreeIter $iter2)
    {
        $this->Handle->swap ($iter1, $iter2);
    }

    public function SetColumnTypes (array $columnTypes)
    {
        $this->Handle->set_column_types ($this->_column_types = $columnTypes);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'ColumnTypes': { $result = $this->GetColumnTypes (); break; }
        default:            { $result = parent::__get ($var);            }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'ColumnTypes': { $this->SetColumnTypes ($val); break; }
        default:            { parent::__set ($var, $val);          }
        }
    }
}

