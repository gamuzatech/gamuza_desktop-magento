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
 * Class TComboBox
 *
 * @property int           $Active
 * @property TTreeIter     $ActiveIter
 * @property bool          $AddTearoffs
 * @property array         $Attributes
 * @property int           $ColumnSpanColumn
 * @property bool          $FocusOnClick
 * @property TTreeModel    $Model
 * @property callback      $RowSeparatorFunc
 * @property int           $RowSpanColumn
 * @property int           $WrapWidth
 *
 * @property string|array $OnChanged
 */
class TComboBox extends TBin
{
    use TCellLayout;

    /**
     * Events
     */
    public function __construct (/* TTreeModel $model */)
    {
        parent::__construct ();

        $this->Handle = new GtkComboBox (/* $model->Handle */);
    }

    /**
     * Methods
     */
    public static function NewText ()
    {
        return GtkComboBox::new_text ();
    }

    public function AppendText (string $text)
    {
        $this->Handle->append_text ($text);
    }

    public function GetActive ()
    {
        return $this->Handle->get_active ();
    }

    public function GetActiveIter ()
    {
        return $this->Handle->get_active_iter ();
    }

    public function GetActiveText ()
    {
        return $this->Handle->get_active_text ();
    }

    public function GetColumnSpanColumn ()
    {
        return $this->Handle->get_column_span_column ();
    }

    public function GetModel ()
    {
        $widget = $this->Handle->get_model ();

        return $widget->get_data ('__tobject');
    }

    public function GetPopupAccessible ()
    {
        return $this->Handle->get_popup_accessible ();
    }

    public function GetRowSpanColumn ()
    {
        return $this->Handle->get_row_span_column ();
    }

    public function GetWrapWidth ()
    {
        return $this->Handle->get_wrap_width ();
    }

    public function InsertText (int $position, string $text)
    {
        $this->Handle->insert_text ($position, $text);
    }

    public function PackStart (TCellRenderer $cell_renderer)
    {
        $this->Handle->pack_start ($cell_renderer->Handle);
    }

    public function Popdown ()
    {
        $this->Handle->popdown ();
    }

    public function Popup ()
    {
        $this->Handle->popup ();
    }

    public function PrependText (string $text)
    {
        $this->Handle->prepend_text ($text);
    }

    public function RemoveText (int $position)
    {
        $this->Handle->remove_text ($position);
    }

    public function SetActive (int $index)
    {
        $this->Handle->set_active ($index);
    }

    public function SetActiveIter (TTreeIter $iter)
    {
        $this->Handle->set_active_iter ($iter);
    }

    public function SetAddTearoffs (bool $add_tearoffs)
    {
        $this->Handle->set_add_tearoffs ($add_tearoffs);
    }

    public function SetAttributes (TCellRenderer $cell_renderer, string $attribute, int $column)
    {
        $this->Handle->set_attributes ($cell_renderer->Handle, $attribute, intval ($column));
    }

    public function SetColumnSpanColumn (int $column_span)
    {
        $this->Handle->set_column_span_column ($column_span);
    }

    public function SetFocusOnClick (bool $focus_on_click)
    {
        $this->Handle->set_focus_on_click ($focus_on_click);
    }

    public function SetModel (TTreeModel $model)
    {
        $this->Handle->set_model ($model->Handle);
    }

    public function SetRowSeparatorFunc (callback $callback)
    {
        $this->Handle->set_row_separator_func ($callback);
    }

    public function SetRowSpanColumn (int $row_span)
    {
        $this->Handle->set_row_span_column ($row_span);
    }

    public function SetWrapWidth (int $width)
    {
        $this->Handle->set_wrap_width ($width);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Active':           { $result = $this->GetActive ();           break; }
        case 'ActiveIter':       { $result = $this->GetActiveIter ();       break; }
        case 'ActiveText':       { $result = $this->GetActiveText ();       break; }
        case 'ColumnSpanColumn': { $result = $this->GetColumnSpanColumn (); break; }
        case 'FocusOnClick':     { $result = $this->GetFocusOnClick ();     break; }
        case 'Model':            { $result = $this->GetModel ();            break; }
        case 'PopupAccessible':  { $result = $this->GetPopupAccessible ();  break; }
        case 'RowSpanColumn':    { $result = $this->GetRowSpanColumn ();    break; }
        case 'WrapWidth':        { $result = $this->GetWrapWidth ();        break; }
        default:                 { $result = parent::__get ($var);                 }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Active':           { $this->SetActive ($val);           break; }
        case 'ActiveIter':       { $this->SetActiveIter ($val);       break; }
        case 'AddTearoffs':      { $this->SetAddTearOffs ($val);      break; }
        case 'Attributes':
        {
            list ($cell_renderer, $attribute, $column) = $val;

            $this->SetAttributes ($cell_renderer, $attribute, $column);

            break;
        }
        case 'ColumnSpanColumn': { $this->SetColumnSpanColumn ($val); break; }
        case 'FocusOnClick':     { $this->SetFocusOnClick ($val);     break; }
        case 'Model':            { $this->SetModel ($val);            break; }
        case 'RowSeparatorFunc': { $this->SetRowSeparatorFunc ($val); break; }
        case 'RowSpanColumn':    { $this->SetRowSpanColumn ($val);    break; }
        case 'WrapWidth':        { $this->SetWrapWidth ($val);        break; }
        default:                 { parent::__set ($var, $val);               }
        }
    }
}

