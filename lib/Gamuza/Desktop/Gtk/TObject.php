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
 * Class TObject
 *
 * @property int $Flags
 *
 * @property string|array $OnCreate
 * @property string|array $OnDestroy
 */
abstract class TObject extends System\TObject
{
    /**
     * Events
     */
    public $OnCreate;
    public $OnDestroy;

    public function __construct ()
    {
        parent::__construct ();

        $this->_call_user_func ($this, $this->OnCreate);
    }

    public function __destruct ()
    {
        parent::__destruct ();

        $this->_call_user_func ($this, $this->OnDestroy);
    }

    /**
     * Methods
     */
    public function Destroy ()
    {
        $this->Handle->destroy ();
    }

    public function Flags ()
    {
        return $this->Handle->flags ();
    }

    public function SetFlags (int $flags)
    {
        $this->Handle->set_flags ($flags);
    }

    public function Sink ()
    {
        $this->Handle->sink ();
    }

    public function UnsetFlags (int $flags)
    {
        $this->Handle->unset_flags ($flags);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Flags': { $result = $this->Flags ();      break; }
        default:      { $result = parent::__get ($var);        }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Flags': { $this->SetFlags ($val);     break; }
        default:      { parent::__set ($var, $val);        }
        }
    }
}

