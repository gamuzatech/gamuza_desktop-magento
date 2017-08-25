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
 * Class GamuzaDialog
 */
class GamuzaDialog extends GtkDialog
{
    public function __construct (array $args)
    {
        if (count ($args ['args']) > 0)
        {
            $args = $args ['args'];

            if (!empty ($args [1]))
            {
                $parent = $args [1];

                $args [1] = $parent->Handle;
            }

            return call_user_func_array ('parent::__construct', $args);
        }

        parent::__construct ();
    }
}

/**
 * Class TDialog
 *
 * @property int  $DefaultResponse
 * @property bool $HasSeparator
 *
 * @property string|array $OnClose
 * @property string|array $OnResponse
 */
class TDialog extends TWindow
{
    /**
     * Components
     */
    public $ActionArea;
    public $ContentArea;

    /**
     * Events
     */
    public function __construct (string $title = null, TWindow $parent = null, TDialogFlags $flags = null
                                 /* [ string $first_button_text = null, TResponseType $response_type = null ], ... */)
    {
        TBin::__construct ();

        $this->Handle = new GamuzaDialog (array ('args' => func_get_args ()) /* $title, $parent, $flags, ... */);

        self::__gui ();

        self::__signal (); // parent
    }

    public function __gui ()
    {
        TBin::__gui ();

        $this->Modal = true;

        $this->ActionArea = new THButtonBox ();
        $this->ActionArea->Handle = $this->Handle->action_area;
        $this->Handle->action_area->set_data (self::TOBJECT, $this->ActionArea);

        $this->ContentArea = new TVBox ();
        $this->ContentArea->Handle = $this->Handle->vbox;
        $this->Handle->vbox->set_data (self::TOBJECT, $this->ContentArea);
    }

    /**
     * Methods
     */
    public function AddActionWidget (TWidget $child, int $response_id)
    {
        $this->Handle->add_action_widget ($child->Handle, $response_id);
    }

    public function AddButton (string $button_text, int $response_id)
    {
        $widget = new TButton ();

        $widget->Handle = $this->Handle->add_button ($button_text, $response_id);

        return $widget;
    }

    public function AddButtons (array $buttons)
    {
        $this->Handle->add_buttons ($buttons);
    }

    public function GetActionArea ()
    {
        return $this->Handle->action_area->get_data (self::TOBJECT);
    }

    public function GetHasSeparator ()
    {
        return $this->Handle->get_has_separator ();
    }

    public function PackStart (TWidget $widget, /* bool */ $expand = true, /* bool */ $fill = true, /* int */ $padding = 0)
    {
        $widget->Parent = $this;

        $this->ContentArea->PackStart ($widget, $expand, $fill, $padding);
    }

    public function Response (int $response_id)
    {
        $this->Handle->response ($response_id);
    }

    public function Run ()
    {
        return $this->Handle->run ();
    }

    public function SetDefaultResponse (int $response_id)
    {
        $this->Handle->set_default_response ($response_id);
    }

    public function SetHasSeparator (bool $setting)
    {
        $this->Handle->set_has_separator ($setting);
    }

    public function SetResponseSensitive (int $response_id, bool $setting)
    {
        $this->Handle->set_response_sensitve ($response_id, $setting);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'ActionArea':   { $result = $this->GetActionArea ();   break; }
        case 'HasSeparator': { $result = $this->GetHasSeparator (); break; }
        case 'VBox':         { $result = $this->GetVBox ();         break; }
        default:             { $result = parent::__get ($var);             }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'DefaultResponse': { $this->SetDefaultResponse ($val); break; }
        case 'HasSeparator':    { $this->SetHasSeparator ($val);    break; }
        default:                { parent::__set ($var, $val);              }
        }
    }
}

