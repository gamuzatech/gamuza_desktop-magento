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

    const LATIN1_FORMAT = 'ISO-8859-1';
    const UTF8_FORMAT   = 'UTF-8';

    const CAST_PATTERN = '/^O:\d+:"[^"]++"/';

    const PASCAL_CASE_PATTERN = '/(?:^|_)([a-z])/';

    const SNAKE_CASE_PATTERN = '/(?<!^)[A-Z]/';
    const SNAKE_CASE_REPLACE = '_$0';

    const UNQUOTE_PATTERN = "/[\"\'](.*)[\"\']/";
    const UNQUOTE_REPLACE = '${1}';

    public function cast (/* object */ $instance, /* string */ $klass)
    {
        $replace = 'O:' . strlen ($klass) . ':"' . $klass . '"';

	    $result = unserialize (preg_replace (self::CAST_PATTERN, $replace, serialize ($instance)));

        return $result;
    }

    public function date ($date = null, $format = null, $locale = null, $useTimezone = true)
    {
        $_format = $format ? $format : static::DATE_FORMAT;

        return Mage::app ()->getLocale ()->date ($date, null, $locale, $useTimezone)->toString ($_format);
    }

    public function latin1 (/* string */ $text)
    {
        return mb_convert_encoding ($text, self::LATIN1_FORMAT, self::UTF8_FORMAT);
    }

    public function unquote (/* string */ $text)
    {
        return preg_replace (self::UNQUOTE_PATTERN, self::UNQUOTE_REPLACE, $text); // remove quotation marks
    }

    public function utf8 (/* string */ $text)
    {
        return mb_convert_encoding ($text, self::UTF8_FORMAT, self::LATIN1_FORMAT);
    }

    public function __toPascalCase (/* string */ $text)
    {
        $result = preg_replace_callback (self::PASCAL_CASE_PATTERN, function ($matches) { return strtoupper ($matches [1]); }, $text);

        return $result;
    }

    public function __toSnakeCase (/* string */ $text)
    {
        $result = strtolower (preg_replace (self::SNAKE_CASE_PATTERN, self::SNAKE_CASE_REPLACE, $text));

        return $result;
    }
}

