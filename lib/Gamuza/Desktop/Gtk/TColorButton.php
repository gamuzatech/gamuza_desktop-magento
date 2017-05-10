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
 * Class TColorButton
 *
 * @property int      $Alpha
 * @property GdkColor $Color
 * @property string   $Title
 * @property bool     $UseAlpha
 *
 * @property string|array $OnColorSet
 */
class TColorButton extends TButton
{
    /**
     * Events
     */
    public function __construct ()
    {
        parent::__construct ();

        $this->Handle = new GtkColorButton ();
    }

    /**
     * Methods
     */
    public function GetAlpha ()
    {
        return $this->Handle->get_alpha ();
    }

    public function GetColor ()
    {
        return $this->Handle->get_color ();
    }

    public function GetTitle ()
    {
        return $this->Handle->get_title();
    }

    public function GetUseAlpha ()
    {
        return $this->Handle->get_use_alpha ();
    }

    public function SetAlpha (int $alpha)
    {
        $this->Handle->set_alpha ($alpha);
    }

    public function SetColor (GdkColor $color)
    {
        $this->Handle->set_color ($color);
    }

    public function SetTitle (string $title)
    {
        $this->Handle->set_title ($title);
    }

    public function SetUseAlpha (bool $use_alpha)
    {
        $this->Handle->set_use_alpha ($use_alpha);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Alpha':    { $result = $this->GetAlpha ();    break; }
        case 'Color':    { $result = $this->GetColor ();    break; }
        case 'Title':    { $result = $this->GetTitle ();    break; }
        case 'UseAlpha': { $result = $this->GetUseAlpha (); break; }
        default:         { $result = parent::__get ($var);         }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Alpha':    { $this->SetAlpha ($val);     break; }
        case 'Color':    { $this->SetColor ($val);     break; }
        case 'Title':    { $this->SetTitle ($val);     break; }
        case 'UseAlpha': { $this->SetUseAlpha ($val);  break; }
        default:         { parent::__set ($var, $val);        }
        }
    }
}

