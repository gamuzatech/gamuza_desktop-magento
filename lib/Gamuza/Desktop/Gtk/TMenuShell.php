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
 * Class TMenuShell
 *
 * @property string|array $OnActivateCurrent
 * @property string|array $OnCancel
 * @property string|array $OnCycleFocus
 * @property string|array $OnDeactivate
 * @property string|array $OnMoveCurrent
 * @property string|array $OnSelectionDone
 */
class TMenuShell extends TContainer
{
    /**
     * Methods
     */
    public function ActivateItem (TWidget $menu_item, bool $force_deactivate)
    {
        $this->Handle->activate_item ($menu_item->Handle, $force_deactivate);
    }

    public function Append (TWidget $child)
    {
        $this->Handle->append ($child->Handle);
    }

    public function Cancel ()
    {
        $this->Handle->cancel ();
    }

    public function Deactivate ()
    {
        $this->Handle->deactivate ();
    }

    public function Deselect ()
    {
        $this->Handle->deselect ();
    }

    public function Insert (TWidget $child, int $position)
    {
        $this->Handle->insert ($child, $position);
    }

    public function Prepend (TWidget $child)
    {
        $this->Handle->prepend ($child->Handle);
    }

    public function SelectFirst (bool $search_sensitive)
    {
        $this->Handle->select_first ($search_sensitive);
    }

    public function SelectItem (TWidget $menu_item)
    {
        $this->Handle->select_item ($menu_item->Handle);
    }
}

