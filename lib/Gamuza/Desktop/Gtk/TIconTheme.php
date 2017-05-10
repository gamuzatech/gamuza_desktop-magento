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
 * Class TIconTheme
 *
 * @property string    $CustomTheme
 * @property GdkScreen $Screen
 *
 * @property string|array $OnChanged
 */
class TIconTheme extends System\TObject
{
    /**
     * Events
     */
    public function __construct ()
    {
        parent::__construct ();

        $this->Handle = new GtkIconTheme ();
    }

    /**
     * Methods
     */
    public function AddBuiltinIcon ($icon_name, $size, GdkPixpuf $pixbuf)
    {
        $this->Handle->add_builtin_icon ($icon_name, $size, $pixbuf);
    }

    public function AppendSearchPath (string $path)
    {
        $this->Handle->append_search_path ($path);
    }

    public function GetDefault ()
    {
        return $this->Handle->get_default ();
    }

    public function GetExampleIconName ()
    {
        return $this->Handle->get_example_icon_name ();
    }

    public function GetForScreen (GdkScreen $screen)
    {
        return $this->Handle->get_for_screen ($screen);
    }

    public function HasIcon (string $icon_name)
    {
        return $this->Handle->has_icon ($icon_name);
    }

    public function ListIcons (string $context)
    {
        return $this->Handle->list_icons ($context);
    }

    public function LoadIcon (string $icon_name, int $size, TIconLookupFlags $flags, TError $error)
    {
        return $this->Handle->load_icon ($icon_name, $size, $flags, $error);
    }

    public function LookupIcon (string $icon_name, int $size, TIconLookupFlags $flags)
    {
        return $this->Handle->lookup_icon ($icon_name, $size, $flags);
    }

    public function PrependSearchPath (string $path)
    {
        $this->Handle->prepend_search_path ($path);
    }

    public function RescanIfNeeded ()
    {
        return $this->Handle->rescan_if_needed ();
    }

    public function SetCustomTheme (string $theme_name)
    {
        $this->Handle->set_custom_theme ($theme_name);
    }

    public function SetScreen (GdkScreen $screen)
    {
        $this->Handle->set_screen ($screen);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Default':         { $result = $this->GetDefault ();         break; }
        case 'ExampleIconName': { $result = $this->GetExampleIconName (); break; }
        default:             { $result = parent::__get ($var);             }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'CustomTheme': { $this->SetCustomTheme ($val); break; }
        case 'Screen':      { $this->SetScreen ($val);      break; }
        default:             { parent::__set ($var, $val);           }
        }
    }
}

