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
 * Class GamuzaComboBoxText
 */
class GamuzaComboBoxText extends GtkComboBoxText
{
    public function __construct (GtkTreeModel $model = null)
    {
        if (!empty ($model))
        {
            return call_user_func ('parent::__construct', $model);
        }

        parent::__construct ();
    }
}

/**
 * Class TComboBoxText
 *
 * @property string $ActiveText
 */
class TComboBoxText extends TComboBox
{
    use TCellLayout;

    /**
     * Events
     */
    public function __construct (TTreeModel $model = null)
    {
        parent::__construct ();

        $this->Handle = new GamuzaComboBoxText ($model ? $model->Handle : null);
    }

    /**
     * Methods
     */
    public static function NewText ()
    {
        return GtkComboBoxText::new_text ();
    }

    public static function NewWithModel (TTreeModel $model, $text_column)
    {
        return GtkComboBoxText::new_with_model ($model->Handle, text_column);
    }

    public function AppendText (string $text)
    {
        $this->Handle->append_text ($text);
    }

    public function GetActiveText ()
    {
        return $this->Handle->get_active_text ();
    }

    public function InsertText (int $position, string $text)
    {
        $this->Handle->insert_text ($position, $text);
    }

    public function PrependText (string $text)
    {
        $this->Handle->prepend_text ($text);
    }

    public function Remove (int $position)
    {
        $this->Handle->remove ($position);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
            case 'ActiveText': { $result = $this->GetActiveText (); break; }
            default:           { $result = parent::__get ($var);           }
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

