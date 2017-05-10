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
 * Class TTextMark
 *
 * @property bool $Visible
 */
abstract class TTextMark extends System\TObject
{
    /**
     * Methods
     */
    public function GetBuffer ()
    {
        return $this->Handle->get_buffer ();
    }

    public function GetDeleted ()
    {
        return $this->Handle->get_deleted ();
    }

    public function GetLeftGravity ()
    {
        return $this->Handle->get_left_gravity ();
    }

    public function GetName ()
    {
        return $this->Handle->get_name ();
    }

    public function GetVisible ()
    {
        return $this->Handle->get_visible ();
    }

    public function SetVisible (bool $visible)
    {
        $this->Handle->set_visible ($visible);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Buffer':      { $result = $this->GetBuffer ();      break; }
        case 'Deleted':     { $result = $this->GetDeleted ();     break; }
        case 'LeftGravity': { $result = $this->GetLeftGravity (); break; }
        case 'Name':        { $result = $this->GetName ();        break; }
        case 'Visible':     { $result = $this->GetVisible ();     break; }
        default:            { $result = parent::__get ($var);            }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Visible': { $this->SetVisible ($val);   break; }
        default:        { parent::__set ($var, $val);        }
        }
    }
}

