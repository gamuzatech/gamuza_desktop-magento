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
 * Class TFrame
 *
 * @property string      $Label
 * @property array       $LabelAlign
 * @property TWidget     $LabelWidget
 * @property TShadowType $ShadowType
 *
 */
class TFrame extends TBin
{
    /**
     * Events
     */
    public function __construct (/* string $label = null */)
    {
        parent::__construct ();

        $this->Handle = new GtkFrame (/* $label */);
    }

    /**
     * Methods
     */
    public function GetLabel ()
    {
        return $this->Handle->get_label ();
    }

    public function GetLabelAlign ()
    {
        return $this->Handle->get_label_align ();
    }

    public function GetLabelWidget ()
    {
        $widget = $this->Handle->get_label_widget ();

        return $widget;
    }

    public function GetShadowType ()
    {
        return $this->Handle->get_shadow_type ();
    }

    public function SetLabel (string $label)
    {
        $this->Handle->set_label ($label);
    }

    public function SetLabelAlign (double $xalign, double $yalign)
    {
        $this->Handle->set_label_align ($xalign, $yalign);
    }

    public function SetLabelWidget (TWidget $label_widget)
    {
        $this->Handle->set_label_widget ($label_widget->Handle);
    }

    public function SetShadowType (TShadowType $type)
    {
        $this->Handle->set_shadow_type ($type);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Label':       { $result = $this->GetLabel ();       break; }
        case 'LabelAlign':  { $result = $this->GetLabelAlign ();  break; }
        case 'LabelWidget': { $result = $this->GetLabelWidget (); break; }
        case 'ShadowType':  { $result = $this->GetShadowType ();  break; }
        default:            { $result = parent::__get ($var);            }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Label':       { $this->SetLabel ($val);       break; }
        case 'LabelAlign':  { $this->SetLabelAlign ($val);  break; }
        case 'LabelWidget': { $this->SetLabelWidget ($val); break; }
        case 'ShadowType':  { $this->SetShadowType ($val);  break; }
        default:            { parent::__set ($var, $val);          }
        }
    }
}

