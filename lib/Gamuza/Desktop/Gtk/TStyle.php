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
 * Class TStyle
 *
 * @property array   $Background
 * @property GdkFont $Front
 *
 * @property string|array $OnRealize
 * @property string|array $OnUnrealize
 */
class TStyle extends System\TObject
{
    /**
     * Events
     */
    public function __construct ()
    {
        parent::__construct ();

        $this->Handle = new GtkStyle ();
    }

    /**
     * Methods
     */
    public function ApplyDefaultBackground (GdkWindow $window, bool $set_bg, TStateType $state_type, GdkRectangle $area, int $x, int $y, int $width, int $height)
    {
        $this->Handle->apply_default_background ($window, $set_bg, $state_type, $area, $x, $y, $width, $height);
    }

    public function ApplyDefaultPixmap (GdkWindow $window, bool $set_bg, GdkRectangle $area, $x, $y, $width, $height)
    {
        $this->Handle->apply_default_pixmap ($window, $set_bg, $area, $x, $y, $width, $height);
    }

    public function Attach (GdkWindow $window)
    {
        return $this->Handle->attach ($window);
    }

    public function Copy ()
    {
        return $this->Handle->copy ();
    }

    public function Detach ()
    {
        $this->Handle->detach ();
    }

    public function DrawArrow (GdkWindow $window, TStateType $state_type, TShadowType $shadow_type, TArrowType $arrow_type, bool $fill, int $x, int $y, int $width, int $height)
    {
        $this->Handle->draw_arrow ($window, $state_type, $shadow_type, $arrow_type, $fill, $x, $y, $width, $height);
    }

    public function DrawBox (GdkWindow $window, TStateType $state_type, TShadowType $shadow_type, int $x, int $y, int $width, int $height)
    {
        $this->Handle->draw_box  ($window, $state_type, $shadow_type, $x, $y, $width, $height);
    }

    public function DrawDiamond (GdkWindow $window, TStateType $state_type, TShadowType $shadow_type, int $x, int $y, int $width, int $height)
    {
        $this->Handle->draw_diamond ($window, $state_type, $shadow_type, $x, $y, $width, $height);
    }

    public function DrawExpander (GdkWindow $window, TStateType $state_type, int $x, int $y, TExpanderStyle $expander_style)
    {
        $this->Handle->draw_expander ($window, $state_type, $x, $y, $expander_style);
    }

    public function DrawHLine (GdkWindow $window, TStateType $state_type, int $x1, int $x2, int $y)
    {
        $this->Handle->draw_hline ($window, $state_type, $x1, $x2, $y);
    }

    public function DrawLayout (GdkWindow $window, TStateType $state_type, bool $use_text, int $x, int $y, PangoLayout $layout)
    {
        $this->Handle->draw_layout ($window, $state_type, $use_text, $x, $y, $layout);
    }

    public function DrawResizeGrip (GdkWindow $window, TStateType $state_type, GdkWindowEdge $edge, int $x, int $y, int $width, int $height)
    {
        $this->Handle->draw_resize_grip ($window, $state_type, $edge, $x, $y, $width, $height);
    }

    public function DrawShadow (GdkWindow $window, TStateType $state_type, TShadowType $shadow_type, int $x, int $y, int $width, int $height)
    {
        $this->Handle->draw_shadow ($window, $state_type, $shadow_type, $x, $y, $width, $height);
    }

    public function DrawString (GdkWindow $window, TStateType $state_type, int $x, int $y, string $text)
    {
        $this->Handle->draw_string ($window, $state_type, $x, $y, $text);
    }

    public function DrawVLine (GdkWindow $window, TStateType $state_type, int $y1, int $y2, int $x)
    {
        $this->Handle->draw_vline ($window, $state_type, $y1, $y2, $x);
    }

    public function GetFont ()
    {
        return $this->Handle->get_font ();
    }

    public function LookupIconSet (string $stock_id)
    {
        return $this->Handle->lookup_icon_set ($stock_id);
    }

    public function PaintArrow (GdkWindow $window, TStateType $state_type, TShadowType $shadow_type,
        GdkRectangle $area, TWidget $widget, string $detail, TArrowType $arrow_type,
        bool $fill, int $x, int $y, int $width, int $height)
    {
        $this->Handle->paint_arrow ($window, $state_type, $shadow_type,
            $area, $widget->Handle, $detail, $arrow_type,
            $fill, $x, $y, $width, $height);
    }

    public function PaintBox (GdkWindow $window, TStateType $state_type, TShadowType $shadow_type,
        GdkRectangle $area, TWidget $widget, string $detail,
        int $x, int $y, int $width, int $height)
    {
        $this->Handle->paint_box ($window, $state_type, $shadow_type,
            $area, $widget->Handle, $detail,
            $x, $y, $width, $height);
    }

    public function PaintBoxGap (GdkWindow $window, TStateType $state_type, TShadowType $shadow_type,
        GdkRectangle $area, TWidget $widget, string $detail,
        int $x, int $y, int $width, int $height,
        TPositionType $gap_side, int $gap_x, int $gap_width)
    {
        $this->Handle->paint_box_gap ($window, $state_type, $shadow_type,
            $area, $widget->Handle, $detail,
            $x, $y, $width, $height,
            $gap_size, $gap_x, $gap_width);
    }

    public function PaintCheck (GdkWindow $window, TStateType $state_type, TShadowType $shadow_type,
        GdkRectangle $area, TWidget $widget, string $detail,
        int $x, int $y, int $width, int $height)
    {
        $this->Handle->paint_check ($window, $state_type, $shadow_type,
            $area, $widget->Handle, $detail,
            $x, $y, $width, $height);
    }

    public function PaintDiamond (GdkWindow $window, TStateType $state_type, TShadowType $shadow_type,
        GdkRectangle $area, TWidget $widget, string $detail,
        int $x, int $y, int $width, int $height)
    {
        $this->Handle->paint_diamond ($window, $state_type, $shadow_type,
            $area, $widget->Handle, $detail,
            $x, $y, $width, $height);
    }

    public function PaintExpander (GdkWindow $window, TStateType $state_type,
        GdkRectangle $area, TWidget $widget, string $detail,
        int $x, int $y, TExpanderStyle $expander_style)
    {
        $this->Handle->paint_expander ($window, $state_type,
            $area, $widget->Handle, $detail,
            $x, $y, $expander_style);
    }

    public function PaintExtension (GdkWindow $window, TStateType $state_type, TShadowType $shadow_type,
        GdkRectangle $area, TWidget $widget, string $detail,
        int $x, int $y, int $width, int $height, TPositionType $gap_side)
    {
        $this->Handle->paint_extension ($window, $state_type, $shadow_type,
            $area, $widget->Handle, $detail,
            $x, $y, $width, $height, $gap_side);
    }

    public function PaintFlatBox (GdkWindow $window, TStateType $state_type, TShadowType $shadow_type,
        GdkRectangle $area, TWidget $widget, string $detail,
        int $x, int $y, int $width, int $height)
    {
        $this->Handle->paint_flat_box ($window, $state_type, $shadow_type,
            $area, $widget->Handle, $detail,
            $x, $y, $width, $height);
    }

    public function PaintFocus (GdkWindow $window, TStateType $state_type,
        GdkRectangle $area, TWidget $widget, string $detail,
        int $x, int $y, int $width, int $height)
    {
        $this->Handle->paint_focus ($window, $state_type,
            $area, $widget->Handle, $detail,
            $x, $y, $width, $height);
    }

    public function PaintHandle (GdkWindow $window, TStateType $state_type, TShadowType $shadow_type,
        GdkRectangle $area, TWidget $widget, string $detail,
        int $x, int $y, int $width, int $height, TOrientation $orientation)
    {
        $this->Handle->paint_handle ($window, $state_type, $shadow_type,
            $area, $widget->Handle, $detail,
            $x, $y, $width, $height, $orientation);
    }

    public function PaintHLine (GdkWindow $window, TStateType $state_type,
        GdkRectangle $area, TWidget $widget, string $detail,
        int $x, int $x2, int $y)
    {
        $this->Handle->paint_hline ($window, $state_type,
            $area, $widget->Handle, $detail,
            $x, $x2, $y);
    }

    public function PaintLayout (GdkWindow $window, TStateType $state_type, bool $use_text,
        GdkRectangle $area, TWidget $widget, string $detail,
        int $x, int $y, PangoLayout $layout)
    {
        $this->Handle->paint_layout ($window, $state_type, $use_text,
            $area, $widget->Handle, $detail,
            $x, $y, $layout);
    }

    public function PaintOption (GdkWindow $window, TStateType $state_type, TShadowType $shadow_type,
        GdkRectangle $area, TWidget $widget, string $detail,
        int $x, int $y, int $width, int $height)
    {
        $this->Handle->paint_option ($window, $state_type, $shadow_type,
            $area, $widget->Handle, $detail,
            $x, $y, $width, $height);
    }

    public function PaintResizeGrip (GdkWindow $window, TStateType $state_type,
        GdkRectangle $area, TWidget $widget, string $detail, GdkWindowEdge $edge,
        int $x, int $y, int $width, int $height)
    {
        $this->Handle->paint_resize_grip ($window, $state_type,
            $area, $widget->Handle, $detail, $edge,
            $x, $y, $width, $height);
    }

    public function PaintShadow (GdkWindow $window, TStateType $state_type, TShadowType $shadow_type,
        GdkRectangle $area, TWidget $widget, string $detail,
        int $x, int $y, int $width, int $height)
    {
        $this->Handle->paint_shadow ($window, $state_type, $shadow_type,
            $area, $widget->Handle, $detail,
            $x, $y, $width, $height);
    }

    public function PaintShadowGap (GdkWindow $window, TStateType $state_type, TShadowType $shadow_type,
        GdkRectangle $area, TWidget $widget, string $detail,
        int $x, int $y, int $width, int $height,
        TPositionType $gap_side, int $gap_x, int $gap_width)
    {
        $this->Handle->paint_shadow_gap ($window, $state_type, $shadow_type,
            $area, $widget->Handle, $detail,
            $x, $y, $width, $height,
            $gap_side, $gap_x, $gap_width);
    }

    public function PaintSlider (GdkWindow $window, TStateType $state_type, TShadowType $shadow_type,
        GdkRectangle $area, TWidget $widget, string $detail,
        int $x, int $y, int $width, int $height, TOrientation $orientation)
    {
        $this->Handle->paint_slider ($window, $state_type, $shadow_type,
            $area, $widget->Handle, $detail,
            $x, $y, $width, $height, $orientation);
    }

    public function PaintString (GdkWindow $window, TStateType $state_type,
        GdkRectangle $area, TWidget $widget, string $detail,
        int $x, int $y, string $text)
    {
        $this->Handle->paint_string ($window, $state_type,
            $area, $widget->Handle, $detail,
            $x, $y, $text);
    }

    public function PaintTab (GdkWindow $window, TStateType $state_type, TShadowType $shadow_type,
        GdkRectangle $area, TWidget $widget, string $detail,
        int $x, int $y, int $width, int $height)
    {
        $this->Handle->paint_tab ($window, $state_type, $shadow_type,
            $area, $widget->Handle, $detail,
            $x, $y, $width, $height);
    }

    public function PaintVLine (GdkWindow $window, TStateType $state_type,
        GdkRectangle $area, TWidget $widget, string $detail,
        int $y1, int $y2, int $x)
    {
        $this->Handle->paint_check ($window, $state_type,
            $area, $widget->Handle, $detail,
            $y1, $y2, $x);
    }

    public function RenderIcon (TIconSource $source, TTextDirection $direction, TStateType $state, TIconSize $size, TWidget $widget, string $detail)
    {
        return $this->Handle->render_icon ($source->Handle, $direction, $state, $size, $widget->Handle, $detail);
    }

    public function SetBackground (GdkWindow $window, TStateType $state_type)
    {
        $this->Handle->set_background ($window, $state_type);
    }

    public function SetFont (GdkFont $font)
    {
        $this->Handle->set_font ($font);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Font': { $result = $this->GetFont ();    break; }
        default:     { $result = parent::__get ($var);        }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Background':
        {
            list ($window, $state_type) = $val;

            $this->SetBackground ($window, $state_type);

            break;
        }
        case 'Font': { $this->SetFont ($val);      break; }
        default:     { parent::__set ($var, $val);        }
        }
    }
}

