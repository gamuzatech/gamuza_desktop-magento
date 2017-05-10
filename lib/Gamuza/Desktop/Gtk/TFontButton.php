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
 * Class TFontButton
 *
 * @property string $FontName
 * @property bool   $ShowSize
 * @property bool   $ShowStyle
 * @property string $Title
 * @property bool   $UseFont
 * @property bool   $UseSize
 *
 * @property string|array $OnFontSet
 */
class TFontButton extends TButton
{
    /**
     * Events
     */
    public function __construct (string $font_name = null)
    {
        parent::__construct ();

        $this->Handle = !$font_name ? new GtkFontButton () : GtkFontButton::new_with_font ($font_name);
    }

    /**
     * Methods
     */
    public static function NewWithFont (string $fontname)
    {
        return GtkFontButton::new_with_font ($fontname);
    }

    public function GetFontName ()
    {
        return $this->Handle->get_font_name ();
    }

    public function GetShowSize ()
    {
        return $this->Handle->get_show_size ();
    }

    public function GetShowStyle ()
    {
        return $this->Handle->get_show_style ();
    }

    public function GetTittle ()
    {
        return $this->Handle->get_title ();
    }

    public function GetUseFont ()
    {
        return $this->Handle->get_use_font ();
    }

    public function GetUseSize ()
    {
        return $this->Handle->get_use_size ();
    }

    public function SetFontName (string $font_name)
    {
        return $this->Handle->set_font_name ($font_name);
    }

    public function SetShowSize (bool $show_size)
    {
        $this->Handle->set_show_size ($show_size);
    }

    public function SetShowStyle (bool $show_style)
    {
        $this->Handle->set_show_style ($show_style);
    }

    public function SetTitle (string $title)
    {
        $this->Handle->set_title ($title);
    }

    public function SetUseFont (bool $use_font)
    {
        $this->Handle->set_use_font ($use_font);
    }

    public function SetUseSize (bool $use_size)
    {
        $this->Handle->set_use_size ($use_size);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'FontName':  { $result = $this->GetFontName ();  break; }
        case 'ShowSize':  { $result = $this->GetShowSize ();  break; }
        case 'ShowStyle': { $result = $this->GetShowStyle (); break; }
        case 'Title':     { $result = $this->GetTitle ();     break; }
        case 'UseFont':   { $result = $this->GetUseFont ();   break; }
        case 'UseSize':   { $result = $this->GetUseSize ();   break; }
        default:          { $result = parent::__get ($var);          }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'FontName':  { $this->SetFontName ($val);  break; }
        case 'ShowSize':  { $this->SetShowSize ($val);  break; }
        case 'ShowStyle': { $this->SetShowStyle ($val); break; }
        case 'Title':     { $this->SetTitle ($val);     break; }
        case 'UseFont':   { $this->SetUseFont ($val);   break; }
        case 'UseSize':   { $this->SetUseSize ($val);   break; }
        default:          { parent::__set ($var, $val);        }
        }
    }
}

