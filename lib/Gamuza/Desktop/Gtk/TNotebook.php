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
 * Class TNotebook
 *
 * @property int           $CurrentPage
 * @property array         $MenuLabel
 * @property array         $MenuLabelText
 * @property int           $NumPages
 * @property bool          $Scrollable
 * @property bool          $ShowBorder
 * @property bool          $ShowTabs
 * @property array         $TabLabel
 * @property array         $TabLabelPacking
 * @property array         $TabLabelText
 * @property TPositionType $TabPos
 *
 * @property string|array $OnChangeCurrentPage
 * @property string|array $OnFocusTab
 * @property string|array $OnMoveFocusOut
 * @property string|array $OnSelectPage
 * @property string|array $OnSwitchPage
 */
class TNotebook extends TContainer
{
    /**
     * Events
     */
    public function __construct ()
    {
        parent::__construct ();

        $this->Handle = new GtkNotebook ();
    }

    /**
     * Methods
     */
    public function AppendPage (TWidget $child, TWidget $tab_label = null)
    {
        return $this->Handle->append_page ($child->Handle, $tab_label ? $tab_label->Handle : null);
    }

    public function AppendPageMenu (TWidget $child, TWidget $tab_label = null, TWidget $menu_label = null)
    {
        return $this->Handle->append_page_menu (
            $child->Handle,
            $tab_label ? $tab_label->Handle : null,
            $menu_label ? $menu_label->Handle : null
        );
    }

    public function GetCurrentPage ()
    {
        return $this->Handle->get_current_page ();
    }

    public function GetMenuLabel (TWidget $child)
    {
        return $this->Handle->get_menu_label ($child->Handle);
    }

    public function GetMenuLabelText (TWidget $child)
    {
        return $this->Handle->get_menu_label_text ($child->Handle);
    }

    public function GetNumPages ()
    {
        return $this->Handle->get_n_pages ();
    }

    public function GetNthPage (int $page_num)
    {
        $page = $this->Handle->get_nth_page ($page_num);

        return $page->get_data ('__tobject');
    }

    public function GetScrollable ()
    {
        return $this->Handle->get_scrollable ();
    }

    public function GetShowBorder ()
    {
        return $this->Handle->get_show_border ();
    }

    public function GetShowTabs ()
    {
        return $this->Handle->get_show_tabs ();
    }

    public function GetTabLabel (TWidget $child)
    {
        return $this->Handle->get_tab_label ($child->Handle);
    }

    public function GetTabLabelText (TWidget $child)
    {
        return $this->Handle->get_tab_label_text ($child->Handle);
    }

    public function GetTabPos ()
    {
        return $this->Handle->get_tab_pos ();
    }

    public function InsertPage (TWidget $child, TWidget $tab_label = null, /* int */ $position = -1)
    {
        return $this->Handle->insert_page ($child->handle, $tab_label ? $tab_label->Handle : null, $position);
    }

    public function InsertPageMenu (TWidget $child, TWidget $tab_label = null, TWidget $menu_label = null, /* int */ $position = -1)
    {
        $result = $this->Handle->insert_page_menu (
            $child->Handle,
            $tab_label ? $tab_label->Handle : null,
            $menu_label ? $menu_label->Handle : null,
            $position
        );

        return $result;
    }

    public function NextPage ()
    {
        $this->Handle->next_page ();
    }

    public function PageNum (TWidget $child)
    {
        return $this->Handle->page_num ($child->Handle);
    }

    public function PopupDisable ()
    {
        $this->Handle->popup_disable ();
    }

    public function PopupEnable ()
    {
        $this->Handle->popup_enable ();
    }

    public function PrependPageMenu (TWidget $child, TWidget $tab_label = null, TWidget $menu_label = null)
    {
        $result = $this->Handle->prepend_page_menu (
            $child,
            $tab_label ? $tab_label->Handle : null,
            $menu_label ? $menu_label->Handle : null
        );

        return $result;
    }

    public function PrevPage ()
    {
        $this->Handle->prev_page ();
    }

    public function RemovePage (int $page_num)
    {
        $this->Handle->remove_page ($page_num);
    }

    public function ReorderChild (TWidget $child, int $position)
    {
        $this->Handle->reorder_child ($child->Handle, $position);
    }

    public function SetCurrentPage (int $page_num)
    {
        $this->Handle->set_current_page ($page_num);
    }

    public function SetMenuLabel (TWidget $child, TWidget $menu_label = null)
    {
        $this->Handle->set_menu_label ($child->Handle, $menu_label ? $menu_label->Handle : null);
    }

    public function SetMenuLabelText (TWidget $child, string $menu_text)
    {
        $this->Handle->set_menu_label_text ($child->Handle, $this->latin1 ($menu_text));
    }

    public function SetScrollable (bool $scrollable)
    {
        $this->Handle->set_scrollable ($scrollable);
    }

    public function SetShowBorder (bool $show_border)
    {
        $this->Handle->set_show_border ($show_border);
    }

    public function SetShowTabs (bool $show_tabs)
    {
        $this->Handle->set_show_tabs ($show_tabs);
    }

    public function SetTabLabel (TWidget $child, TWidget $tab_label = null)
    {
        $this->Handle->set_tab_label ($child->Handle, $tab_label);
    }

    public function SetTabLabelPacking (TWidget $child, bool $expand, bool $fill, TPackType $pack_type)
    {
        $this->Handle->set_tab_label_packing ($child->Handle, $expand, $fill, $pack_type);
    }

    public function SetTabLabelText (Twidget $child, string $tab_text)
    {
        $this->Handle->set_tab_label_text ($child->Handle, $this->latin1 ($tab_text));
    }

    public function SetTabPos (TPositionType $pos)
    {
        $this->Handle->set_tab_pos ($pos);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'CurrentPage':   { $result = $this->GetCurrentPage ();   break; }
        case 'MenuLabel':     { $result = $this->GetMenuLabel ();     break; }
        case 'MenuLabelText': { $result = $this->GetMenuLabelText (); break; }
        case 'NumPages':      { $result = $this->GetNumPages ();      break; }
        case 'NthPage':       { $result = $this->GetNthPage ();       break; }
        case 'Scrollable':    { $result = $this->GetScrollable ();    break; }
        case 'ShowBorder':    { $result = $this->GetShowBorder ();    break; }
        case 'ShowTabs':      { $result = $this->GetShowTabs ();      break; }
        case 'TabLabel':      { $result = $this->GetTabLabel ();      break; }
        case 'TabLabelText':  { $result = $this->GetTabLabelText ();  break; }
        case 'TabPos':        { $result = $this->GetTabPos ();        break; }
        default:              { $result = parent::__get ($var);              }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'CurrentPage':     { $this->SetCurrentPage ($val);     break; }
        case 'MenuLabel':       { $this->SetMenuLabel ($val);       break; }
        case 'MenuLabelText':   { $this->SetMenuLabelText ($val);   break; }
        case 'Scrollable':      { $this->SetScrollable ($val);      break; }
        case 'ShowBorder':      { $this->SetShowBorder ($val);      break; }
        case 'ShowTabs':        { $this->SetShowTabs ($val);        break; }
        case 'TabLabel':        { $this->SetTabLabel ($val);        break; }
        case 'TabLabelPacking': { $this->SetTabLabelPacking ($val); break; }
        case 'TabLabelText':    { $this->SetLabelText ($val);       break; }
        case 'TabPos':          { $this->SetTabPos ($val);          break; }
        default:                { parent::__set ($var, $val);              }
        }
    }
}

