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
 * Class TFileChooserButton
 *
 * @property string $Title
 * @property int    $WidthChars
 */
class TFileChooserButton extends THBox
{
    use TFileChooser;

    /**
     * Events
     */
    public function __construct (/* string */ $title = "", TFileChooserAction $action = fcaOpen)
    {
        parent::__construct ();

        $this->Handle = new GtkFileChooserButton ($title, $action);
    }

    /**
     * Methods
     */
    public static function NewWithBackend (string $title, TFileChooserAction $action, string $backend)
    {
        return GtkFileChooserButton::new_with_backend ($title, $action, $backend);
    }

    public static function NewWithDialog (TWidget $dialog)
    {
        return GtkFileChooserButton::new_with_dialog ($dialog);
    }

    public function GetTitle ()
    {
        return $this->Handle->get_title ();
    }

    public function GetWidthChars ()
    {
        return $this->Handle->get_width_chars ();
    }

    public function SetTitle (string $title)
    {
        $this->Handle->set_title ($title);
    }

    public function SetWidthChars (int $n_chars)
    {
        $this->Handle->set_width_chars ($n_chars);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Title':      { $result = $this->GetTitle ();      break; }
        case 'WidthChars': { $result = $this->GetWidthChars (); break; }
        default:           { $result = parent::__get ($var);           }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Title':      { $this->SetTitle ($val);      break; }
        case 'WidthChars': { $this->SetWidthChars ($val); break; }
        default:           { parent::__set ($var, $val);         }
        }
    }
}

