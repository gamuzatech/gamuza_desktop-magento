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

if (version_compare (phpversion (), '5.4.0', '<') === true || strcmp (php_sapi_name (), 'cli'))
{
    echo _('Whoops, it looks like you have an invalid PHP version. Gamuza Desktop supports PHP CLI version 5.4.0 or newer.') . PHP_EOL;

    exit (1);
}

ini_set ('memory_limit', -1);

mb_internal_encoding ('UTF-8');

/**
 * Class Desktop
 */
final class Desktop
{
    private static $_application = null;

    private static $_config_model = 'Gamuza_Desktop_Model_Config';

    public static function Application ()
    {
        if (!empty (self::$_application))
        {
            return self::$_application;
        }

        if (!defined ('GAMUZA_DESKTOP_LIB_PATH'))
        {
            $desktopAppPath = BP . DS . 'app' . DS . 'code' . DS . 'desktop';
            $desktopLibPath = BP . DS . 'lib' . DS . 'Gamuza' . DS . 'Desktop';
            $desktopGtkPath = $desktopLibPath . DS . 'Gtk';

            define ('GAMUZA_DESKTOP_LIB_PATH',    $desktopLibPath);
            define ('GAMUZA_DESKTOP_GTK_PATH',    $desktopGtkPath);
            define ('GAMUZA_DESKTOP_GTK_DEFINES', $desktopGtkPath . DS . 'defines.php');
            define ('GAMUZA_DESKTOP_GTK_ENUMS',   $desktopGtkPath . DS . 'enums.php');

            set_include_path ($desktopAppPath . PS . get_include_path () . PS . GAMUZA_DESKTOP_LIB_PATH . PS . GAMUZA_DESKTOP_GTK_PATH);
        }

        self::$_application = new TApplication ();

        return self::$_application;
    }

    public static function Autoload ($className)
    {
        if (strpos ($className, '\\') === false) return false;

        $classFile = str_replace ('$', DIRECTORY_SEPARATOR, ucwords (str_replace ('\\', '$', $className))) . '.php';

        return include $classFile;
    }

    public static function ConfigModel ($className = null)
    {
        if (!empty ($className))
        {
            self::$_config_model = $className;
        }

        return self::$_config_model;
    }

    public static function Init ()
    {
        $autoload = Varien_Autoload::instance ();

        $functions = spl_autoload_functions ();
        foreach ($functions as $_function)
        {
            spl_autoload_unregister ($_function);
        }

        spl_autoload_register (array ('Desktop', 'Autoload'));
        spl_autoload_register (array ($autoload, 'autoload'));
    }

    public static function Register ($key, $value, $graceful = false)
    {
        Mage::unregister ($key);

        Mage::register ($key, $value, $graceful);
    }

    public static function Registry ($key)
    {
        return Mage::registry ($key);
    }

    public static function Unregister ($key)
    {
        Mage::unregister ($key);
    }
}

Desktop::Init ();

$Application = Desktop::Application ();

umask (0);

