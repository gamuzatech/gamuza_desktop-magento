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
 * Error reporting
 */
ini_set ('display_errors', 1);
ini_set ('error_reporting', E_ALL | E_STRICT);

/**
 * Startup configuration
 */
chdir (dirname (__FILE__));

define ('MAGENTO_ROOT', getcwd ());
define ('D_S', DIRECTORY_SEPARATOR);

@ include MAGENTO_ROOT . D_S . 'includes' . D_S . 'config.php';
@ include MAGENTO_ROOT . D_S . 'app' . D_S . 'bootstrap.php';
require   MAGENTO_ROOT . D_S . 'app' . D_S . 'Mage.php';
require   MAGENTO_ROOT . D_S . 'app' . D_S . 'Desktop.php';

# Varien_Profiler::enable ();

global $Welcome;

try
{
    $Application->Init ();

    /*
    if (!Mage::isInstalled ())
    {
        echo 'Gamuza Desktop is not installed yet, please complete install wizard first.' . PHP_EOL;

        exit (255);
    }
    */

    $Welcome = $Application->CreateWindow ('desktop/welcome');
    $Welcome->Show ();

    $Application->Run ();
}
catch (Exception $e)
{
    $Application->ShowException ($e);

    // echo ' ! Application Exception : ' . $e->getMessage () . PHP_EOL;

    // exit (255);
}

