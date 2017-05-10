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
 * Class TColorSelection
 *
 * @property int      $CurrentAlpha
 * @property GdkColor $CurrentColor
 * @property bool     $HasOpacityControl
 * @property bool     $HasPalette
 * @property int      $PreviousAlpha
 * @property GdkColor $PreviousColor
 *
 * @property string|array $OnColorChanged
 */
class TColorSelection extends TVBox
{
    /**
     * Events
     */
    public function __construct ()
    {
        parent::__construct ();

        $this->Handle = new GtkColorSelection ();
    }

    /**
     * Methods
     */
    public function GetCurrentAlpha ()
    {
        return $this->Handle->get_current_alpha ();
    }

    public function GetCurrentColor ()
    {
        return $this->Handle->get_current_color ();
    }

    public function GetHasOpacityControl ()
    {
        return $this->Handle->get_has_opacity_control ();
    }

    public function GetHasPalette ()
    {
        return $this->Handle->get_has_palette ();
    }

    public function GetPreviousAlpha ()
    {
        return $this->Handle->get_previous_alpha ();
    }

    public function GetPreviousColor ()
    {
        return $this->Handle->get_previous_color ();
    }

    public function IsAdjusting ()
    {
        return $this->Handle->is_adjusting ();
    }

    public function SetCurrentAlpha (int $alpha)
    {
        $this->Handle->set_current_alpha ($alpha);
    }

    public function SetCurrentColor (GdkColor $color)
    {
        $this->Handle->set_current_color ($color);
    }

    public function SetHasOpacityControl (bool $has_opacity)
    {
        $this->Handle->set_has_opacity_control ($has_opacity);
    }

    public function SetHasPalette (bool $has_palette)
    {
        $this->Handle->set_has_palette ($has_palette);
    }

    public function SetPreviousAlpha (int $alpha)
    {
        $this->Handle->set_previous_alpha ($alpha);
    }

    public function SetPreviousColor (GdkColor $color)
    {
        $this->Handle->set_previous_color ($color);
    }

    public static function PaletteFromString (string $str, GdkColor $colors, int $n_colors)
    {
        return $this->Handle->palette_from_string ($str, $colors, $n_colors);
    }

    public static function PaletteToString (GdkColor $colors, int $n_colors)
    {
        return $this->Handle->palette_to_string ($colors, $n_colors);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'CurrentAlpha':      { $result = $this->GetCurrentAlpha ();      break; }
        case 'CurrentColor':      { $result = $this->GetCurrentColor ();      break; }
        case 'HasOpacityControl': { $result = $this->GetHasOpacityControl (); break; }
        case 'hasPalette':        { $result = $this->GetHasPalette ();        break; }
        case 'PreviousAlpha':     { $result = $this->GetPreviousAlpha ();     break; }
        default:                  { $result = parent::__get ($var);                  }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'CurrentAlpha':      { $this->SetCurrentAlpha ($val);      break; }
        case 'CurrentColor':      { $this->SetCurrentColor ($val);      break; }
        case 'HasOpacityControl': { $this->SetHasOpacityControl ($val); break; }
        case 'HasPalette':        { $this->SetHasPalette ($val);        break; }
        case 'PreviousAlpha':     { $this->SetPreviousAlpha ($val);     break; }
        case 'PreviousColor':     { $this->SetPreviousColor ($val);     break; }
        default:                  { parent::__set ($var, $val);                }
        }
    }
}

