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
 * Class TTimer
 *
 * @property bool $Enabled
 * @property int  $Interval
 *
 * @property string|array $OnTimer
 */
class TTimer extends TEventBox
{
    protected $_enabled  = false;
    protected $_interval = 1000;

    /**
     * Events
     */
    public $OnTimer;

    public function __construct ()
    {
        parent::__construct ();

        Gtk::timeout_add ($this->Interval, array ($this, '_timeout_event'));
    }

    public function _timeout_event ()
    {
        if ($this->Enabled) $this->_call_user_func ($this, $this->OnTimer);

        return true;
    }

    /**
     * Methods
     */
    public function GetEnabled ()
    {
        return $this->_enabled;
    }

    public function GetInterval ()
    {
        return $this->_interval;
    }

    public function SetEnabled (bool $enabled)
    {
        $this->_enabled = $enabled;
    }

    public function SetInterval (int $interval)
    {
        $this->_interval = $interval;
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Enabled':  { $result = $this->GetEnabled ();  break; }
        case 'Interval': { $result = $this->GetInterval (); break; }
        default:         { $result = parent::__get ($var);         }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Enabled':  { $this->setEnabled ($val);   break; }
        case 'Interval': { $this->setInterval ($val);  break; }
        default:         { parent::__set ($var, $val);        }
        }
    }
}

