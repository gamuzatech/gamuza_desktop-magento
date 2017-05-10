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
 * Class TCellRenderer
 *
 * @property array $FixedSize
 *
 * @property string|array $OnEditingCanceled
 * @property string|array $OnEditingStarted
 */
abstract class TCellRenderer extends TObject
{
    /**
     * Methods
     */
    public function Activate (GdkEvent $event, TWidget $widget, $path, GdkRectangle $background_area, GdkRectangle $cell_area, $flags)
    {
        $this->Handle->activate ($event, $widget->Handle, $path, $background_area, $cell_area, $flags);
    }

    public function EditingCanceled ()
    {
        $this->Handle->editing_canceled ();
    }

    public function GetFixedSize ()
    {
        return $this->Handle->get_fixed_size ();
    }

    public function Render (GdkWindow $window, TWidget $widget, GdkRectangle $background_area, GdkRectangle $cell_area, GdkRectangle $expose_area, $flags)
    {
        $this->Handle->render ($window, $widget->Handle, $background_area, $cell_area, $expose_area, $flags);
    }

    public function SetFixedSize (int $width, int $height)
    {
        $this->Handle->set_fixed_size ($width, $height);
    }

    public function StartEditing (GdkEvent $event, TWidget $widget, $path, GdkRectangle $background_area, GdkRectangle $cell_area, $flags)
    {
        $this->Handle->start_editing ($event, $widget->Handle, $path, $background_area, $cell_area, $flags);
    }

    public function StopEditing (bool $canceled)
    {
        $this->Handle->stop_editing ($canceled);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'FixedSize':    { $result = $this->GetFixedSize ();    break; }
        default:             { $result = parent::__get ($var);             }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'FixedSize':
        {
            list ($width, $height) = $val;

            $this->SetFixedSize ($width, $height);

            break;
        }
        default:          { parent::__set ($var, $val);        }
        }
    }
}

