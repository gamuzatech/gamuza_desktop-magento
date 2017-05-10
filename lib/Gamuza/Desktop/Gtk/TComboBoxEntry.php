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
 * Class TComboBoxEntry
 *
 * @property int $TextColumn
 */
class TComboBoxEntry extends TComboBox
{
    use TCellLayout;

    /**
     * Events
     */
    public function __construct (/* TTreeModel $model = null */)
    {
        parent::__construct ();

        $this->Handle = new GtkComboBoxEntry (/* $model->Handle */);
    }

    /**
     * Methods
     */
    public static function NewText ()
    {
        return GtkComboBoxEntry::new_text ();
    }

    public static function NewWithModel (TTreeModel $model, $text_column)
    {
        return GtkComboBoxEntry::new_with_model ($model->Handle, text_column);
    }

    public function GetTextColumn ()
    {
        return $this->Handle->get_text_column ();
    }

    public function SetTextColumn (int $text_column)
    {
        $this->Handle->set_text_column ($text_column);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'TextColumn': { $result = $this->GetTextColumn (); break; }
        default:           { $result = parent::__get ($var);           }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'TextColumn': { $this->SetTextColumn ($val); break; }
        default:           { parent::__set ($var, $val);         }
        }
    }
}

