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
 * Class TExpander
 *
 * @property bool    $Expanded
 * @property string  $Label
 * @property TWidget $LabelWidget
 * @property int     $Spacing
 * @property bool    $UseMarkup
 * @property bool    $UseUnderline
 *
 * @property string|array $OnActivate
 */
class TExpander extends TBin
{
    /**
     * Events
     */
    public function __construct (string $label = null)
    {
        parent::__construct ();

        $this->Handle = new GtkExpander ($label);
    }

    /**
     * Methods
     */
    public function NewWithNmemonic (string $label)
    {
        return GtkExpander::new_with_mnemonic ($label);
    }

    public function GetExpanded ()
    {
        return $this->Handle->get_expanded ();
    }

    public function getLabel ()
    {
        return $this->Handle->latin1 ($this->get_label ());
    }

    public function getLabelWidget ()
    {
        $widget = $this->Handle->get_label_widget ();

        return $widget->get_data ('__gobject');
    }

    public function getSpacing ()
    {
        return $this->Handle->get_spacing ();
    }

    public function GetUseMarkup ()
    {
        return $this->Handle->get_use_markup ();
    }

    public function GetUseUnderline ()
    {
        return $this->Handle->get_use_underline ();
    }

    public function SetExpanded (bool $expanded)
    {
        $this->Handle->set_expanded ($expanded);
    }

    public function SetLabel (string $label)
    {
        $this->Handle->set_label ($this->latin1 ($label));
    }

    public function SetLabelWidget (TWidget $widget)
    {
        $this->Handle->set_label_widget ($widget->Handle);
    }

    public function SetSpacing (int $spacing)
    {
        $this->Handle->set_spacing ($spacing);
    }

    public function SetUseMarkup (bool $use_markup)
    {
        $this->Handle->set_use_markup ($use_markup);
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
        case 'Expanded':     { $result = $this->getExpanded ();     break; }
        case 'Label':        { $result = $this->getLabel ();        break; }
        case 'LabelWidget':  { $result = $this->getLabelWidget ();  break; }
        case 'Spacing':      { $result = $this->getSpacing ();      break; }
        case 'UseMarkup':    { $result = $this->getUseMarkup ();    break; }
        case 'UseUnderline': { $result = $this->getUseUnderline (); break; }
        default:             { $result = parent::__get ($var);             }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Expanded':     { $this->setExpanded ($val);     break; }
        case 'Label':        { $this->setLabel ($val);        break; }
        case 'LabelWidget':  { $this->setLabelWidget ($val);  break; }
        case 'Spacing':      { $this->setSpacing ($val);      break; }
        case 'UseMarkup':    { $this->setUseMarkup ($val);    break; }
        case 'UseUnderline': { $this->setUseUnderline ($val); break; }
        default:             { parent::__set ($var, $val);           }
        }
    }
}

