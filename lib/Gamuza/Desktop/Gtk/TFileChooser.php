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
 * Class TFileChooser
 *
 * @property TFileChooserAction $Action
 * @property string             $CurrentFolder
 * @property string             $CurrentFolderUri
 * @property string             $CurrentName
 * @property TWidget            $ExtraWidget
 * @property string             $Filename
 * @property TFileFilter        $Filter
 * @property bool               $LocalOnly
 * @property TWidget            $PreviewWidget
 * @property bool               $PreviewWidgetActive
 * @property bool               $SelectMultiple
 * @property bool               $ShowHidden
 * @property string             $Uri
 * @property bool               $UsePreviewLabel
 */
trait TFileChooser // extends TInterface
{
    /**
     * Methods
     */
    public function AddFilter (TFileFilter $filter)
    {
        $this->Handle->add_filter ($filer->Handle);
    }

    public function AddShortcutFolder (string $folder, $error)
    {
        return $this->Handle->add_shortcut_folder ($folder, $error);
    }

    public function AddShortcutFolderUri (string $folder, $error)
    {
        return $this->Handle->add_shortcut_folder_uri ($folder, $error);
    }

    public function GetAction ()
    {
        return $this->Handle->get_action ();
    }

    public function GetCurrentFolder ()
    {
        return $this->Handle->get_current_folder ();
    }

    public function GetCurrentFolderUri ()
    {
        return $this->Handle->get_current_folder_uri ();
    }

    public function GetExtraWidget ()
    {
        return $this->Handle->get_extra_widget ();
    }

    public function GetFilename (bool $convert)
    {
        return $this->Handle->get_filename ($convert);
    }

    public function GetFilenames (bool $convert)
    {
        return $this->Handle->get_filenames ($convert);
    }

    public function GetFilter ()
    {
        return $this->Handle->get_filter ();
    }

    public function GetLocalOnly ()
    {
        return $this->Handle->get_local_only ();
    }

    public function GetPreviewFilename ()
    {
        return $this->Handle->get_preview_filename ();
    }

    public function GetPreviewUri ()
    {
        return $this->Handle->get_preview_uri ();
    }

    public function GetPreviewWidget ()
    {
        return $this->Handle->get_preview_widget ();
    }

    public function GetPreviewWidgetActive ()
    {
        return $this->Handle->get_preview_widget_active ();
    }

    public function GetSelectMultiple ()
    {
        return $this->Handle->get_select_multiple ();
    }

    public function GetShowHidden ()
    {
        return $this->Handle->get_show_hidden ();
    }

    public function GetUri ()
    {
        return $this->Handle->get_uri ();
    }

    public function GetUris ()
    {
        return $this->Handle->get_uris ();
    }

    public function GetUsePreviewLabel ()
    {
        return $this->Handle->get_use_preview_label ();
    }

    public function ListFilters ()
    {
        return $this->Handle->list_filters ();
    }

    public function ListShortcutFolderUris (bool $convert)
    {
        return $this->Handle->list_shortcut_folder_uris ();
    }

    public function ListShortcutFolders (bool $convert)
    {
        return $this->Handle->list_shortcut_folders ();
    }

    public function RemoveFilter (TFileFilter $filter)
    {
        $this->Handle->remove_filter ($filter->Handle);
    }

    public function RemoveShortcutFolder (string $folder, $error)
    {
        $this->Handle->remove_shortcut_folder ($folder, $error);
    }

    public function RemoveShortcutFolderUri (string $uri, $error)
    {
        $this->Handle->remove_shortcut_folder_uri ($uri, $error);
    }

    public function SelectAll ()
    {
        $this->Handle->select_all ();
    }

    public function SelectFilename (string $filename)
    {
        return $this->Handle->select_filename ($filename);
    }

    public function SelectUri (string $uri)
    {
        return $this->Handle->select_uri ($uri);
    }

    public function SetAction (TFileChooserAction $action)
    {
        $this->Handle->set_action ($action);
    }

    public function SetCurrentFolder (string $filename)
    {
        return $this->Handle->set_current_folder ($filename);
    }

    public function SetCurrentFolderUri (string $uri)
    {
        return $this->Handle->set_current_folder_uri ($uri);
    }

    public function SetCurrentName (string $name)
    {
        $this->Handle->set_current_name ($name);
    }

    public function SetExtraWidget (TWidget $extra_widget)
    {
        $this->Handle->set_extra_widget ($extra_widget->Handle);
    }

    public function SetFilename (string $filename)
    {
        return $this->Handle->set_filename ($filename);
    }

    public function SetFilter (TFileFilter $filter)
    {
        $this->Handle->set_filter ($filter->Handle);
    }

    public function SetLocalOnly (bool $local_only)
    {
        $this->Handle->set_local_only ($local_only);
    }

    public function SetPreviewWidget (TWidget $preview_widget)
    {
        $this->Handle->set_preview_widget ($preview_widget->Handle);
    }

    public function SetPreviewWidgetActive (bool $active)
    {
        $this->Handle->set_preview_widget_active ($active);
    }

    public function SetSelectMultiple (bool $select_multiple)
    {
        $this->Handle->set_select_multiple ($select_multiple);
    }

    public function SetShowHidden (bool $show_hidden)
    {
        $this->Handle->set_show_hidden ($show_hidden);
    }

    public function SetUri (string $uri)
    {
        $this->Handle->set_uri ($uri);
    }

    public function SetUsePreviewLabel (bool $use_label)
    {
        $this->Handle->set_use_preview_label ($use_label);
    }

    public function UnselectAll ()
    {
        $this->Handle->unselect_all ();
    }

    public function UnselectFilename (string $filename)
    {
        $this->Handle->unselect_filename ($filename);
    }

    public function UnselectUri (string $uri)
    {
        $this->Handle->unselect_uri ($uri);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Action':              { $result = $this->GetAction ();              break; }
        case 'CurrentFolder':       { $result = $this->GetCurrentFolder ();       break; }
        case 'CurrentFolderUri':    { $result = $this->GetCurrentFolderUri ();    break; }
        case 'ExtraWidget':         { $result = $this->GetExtraWidget ();         break; }
        case 'Filter':              { $result = $this->GetFilter ();              break; }
        case 'LocalOnly':           { $result = $this->GetLocalOnly ();           break; }
        case 'PreviewFilename':     { $result = $this->GetPreviewFilename ();     break; }
        case 'PreviewUri':          { $result = $this->GetPreviewUri ();          break; }
        case 'PreviewWidget':       { $result = $this->GetPreviewWidget ();       break; }
        case 'PreviewWidgetActive': { $result = $this->GetPreviewWidgetActive (); break; }
        case 'SelectMultiple':      { $result = $this->GetSelectMultiple ();      break; }
        case 'ShowHidden':          { $result = $this->GetShowHidden ();          break; }
        case 'Uri':                 { $result = $this->GetUri ();                 break; }
        case 'Uris':                { $result = $this->GetUris ();                break; }
        case 'UsePreviewLabel':     { $result = $this->GetUsePreviewLabel ();     break; }
        default:                    { $result = parent::__get ($var);                    }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Action':              { $this->SetAction ($val);              break; }
        case 'CurrentName':         { $this->SetCurrentName ($val);         break; }
        case 'ExtraWidget':         { $this->SetExtraWidget ($val);         break; }
        case 'Filter':              { $this->SetFilter ($val);              break; }
        case 'LocalOnly':           { $this->SetLocalOnly ($val);           break; }
        case 'PreviewWidget':       { $this->SetPreviewWidget ($val);       break; }
        case 'PreviewWidgetActive': { $this->SetPreviewWidgetActive ($val); break; }
        case 'SelectMultiple':      { $this->SetSelectMultiple ($val);      break; }
        case 'ShowHidden':          { $this->SetShowHidden ($val);          break; }
        case 'Uri':                 { $this->SetUri ($val);                 break; }
        case 'UsePreviewLabel':     { $this->SetUsePreviewLabel ($val);     break; }
        default:                    { parent::__set ($var, $val);                  }
        }
    }
}

