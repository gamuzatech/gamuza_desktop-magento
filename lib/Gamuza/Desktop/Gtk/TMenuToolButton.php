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
 * Class TMenuToolButton
 *
 * @property TWidget $Menu
 *
 * @property string|array $OnShowMenu;
 */
class TMenuToolButton extends TToolButton
{
    /**
     * Events
     */
    public function __construct (/* [TWidget $icon_widget = null [, string $label = null]]) */)
    {
        parent::__construct ();

        $this->Handle = new GtkToolButton (/* $icon_widget->Handle, $label */);
    }

    /**
     * Methods
     */
    public function GetMenu ()
    {
        return $this->Handle->get_menu ();
    }

    public function SetArrowTooltip (TTooltips $tooltips, string $tip_text, string $tip_private = null)
    {
        $this->Handle->set_arrow_tooltip ($tooltips, $tip_text, $tip_private);
    }

    public function SetMenu (TWidget $menu)
    {
        $this->Handle->set_menu ($menu->Handle);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Menu': { $result = $this->GetMenu ();    break; }
        default:     { $result = parent::__get ($var);        }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Menu': { $this->SetMenu ($val);      break; }
        default:     { parent::__set ($var, $val);        }
        }
    }
}

