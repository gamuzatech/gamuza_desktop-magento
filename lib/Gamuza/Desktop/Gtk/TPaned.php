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
 * Class TPaned
 *
 * @property int $Position
 *
 * @property string|array $OnAcceptPosition
 * @property string|array $OnCancelPosition
 * @property string|array $OnCycleChildFocus
 * @property string|array $OnCycleHandleFocus
 * @property string|array $OnMoveHandle
 * @property string|array $OnToggleHandleFocus
 */
abstract class TPaned extends TContainer
{
    /**
     * Methods
     */
    public function Add1 (TWidget $child)
    {
        $this->Handle->add1 ($child->Handle);
    }

    public function Add2 (TWidget $child)
    {
        $this->Handle->add2 ($child->Handle);
    }

    public function ComputeComposition (int $allocation, int $child1_req, int $child2_req)
    {
        $this->Handle->compute_composition ($allocation, $child1_req, $child2_req);
    }

    public function GetChild1 ()
    {
        $child1 = $this->Handle->get_child1 ();

        return $child1->get_data (self::TOBJECT);
    }

    public function GetChild2 ()
    {
        $child2 = $this->Handle->get_child2 ();

        return $child2->get_data (self::TOBJECT);
    }

    public function GetPosition ()
    {
        return $this->Handle->get_position ();
    }

    public function Pack1 (TWidget $child, /* bool */ $resize = true, /* bool */ $shrink = true)
    {
        $this->Handle->pack1 ($child->Handle, $resize, $shrink);
    }

    public function Pack2 (TWidget $child, /* bool */ $resize = true, /* bool */ $shrink = true)
    {
        $this->Handle->pack2 ($child->Handle, $resize, $shrink);
    }

    public function SetPosition (int $position)
    {
        $this->Handle->set_position ($position);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Child1':   { $result = $this->GetChild1 ();   break; }
        case 'Child2':   { $result = $this->GetChild2 ();   break; }
        case 'Position': { $result = $this->GetPosition (); break; }
        default:         { $result = parent::__get ($var);         }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Child1':   { $this->Add1 ($val);         break; }
        case 'Child2':   { $this->Add2 ($val);         break; }
        case 'Position': { $this->SetPosition ($val);  break; }
        default:         { parent::__set ($var, $val);        }
        }
    }
}

