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
 * Class THandleBox
 *
 * @property TPositionType $HandlePosition
 * @property TShadowType   $ShadowType
 * @property TPositionType $SnapEdge
 *
 * @property string|array $OnChildAttached
 * @property string|array $OnChildDetached
 */
class THandleBox extends TBin
{
    /**
     * Events
     */
    public function __construct ()
    {
        parent::__construct ();

        $this->Handle = new GtkHandleBox ();
    }

    /**
     * Methods
     */
    public function GetHandlePosition ()
    {
        return $this->Handle->get_handle_position ();
    }

    public function GetShadowType ()
    {
        return $this->Handle->get_shadow_type ();
    }

    public function GetSnapEdge ()
    {
        return $this->Handle->get_snap_edge ();
    }

    public function SetHandlePosition (TPositionType $position)
    {
        $this->Handle->set_position_type ($position);
    }

    public function SetShadowType (TShadowType $type)
    {
        $this->Handle->set_shadowt_type ($type);
    }

    public function SetSnapEdge (TPositionType $edge)
    {
        $this->Handle->set_snap_edge ($edge);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'HandlePosition': { $result = $this->GetHandlePosition (); break; }
        case 'ShadowType':     { $result = $this->GetShadowType ();     break; }
        case 'SnapEdge':       { $result = $this->GetSnapEdge ();       break; }
        default:               { $result = parent::__get ($var);               }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'HandlePosition': { $this->SetHandlePosition ($val); break; }
        case 'ShadowType':     { $this->SetShadowType ($val);     break; }
        case 'SnapEdge':       { $this->SetSnapEdge ($val);       break; }
        default:               { parent::__set ($var, $val);             }
        }
    }
}

