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
 * Class TIconView
 *
 * @property int            $ColumnSpacing
 * @property int            $Columns
 * @property int            $ItemWidth
 * @property int            $Margin
 * @property int            $MarkupColumn
 * @property TTreeModel     $Model
 * @property TOrientation   $Orientation
 * @property int            $PixbufColumn
 * @property int            $RowSpacing
 * @property TSelectionMode $SelectionMode
 * @property int            $Spacing
 * @property int            $TextColumn
 *
 * @property string|array $OnActivateCursorItem
 * @property string|array $OnItemActivated
 * @property string|array $OnMoveCursor
 * @property string|array $OnSelectAll
 * @property string|array $OnSelectCursorItem
 * @property string|array $OnSelectionChanged
 * @property string|array $OnSetScrollAdjustments
 * @property string|array $OnToggleCursorItem
 * @property string|array $OnUnselectAll
 */
class TIconView extends TContainer
{
    /**
     * Events
     */
    public function __construct ()
    {
        parent::__construct ();

        $this->Handle = new GtkIconView ();
    }

    /**
     * Methods
     */
    public function GetColumnSpacing ()
    {
        return $this->Handle->get_column_spacing ();
    }

    public function GetColumns ()
    {
        return $this->Handle->get_columns ();
    }

    public function GetItemWidth ()
    {
        return $this->Handle->get_item_width ();
    }

    public function GetMargin ()
    {
        return $this->Handle->get_margin ();
    }

    public function GetMarkupColumn ()
    {
        return $this->Handle->get_markup_column ();
    }

    public function GetModel ()
    {
        return $this->Handle->get_model ();
    }

    public function GetOrientation ()
    {
        return $this->Handle->get_orientation ();
    }

    public function GetPathAtPos (int $x, int $y)
    {
        return $this->Handle->get_path_at_pos ($x, $y);
    }

    public function GetPixbufColumn ()
    {
        return $this->Handle->get_pixbuf_column ();
    }

    public function GetRowSpacing ()
    {
        return $this->Handle->get_row_spacing ();
    }

    public function GetSelectedItems ()
    {
        return $this->Handle->get_selected_items ();
    }

    public function GetSelectionMode ()
    {
        return $this->Handle->get_selection_mode ();
    }

    public function GetSpacing ()
    {
        return $this->Handle->get_spacing ();
    }

    public function GetTextColumn ()
    {
        return $this->Handle->get_text_column ();
    }

    public function ItemActivated (TTreePath $path)
    {
        $this->Handle->item_activated ($path);
    }

    public function PathIsSelect (TTreePath $path)
    {
        return $this->Handle->path_is_select ($path);
    }

    public function SelectAll ()
    {
        $this->Handle->select_all ();
    }

    public function SelectPath (TTreePath $path)
    {
        $this->Handle->select_path ($path);
    }

    public function SetColumnSpacing (int $column_spacing)
    {
        $this->Handle->set_column_spacing ($column_spacing);
    }

    public function SetColumns (int $columns)
    {
        $this->Handle->set_columns ($columns);
    }

    public function SetItemWidth (int $item_width)
    {
        $this->Handle->set_item_width ($item_width);
    }

    public function SetMargin (int $margin)
    {
        $this->Handle->set_margin ($margin);
    }

    public function SetMarkupColumn (int $column)
    {
        $this->Handle->set_markup_column ($column);
    }

    public function SetModel (TTreeStore $model)
    {
        $this->Handle->set_model ($model->Handle);
    }

    public function SetOrientation (TOrientation $orientation)
    {
        $this->Handle->set_orientation ($orientation);
    }

    public function SetPixbufColumn (int $column)
    {
        $this->Handle->set_pixbuf_column ($column);
    }

    public function SetRowSpacing (int $row_spacing)
    {
        $this->Handle->set_row_spacing ($row_spacing);
    }

    public function SetSelectionMode (TSelectionMode $mode)
    {
        $this->Handle->set_selection_mode ($mode);
    }

    public function SetSpacing (int $spacing)
    {
        $this->Handle->set_spacing ($spacing);
    }

    public function SetTextColumn (int $column)
    {
        $this->Handle->set_text_column ($column);
    }

    public function UnselectAll ()
    {
        $this->Handle->unselect_all ();
    }

    public function UnselectPath (TTreePath $path)
    {
        $this->Handle->unselect_path ($path);
    }

    public function SelectedForeach (callback $calback)
    {
        $this->Handle->selected_foreach ($callback);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'ColumnSpacing': { $result = $this->GetColumnSpacing (); break; }
        case 'Columns':       { $result = $this->GetColumns ();       break; }
        case 'ItemWidth':     { $result = $this->GetItemWidth ();     break; }
        case 'Margin':        { $result = $this->GetMargin ();        break; }
        case 'MarkupColumn':  { $result = $this->GetMarkupColumn ();  break; }
        case 'Model':         { $result = $this->GetModel ();         break; }
        case 'Orientation':   { $result = $this->GetOrientation ();   break; }
        case 'PixbufColumn':  { $result = $this->GetPixbufColumn ();  break; }
        case 'RowSpacing':    { $result = $this->GetRowSpacing ();    break; }
        case 'SelectedItems': { $result = $this->GetSelectedItems (); break; }
        case 'SelectionMode': { $result = $this->GetSelectionMode (); break; }
        case 'Spacing':       { $result = $this->GetSpacing ();       break; }
        case 'TextColumn':    { $result = $this->GetTextColumn ();    break; }
        default:              { $result = parent::__get ($var);              }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'ColumnSpacing': { $this->SetColumnSpacing ($val); break; }
        case 'Columns':       { $this->SetColumns ($val);       break; }
        case 'ItemWidth':     { $this->SetItemWidth ($val);     break; }
        case 'Margin':        { $this->SetMargin ($val);        break; }
        case 'MarkupColumn':  { $this->SetMarkupColumn ($val);  break; }
        case 'Model':         { $this->SetModel ($val);         break; }
        case 'Orientation':   { $this->SetOrientation ($val);   break; }
        case 'PixbufColumn':  { $this->SetPixbufColumn ($val);  break; }
        case 'RowSpacing':    { $this->SetRowSpacing ($val);    break; }
        case 'SelectionMode': { $this->SetSelectionMode ($val); break; }
        case 'Spacing':       { $this->SetSpacing ($val);       break; }
        case 'TextColumn':    { $this->SetTextColumn ($val);    break; }
        default:              { parent::__set ($var, $val);            }
        }
    }
}

