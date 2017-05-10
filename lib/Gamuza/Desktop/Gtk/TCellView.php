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
 * Class TCellView
 *
 * @property GdkColor   $BackgroundColor
 * @property string     $DisplayRow
 * @property TTreeModel $Model
 */
class TCellView extends TWidget
{
    /**
     * Events
     */
    public function __construct ()
    {
        parent::__construct ();

        $this->Handle = new GtkCellView ();
    }

    /**
     * Methods
     */
    public static function NewWithPixbuf (GdkPixbuf $pixbuf)
    {
        return GtkCellView::new_with_pixbuf ($pixbuf);
    }

    public static function NewWithText (string $text)
    {
        return GtkCellView::new_with_text ($text);
    }

    public function GetCellRenderers ()
    {
        return $this->get_cell_renderers ();
    }

    public function GetDisplayedRow ()
    {
        return $this->get_displayed_row ();
    }

    public function GetSizeOfRow (string $path)
    {
        return $this->Handle->get_size_of_row ($path);
    }

    public function SetBackgroundColor (GdkColor $color)
    {
        $this->Handle->set_background_color ($color);
    }

    public function SetDisplayedRow (string $path)
    {
        $this->Handle->set_displayed_row ($path);
    }

    public function SetModel (TTreeModel $model)
    {
        $this->Handle->set_model ($model->Handle);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'CellRenderers': { $result = $this->GetCellRenderers (); break; }
        case 'DisplayedRow':  { $result = $this->GetDisplayedRow ();  break; }
        default:              { $result = parent::__get ($var);              }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'BackgroundColor': { $this->SetBackgroundColor ($val); break; }
        case 'DisplayedRow':    { $this->SetDisplayedRow ($val);    break; }
        case 'Model':           { $this->SetModel ($val);           break; }
        default:             { parent::__set ($var, $val);           }
        }
    }
}

