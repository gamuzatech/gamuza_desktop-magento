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
 * Class TToolbar
 *
 * @property TOrientation  $Orientation
 * @property bool          $ShowArrow
 * @property TToolbarStyle $ToolbarStyle
 * @property bool          $Tooltips
 *
 * @property string|array $OnFocusHomeOrEnd
 * @property string|array $OnMoveFocus
 * @property string|array $OnOrientationChanged
 * @property string|array $OnPopupContextMenu
 * @property string|array $OnStyleChanged
 */
class TToolbar extends TContainer
{
    /**
     * Events
     */
    public function __construct ()
    {
        parent::__construct ();

        $this->Handle = new GtkToolbar ();
    }

    /**
     * Methods
     */
    public function GetDropIndex (int $x, int $y)
    {
        return $this->get_drop_index ($x, $y);
    }

    public function GetItemIndex (TToolItem $item)
    {
        return $this->Handle->get_item_index ($item->Handle);
    }

    public function GetNumItems ()
    {
        return $this->Handle->get_n_items ();
    }

    public function GetNthItem (int $n)
    {
        $widget = $this->Handle->get_nth_item ($n);

        return $widget->get_data (self::TOBJECT);
    }

    public function GetOrientation ()
    {
        return $this->Handle->get_orientation ();
    }

    public function GetReliefStyle ()
    {
        return $this->Handle->get_relief_style ();
    }

    public function GetShowArrow ()
    {
        return $this->Handle->get_show_arrow ();
    }

    public function GetToolbarStyle ()
    {
        return $this->Handle->get_toolbar_style ();
    }

    public function GetTooltips ()
    {
        return $this->Handle->get_tooltips ();
    }

    public function Insert (TToolItem $item, $pos)
    {
        $this->Handle->insert ($item->Handle, $pos);
    }

    public function InsertSpace (int $position)
    {
        $this->Handle->insert_space ($position);
    }

    public function InsertWidget (TWidget $widget, string $tooltip_text, string $tooltip_private_text, int $position)
    {
        $this->Handle->insert_widget ($widget->Handle, $tooltip_text, $tooltip_private_text, $position);
    }

    public function SetDropHighlightItem (TToolItem $tool_item, int $index)
    {
        $this->Handle->set_drop_hightlight_item ($item->Handle, $index);
    }

    public function SetOrientation (TOrientation $orientation)
    {
        $this->Handle->set_orientation ($orientation);
    }

    public function SetShowArrow (bool $show_arrow)
    {
        $this->Handle->set_show_arrow ($show_arrow);
    }

    public function SetToolbarStyle (TToolbarStyle $style)
    {
        $this->Handle->set_toolbar_style ($style);
    }

    public function SetTooltips (bool $enable)
    {
        $this->Handle->set_tooltips ($enable);
    }

    public function UnsetStyle ()
    {
        $this->Handle->unset_style ();
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'NItems':       { $result = $this->GetNumItems ();     break; }
        case 'Orientation':  { $result = $this->GetOrientation ();  break; }
        case 'ReliefStyle':  { $result = $this->GetReliefStyle ();  break; }
        case 'ShowArrow':    { $result = $this->GetShowArrow ();    break; }
        case 'ToolbarStyle': { $result = $this->GetToolbarStyle (); break; }
        case 'Tooltips':     { $result = $this->GetTooltips ();     break; }
        default:             { $result = parent::__get ($var);             }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Orientation':  { $this->setOrientation ($val);  break; }
        case 'ShowArrow':    { $this->setShowArrow ($val);    break; }
        case 'ToolbarStyle': { $this->setToolbarStyle ($val); break; }
        case 'Tooltips':     { $this->setTooltips ($val);     break; }
        default:             { parent::__set ($var, $val);           }
        }
    }
}

