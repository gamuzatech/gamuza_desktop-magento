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
 * Class TWidget
 *
 * @property array          $AccelPath
 * @property bool           $AppPaintable
 * @property bool           $ChildVisible
 * @property GdkColormap    $Colormap
 * @property string         $CompositeName
 * @property GdkColormap    $DefaultColormap
 * @property TTextDirection $DefaultDirection
 * @property TTextDirection $Direction
 * @property bool           $DoubleBuffered
 * @property bool           $Enabled
 * @property int            $Events
 * @property TExtensionMode $ExtensionEvents
 * @property string         $Hint
 * @property string         $HintMarkup
 * @proeprty string         $Name
 * @property bool           $NoShowAll
 * @property GtkWidget      $ParentWidget
 * @property GdkWindow      $ParentWindow
 * @property bool           $RedrawOnAllocate
 * @property array          $ScrollAdjustments
 * @property bool           $Sensitive
 * @property array          $SizeRequest
 * @property TStateType     $State
 * @property TSyle          $Style
 * @property string         $TooltipMarkup
 * @property string         $TooltipText
 * @property bool           $Visible
 * @property bool           $VisibleAll
 *
 * @property string|array $OnAccelClosuresChanged;
 * @property string|array $OnButtonPressEvent;
 * @property string|array $OnButtonReleaseEvent;
 * @property string|array $OnCanActivateAccel;
 * @property string|array $OnChildNotify;
 * @property string|array $OnClientEvent;
 * @property string|array $OnConfigureEvent;
 * @property string|array $OnDeleteEvent;
 * @property string|array $OnDestroyEvent;
 * @property string|array $OnDirectionChanged;
 * @property string|array $OnDragBegin;
 * @property string|array $OnDragDataDelete;
 * @property string|array $OnDragDataGet;
 * @property string|array $OnDragDataReceived;
 * @property string|array $OnDragDrop;
 * @property string|array $OnDragEnd;
 * @property string|array $OnDragLeave;
 * @property string|array $OnDragMotion;
 * @property string|array $OnEnterNotifyEvent;
 * @property string|array $OnEvent;
 * @property string|array $OnEventAfter;
 * @property string|array $OnExposeEvent;
 * @property string|array $OnFocus;
 * @property string|array $OnFocusInEvent;
 * @property string|array $OnFocusOutEvent;
 * @property string|array $OnGrabFocus;
 * @property string|array $OnGrabNotify;
 * @property string|array $OnHide;
 * @property string|array $OnHierarchyChanged;
 * @property string|array $OnKeyPressEvent;
 * @property string|array $OnKeyReleaseEvent;
 * @property string|array $OnLeaveNotifyEvent;
 * @property string|array $OnMap;
 * @property string|array $OnMapEvent;
 * @property string|array $OnMnemonicActivate;
 * @property string|array $OnMotionNotifyEvent;
 * @property string|array $OnNoExposeEvent;
 * @property string|array $OnParentSet;
 * @property string|array $OnPopupMenu;
 * @property string|array $OnPropertyNotifyEvent;
 * @property string|array $OnProximityInEvent;
 * @property string|array $OnProximiyOutEvent;
 * @property string|array $OnRealize;
 * @property string|array $OnScreenChanged;
 * @property string|array $OnScrollEvent;
 * @property string|array $OnSelectionClearEvent;
 * @property string|array $OnSelectionGet;
 * @property string|array $OnSelectionNotifyEvent;
 * @property string|array $OnSelectionReceived;
 * @property string|array $OnSelectionRequestEvent;
 * @property string|array $OnShow;
 * @property string|array $OnShowHelp;
 * @property string|array $OnSizeAllocate;
 * @property string|array $OnSizeRequest;
 * @property string|array $OnStateChanged;
 * @property string|array $OnStyleSet;
 * @property string|array $OnUnmap;
 * @property string|array $OnUnmapEvent;
 * @property string|array $OnUnrealize;
 * @property string|array $OnvisibilityNotifyEvent;
 * @property string|array $OnWindowStateEvent;
 */
abstract class TWidget extends TObject
{
    /**
     * Methods
     */
    public function Activate ()
    {
        return $this->Handle->get_acivate ();
    }

    public function AddAccelerator (string $signal, TAccelGroup $group, int $accel_key, /* TModifyerType */ $modifiers = 0, /* TAccelFlags */ $flags = accVisible)
    {
        $this->Handle->add_accelerator ($signal, $group->Handle, $accel_key, $modifiers, $flags);
    }

    public function AddEvents (GdkEventMask $events)
    {
        $this->Handle->add_events ($events);
    }

    public function AddMnemonicLabel (TWidget $label)
    {
        $this->Handle->add_mnemonic_label ($label->Handle);
    }

    public function CanActivateAccel (int $signal_id)
    {
        return $this->Handle->can_activate_accel ($signal_id);
    }

    public function ChildFocus (TDirectionType $direction)
    {
        return $this->Handle->child_focus ($direction);
    }

    public function ChildNotify (string $child_property)
    {
        $this->Handle->child_notify ($child_property);
    }

    public function ClassPath ()
    {
        return $this->Handle->class_path ();
    }

    public function CreatePangoContext ()
    {
        return $this->Handle->create_pango_context ();
    }

    public function CreatePangoLayout (string $text)
    {
        return $this->Handle->create_pango_layout ($text);
    }

    public function DragBegin (array $targets, TDragAction $actions, int $button, GdkEvent $event)
    {
        return $this->Handle->drag_begin ($targets, $actions, $button, $event);
    }

    public function DragCheckThreshold (int $start_x, int $start_y, int $current_x, int $current_y)
    {
        return $this->Handle->drag_check_threshold ($start_x, $start_y, $current_x, $current_y);
    }

    public function DragDestAddImageTargets ()
    {
        $this->Handle->drag_dest_add_image_targets ();
    }

    public function DragDestAddTextTargets ()
    {
        $this->Handle->drag_dest_add_text_targets ();
    }

    public function DragDestAddUriTargets ()
    {
        $this->Handle->drag_dest_add_uri_targets ();
    }

    public function DragDestFindTarget (GdkDragContext $context /* [, targets] */)
    {
        return $this->Handle->drag_dest_find_target ($context /* , $targets */);
    }

    public function DragDestGetTargetList ()
    {
        return $this->Handle->drag_dest_get_target_list ();
    }

    public function DragDestSet ($flags, $targets, $actions)
    {
        $this->Handle->drag_dest_set ($flags, $targets, $actions);
    }

    public function DragDestSetProxy (GdkWindow $proxy_window, $protocol, $use_coordinates)
    {
        $this->Handle->drag_dest_set_proxy ($proxy_window, $protocol, $use_coordinates);
    }

    public function DragDestSetTargetList ($targets)
    {
        $this->Handle->drag_dest_set_target_list ($targets);
    }

    public function DragDestUnset ()
    {
        $this->Handle->drag_dest_unset ();
    }

    public function DragGetData (GdkDragContext $context, $target /* [, $time] */)
    {
        $this->Handle->drag_get_data ($context, $target /* $time */);
    }

    public function DragHighlight ()
    {
        $this->Handle->drag_hightlist ();
    }

    public function DragSourceAddImageTargets ()
    {
        $this->Handle->drag_source_add_image_targets ();
    }

    public function DragSourceAddTextTargets ()
    {
        $this->Handle->drag_source_add_text_targets ();
    }

    public function DragSourceAddUriTargets ()
    {
        $this->Handle->drag_source_add_uri_targets ();
    }

    public function DragSourceGetTargetList ()
    {
        return $this->Handle->drag_source_get_target_list ();
    }

    public function DragSourceSet ($sbmask, $targets, $actions)
    {
        $this->Handle->drag_soruce_st ($sbmask, $targets, $actions);
    }

    public function DragSourceSetIcon (GdkColormap $colormap, GdkPixmap $pixmap /* [, $mask] */)
    {
        $this->Handle->drag_source_set_icon ($colormap, $pixmap /* [, $mask]*/);
    }

    public function DragSourceSetIconPixbuf (GdkPixbuf $pixbuf)
    {
        $this->Handle->drag_source_set_icon_pixibuf ($pixbuf);
    }

    public function DragSourceSetIconStock (string $stock_id)
    {
        $this->Handle->drag_source_set_icon_stock ($stock_id);
    }

    public function DragSourceTargetList ($targets)
    {
        $this->Handle->drag_source_target_list ($targets);
    }

    public function DragSourceUnset ()
    {
        $this->Handle->drag_source_unset ();
    }

    public function DragUnhightlight ()
    {
        $this->Handle->drag_unhightlight ();
    }

    public function EnsureStyle ()
    {
        $this->Handle->ensure_style ();
    }

    public function Event (GdkEvent $event)
    {
        return $this->Handle->event ($event);
    }

    public function FreezeChildNotify ()
    {
        $this->Handle->freeze_child_notify ();
    }

    public function GetAccessible ()
    {
        return $this->Handle->get_accessible ();
    }

    public function GetAllocation ()
    {
        return $this->Handle->get_allocation ();
    }

    public function GetAncestor (TType $widget_type)
    {
        return $this->Handle->get_ancestor ($widget_type);
    }

    public function GetChildRequisition ()
    {
        return $this->Handle->get_child_requisition ();
    }

    public function GetChildVisible ()
    {
        return $this->Handle->get_child_visible ();
    }

    public function GetClipboard (GdkAtom $selection)
    {
        return $this->Handle->get_clipboard ($selection);
    }

    public function GetColormap ()
    {
        return $this->Handle->get_colormap ();
    }

    public function GetCompositeName ()
    {
        return $this->Handle->get_composite_name ();
    }

    public function GetDefaultColormap ()
    {
        return $this->Handle->get_default_colormap ();
    }

    public function GetDefaultDirection ()
    {
        return $this->Handle->get_default_direction ();
    }

    public function GetDefaultStyle ()
    {
        return $this->Handle->get_default_style ();
    }

    public function GetDefaultVisual ()
    {
        return $this->Handle->get_default_visual ();
    }

    public function GetDirection ()
    {
        return $this->Handle->get_direction ();
    }

    public function GetDisplay ()
    {
        return $this->Handle->get_display ();
    }

    public function GetEnabled ()
    {
        return $this->GetSensitive ();
    }

    public function GetEvents ()
    {
        return $this->Handle->get_events ();
    }

    public function GetExtensionEvents ()
    {
        return $this->Handle->get_extension_events ();
    }

    public function GetHint ()
    {
        return $this->GetTooltipText ();
    }

    public function GetHintMarkup ()
    {
        return $this->GetTooltipMarkup ();
    }

    public function GetModifierStyle ()
    {
        return $this->Handle->get_modifier_style ();
    }

    public function GetName ()
    {
        return $this->Handle->get_name ();
    }

    public function GetNoShowAll ()
    {
        return $this->Handle->get_no_show_all ();
    }

    public function GetPangoContext ()
    {
        return $this->Handle->get_pango_context ();
    }

    public function GetParentWidget ()
    {
        return $this->Handle->get_parent ();
    }

    public function GetParentWindow ()
    {
        return $this->Handle->get_parent_window ();
    }

    public function GetPointer ()
    {
        return $this->Handle->get_pointer ();
    }

    public function GetRootWindow ()
    {
        return $this->Handle->get_root_window ();
    }

    public function GetScreen ()
    {
        return $this->Handle->get_screen ();
    }

    public function GetSensitive ()
    {
        return $this->Handle->get_sensitive ();
    }

    public function GetSettings ()
    {
        return $this->Handle->get_settings ();
    }

    public function GetSizeRequest ()
    {
        $requisition = $this->Handle->size_request ();

        if ($requisition && is_object ($requisition))
        {
            return array ($requisition->width, $requisition->height);
        }
    }

    public function GetStyle ()
    {
        return $this->Handle->get_style ();
    }

    public function GetTooltipMarkup ()
    {
        return $this->Handle->get_tooltip_markup ();
    }

    public function GetTooltipText ()
    {
        return $this->Handle->get_tooltip_text ();
    }

    public function GetToplevel ()
    {
        return $this->Handle->get_toplevel ();
    }

    public function GetVisual ()
    {
        return $this->Handle->get_visual ();
    }

    public function GrabAdd ()
    {
        $this->Handle->grab_add ();
    }

    public function GrabDefault ()
    {
        $this->Handle->grab_default ();
    }

    public function GrabFocus ()
    {
        $this->Handle->grab_focus ();
    }

    public function GrabRemove ()
    {
        $this->Handle->grab_remove ();
    }

    public function HasScreen ()
    {
        return $this->Handle->has_screen ();
    }

    public function Hide ()
    {
        $this->Handle->hide ();
    }

    public function HideAll ()
    {
        $this->Handle->hide_all ();
    }

    public function HideOnDelete ()
    {
        return $this->Handle->hide_on_delete ();
    }

    public function Intersect (GdkRectangle $area)
    {
        return $this->Handle->intersect ($area);
    }

    public function IsAncestor (TWidget $ancestor)
    {
        return $this->Handle->is_ancestor ($ancestor);
    }

    public function IsFocus ()
    {
        return $this->Handle->is_focus ();
    }

    public function IsVisible ()
    {
        return $this->Handle->is_visible ();
    }

    public function ListMnemonicLabels ()
    {
        return $this->Handle->list_mnemonic_labels ();
    }

    public function Map ()
    {
        $this->Handle->map ();
    }

    public function MnemonicActivate (booleab $group_cycling)
    {
        return $this->Handle->mnemonic_activate ($group_cycling);
    }

    public function ModifyBase (TStateType $state, GdkColor $color)
    {
        $this->Handle->modify_base ($state, $color);
    }

    public function ModifyBackground (TStateType $state, GdkColor $color)
    {
        $this->Handle->modify_bg ($state, $color);
    }

    public function ModifyForeground (TStateType $state, GdkColor $color)
    {
        $this->Handle->modify_fg ($state, $color);
    }

    public function ModifyFont (PangoFontDescription $font)
    {
        $this->Handle->modify_font ($font);
    }

    public function ModifyStyle (TRcStyle $style)
    {
        $this->Handle->modify_style ($style->Handle);
    }

    public function ModifyText (TStateType $state, GdkColor $color)
    {
        $this->Handle->modify_text ($state, $color);
    }

    public function Path ()
    {
        return $this->Handle->path ();
    }

    public function PopColormap ()
    {
        $this->Handle->pop_colormap ();
    }

    public function PopCompositeChild ()
    {
        $this->Handle->pop_composite_child ();
    }

    public function PushColormap (GdkColormap $colormap)
    {
        $this->Handle->push_colormap ($colormap);
    }

    public function PushCompositeChild ()
    {
        $this->Handle->push_composite_child ();
    }

    public function QueueDraw ()
    {
        $this->Handle->queue_draw ();
    }

    public function QueueDrawArea (int $x, int $y, int $width, int $height)
    {
        $this->Handle->queue_draw_area ($x, $y, $width, $height);
    }

    public function QueueResize ()
    {
        $this->Handle->queue_resize ();
    }

    public function QueueResizeNoRedraw ()
    {
        $this->Handle->queue_resize_no_redraw ();
    }

    public function Realize ()
    {
        $this->Handle->realize ();
    }

    public function RemoveAccelerator (TAccelGroup $accel_group, $accel_key, $accel_mods)
    {
        return $this->Handle->remove_accelerator ($accel_group, $accel_key, $accel_mods);
    }

    public function RemoveMnemonicLabel (TWidget $label)
    {
        $this->Handle->remove_mnemonic_label ($label);
    }

    public function RenderIcon (TStockItems $stock_id, TIconSize $size, string $detail = null)
    {
        return $this->Handle->render_icon ($stock_id, $size, $detail);
    }

    public function Reparent (TWidget $new_parent)
    {
        $this->Handle->reparent ($new_parent->Handle);
    }

    public function ResetRCStyles ()
    {
        $this->Handle->reset_rc_styles ();
    }

    public function SelectionAddTarget ($selection, $target, $info)
    {
        $this->Handle->selection_add_target ($selection, $target, $info);
    }

    public function SelectionClear ($event)
    {
        $this->Handle->selection_clear ($event);
    }

    public function SelectionClearTargets ($selection)
    {
        $this->Handle->selection_clear_targets ($selection);
    }

    public function SelectionConvert ($selection, $target, $time = null)
    {
        return $this->Handle->selection_convert ($selection, $target, $time);
    }

    public function SelectionOwnerSet ($selection, $time = null)
    {
        return $this->Handle->selection_owner_set ($selection, $time);
    }

    public function SelectionRemoveAll ()
    {
        $this->Handle->selection_remove_all ();
    }

    public function SendExpose (GdkEvent $event)
    {
        return $this->Handl->send_expose ($event);
    }

    public function SetAccelPath (string $accel_path, TAccelGroup $accel_group)
    {
        $this->Handle->set_accel_path ($accel_path, $accel_group);
    }

    public function SetAppPaintable (bool $app_paintable)
    {
        $this->Handle->set_app_paintable ($app_paintable);
    }

    public function SetChildVisible (bool $is_visible)
    {
        $this->Handle->set_child_visible ($is_visible);
    }

    public function SetColormap (GdkColormap $colormap)
    {
        $this->Handle->set_colormap ($colormap);
    }

    public function SetCompositeName (string $name)
    {
        $this->Handle->set_composite_name ($name);
    }

    public function SetDefaultColormap (GdkColormap $colormap)
    {
        $this->Handle->set_default_colormap ($colormap);
    }

    public function SetDefaultDirection (TTextDirection $dir)
    {
        $this->Handle->set_default_direction ($dir);
    }

    public function SetDirection (TTextDirection $dir)
    {
        $this->Handle->set_direction ($dir);
    }

    public function SetDoubleBuffered (bool $double_buffered)
    {
        $this->Handle->set_double_buffered ($double_buffered);
    }

    public function SetEnabled (bool $enabled)
    {
        $this->SetSensitive ($enabled);
    }

    public function SetEvents (int $events)
    {
        $this->Handle->set_events ($events);
    }

    public function SetExtensionEvents (TExtensionMode $mode)
    {
        $this->Handle->set_extension_events ($mode);
    }

    public function SetHint (string $text)
    {
        $this->SetTooltipText ($text);
    }

    public function SetHintMarkup (string $markup)
    {
        $this->SetTooltipMarkup ($markup);
    }

    public function SetName (string $name)
    {
        $this->Handle->set_name ($name);
    }

    public function SetNoShowAll (bool $no_show_all)
    {
        $this->Handle->set_no_show_all ($no_show_all);
    }

    public function SetParentWidget (GtkWidget $parent)
    {
        $this->Handle->set_parent ($parent);
    }

    public function SetParentWindow (GdkWindow $parent_window)
    {
        $this->Handle->set_parent_window ($parent_window);
    }

    public function SetRedrawOnAllocate (bool $redraw_on_allocate)
    {
        $this->Handle->set_redraw_on_allocate ($redraw_on_allocate);
    }

    public function SetScrollAdjustments (TAdjustment $hadjustment, TAdjustment $vadjustment)
    {
        $this->Handle->set_scroll_adjustments ($hadjustment, $vadjustment);
    }

    public function SetSensitive (bool $sensitive)
    {
        $this->Handle->set_sensitive ($sensitive);
    }

    public function SetSizeRequest (int $width, int $height)
    {
        $this->Handle->set_size_request ($width, $height);
    }

    public function SetState (TStateType $state)
    {
        $this->Handle->set_state ($state);
    }

    public function SetStyle (TStyle $style)
    {
        $this->Handle->set_style ($style);
    }

    public function SetTooltipMarkup (string $markup)
    {
        $this->Handle->set_tooltip_markup ($markup);
    }

    public function SetTooltipText (string $text)
    {
        $this->Handle->set_tooltip_text ($text);
    }

    public function SetVisible (bool $visible)
    {
        if ($visible) $this->Show ();
        else $this->Hide ();

        // return $this->Handle->set_visible ($visible, $all);
    }

    public function SetVisibleAll (bool $visible)
    {
        if ($visible) $this->ShowAll ();
        else $this->HideAll ();

        // return $this->Handle->set_visible ($visible, $all);
    }

    public function ShapeCombineMask ($shape_mask, $offset_x, $offset_y)
    {
        $this->Handle->shape_combine_mask ($shape_mask, $offset_x, $offset_y);
    }

    public function Show ()
    {
        $this->Handle->show ();
    }

    public function ShowAll ()
    {
        $this->Handle->show_all ();
    }

    public function ShowNow ()
    {
        $this->Handle->show_now ();
    }

    public function SizeAllocate (TAllocation $allocation)
    {
        $this->Handle->size_allocate ($allocation);
    }

    public function SizeRequest (TRequisition $requisition)
    {
        $this->Handle->size_request ($requisition);
    }

    public function ThawChildNotify ()
    {
        $this->Handle->thaw_child_notify ();
    }

    public function TranslateCoordinates (TWidget $dest_widget, int $src_x, int $src_y)
    {
        return $this->Handle->translate_coordinates ($dest_widget, $src_x, $src_y);
    }

    public function Unmap ()
    {
        $this->Handle->unmap ();
    }

    public function Unparent ()
    {
        $this->Handle->unparent ();
    }

    public function Unrealize ()
    {
        $this->Handle->unrealize ();
    }

    /**
     * BOX Child Packing
     */
    public function GetExpanded ()
    {
        if ($this->Parent instanceof TBox)
        {
            $result = $this->Parent->QueryChildPacking ($this);

            return $result [0];
        }
    }

    public function GetFilled ()
    {
        if ($this->Parent instanceof TBox)
        {
            $result = $this->Parent->QueryChildPacking ($this);

            return $result [1];
        }
    }

    public function GetPackType ()
    {
        if ($this->Parent instanceof TBox)
        {
            $result = $this->Parent->QueryChildPacking ($this);

            return $result [3];
        }
    }

    public function GetPadded ()
    {
        if ($this->Parent instanceof TBox)
        {
            $result = $this->Parent->QueryChildPacking ($this);

            return $result [2];
        }
    }

    public function SetExpanded (bool $expanded)
    {
        if ($this->Parent instanceof TBox)
        {
            $this->Parent->setChildPacking ($this, $expanded, $this->Filled, $this->Padded, $this->PackType);
        }
    }

    public function SetFilled (bool $filled)
    {
        if ($this->Parent instanceof TBox)
        {
            $this->Parent->setChildPacking ($this, $this->Expanded, $filled, $this->Padded, $this->PackType);
        }
    }

    public function SetPackType (bool $pack_type)
    {
        if ($this->Parent instanceof TBox)
        {
            $this->Parent->SetChildPacking ($this, $this->Expanded, $this->Filled, $this->Padded, $pack_type);
        }
    }

    public function SetPadded (bool $padded)
    {
        if ($this->Parent instanceof TBox)
        {
            $this->Parent->SetChildPacking ($this, $this->Expanded, $this->Filled, $padded, $this->PackType);
        }
    }

    /**
     * TABLE Child Packing
     */
    public function SetAttachOptions (array $options)
    {
        if ($this->Parent instanceof TTable)
        {
            $this->Parent->Attach (
                $this,
                $options [0], // left
                $options [1], // right
                $options [2], // top
                $options [3]  // bottom
            );
        }
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Accessible':       { $result = $this->GetAccessible ();       break; }
        case 'Allocation':       { $result = $this->GetAllocation ();       break; }
        case 'ChildRequisition': { $result = $this->GetChildRequisition (); break; }
        case 'ChildVisible':     { $result = $this->GetChildVisible ();     break; }
        case 'Colormap':         { $result = $this->GetColormap ();         break; }
        case 'CompositeName':    { $result = $this->GetCompositeName ();    break; }
        case 'DefaultColormap':  { $result = $this->GetDefaultColormap ();  break; }
        case 'DefaultDirection': { $result = $this->GetDefaultDirection (); break; }
        case 'DefaultStyle':     { $result = $this->GetDefaultStyle ();     break; }
        case 'DefaultVisual':    { $result = $this->GetDefaultVisual ();    break; }
        case 'Direction':        { $result = $this->GetDirection ();        break; }
        case 'Display':          { $result = $this->GetDisplay ();          break; }
        case 'Events':           { $result = $this->GetEvents ();           break; }
        case 'Enabled':          { $result = $this->GetEnabled ();          break; }
        case 'Expanded':         { $result = $this->GetExpanded ();         break; }
        case 'ExtensionEvents':  { $result = $this->GetExtensionEvents ();  break; }
        case 'Filled':           { $result = $this->GetFilled ();           break; }
        case 'Height':
        {
            list ($width, $height) = $this->getSizeRequest ();

            $result = $height;

            break;
        }
        case 'Hint':             { $result = $this->GetHint ();             break; }
        case 'HintMarkup':       { $result = $this->GetHintMarkup ();       break; }
        case 'ModifierStyle':    { $result = $this->GetModifierStyle ();    break; }
        case 'Name':             { $result = $this->GetName ();             break; }
        case 'NoShowAll':        { $result = $this->GetNoShowAll ();        break; }
        case 'PackType':         { $result = $this->GetPackType ();         break; }
        case 'Padded':           { $result = $this->GetPadded ();           break; }
        case 'PangoContext':     { $result = $this->GetPangoContext ();     break; }
        case 'ParentWidget':     { $result = $this->GetParentWidget ();     break; }
        case 'ParentWindow':     { $result = $this->GetParentWindow ();     break; }
        case 'Pointer':          { $result = $this->GetPointer ();          break; }
        case 'RootWindow':       { $result = $this->GetRootWindow ();       break; }
        case 'Screen':           { $result = $this->GetScreen ();           break; }
        case 'Settings':         { $result = $this->GetSettings ();         break; }
        case 'SizeRequest':      { $result = $this->GetSizeRequest ();      break; }
        case 'Style':            { $result = $this->GetStyle ();            break; }
        case 'Toplevel':         { $result = $this->GetToplevel ();         break; }
        case 'Visual':           { $result = $this->GetVisual ();           break; }
        case 'Width':
        {
            list ($width, $height) = $this->getSizeRequest ();

            $result = $width;

            break;
        }
        default:                 { $result = parent::__get ($var);                 }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'AccelPath':
        {
            list ($accep_path, $accel_group) = $val;

            $this->SetAccelPath ($accel_path, $accel_group);

            break;
        }
        case 'AppPaintable':     { $this->SetAppPaintable ($val);     break; }
        case 'AttachOptions':    { $this->SetAttachOptions ($val);    break; }
        case 'ChildVisible':     { $this->SetChildVisible ($val);     break; }
        case 'Colormap':         { $this->SetColormap ($val);         break; }
        case 'CompositeName':    { $this->SetCompositeName ($val);    break; }
        case 'DefaultColormap':  { $this->SetDefaultColormap ($val);  break; }
        case 'DefaultDirection': { $this->SetDefaultDirection ($val); break; }
        case 'Direction':        { $this->SetDirection ($val);        break; }
        case 'DoubleBuffered':   { $this->SetDoubleBuffered ($val);   break; }
        case 'Events':           { $this->SetEvents ($val);           break; }
        case 'Expanded':         { $this->SetExpanded ($val);         break; }
        case 'ExtensionEvents':  { $this->SetExtensionEvents ($val);  break; }
        case 'Enabled':          { $this->SetEnabled ($val);          break; }
        case 'Filled':           { $this->SetFilled ($val);           break; }
        case 'Height':
        {
            $width = $this->Width;

            $this->SetSizeRequest ($width, $val);

            break;
        }
        case 'Hint':             { $this->SetHint ($val);             break; }
        case 'HintMarkup':       { $this->SetHintMarkup ($val);       break; }
        case 'Name':             { $this->SetName ($val);             break; }
        case 'NoShowAll':        { $this->SetNoShowAll ($val);        break; }
        case 'PackType':         { $this->SetPackType ($val);         break; }
        case 'Padded':           { $this->SetPadded ($val);           break; }
        case 'ParentWidget':     { $this->SetParentWidget ($val);     break; }
        case 'ParentWindow':     { $this->SetParentWindow ($val);     break; }
        case 'RedrawOnAllocate': { $this->SetRedrawOnAllocate ($val); break; }
        case 'ScrollAdjustments':
        {
            list ($hadjustment, $vadjustment) = $val;

            $this->SetScrollAdjustments ($hadjustment, $vadjustment);

            break;
        }
        case 'Sensitive':        { $this->SetSensitive ($val);        break; }
        case 'SizeRequest':      { $this->SetSizeRequest ($val);      break; }
        case 'State':            { $this->SetState ($val);            break; }
        case 'Style':            { $this->SetStyle ($val);            break; }
        case 'Visible':          { $this->SetVisible ($val);          break; }
        case 'VisibleAll':       { $this->SetVisibleAll ($val);       break; }
        case 'Width':
        {
            $height = $this->Height;

            $this->SetSizeRequest ($val, $height);

            break;
        }
        default:                 { parent::__set ($var, $val);               }
        }
    }
}

