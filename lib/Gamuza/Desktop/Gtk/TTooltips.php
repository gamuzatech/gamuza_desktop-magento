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
 * Class TTooltips
 */
class TTooltips extends TObject
{
    /**
     * Events
     */
    public function __construct ()
    {
        parent::__construct ();

        $this->Handle = new GtkTooltips ();
    }

    /**
     * Methods
     */
    public function Disable ()
    {
        $this->Handle->disable ();
    }

    public function Enable ()
    {
        $this->Handle->enable ();
    }

    public function ForceWindow ()
    {
        $this->Handle->force_window ();
    }

    public function SetDelay (int $delay)
    {
        $this->Handle->set_delay ($delay);
    }

    public function SetTip (TWidget $widget, string $tip_text, string $tip_private = null)
    {
        $this->Handle->set_tip ($widget->Handle, $tip_text, $tip_private);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'ActiveTipsData': { $result = $this->Handle->active_tips_data;                   break; }
        case 'Delay':          { $result = $this->Handle->delay;                              break; }
        case 'Enabled':        { $result = $this->Handle->enabled;                            break; }
        case 'Timer':          { $result = $this->Handle->timer_tag;                          break; }
        case 'TipLabel':       { $result = $this->Handle->tip_label->get_data ('__gobject');  break; }
        case 'TipWindow':      { $result = $this->Handle->tip_window->get_data ('__gobject'); break; }
        case 'TipsDataList':   { $result = $this->Handle->tips_data_list;                     break; }
        case 'UseStickyDelay': { $result = $this->Handle->use_sticky_delay;                   break; }
        default:               { $result = parent::__get ($var);                                     }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        default: { parent::__set ($var, $val); }
        }
    }
}

