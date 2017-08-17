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
 * Class TToolButton
 *
 * @property TWidget     $IconWidget
 * @property string      $Label
 * @property TWidget     $LabelWidget
 * @property TStockItems $StockId
 * @property bool        $UseUnderline
 *
 * @property string|array $OnClicked
 */
class TToolButton extends TToolItem
{
    /**
     * Events
     */
    public function __construct (/* [TWidget $icon_widget = null [, string $label = null]]) */)
    {
        parent::__construct ();

        $this->Handle = new GtkToolButton (/* $icon_widget->Handle, $label */);
    }

    /**
     * Methods
     */
    public static function NewFromStock (TStockItems $stock_id)
    {
        return GtkToolButton::new_from_stock ($stock_id);
    }

    public function GetIconWidget ()
    {
        $widget = $this->Handle->get_icon_widget ();

        return $widget->get_data (self::TOBJECT);
    }

    public function GetLabel ()
    {
        return $this->utf8 ($this->Handle->get_label ());
    }

    public function GetLabelWidget ()
    {
        $widget = $this->Handle->get_label_widget ();

        return $widget->get_data (self::TOBJECT);
    }

    public function GetStockId ()
    {
        return $this->utf8 ($this->Handle->get_stock_id ());
    }

    public function GetUseUnderline ()
    {
        return $this->Handle->get_use_underline ();
    }

    public function SetIconWidget (TWidget $widget)
    {
        $this->Handle->set_icon_widget ($widget->Handle);
    }

    public function SetLabel (string $label)
    {
        $this->Handle->set_label ($this->latin1 ($label));
    }

    public function SetLabelWidget (TWidget $widget)
    {
        $this->Handle->set_label_widget ($widget->Handle);
    }

    public function SetStockId (TStockItems $stock_id)
    {
        $this->Handle->set_stock_id ($stock_id);
    }

    public function SetUseUnderline (bool $use_underline)
    {
        $this->Handle->set_use_underline ($use_underline);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'IconWidget':   { $result = $this->GetIconWidget ();   break; }
        case 'Label':        { $result = $this->GetLabel ();        break; }
        case 'LabelWidget':  { $result = $this->GetLabelWidget ();  break; }
        case 'StockId':      { $result = $this->GetStockId ();      break; }
        case 'UseUnderline': { $result = $this->GetUseUnderline (); break; }
        default:             { $result = parent::__get ($var);             }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'IconWidget':   { $this->SetIconWidget ($val);   break; }
        case 'Label':        { $this->SetLabel ($val);        break; }
        case 'LabelWidget':  { $this->SetLabelWidget ($val);  break; }
        case 'StockId':      { $this->SetStockId ($val);      break; }
        case 'UseUnderline': { $this->SetUseUnderline ($val); break; }
        default:             { parent::__set ($var, $val);           }
        }
    }
}

