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
 * Class TTreeModelSort
 *
 * @property int      $VisibleColumn
 * @property callback $VisibleFunc
 *
 */
class TTreeModelSort extends System\TObject
{
    use TTreeModel;
    use TTreeSortable;

    /**
     * Events
     */
    public function __construct (TTreeModel $model = null)
    {
        parent::__construct ();

        $this->Handle = new GtkTreeModelSort ($model);
    }

    /**
     * Methods
     */
    public function ClearCache ()
    {
        $this->Handle->clear_cache ();
    }

    public function ConvertChildIterToIter (TTreeIter $child_iter)
    {
        return $this->Handle->convert_child_iter_to_iter ($child_iter);
    }

    public function ConvertChildPathToPath (TTreePath $child_path)
    {
        return $this->Handle->convert_child_path_to_path ($child_path);
    }

    public function ConvertIterToChildIter (TTreeIter $filter_iter)
    {
        return $this->Handle->convert_iter_to_child_iter ($filter_iter);
    }

    public function ConvertPathToChildPath (TTreePath $filter_path)
    {
        return $this->Handle->convert_path_to_child_path ($filter_path);
    }

    public function GetModel ()
    {
        return $this->Handle->get_model ();
    }

    public function IterIsValid (TTreeIter $iter)
    {
        return $this->Handle->iter_is_valid ($iter);
    }

    public function ResetDefaultSortFunc ()
    {
        $this->Handle->reset_default_sort_func ();
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Model': { $result = $this->GetModel ();   break; }
        default:      { $result = parent::__get ($var);        }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'VisibleColumn': { $this->SetVisibleColumn ($val); break; }
        case 'VisibleFunc':   { $this->SetVisibleFunc ($val);   break; }
        default:              { parent::__set ($var, $val);            }
        }
    }
}

