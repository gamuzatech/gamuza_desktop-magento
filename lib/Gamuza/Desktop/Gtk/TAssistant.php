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
 * Class TAssistant
 *
 * @property int   $CurrentPage
 * @property array $ForwardPageFunc
 * @property array $PageType
 * @property array $PageTitle
 * @property array $PageHeaderImage
 * @property array $PageSideImage
 * @property array $PageComplete
 *
 * @property string|array $OnPrepare
 * @property string|array $OnApply
 * @property string|array $OnClose
 * @property string|array $OnCancel
 */
class TAssistant extends TWindow
{
    /**
     * Components
     */
    public $ActionArea;

    /**
     * Events
     */
    public $OnClose;
    public $OnPrepare;

    public function __construct ()
    {
        parent::__construct ();

        $this->Handle = new GtkAssistant ();

        /**
         * Action Area
         */
        $this->AddActionWidget ($EventBox = new TEventBox ());
        $this->ActionArea = new THBox ();
        $this->ActionArea->Handle = $EventBox->ParentWidget;

        self::__signal ();
    }

    public function __signal ()
    {
        parent::__signal ();

        $this->Connect ('close',   array ($this, '__on_close'));
        $this->Connect ('prepare', array ($this, '__on_prepare'));
    }

    public function __on_close ($object, array $event)
    {
        $this->_call_user_func ($this, $this->OnClose, $event);
    }

    public function __on_prepare ($object, $page, array $event)
    {
        $tobject = $page->get_data ('__tobject');

        $this->_call_user_func ($this, $this->OnPrepare, $tobject, $event);
    }

    /**
     * Methods
     */
    public function AddActionWidget (TWidget $child)
    {
        $this->Handle->add_action_widget ($child->Handle);
    }

    public function AppendPage (TWidget $page)
    {
        return $this->Handle->append_page ($page->Handle);
    }

    public function GetCurrentPage ()
    {
        return $this->Handle->get_current_page ();
    }

    public function GetNumPages ()
    {
        return $this->Handle->get_n_pages ();
    }

    public function GetNthPage (int $page_num)
    {
        $page = $this->Handle->get_nth_page ($page_num);

        return $page->get_data ('__tobject');
    }

    public function GetPageComplete ()
    {
        return $this->Handle->get_page_complete ();
    }

    public function GetPageHeaderImage ()
    {
        return $this->Handle->get_page_header_image ();
    }

    public function GetPageSideImage ()
    {
        return $this->Handle->get_page_side_image ();
    }

    public function GetPageTitle ()
    {
        return $this->utf8 ($this->Handle->get_page_title ());
    }

    public function InsertPage (TWidget $page, int $position)
    {
        return $this->Handle->insert_page ($page->Handle, $position);
    }

    public function PrependPage (TWidget $page)
    {
        return $this->Handle->prepend_page ($page->Handle);
    }

    public function RemoveActionWidget (TWidget $child)
    {
        $this->Handle->remove_action_widget ($child->Handle);
    }

    public function SetCurrentPage (int $page_num)
    {
        $this->Handle->set_current_page ($page_num);
    }

    public function SetForwardPageFunc (TAssistantPageFunc $page_func, $data, GDestroyNotify $destroy)
    {
        $this->Handle->set_forward_page_func ($page_func, $data, $destroy);
    }

    public function SetPageComplete (TWidget $page, bool $complete)
    {
        $this->Handle->set_page_complete ($page->Handle, $complete);
    }

    public function SetPageHeaderImage (TWidget $page, GdkPixbuf $pixbuf)
    {
        $this->Handle->set_page_header_image ($page->Handle, $pixbuf);
    }

    public function SetPageSideImage (TWidget $page, GdkPixbuf $pixbuf)
    {
        $this->Handle->set_page_side_image ($page->Handle, $pixbuf);
    }

    public function SetPageTitle (TWidget $page, string $title)
    {
        $this->Handle->set_page_title ($page->Handle, $this->latin1 ($title));
    }

    public function SetPageType (TWidget $page, TAssistantPageType $type)
    {
        return $this->Handle->set_page_type ($page->Handle, $type);
    }

    public function UpdateButtonsState ()
    {
        $this->Handle->update_buttons_state ();
    }

    public function Commit ()
    {
        $this->Handle->commit ();
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'CurrentPage': { $result = $this->GetCurrentPage (); break; }
        case 'NumPages':    { $result = $this->GetNumPages ();    break; }
        default:            { $result = parent::__get ($var);            }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'CurrentPage': { $this->SetCurrentPage ($val); break; }
        case 'ForwardPageFunc':
        {
            list ($page_func, $data, $destroy) = $val;

            $this->SetForwardPageFunc ($page_func, $data, $destroy);

            break;
        }
        case 'PageType':
        {
            list ($page, $type) = $val;

            $this->SetPageType ($page, $type);

            break;
        }
        case 'PageTitle':
        {
            list ($page, $title) = $val;

            $this->SetPageTitle ($page, $title);

            break;
        }
        case 'PageHeaderImage':
        {
            list ($page, $pixbuf) = $val;

            $this->SetPageHeaderImage ($page, $pixbuf);

            break;
        }
        case 'PageSideImage':
        {
            list ($page, $pixbuf) = $val;

            $this->SetPageSideImage ($page, $pixbuf);

            break;
        }
        case 'PageComplete':
        {
            list ($page, $complete) = $val;

            $this->SetPageComplete ($page, $complete);

            break;
        }
        default:             { parent::__set ($var, $val);           }
        }
    }
}

