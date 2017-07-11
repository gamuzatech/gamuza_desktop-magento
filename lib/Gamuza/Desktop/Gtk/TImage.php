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
 * Class TImage
 *
 * @property GdkPixbufAnimation $FromAnimation
 * @property string             $FromFile
 * @property array              $FromIconName
 * @property array              $FromIconSet
 * @property array              $FromImage
 * @property GdkPixbuf          $FromPixbuf
 * @property GkPixmap           $FromPixmap
 * @property array              $FromStock
 * @property int                $PixelSize
 */
class TImage extends TMisc
{
    /**
     * Events
     */
    public function __construct ()
    {
        parent::__construct ();

        $this->Handle = new GtkImage ();
    }

    /**
     * Methods
     */
    public static function NewFromAnimation (GdkPixbufAnimation $animation)
    {
        $image = new TImage ();
        $image->Handle = GtkImage::new_from_animation ($animation);

        return $image;
    }

    public static function NewFromFile (string $filename)
    {
        $image = new TImage ();
        $image->Handle = GtkImage::new_from_file ($filename);

        return $image;
    }

    public static function NewFromIconSet (TIconSet $iconset, TIconSize $size)
    {
        $image = new TImage ();
        $image->Handle = GtkImage::new_from_icon_set ($iconset, $size);

        return $image;
    }

    public static function NewFromImage (GdkImage $image, $mask)
    {
        $image = new TImage ();
        $image->Handle = GtkImage::new_from_image ($image, $mask);

        return $image;
    }

    public static function NewFromPixbuf (GdkPixbuf $pixbuf)
    {
        $image = new TImage ();
        $image->Handle = GtkImage::new_from_pixbuf ($pixbuf);

        return $image;
    }

    public static function NewFromPixmap (GdkPixmap $pixmap, $mask)
    {
        $image = new TImage ();
        $image->Handle = GtkImage::new_from_pixmap ($pixmap, $mask);

        return $image;
    }

    public static function NewFromStock (TStockItems $stock_id, TIconSize $size)
    {
        $image = new TImage ();
        $image->Handle = GtkImage::new_from_stock ($stock_id, $size);

        return $image;
    }

    public static function NewFromIconName (string $icon_name, $size)
    {
        $image = new TImage ();
        $image->Handle = GtkImage::new_from_icon_name ($icon_name, $size);

        return $image;
    }

    public function GetAnimation ()
    {
        return $this->Handle->get_animation ();
    }

    public function GetPixbuf ()
    {
        return $this->Handle->get_pixbuf ();
    }

    public function GetPixelSize ()
    {
        return $this->Handle->get_pixel_size ();
    }

    public function GetStorageType ()
    {
        return $this->Handle->get_storage_type ();
    }

    public function Set (GdkImage $image, GdkBitmap $mask)
    {
        $this->Handle->set ($image, $mask);
    }

    public function SetFromAnimation (GdkPixbufAnimation $animation)
    {
        $this->Handle->set_from_animation ($animation);
    }

    public function SetFromFile (string $filename)
    {
        $this->Handle->set_from_file ($filename);
    }

    public function SetFromIconName (TStockItems $icon_name, TIconSize $size)
    {
        $this->Handle->set_from_icon_name ($icon_name, $size);
    }

    public function SetFromIconSet (TIconSet $iconset, TIconSize $size)
    {
        $this->Handle->set_from_icon_set ($iconset, $size);
    }

    public function SetFromImage (GdkImage $image, GdkBitmask $mask)
    {
        $this->Handle->set_from_image ($image, $mask);
    }

    public function SetFromPixbuf (GdkPixbuf $pixbuf)
    {
        $this->Handle->set_from_pixbuf ($pixbuf);
    }

    public function SetFromPixmap (GdkPixmap $pixmap, $mask)
    {
        $this->Handle->SetFromPixmap ($pixmap, $mask);
    }

    public function SetFromStock (TStockItems $stock_id, TIconSize $size)
    {
        $this->Handle->set_from_stock ($stock_id, $size);
    }

    public function SetPixelSize (int $pixel_size)
    {
        $this->Handle->set_pixel_size ($pixel_size);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Animation':   { $result = $this->GetAnimation ();   break; }
        case 'Pixbuf':      { $result = $this->GetPixbuf ();      break; }
        case 'PixelSize':   { $result = $this->GetPixelSize ();   break; }
        case 'StorageType': { $result = $this->GetStorageType (); break; }
        default:            { $result = parent::__get ($var);            }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'FromAnimation': { $this->SetFromAnimation ($val); break; }
        case 'FromFile':      { $this->SetFromFile ($val);      break; }
        case 'FromIconName':
        {
            list ($icon_name, $size) = $val;

            $this->SetFromIconName ($icon_name, $size);

            break;
        }
        case 'FromIconSet':
        {
            list ($icon_set, $size) = $val;

            $this->SetFromIconSet ($icon_set, $size);

            break;
        }
        case 'FromImage':
        {
            list ($image, $mask) = $val;

            $this->SetFromImage ($image, $mask);

            break;
        }
        case 'FromPixbuf':   { $this->SetFromPixbuf ($val);     break; }
        case 'FromPixmap':
        {
            list ($pixmap, $mask) = $val;

            $this->SetFromPixmap ($pixmap, $mask);

            break;
        }
        case 'FromStock':
        {
            list ($stock_id, $size) = $val;

            $this->SetFromStock ($stock_id, $size);

            break;
        }
        case 'PixelSize':     { $this->SetPixelSize ($val);     break; }
        default:              { parent::__set ($var, $val);            }
        }
    }
}

