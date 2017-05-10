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

class Gamuza_Desktop_Helper_Data extends Mage_Core_Helper_Abstract
{
    const DATE_FORMAT = 'EEE dd MMM yyyy HH:mm:ss zzz';

    public function date ($date = null, $format = null, $locale = null, $useTimezone = true)
    {
        $_format = $format ? $format : static::DATE_FORMAT;

        return Mage::app ()->getLocale ()->date ($date, null, $locale, $useTimezone)->toString ($_format);
    }

    public function latin1 (/* string */ $text)
    {
        return mb_convert_encoding ($text, 'ISO-8859-1', 'UTF-8');
    }

    public function utf8 (/* string */ $text)
    {
        return mb_convert_encoding ($text, 'UTF-8', 'ISO-8859-1');
    }

    public function __toSnakeCase (/* string */ $text)
    {
        $pattern = '/(?<!^)[A-Z]/';
        $replacement = '_$0';

        $result = strtolower (preg_replace ($pattern, $replacement, $text));

        return $result;
    }
}

