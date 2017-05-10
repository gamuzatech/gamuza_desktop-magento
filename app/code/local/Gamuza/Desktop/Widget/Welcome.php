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

class Gamuza_Desktop_Widget_Welcome extends TForm
{
    /**
     * Form
     */
    const DFM_FILE = 'Welcome.dfm';

    /**
     * Components
     */
    public $Button1;
    public $Label1;
    public $Image1;

    /**
     * Events
     */
    public function OnLoaded ()
    {
        $this->Title = sprintf ("%s - %s - %s", $this->Owner->Title,
            $this->Owner->Description, $this->Owner->Version);
    }

    public function WelcomeCloseQuery (TObject $sender, stdClass $canClose)
    {
        $response = $this->Owner->MessageBox ($this->__('Quit from Gamuza Desktop?'), $this->Title, btnYesNo, msgQuestion);

        if ($response == resYes) $this->Owner->Terminate ();
        else $canClose->value = false;
    }

    public function WelcomeShow (TObject $sender)
    {
        $this->Image1->FromFile = Mage::getConfig ()->GetImageFileName ('logo.png');
    }

    public function Button1OnClick (TObject $sender)
    {
        $this->Owner->MessageBox ($this->__('Hello World!'), $this->Title, btnOkCancel, msgInfo);
    }
}
