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
 * Class TProgressBar
 *
 * @property PangoEllipsizeMode      $Ellipsize
 * @property double                  $Fraction
 * @property TProgressBarOrientation $Orientation
 * @property double                  $PulseStep
 * @property string                  $Text
 *
 */
class TProgressBar extends TProgress
{
    /**
     * Events
     */
    public function __construct (/* [GtkAdjustment $adjustment] */)
    {
        parent::__construct ();

        $this->Handle = new GtkProgressBar (/* $adjustment */);
    }

    /**
     * Methods
     */
    public function GetEllipsize ()
    {
        return $this->Handle->get_ellipsize ();
    }

    public function GetFraction ()
    {
        return $this->Handle->get_fraction ();
    }

    public function GetOrientation ()
    {
        return $this->Handle->get_orientation ();
    }

    public function GetPulseStep ()
    {
        return $this->Handle->get_pulse_step ();
    }

    public function GetText ()
    {
        return $this->Handle->get_text ();
    }

    public function Pulse ()
    {
        $this->Handle->pulse ();
    }

    public function SetEllipsize (PangoEllipsizeMode $mode)
    {
        $this->Handle->set_ellipsize ($mode);
    }

    public function SetFraction (double $fraction)
    {
        $this->Handle->set_fraction ($fraction);
    }

    public function SetOrientation (TProgressBarOrientation $orientation)
    {
        $this->Handle->set_orientation ($orientation);
    }

    public function SetPulseStep (double $fraction)
    {
        $this->Handle->set_pulse_step ($fraction);
    }

    public function SetText (string $text)
    {
        $this->Handle->set_text ($text);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Ellipsize':   { $result = $this->GetEllipsize ();   break; }
        case 'Fraction':    { $result = $this->GetFraction ();    break; }
        case 'Orientation': { $result = $this->GetOrientation (); break; }
        case 'PulseStep':   { $result = $this->GetPulseStep ();   break; }
        case 'Text':        { $result = $this->GetText ();        break; }
        default:            { $result = parent::__get ($var);            }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Ellipsize':   { $this->SetEllipsize ($val);   break; }
        case 'Fraction':    { $this->SetFraction ($val);    break; }
        case 'Orientation': { $this->SetOrientation ($val); break; }
        case 'PulseStep':   { $this->SetPulseStep ($val);   break; }
        case 'Text':        { $this->SetText ($val);        break; }
        default:            { parent::__set ($var, $val);          }
        }
    }
}

