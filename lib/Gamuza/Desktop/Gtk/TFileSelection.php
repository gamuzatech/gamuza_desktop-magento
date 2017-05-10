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
 * Class TFileSelection
 *
 * @property string $Filename
 * @property bool   $SelectMultiple
 */
class TFileSelection extends TDialog
{
    /**
     * Events
     */
    public function __construct (string $title = null)
    {
        parent::__construct ();

        $this->Handle = new GtkFileSelection ($title);
    }

    /**
     * Methods
     */
    public function Complete (string $pattern)
    {
        $this->Handle->complete ($pattern);
    }

    public function GetFilename ()
    {
        return $this->Handle->get_filename ();
    }

    public function GetSelectMultiple ()
    {
        return $this->Handle->get_select_multiple ();
    }

    public function GetSelections ()
    {
        return $this->Handle->get_selections ();
    }

    public function HideFileopButtons ()
    {
        $this->Handle->hide_fileop_buttons ();
    }

    public function SetFilename (string $filename)
    {
        $this->Handle->set_filename ($filename);
    }

    public function SetSelectMultiple (bool $select_multiple)
    {
        $this->Handle->set_select_multiple ($select_multiple);
    }

    public function ShowFileopButtons ()
    {
        $this->Handle->show_fileop_buttons ();
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Filename':       { $result = $this->GetFilename ();       break; }
        case 'SelectMultiple': { $result = $this->GetSelectMultiple (); break; }
        case 'Selections':     { $result = $this->GetSelections ();     break; }
        default:               { $result = parent::__get ($var);               }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Filename':       { $this->SetFilename ($val);       break; }
        case 'SelectMultiple': { $this->SetSelectMultiple ($val); break; }
        default:               { parent::__set ($var, $val);             }
        }
    }
}

