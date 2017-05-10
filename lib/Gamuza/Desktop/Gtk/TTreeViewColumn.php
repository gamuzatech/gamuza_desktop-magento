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
 * Class TTreeViewColumn
 *
 * @property double                $Aligment
 * @property array                 $Attributes
 * @property array                 $CellDataFunc
 * @property bool                  $Clickable
 * @property bool                  $Expand
 * @property int                   $FixedWidth
 * @property int                   $MaxWidth
 * @property int                   $MinWidth
 * @property bool                  $Reorderable
 * @property bool                  $Resizable
 * @property TTreeViewColumnSizing $Sizing
 * @property int                   $SortColumnId
 * @property bool                  $SortIndicator
 * @property TSortType             $SortOrder
 * @property int                   $Spacing
 * @property string                $Title
 * @property bool                  $Visible
 * @property TWidget               $Widget
 *
 * @property string|array $OnClicked
 */
class TTreeViewColumn extends TObject
{
    use TCellLayout;

    /**
     * Events
     */
    public function __construct (/* [ string title [, TCellRenderer $cell_renderer [, string $attribute [, int $column ]]]] */)
    {
        parent::__construct ();

        $this->Handle = new GtkTreeViewColumn ();
    }

    /**
     * Methods
     */
    public function CellGetPosition (TCellRenderer $cell_renderer)
    {
        return $this->Handle->cell_get_position ($cell_renderer->Handle);
    }

    public function CellGetSize (TCellRenderer $cell_size)
    {
        return $this->Handle->cell_get_size ($cell_size->Handle);
    }

    public function CellIsVisible ()
    {
        return $this->Handle->cell_is_visible ();
    }

    public function CellSetCellData (TTreeModel $tree_model, TTreeIter $iter, bool $is_expander, bool $is_expanded)
    {
        $this->Handle->cell_set_cell_data ($tree_model, $iter, $is_expander, $is_expanded);
    }

    public function Clicked ()
    {
        $this->Handle->clicked ();
    }

    public function FocusCell (TCellRenderer $cell)
    {
        $this->Handle->focus_cell ($cell->Handle);
    }

    public function GetAlignment ()
    {
        return $this->Handle->get_alignment ();
    }

    public function GetCellRenderers ()
    {
        return $this->Handle->get_cell_renderers ();
    }

    public function GetClickable ()
    {
        return $this->Handle->get_clickable ();
    }

    public function GetExpand ()
    {
        return $this->Handle->get_expand ();
    }

    public function GetFixedWidth ()
    {
        return $this->Handle->get_fixed_width ();
    }

    public function GetMaxWidth ()
    {
        return $this->Handle->get_max_width ();
    }

    public function GetMinWidth ()
    {
        return $this->Handle->get_min_width ();
    }

    public function GetReorderable ()
    {
        return $this->Handle->get_reorderable ();
    }

    public function GetResizable ()
    {
        return $this->Handle->get_resizable ();
    }

    public function GetSizing ()
    {
        return $this->Handle->get_sizing ();
    }

    public function GetSortColumnId ()
    {
        return $this->Handle->get_sort_column_id ();
    }

    public function GetSortIndicator ()
    {
        return $this->Handle->get_sort_indicator ();
    }

    public function GetSortOrder ()
    {
        return $this->Handle->get_sort_order ();
    }

    public function GetSpacing ()
    {
        return $this->Handle->get_spacing ();
    }

    public function getTitle ()
    {
        return $this->Handle->get_title ();
    }

    public function GetVisible ()
    {
        return $this->Handle->get_visible ();
    }

    public function GetWidget ()
    {
        $widget = $this->Handle->get_widget ();

        if (is_object ($widget))
        {
            return $widget->get_data ('__gobject');
        }
    }

    public function GetWidth ()
    {
        return $this->Handle->get_width ();
    }
    /*
    public function PackStart ($child)
    {
        $this->Handle->pack_start ($child->Handle);
    }
    */
    public function SetAlignment (double $xalign)
    {
        $this->Handle->set_alignment ($xalign);
    }

    public function SetAttributes (TCellRenderer $cell_renderer, $attribute, $column)
    {
        $this->Handle->set_attributes ($cell_renderer->Handle, $attribute, $column);
    }

    public function SetCellDataFunc (TCellRenderer $renderer, $func, $user_data = null)
    {
        $this->Handle->set_cell_data_func ($renderer->Handle, $func, $user_data);
    }

    public function SetClickable ($value)
    {
        $this->Handle->set_clickable ($value);
    }

    public function SetExpand (bool $expand)
    {
        $this->Handle->set_expand ($expand);
    }

    public function SetFixedWidth (int $fixed_width)
    {
        $this->Handle->set_fixed_width ($fixed_width);
    }

    public function SetMaxWidth (int $max_width)
    {
        $this->Handle->set_max_width ($max_width);
    }

    public function SetMinWidth (int $min_width)
    {
        $this->Handle->set_min_width ($min_width);
    }

    public function SetReorderable (bool $reorderable)
    {
        $this->Handle->set_reorderable ($reorderable);
    }

    public function SetResizable (bool $resizable)
    {
        $this->Handle->set_resizable ($resizable);
    }

    public function SetSizing (TTreeViewColumnSizing $type)
    {
        $this->Handle->set_sizing ($type);
    }

    public function SetSortColumnId (int $sort_column_id)
    {
        $this->Handle->set_sort_column_id ($sort_column_id);
    }

    public function SetSortIndicator (bool $setting)
    {
        $this->Handle->set_sort_indicator ($setting);
    }

    public function SetSortOrder (TSortType $order)
    {
        $this->Handle->set_sort_order ($order);
    }

    public function SetSpacing (int $spacing)
    {
        $this->Handle->set_spacing ($spacing);
    }

    public function SetTitle ($title)
    {
        $this->Handle->set_title ($this->latin1 ($title));
    }

    public function SetVisible (bool $visible)
    {
        $this->Handle->set_visible ($visible);
    }

    public function SetWidget (TWidget $widget)
    {
        $this->Handle->set_widget ($widget->Handle);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'CellIsVisible': { $result = $this->GetCellIsVisible (); break; }
        case 'Alignment':     { $result = $this->GetAlignment ();     break; }
        case 'CellRenderers': { $result = $this->GetCellRenderers (); break; }
        case 'Clickable':     { $result = $this->GetClickable ();     break; }
        case 'Expand':        { $result = $this->GetExpand ();        break; }
        case 'FixedWidth':    { $result = $this->GetFixedWidth ();    break; }
        case 'MaxWidth':      { $result = $this->GetMaxWidth ();      break; }
        case 'MinWidth':      { $result = $this->GetMinWidth ();      break; }
        case 'Reorderable':   { $result = $this->GetReorderable ();   break; }
        case 'Resizable':     { $result = $this->GetResizable ();     break; }
        case 'Sizing':        { $result = $this->GetSizing ();        break; }
        case 'SortColumnId':  { $result = $this->GetSortColumnId ();  break; }
        case 'SortIndicator': { $result = $this->GetSortIndicator (); break; }
        case 'SortOrder':     { $result = $this->GetSortOrder ();     break; }
        case 'Spacing':       { $result = $this->GetSpacing ();       break; }
        case 'Title':         { $result = $this->GetTitle ();         break; }
        case 'Visible':       { $result = $this->GetVisible ();       break; }
        case 'Widget':        { $result = $this->GetWidget ();        break; }
        case 'Width':         { $result = $this->GetWidth ();         break; }
        default:              { $result = parent::__get ($var);              }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Alignment':     { $this->SetAlignment ($val);     break; }
        case 'Clickable':     { $this->SetClickable ($val);     break; }
        case 'Expand':        { $this->SetExpand ($val);        break; }
        case 'FixedWidth':    { $this->SetFixedWidth ($val);    break; }
        case 'MaxWidth':      { $this->SetMaxWidth ($val);      break; }
        case 'MinWidth':      { $this->SetMinWidth ($val);      break; }
        case 'Reorderable':   { $this->SetReorderable ($val);   break; }
        case 'Resizable':     { $this->SetResizable ($val);     break; }
        case 'Sizing':        { $this->SetSizing ($val);        break; }
        case 'SortColumnId':  { $this->SetSortColumnId ($val);  break; }
        case 'SortIndicator': { $this->SetSortIndicator ($val); break; }
        case 'SortOrder':     { $this->SetSortOrder ($val);     break; }
        case 'Spacing':       { $this->SetSpacing ($val);       break; }
        case 'Title':         { $this->SetTitle ($val);         break; }
        case 'Visible':       { $this->SetVisible ($val);       break; }
        case 'Widget':        { $this->SetWidget ($val);        break; }
        default:              { parent::__set ($var, $val);            }
        }
    }
}

