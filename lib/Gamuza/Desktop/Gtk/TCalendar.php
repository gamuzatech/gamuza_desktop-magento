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
 * Class TCalendar
 *
 * @property int                     $SelectDay
 * @property TCalendarDisplayOptions $DisplayOptions
 *
 * @property string|array $OnDaySelected
 * @property string|array $OnDaySelectedDoubleClick
 * @property string|array $OnMonthChanged
 * @property string|array $OnNextMonth
 * @property string|array $OnNextYear
 * @property string|array $OnPrevMonth
 * @property string|array $OnPrevYear
 */
class TCalendar extends TWidget
{
    /**
     * Events
     */
    public function __construct ()
    {
        parent::__construct ();

        $this->Handle = new GtkCalendar ();
    }

    /**
     * Methods
     */
    public function ClearMarks ()
    {
        $this->Handle->clear_marks ();
    }

    public function Freeze ()
    {
        $this->Handle->freeze ();
    }

    public function GetDate ()
    {
        return $this->Handle->get_date ();
    }

    public function GetDisplayOptions ()
    {
        return $this->Handle->get_display_options ();
    }

    public function MarkDay (int $day)
    {
        return $this->Handle->mark_day ($day);
    }

    public function SelectDay (int $day)
    {
        $this->Handle->select_day ($day);
    }

    public function SelectMonth (int $month, int $year)
    {
        return $this->Handle->select_month ($month, $year);
    }

    public function SetDisplayOptions (TCalendarDisplayOptions $flags)
    {
        $this->Handle->set_display_options ($flags);
    }

    public function Thaw ()
    {
        $this->Handle->thaw ();
    }

    public function UnmarkDay ($day)
    {
        return $this->Handle->unmark_day ($day);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Date':           { $result = $this->GetDate ();           break; }
        case 'DisplayOptions': { $result = $this->GetDisplayOptions (); break; }
        default:               { $result = parent::__get ($var);               }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'SelectDay':      { $this->SelectDay ($val);         break; }
        case 'DisplayOptions': { $this->SetDisplayOptions ($val); break; }
        default:               { parent::__set ($var, $val);             }
        }
    }
}

