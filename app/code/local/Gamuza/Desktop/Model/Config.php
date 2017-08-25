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

class Gamuza_Desktop_Model_Config extends Mage_Core_Model_Config
{
    const DEFAULT_LOCALE = 'pt_BR';

    const ENV_LANGUAGE = 'LANG';

    const MODULE_NAME = 'Gamuza_Desktop';

    protected $_language = null;

    public function __destruct ()
    {
        session_write_close ();
    }

    public function getDescription ()
    {
        return $this->__($this->_getStoreConfig ('desktop/general/description'));
    }

    public function getLanguage ()
    {
        if (empty ($this->_language))
        {
            $language = getenv (static::ENV_LANGUAGE);
            $this->_language = substr ($language, 0, strpos ($language, '.')); // remove .UTF-8
        }

        return $this->_language;
    }

    public function getIconFileName (string $filename)
    {
        return $this->getModuleDir ('icons', static::MODULE_NAME) . DS . $filename;
    }

    public function getImageFileName (string $filename)
    {
        return $this->getModuleDir ('images', static::MODULE_NAME) . DS . $filename;
    }

    public function getMiscFileName (string $filename)
    {
        return $this->getModuleDir ('files', static::MODULE_NAME) . DS . $filename;
    }

    public function getWidgetClassName (string $widgetType)
    {
        if (strpos ($widgetType, '/') === false)
        {
            return $widgetType;
        }

        return $this->getGroupedClassName ('widget', $widgetType);
    }

    public function getTitle ()
    {
        return $this->__($this->_getStoreConfig ('desktop/general/title'));
    }

    public function getVersion ()
    {
        return (string) $this->getNode ('modules/' . static::MODULE_NAME . '/version');
    }

    public function SetLocale (string $locale)
    {
        $this->_getLocale ()->setLocale ($locale ? $locale : static::DEFAULT_LOCALE);
    }

    /**
     * Get module directory by directory type
     *
     * @param   string $type
     * @param   string $moduleName
     * @return  string
     */
    public function getModuleDir ($type, $moduleName = null)
    {
        $_moduleName = $moduleName ? $moduleName : static::MODULE_NAME;

        $codePool = (string) $this->getModuleConfig ($_moduleName)->codePool;
        $dir = $this->getOptions ()->getCodeDir () . DS . $codePool . DS . uc_words ($_moduleName, DS);

        switch ($type)
        {
        case 'etc':
        {
            $dir .= DS . 'etc';

            break;
        }
        case 'controllers':
        {
            $dir .= DS . 'controllers';

            break;
        }
        case 'sql':
        {
            $dir .= DS . 'sql';

            break;
        }
        case 'data':
        {
            $dir .= DS . 'data';

            break;
        }
        case 'locale':
        {
            $dir .= DS . 'locale';

            break;
        }
        case 'dfm':
        {
            $dir .= DS . 'dfm';

            break;
        }
        case 'icons':
        {
            $dir .= DS . 'icons';

            break;
        }
        case 'images':
        {
            $dir .= DS . 'images';

            break;
        }
        case 'files':
        {
            $dir .= DS . 'files';

            break;
        }
        }

        $dir = str_replace ('/', DS, $dir);

        return $dir;
    }

    public function init ($options = array())
    {
        parent::init ($options);

        $this->_getApp ()->setCurrentStore (Mage_Core_Model_App::ADMIN_STORE_ID);

        $this->_getCoreSession ()->start ();

        $this->_getLocale ()->setLocale ($this->getLanguage ());

        $this->_getTranslator ()->init (Mage_Core_Model_App_Area::AREA_ADMINHTML, true);
    }

    protected function _getApp ()
    {
        return Mage::app ();
    }

    public function _getCoreSession ()
    {
        return Mage::getSingleton ('core/session', array ('name' => Mage_Adminhtml_Controller_Action::SESSION_NAMESPACE));
    }

    protected function _getLocale ()
    {
        return $this->_getApp ()->getLocale ();
    }

    protected function _getStoreConfig (string $path)
    {
        return Mage::getStoreConfig ($path);
    }

    protected function _getTranslator ()
    {
        return $this->_getApp ()->getTranslator ();
    }

    public function __()
    {
        $args = func_get_args ();

        $expr = new Mage_Core_Model_Translate_Expr (array_shift ($args), static::MODULE_NAME);
        array_unshift ($args, $expr);

        return $this->_getTranslator ()->translate ($args);
    }
}

