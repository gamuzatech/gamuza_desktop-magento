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
 * Class TToolItem
 *
 * @property bool  $Homogeneous
 * @property bool  $IsImportant
 * @property array $ProxyMenuItem
 * @property array $Tooltip
 * @property bool  $UseDragWindow
 * @property bool  $VisibleHorizontal
 * @property bool  $VisibleVertical
 *
 * @property string|array $OnCreateMenuProxy
 * @property string|array $OnSetTooltip
 * @property string|array $OnToolbarReconfigured
 */
class TToolItem extends TBin
{
    /**
     * Events
     */
    public function __construct ()
    {
        parent::__construct ();

        $this->Handle = new GtkToolItem ();
    }

    /**
     * Methods
     */
    public function GetExpand ()
    {
        return $this->Handle->get_expand ();
    }

    public function GetHomogenous ()
    {
        return $this->Handle->get_homogenous ();
    }

    public function GetIconSize ()
    {
        return $this->Handle->get_icon_size ();
    }

    public function GetIsImportant ()
    {
        return $this->Handle->get_is_important ();
    }

    public function GetOrientation ()
    {
        return $this->Handle->get_orientation ();
    }

    public function GetProxyMenuItem (string $menu_item_id)
    {
        $widget = $this->Handle->get_proxy_menu_item ($menu_item_id);

        return $widget->get_data (self::TOBJECT);
    }

    public function GetReliefStyle ()
    {
        return $this->Handle->get_relief_style ();
    }

    public function GetToolbarStyle ()
    {
        return $this->Handle->get_toolbar_style ();
    }

    public function GetUseDragWindow ()
    {
        return $this->Handle->get_use_drag_window ();
    }

    public function GetVisibleHorizontal ()
    {
        return $this->Handle->get_visible_horizontal ();
    }

    public function GetVisibleVertical ()
    {
        return $this->Handle->get_visible_vertical ();
    }

    public function RebuildMenu ()
    {
        $this->Handle->rebuild_menu ();
    }

    public function RetrieveProxyMenuItem ()
    {
        $widget = $this->Handle->retrieve_proxy_menu_item ();

        return $widget->get_data (self::TOBJECT);
    }

    public function SetExpand (bool $expand)
    {
        $this->Handle->set_expand ($expand);
    }

    public function SetHomogeneous (bool $homogeneous)
    {
        $this->Handle->set_homogeneous ($homogeneous);
    }

    public function SetIsImportant (bool $is_important)
    {
        $this->Handle->set_is_important ($is_important);
    }

    public function SetProxyMenuItem (string $menu_item_id, TWidget $menu_item)
    {
        $this->Handle->set_proxy_menu_item ($menu_item_id, $menu_item->Handle);
    }

    public function SetTooltip (TTooltips $tooltips, string $tip_text = null, string $tip_private = null)
    {
        $this->Handle->set_tooltip ($tooltips->Handle, $tip_text, $tip_private);
    }

    public function SetUseDragWindow (bool $use_drag_window)
    {
        $this->Handle->set_use_drag_window ($use_drag_window);
    }

    public function SetVisibleHorizontal (bool $visible_horizontal)
    {
        $this->Handle->set_visible_horizontal ($visible_horizontal);
    }

    public function SetVisibleVertical (bool $visible_vertical)
    {
        $this->Handle->set_visible_vertical ($visible_vertical);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Expand':            { $result = $this->GetExpand ();            break; }
        case 'Homogeneous':       { $result = $this->GetHomogeneous ();       break; }
        case 'IconSize':          { $result = $this->GetIconSize ();          break; }
        case 'IsImportant':       { $result = $this->GetIsImportant ();       break; }
        case 'Orientation':       { $result = $this->GetOrientation ();       break; }
        case 'ProxyMenuItem':     { $result = $this->GetProxyMenuItem ();     break; }
        case 'ReliefStyle':       { $result = $this->GetReliefStyle ();       break; }
        case 'ToolbarStyle':      { $result = $this->GetToolbarStyle ();      break; }
        case 'UseDragWindow':     { $result = $this->GetUseDragWindow ();     break; }
        case 'VisibleHorizontal': { $result = $this->GetVisibleHorizontal (); break; }
        case 'VisibleVertical':   { $result = $this->GetVisibleVertical ();   break; }
        default:                  { $result = parent::__get ($var);                  }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Expand':            { $this->SetExpand ($val);            break; }
        case 'Homogeneous':       { $this->SetHomogeneous ($val);       break; }
        case 'IsImportant':       { $this->SetIsImportant ($val);       break; }
        case 'ProxyMenuItem':
        {
            list ($menu_item_id, $menu_item) = $val;

            $this->SetProxyMenuItem ($menu_item_id, $menu_item);

            break;
        }
        case 'Tooltip':
        {
            list ($tooltips, $tip_text, $tip_private) = $val;

            $this->SetTooltip ($tooltips, $tip_text, $tip_private);

            break;
        }
        case 'UseDragWindow':     { $this->SetUseDragWindow ($val);     break; }
        case 'VisibleHorizontal': { $this->SetVisibleHorizontal ($val); break; }
        case 'VisibleVertical':   { $this->SetVisibleVertical ($val);   break; }
        default:                  { parent::__set ($var, $val);                }
        }
    }
}

