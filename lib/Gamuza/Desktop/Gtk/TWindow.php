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
 * Class TWindow
 *
 * @property bool              $AcceptFocus
 * @property bool              $AutoStartupNotification
 * @property bool              $Decorated
 * @property TWidget           $Default
 * @property GdkPixbuf         $DefaultIcon
 * @property array             $DefaultSize
 * @property array             $DestroyWithParent
 * @property TWidget           $Focus
 * @property bool              $FocusOnMap
 * @property array             $FrameDimensions
 * @property array             $GeometryHints
 * @property GdkGravity        $Gravity
 * @property bool              $HasFrame
 * @proeprty GdkPixbuf         $Icon
 * @property array             $IconFromFile
 * @property array             $IconList
 * @property string            $IconName
 * @property bool              $KeepAbove
 * @property bool              $KeepBelow
 * @property GdkModifierType   $MNemonicModifier
 * @property bool              $Modal
 * @property TWindowPosition   $Position
 * @property bool              $Resizable
 * @proeprty string            $Role
 * @property GdkScreen         $Screen
 * @property bool              $SkipPagerHint
 * @property bool              $SkipTaskbarHint
 * @property TWindow           $TransientFor
 * @property GdkWindowTypeHint $TypeHint
 * @property string            $WMClass
 *
 * @property string|array $OnActivateDefault;
 * @property string|array $OnActivateFocus;
 * @property string|array $OnClose;
 * @property string|array $OnCloseQuery;
 * @property string|array $OnFrameEvent;
 * @property string|array $OnKeysChanged;
 * @property string|array $OnMoveFocus;
 * @property string|array $OnSetFocus;
 */
class TWindow extends TBin
{
    protected $_accel_group;

    /**
     * Events
     */
    public $OnClose;
    public $OnCloseQuery;

    public function __construct (/* [ TWindowType $type = Gtk::WINDOW_TOPLEVEL ] */)
    {
        parent::__construct ();

        $this->Handle = new GtkWindow (/* $type */);

        self::__init ();
    }

    public function __init ()
    {
        parent::__init ();

        $this->Position = Gtk::WIN_POS_CENTER;
        $this->AddAccelGroup ($this->_accel_group = new TAccelGroup ());

        $this->Connect ('delete-event',  array ($this, '__on_delete_event'));
        $this->Connect ('destroy',       array ($this, '__on_destroy'));
    }

    public function __on_delete_event (GObject $sender, array $event)
    {
        $canClose = true;

        /**
         * Call-time pass-by-reference has been removed in PHP 5.4
         */
        $klass = new StdClass ();
        $klass->value = & $canClose;

        $result = $this->_call_user_func ($this, $this->OnCloseQuery, $klass);

        return !$canClose;
    }

    public function __on_destroy (GObject $sender, array $event)
    {
        $this->_call_user_func ($this, $this->OnClose);

        if ($this->Owner->MainWindow == $this) Gtk::main_quit ();
    }

    /**
     * Methods
     */
    public static function GetDefaultIconList ()
    {
        return GtkWindow::get_default_icon_list ();
    }

    public static function GetToplevels ()
    {
        return GtkWindow::list_toplevels ();
    }

    public static function SetDefaultIconFromFile (string $filename, $error)
    {
        return GtkWindow::set_default_icon_from_file ($filename, $error);
    }

    public static function SetDefaultIconList ($pixbufs)
    {
        GtkWindow::set_default_icon_list ($pixbufs);
    }

    public static function SetDefaultIconName (string $name)
    {
        GtkWindow::set_default_icon_name ($name);
    }

    public static function WindowMnemonicActivate (int $keyval, GdkModifierType $modifier)
    {
        return GtkWindow::window_mnemonic_activate ($keyval, $modifier);
    }

    public function ActivateDefault ()
    {
        return $this->Handle->activate_default ();
    }

    public function ActivateFocus ()
    {
        return $this->Handle->activate_focus ();
    }

    public function ActivateKey (GdkEventKey $event)
    {
        return $this->Handle->activate_key ($event);
    }

    public function AddAccelGroup (TAccelGroup $accel_group)
    {
        $this->Handle->add_accel_group ($accel_group->Handle);
    }

    public function AddMnemonic (int $keyval, TWidget $target)
    {
        $this->Handle->add_mnemonic ($keyval, $target);
    }

    public function BeginMoveDrag (int $button, int $root_x, int $root_y, int $timestamp)
    {
        $this->Handle->begin_move_drag ($button, $root_x, $root_y, $timestamp);
    }

    public function BeginResizeDrag (GdkWindowEdge $edge, int $button, int $root_x, int $root_y, int $timestamp)
    {
        $this->Handle->begin_resize_drag ($edget, $button, $root_x, $root_y, $timestamp);
    }

    public function Deiconify ()
    {
        $this->Handle->deiconify ();
    }

    public function Fullscreen ()
    {
        $this->Handle->fullscreen ();
    }

    public function GetAcceptFocus ()
    {
        return $this->Handle->get_accept_focus ();
    }

    public function GetDecorated ()
    {
        return $this->Handle->get_decorated ();
    }

    public function GetDefaultSize ()
    {
        return $this->Handle->get_default_size ();
    }

    public function GetDestroyWithParent ()
    {
        return $this->Handle->get_destroy_with_parent ();
    }

    public function GetFocus ()
    {
        return $this->Handle->get_focus ();
    }

    public function GetFocusOnMap ()
    {
        return $this->Handle->get_focus_on_map ();
    }

    public function GetFrameDimensions ()
    {
        return $this->Handle->get_frame_dimensions ();
    }

    public function GetGravity ()
    {
        return $this->Handle->get_gravity ();
    }

    public function GetHasFrame ()
    {
        return $this->Handle->get_has_frame ();
    }

    public function GetIcon ()
    {
        return $this->Handle->get_icon ();
    }

    public function GetIconList ()
    {
        return $this->Handle->get_icon_list ();
    }

    public function GetIconName ()
    {
        return $this->Handle->get_icon_name ();
    }

    public function GetMnemonicModifier ()
    {
        return $this->Handle->get_mnemonic_modifier ();
    }

    public function GetModal ()
    {
        return $this->Handle->get_modal ();
    }

    public function GetPosition ()
    {
        return $this->Handle->get_position ();
    }

    public function GetResizable ()
    {
        return $this->Handle->get_resizable ();
    }

    public function GetRole ()
    {
        return $this->Handle->get_role ();
    }

    public function GetSize ()
    {
        return $this->Handle->get_size ();
    }

    public function GetSkipPagerHint ()
    {
        return $this->Handle->get_skip_pager_hint ();
    }

    public function GetSkipTaskbarHint ()
    {
        return $this->Handle->get_skip_taskbar_hint ();
    }

    public function GetTitle ()
    {
        return $this->utf8 ($this->Handle->get_title ());
    }

    public function GetTransientFor ()
    {
        return $this->Handle->get_transient_for ();
    }

    public function GetTypeHint ()
    {
        return $this->Handle->get_type_hint ();
    }

    public function HasToplevelFocus ()
    {
        return $this->Handle->has_toplevel_focus ();
    }

    public function Iconify ()
    {
        $this->Handle->iconify ();
    }

    public function IsActive ()
    {
        return $this->Handle->is_active ();
    }

    public function Maximize ()
    {
        $this->Handle->maximize ();
    }

    public function Move (int $x, int $y)
    {
        $this->Handle->move ($x, $y);
    }

    public function ParseGeometry (string $geometry)
    {
        return $this->Handle->parse_geometry ($geometry);
    }

    public function Present ()
    {
        $this->Handle->present ();
    }

    public function PropagateKeyEvent (GdkEventKey $keyevent)
    {
        return $this->Handle->propagate_key_event ($keyevent);
    }

    public function RemoveAccelGroup (TAccelGroup $accel_group)
    {
        $this->Handle->remove_accel_group ($accel_group->Handle);
    }

    public function RemoveMnemonic (int $keyval, TWidget $target)
    {
        $this->Handle->remove_mnemonic ($keyval, $target->Handle);
    }

    public function ReshowWithInitialSize ()
    {
        $this->Handle->reshow_with_initial_size ();
    }

    public function Resize (int $width, int $height)
    {
        $this->Handle->resize ($width, $height);
    }

    public function SetAcceptFocus (bool $accept)
    {
        $this->Handle->set_accept_focus ($accept);
    }

    public function SetAutoStartupNotification (bool $notify)
    {
        $this->Handle->set_auto_startup_notification ($notify);
    }

    public function SetDecorated (bool $decorated)
    {
        $this->Handle->set_decorated ($decorated);
    }

    public function SetDefault (TWidget $default_widget)
    {
        $this->Handle->set_default ($default_widget->Handle);
    }

    public function SetDefaultIcon (GdkPixbuf $icon)
    {
        $this->Handle->set_default_icon ($icon);
    }

    public function SetDefaultSize (int $width, int $height)
    {
        $this->Handle->set_default_size ($width, $height);
    }

    public function SetDestroyWithParent (bool $destroy)
    {
        $this->Handle->set_destroy_with_parent ($destroy);
    }

    public function SetFocus (TWidget $focus)
    {
        $this->Handle->set_focus ($focus->Handle);
    }

    public function SetFocusOnMap (bool $focus_on_map)
    {
        $this->Handle->set_focus_on_map ($focus_on_map);
    }

    public function SetFrameDimensions (int $left, int $top, int $right, int $bottom)
    {
        $this->Handle->set_frame_dimensions ($left, $top, $right, $bottom);
    }

    public function SetGeometryHints (TWidget $widget,
        $min_width, $min_height, $max_width, $max_height,
        $base_width, $base_height, $width_inc, $height_inc,
        $min_aspect, $max_aspect, $win_gravity)
    {
        $this->Handle->set_geometry_hints ($widget->Handle,
            $min_width, $min_height, $max_width, $max_height,
            $base_width, $base_height, $width_inc, $height_inc,
            $min_aspect, $max_aspect, $win_gravity);
    }

    public function SetGravity (GdkGravity $gravity)
    {
        $this->Handle->set_gravity ($gravity);
    }

    public function SetHasFrame (bool $has_frame)
    {
        $this->Handle->set_has_frame ($has_frame);
    }

    public function SetIcon (GdkPixbuf $icon)
    {
        $this->Handle->set_icon ($icon);
    }

    public function SetIconFromFile (string $filename, $error)
    {
        $this->Handle->set_icon_from_file ($filename, $error);
    }

    public function SetIconList (array $list)
    {
        $this->Handle->set_icon_list ($list);
    }

    public function SetIconName (string $name)
    {
        $this->Handle->set_icon_name ($name);
    }

    public function SetKeepAbove (bool $keep_above)
    {
        $this->Handle->set_keep_above ($keep_above);
    }

    public function SetKeepBelow (bool $keep_below)
    {
        $this->Handle->set_keep_below ($keep_below);
    }

    public function SetMnemonicModifier (GdkModifierType $modifier)
    {
        $this->Handle->set_mnemonic_modifier ($modifier);
    }

    public function SetModal (bool $modal)
    {
        $this->Handle->set_modal ($modal);
    }

    public function SetPosition (TWindowPosition $position)
    {
        $this->Handle->set_position ($position);
    }

    public function SetResizable (bool $resizable)
    {
        $this->Handle->set_resizable ($resizable);
    }

    public function SetRole (string $role)
    {
        $this->Handle->set_role ($role);
    }

    public function SetScreen (GdkScreen $screen)
    {
        $this->Handle->set_screen ($screen);
    }

    public function SetSkipPagerHint (bool $skip)
    {
        $this->Handle->set_skip_pager_hint ($skip);
    }

    public function SetSkipTaskbarHint (bool $skip)
    {
        $this->Handle->set_skip_taskbar_hint ($skip);
    }

    public function SetTransientFor (TWindow $parent)
    {
        $this->Handle->set_transient_for ($parent->Handle);
    }

    public function SetTypeHint (GdkWindowTypeHint $hint)
    {
        $this->Handle->set_type_hint ($hint);
    }

    public function SetWMClass (string $wmclass_name, string $wmclass_class)
    {
        $this->Handle->set_wmclass ($wmclass_name, $wmclass_class);
    }

    public function Stick ()
    {
        $this->Handle->stick ();
    }

    public function Unfullscreen ()
    {
        $this->Handle->unfullscreen ();
    }

    public function Unmaximize ()
    {
        $this->Handle->unmaximize ();
    }

    public function Unstick ()
    {
        $this->Handle->unstick ();
    }




    public function SetTitle (string $title)
    {
        $this->Handle->set_title ($this->latin1 ($title));
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'AcceptFocus':       { $result = $this->GetAcceptFocus ();       break; }
        case 'Decorated':         { $result = $this->GetDecorated ();         break; }
        case 'DefaultSize':       { $result = $this->GetDefaultSize ();       break; }
        case 'DestroyWithParent': { $result = $this->GetDestroyWithParent (); break; }
        case 'Focus':             { $result = $this->GetFocus ();             break; }
        case 'FocusOnMap':        { $result = $this->GetFocusOnMap ();        break; }
        case 'FrameDimensions':   { $result = $this->GetFrameDimensions ();   break; }
        case 'Gravity':           { $result = $this->GetGravity ();           break; }
        case 'HasFrame':          { $result = $this->GetHasFrame ();          break; }
        case 'Icon':              { $result = $this->GetIcon ();              break; }
        case 'IconList':          { $result = $this->GetIconList ();          break; }
        case 'IconName':          { $result = $this->GetIconName ();          break; }
        case 'MnemonicModifier':  { $result = $this->GetMnemonicModifier ();  break; }
        case 'Modal':             { $result = $this->GetModal ();             break; }
        case 'Position':          { $result = $this->GetPosition ();          break; }
        case 'Resizable':         { $result = $this->GetResizable ();         break; }
        case 'Role':              { $result = $this->GetRole ();              break; }
        case 'Size':              { $result = $this->GetSize ();              break; }
        case 'SkipPagerHint':     { $result = $this->GetSkipPagerHint ();     break; }
        case 'SkipTaskbarHint':   { $result = $this->GetSkipTaskbarHint ();   break; }
        case 'Title':             { $result = $this->GetTitle ();             break; }
        case 'TransientFor':      { $result = $this->GetTransientFor ();      break; }
        case 'TypeHint':          { $result = $this->GetTypeHint ();          break; }
        default:                  { $result = parent::__get ($var);                  }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'AcceptFocus':             { $this->SetAcceptFocus ($val);             break; }
        case 'AutoStartupNotification': { $this->SetAutoStartupNotification ($val); break; }
        case 'Decorated':               { $this->SetDecorated ($val);               break; }
        case 'Default':                 { $this->SetDefault ($val);                 break; }
        case 'DefaultIcon':             { $this->SetDefaultIcon ($val);             break; }
        case 'DefaultSize':
        {
            list ($width, $height) = $val;

            $this->SetDefaultSize ($width, $height);

            break;
        }
        case 'DestroyWithParent':       { $this->SetDestroyWithParent ($val);       break; }
        case 'Focus':                   { $this->SetFocus ($val);                   break; }
        case 'FocusOnMap':              { $this->SetFocusOnMap ($val);              break; }
        case 'FrameDimensions':
        {
            list ($left, $top, $right, $bottom) = $val;

            $this->SetFrameDimensions ($left, $top, $right, $bottom);

            break;
        }
        case 'GeometryHints':           { /* Pending */                             break; }
        case 'Gravity':                 { $this->SetGravity ($val);                 break; }
        case 'HasFrame':                { $this->SetHasFrame ($val);                break; }
        case 'Icon':                    { $this->SetIcon ($val);                    break; }
        case 'IconFromFile':
        {
            list ($filename, $error) = $val;

            $this->SetIconFromFile ($filename, $error);

            break;
        }
        case 'IconList':                { $this->SetIconList ($val);                break; }
        case 'IconName':                { $this->SetIconName ($val);                break; }
        case 'KeepAbove':               { $this->SetKeepAbove ($val);               break; }
        case 'KeepBelow':               { $this->SetKeepBelow ($val);               break; }
        case 'MnemonicModifier':        { $this->SetMnemonicModifier ($val);        break; }
        case 'Modal':                   { $this->SetModal ($val);                   break; }
        case 'Position':                { $this->SetPosition ($val);                break; }
        case 'Resizable':               { $this->SetResizable ($val);               break; }
        case 'Role':                    { $this->SetRole ($val);                    break; }
        case 'Screen':                  { $this->SetScreen ($val);                  break; }
        case 'SkipPagerHint':           { $this->SetSkipPagerHint ($val);           break; }
        case 'SkipTaskbarHint':         { $this->SetSkipTaskbarHint ($val);         break; }
        case 'Title':                   { $this->SetTitle ($val);                   break; }
        case 'TransientFor':            { $this->SetTransientFor ($val);            break; }
        case 'TypeHint':                { $this->SetTypeHint ($val);                break; }
        case 'WMClass':
        {
            list ($wmclass_name, $wmclass_class) = $val;

            $this->SetWMClass ($wmclass_name, $wmclass_class);

            break;
        }
        default:                        { parent::__set ($var, $val);                      }
        }
    }
}

