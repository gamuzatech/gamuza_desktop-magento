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
 * Class TTreeView
 *
 * @property callback           $ColumnDragFunction
 * @property array              $Cursor
 * @property array              $CursorOnCell
 * @property array              $DragDestRow
 * @property bool               $EnableSearch
 * @property bool               $EnableTreeLines
 * @property TTreeViewColumn    $ExpanderColumn
 * @property bool               $FixedHeightMode
 * @property TTreeViewGridLines $GridLines
 * @property TAdjustment        $HAdjustment
 * @property bool               $HeadersClickable
 * @property bool               $HeadersVisible
 * @property bool               $HoverExpand
 * @property bool               $HoverSelection
 * @property TTreeModel         $Model
 * @property bool               $Reorderable
 * @property callback           $RowSeparatorFunc
 * @property bool               $RubberBranding
 * @property bool               $RulesHint
 * @property int                $SearchColumn
 * @property callback           $SearchEqualFunc
 * @property TEntry             $SearchEntry
 * @property TAdjustment        $VAdjustment
 *
 * @property string|array $OnColumnsChanged;
 * @property string|array $OnCursorChanged;
 * @property string|array $OnExpandCollapseCursorRow;
 * @property string|array $OnMoveCursor;
 * @property string|array $OnRowActivated;
 * @property string|array $OnRowCollapsed;
 * @property string|array $OnRowExpanded;
 * @property string|array $OnSelectAll;
 * @property string|array $OnSelectCursorParent;
 * @property string|array $OnSelectCursorRow;
 * @property string|array $OnSetScrollAdjustments;
 * @property string|array $OnStartInteractiveSearch;
 * @property string|array $OnTestCollapseRow;
 * @property string|array $OnTextExpandRow;
 * @property string|array $OnToggleCursorRow;
 * @property string|array $OnUnselectAll;
 */
class TTreeView extends TContainer
{
    protected $_model;
    protected $_selection;

    /**
     * Events
     */
    public function __construct (/* [ TTreeModel $model ] */)
    {
        parent::__construct ();

        $this->Handle = new GtkTreeView ( /* $model */ );

        $this->_selection = new TTreeSelection ();
        $this->_selection->Handle = $this->Handle->get_selection ();
    }

    /**
     * Methods
     */
    public function AppendColumn (TTreeViewColumn $column)
    {
        return $this->Handle->append_column ($column->Handle);
    }

    public function CollapseAll ()
    {
        $this->Handle->collapse_all ();
    }

    public function CollapseRow (array $path)
    {
        $this->Handle->collapse_row ($path);
    }

    public function ColumnsAutosize ()
    {
        $this->Handle->columns_autosize ();
    }

    public function CreateRowDragIcon (array $path)
    {
        $this->Handle->create_row_drag_icon ($path);
    }

    public function EnableModelDragDest (TTargetEntry $targets, int $n_targets, GdkDragAction $actions)
    {
        $this->Handle->enable_model_drag_dest ($targets, $n_targets, $actions);
    }

    public function EnableModelDragSource (GdkModifierType $start_button_mask, TTargetEntry $targets, int $n_targets, GdkDragAction $actions)
    {
        $this->Handle->enable_model_drag_source ($start_button_mask, $targets, $n_targets, $actions);
    }

    public function ExpandAll ()
    {
        $this->Handle->expand_all ();
    }

    public function ExpandRow (TTreePath $path, bool $open_all)
    {
        return $this->Handle->expand_row ($path, $open_all);
    }

    public function ExpandToPath (TTreePath $path)
    {
        $this->Handle->expand_to_path ($path);
    }

    public function GetBackgroundArea (TTreePath $path, TTreeViewColumn $column)
    {
        $this->Handle->get_background_area ($path, $column->Handle);
    }

    public function GetBinWindow ()
    {
        return $this->Handle->get_bin_window ();
    }

    public function GetCellArea (TTreePath $path, TTreeViewColumn $column)
    {
        $this->Handle->get_cell_area ($path, $column->Handle);
    }

    public function GetColumn (int $number)
    {
        $column = $this->Handle->get_column ($number);

        return $column->get_data ('__gobject');
    }

    public function GetColumns ()
    {
        return $this->Handle->get_columns ();
    }

    public function GetCursor ()
    {
        return $this->Handle->get_cursor ();
    }

    public function GetDestRowAtPos (int $x, int $y)
    {
        return $this->Handle->get_dest_row_at_pos ($x, $y);
    }

    public function GetDragDestRow (TTreePath $path, TTreeViewDropPosition $pos)
    {
        $this->Handle->get_drag_dest_row ($path, $pos);
    }

    public function GetEnableSearch ()
    {
        return $this->Handle->get_enable_search ();
    }

    public function GetEnableTreeLines ()
    {
        return $this->Handle->get_enable_tree_lines ();
    }

    public function GetExpanderColumn ()
    {
        return $this->Handle->get_expander_column ();
    }

    public function GetFixedHeightMode ()
    {
        return $this->Handle->get_fixed_height_mode ();
    }

    public function GetGridLines ()
    {
        return $this->Handle->get_grid_lines ();
    }

    public function GetHAdjustments ()
    {
        return $this->Handle->get_adjustments ();
    }

    public function GetHeadersClickable ()
    {
        return $this->Handle->get_headers_clickable ();
    }

    public function GetHeadersVisible ()
    {
        return $this->Handle->get_headers_visible ();
    }

    public function GetHoverExpand ()
    {
        return $this->Handle->get_hover_expand ();
    }

    public function GetHoverSelection ()
    {
        return $this->Handle->get_hover_selection ();
    }

    public function GetModel ()
    {
        return $this->_model;
    }

    public function GetPathAtPos (int $x, int $y)
    {
        return $this->Handle->get_path_at_pos ($x, $y);
    }

    public function GetReorderable ()
    {
        return $this->Handle->get_reorderable ();
    }

    public function GetRubberBranding ()
    {
        return $this->Handle->get_rubber_branding ();
    }

    public function GetRulesHint ()
    {
        return $this->Handle->get_rules_hint ();
    }

    public function GetSearchColumn ()
    {
        return $this->Handle->get_search_column ();
    }

    public function GetSearchEntry ()
    {
        return $this->Handle->get_search_entry ();
    }

    public function GetSelection ()
    {
        return $this->_selection;
    }

    public function GetVAdjustments ()
    {
        return $this->Handle->get_vadjustments ();
    }

    public function GetVisibleRange (TTreePath $start_path, TTreePath $end_path)
    {
        return $this->Handle->get_visible_range ($start_path, $end_path);
    }

    public function GetVisibleRect (GdkRectangle $visible_rect)
    {
        return $this->Handle->get_visible_rect ($visible_rect);
    }

    public function InsertColumn (TTreeViewColumn $column, int $position)
    {
        return $this->Handle->insert_column ($column->Handle, $position);
    }

    public function InsertColumnWithDataFunc (int $position, string $title, TCellRenderer $cell_renderer, callback $callback)
    {
        return $this->Handle->insert_column_with_data_func ($position, $title, $cell_renderer, $callback);
    }

    public function MoveColumnAfter (TTreeViewColumn $column, TTreeViewColumn $base_column)
    {
        $this->Handle->move_column_after ($column->Handle, $base_column->Handle);
    }

    public function RemoveColumn (TTreeViewColumn $column)
    {
        return $this->Handle->remove_column ($column->Handle);
    }

    public function RowActivated (TTreePath $path, TTreeViewColumn $column)
    {
        $this->Handle->row_activated ($path, $column->Handle);
    }

    public function RowExpanded (TTreePath $path)
    {
        return $this->Handle->row_expanded ($path);
    }

    public function ScrollToCell (TTreePath $path, TTreeViewColumn $column, bool $use_align, float $row_align, float $col_align)
    {
        $this->Handle->scroll_to_cell ($path, $column->Handle, $use_align, $row_align, $col_align);
    }

    public function ScrollToPoint (int $tree_x, int $tree_y)
    {
        $this->Handle->scroll_to_point ($tree_x, $tree_y);
    }

    public function SelectFirstLine ()
    {
        $this->Selection->SelectPath ('0');
    }

    public function SetColumnDragFunction (callback $callback)
    {
        $this->Handle->set_column_drag_function ($callback);
    }

    public function SetCursor (TTreePath $path, TTreeViewColumn $focus_column, bool $start_editing)
    {
        $this->Handle->set_cursor ($path, $focus_column, $start_editing);
    }

    public function SetCursorOnCell (TTreePath $path, TTreeViewColumn $focus_column, TCellRenderer $focus_cell, bool $start_editing)
    {
        $this->Handle->set_cursor ($path, $focus_column, $focus_cell, $start_editing);
    }

    public function SetDragDestRow (TTreePath $path, TTreeViewDropPosition $pos)
    {
        $this->Handle->set_drag_dest_row ($path, $pos);
    }

    public function SetEnableSearch (bool $enable_search)
    {
        $this->Handle->set_enable_search ($enable_search);
    }

    public function SetEnableTreeLines ($enabled)
    {
        $this->Handle->set_enable_tree_lines ($enabled);
    }

    public function SetExpanderColumn (TTreeViewColumn $column)
    {
        $this->Handle->set_expander_column ($column->Handle);
    }

    public function SetFixedHeightMode (bool $enabled)
    {
        $this->Handle->set_fixed_height_mode ($enabled);
    }

    public function SetGridLines (TTreeViewGridLines $grid_lines)
    {
        $this->Handle->set_grid_lines ($grid_lines);
    }

    public function SetHAdjustment (TAdjustment $adjustment)
    {
        $this->Handle->set_hadjustment ($adjustment->Handle);
    }

    public function SetHeadersClickable (bool $active)
    {
        $this->Handle->set_headers_clickable ($active);
    }

    public function SetHeadersVisible (bool $headers_visible)
    {
        $this->Handle->set_headers_visible ($headers_visible);
    }

    public function SetHoverExpand (bool $expand)
    {
        $this->Handle->set_hover_expand ($expand);
    }

    public function SetHoverSelection (bool $hover)
    {
        $this->Handle->set_hover_selection ($hover);
    }

    public function SetModel (TTreeModel $model)
    {
        $this->_model = $model;

        $this->Handle->set_model ($this->_model->Handle);
    }

    public function SetReorderable (bool $reorderable)
    {
        $this->Handle->set_reorderable ($reorderable);
    }

    public function SetRowSeparatorFunc (callback $callback)
    {
        $this->Handle->set_row_separator_func ($callback);
    }

    public function SetRubberBranding (bool $enable)
    {
        $this->Handle->set_rubber_branding ($enable);
    }

    public function SetRulesHint (bool $setting)
    {
        $this->Handle->set_rules_hint ($setting);
    }

    public function SetSearchColumn (int $column)
    {
        $this->Handle->set_search_column ($column);
    }

    public function SetSearchEqualFunc (callback $callback)
    {
        $this->Handle->set_search_equal_func ($callback);
    }

    public function SetSearchEntry (TEntry $entry)
    {
        $this->Handle->set_search_entry ($entry->Handle);
    }

    public function SetVAdjustment (TAdjustment $adjustment)
    {
        $this->Handle->set_vadjustment ($adjustment->Handle);
    }

    public function TreeToWidgetCoords (int $tx, int $ty, int $wx, int $wy)
    {
        $this->Handle->tree_to_widget_coords ($tx, $ty, $wx, $wy);
    }

    public function UnsetRowsDragDest ()
    {
        $this->Handle->unset_rows_drag_dest ();
    }

    public function UnsetRowsDragSource ()
    {
        $this->Handle->unset_rows_drag_source ();
    }

    public function WidgetToTreeCoords (int $wx, int $wy, int $tx, int $ty)
    {
        $this->Handle->widget_to_tree_coords ($wx, $wy, $tx, $ty);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'BinWindow':        { $result = $this->GetBinWindow ();        break; }
        case 'Columns':          { $result = $this->GetColumns ();          break; }
        case 'Cursor':           { $result = $this->GetCursor ();           break; }
        case 'EnableSearch':     { $result = $this->GetEnableSearch ();     break; }
        case 'EnableTreeLines':  { $result = $this->GetEnableTreeLines ();  break; }
        case 'ExpanderColumn':   { $result = $this->GetExpanderColumn ();   break; }
        case 'FixedHeightMode':  { $result = $this->GetFixedHeightMode ();  break; }
        case 'GridLines':        { $result = $this->GetGridLines ();        break; }
        case 'HAdjustments':     { $result = $this->GetHAdjustments ();     break; }
        case 'HeadersClickable': { $result = $this->GetHeadersClickable (); break; }
        case 'HeadersVisible':   { $result = $this->GetHeadersVisible ();   break; }
        case 'HoverExpand':      { $result = $this->GetHoverExpand ();      break; }
        case 'HoverSelection':   { $result = $this->GetHoverSelection ();   break; }
        case 'Model':            { $result = $this->GetModel ();            break; }
        case 'Reorderable':      { $result = $this->GetReorderable ();      break; }
        case 'RubberBranding':   { $result = $this->GetRubberBranding ();   break; }
        case 'RulesHint':        { $result = $this->GetRulesHint ();        break; }
        case 'SearchColumn':     { $result = $this->GetSearchColumn ();     break; }
        case 'SearchEntry':      { $result = $this->GetSearchEntry ();      break; }
        case 'Selection':        { $result = $this->GetSelection ();        break; }
        case 'VAdjustments':     { $result = $this->GetVAdjustments ();     break; }
        default:                 { $result = parent::__get ($var);                 }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'ColumnDragFuncion': { $this->SetColumnDragFunction ($val); break; }
        case 'Cursor':
        {
            list ($path, $focus_column, $start_editing) = $val;

            $this->SetCursor ($path, $focus_column, $start_editing);

            break;
        }
        case 'CursorOnCell':
        {
            list ($path, $focus_column, $start_editing) = $val;

            $this->SetCursor ($path, $focus_column, $start_editing);

            break;
        }
        case 'DragDestRow':
        {
            list ($path, $pos) = $val;

            $this->SetDragDestRow ($path, $pos);

            break;
        }

        case 'EnableSearch':      { $this->SetEnableSearch ($val);      break; }
        case 'EnableTreeLines':   { $this->SetEnableTreeLines ($val);   break; }
        case 'ExpanderColumn':    { $this->SetExpanderColumn ($val);    break; }
        case 'FixedHeightMode':   { $this->SetFixedHeightMode ($val);   break; }
        case 'GridLines':         { $this->SetGridLines ($val);         break; }
        case 'HAdjustment':       { $this->SetHAdjustment ($val);       break; }
        case 'HeadersClickable':  { $this->SetHeadersClickable ($val);  break; }
        case 'HeadersVisible':    { $this->SetHeadersVisible ($val);    break; }
        case 'HoverExpand':       { $this->SetHoverExpand ($val);       break; }
        case 'HoverSelection':    { $this->SetHoverSelection ($val);    break; }
        case 'Model':             { $this->SetModel ($val);             break; }
        case 'Reorderable':       { $this->SetReorderable ($val);       break; }
        case 'RowSeparatorFunc':  { $this->SetRowSeparatorFunc ($val);  break; }
        case 'RubberBranding':    { $this->SetRubberBranding ($val);    break; }
        case 'RuleHint':          { $this->SetRulesHint ($val);         break; }
        case 'SearchColumn':      { $this->SetSearchColumn ($val);      break; }
        case 'SearchEqualFunc':   { $this->SetSearchEqualFunc ($val);   break; }
        case 'SearchEntry':       { $this->SetSearchEntry ($val);       break; }
        default:                  { parent::__set ($var, $val);                }
        }
    }
}

