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
 * Class TStatusIcon
 *
 * @property bool        $Blinking
 * @property string      $FromFile
 * @property GdkPixbuf   $FromPixbuf
 * @property TStockItems $FromStock
 * @property string      $Tooltip
 * @property bool        $Visible
 *
 * @property string|array $OnActivate
 * @property string|array $OnPopupMenu
 */
class TStatusIcon extends System\TObject
{
    /**
     * Events
     */
    public function __construct ()
    {
        parent::__construct ();

        $this->Handle = new GtkStatusIcon ();
    }

    /**
     * Methods
     */
    public static function NewFromFile (string $filepath)
    {
        return GtkStatusIcon::new_from_file ($filepath);
    }

    public static function NewFromPixbuf (GdkPixbuf $pixbuf)
    {
        return GtkStatusIcon::new_from_pixbuf ($pixbuf);
    }

    public static function NewFromStock (TStockItems $stock_id)
    {
        return GtkStatusIcon::new_from_stock ($stock_id);
    }

    public function IsEmbedded ()
    {
        return $this->Handle->is_embedded ();
    }

    public function GetBlinking ()
    {
        return $this->Handle->get_blinking ();
    }

    public function GetPixbuf ()
    {
        return $this->Handle->get_pixbuf ();
    }

    public function GetSize ()
    {
        return $this->Handle->get_size ();
    }

    public function GetVisible ()
    {
        return $this->Handle->get_visible ();
    }

    public function PositionMenu (TMenu $menu = null, TStatusIcon $status_icon = null)
    {
        $this->Handle->position_menu ($menu ? $menu->Handle : null, $status_icon);
    }

    public function SetBlinking (bool $blinking)
    {
        $this->Handle->set_blinking ($blinking);
    }

    public function SetFromFile (string $file_path)
    {
        $this->Handle->set_from_file ($file_path);
    }

    public function SetFromPixbuf (GdkPixbuf $pixbuf)
    {
        $this->Handle->set_from_pixbuf ($pixbuf);
    }

    public function SetFromStock (TStockItems $stock_id)
    {
        $this->Handle->set_from_stock ($stock_id);
    }

    public function SetTooltip (string $tooltip)
    {
        $this->Handle->set_tooltip ($tooltip);
    }

    public function SetVisible (bool $visible)
    {
        $this->Handle->set_visible ($visible);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'IsEmbedded': { $result = $this->GetEmbedded (); break; }
        case 'Blinking':   { $result = $this->GetBlinking (); break; }
        case 'Pixbuf':     { $result = $this->GetPixbuf ();   break; }
        case 'Size':       { $result = $this->GetSize ();     break; }
        case 'Visible':    { $result = $this->GetVisible ();  break; }
        default:           { $result = parent::__get ($var);         }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Blinking':   { $this->SetBlinking ($val);   break; }
        case 'FromFile':   { $this->SetFromFile ($val);   break; }
        case 'FromPixbuf': { $this->SetFromPixbuf ($val); break; }
        case 'FromStock':  { $this->SetFromStock ($val);  break; }
        case 'Tooltip':    { $this->SetTooltip ($val);    break; }
        case 'Visible':    { $this->SetVisible ($val);    break; }
        default:           { parent::__set ($var, $val);         }
        }
    }
}

