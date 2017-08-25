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
 * Class TApplication
 *
 * @property string $Description
 * @property string $Title
 * @property string $Version
 *
 * @property TForm   $MainForm
 * @property TWindow $MainWindow
 *
 * @property string|array $OnTerminate
 */
class TApplication extends TObject
{
    protected $_title       = "Application";
    protected $_description = null;
    protected $_version     = null;

    public $ActiveWindow = null;

    /**
     * Components
     */
    public $MainForm;
    public $MainWindow;

    /**
     * Events
     */
    public $OnTerminate;

    public function __construct ()
    {
        parent::__construct ();

        $this->Name = 'TApplication';
    }

    public function OnFatalError ()
    {
        $error = error_get_last ();
        if (empty ($error)) return false;

        $this->ShowException (new Exception(
            sprintf ("%s\n%s: %d\n%s: %s\n%s: %s\n%s: %d\n",
                $this->__('--- FATAL ERROR ---'),
                $this->__('Type'),    $error ['type'],
                $this->__('Message'), $error ['message'],
                $this->__('File'),    $error ['file'],
                $this->__('Line'),    $error ['line']
            )
        ));
    }

    /**
     * Methods
     */
    public function CreateBlock ($klass)
    {
        $blockClassName = $this->_getConfig ()->getBlockClassName ($klass);

        if (class_exists ($blockClassName, true))
        {
            $block = new $blockClassName;

            // $this->LoadDfmFile ($blockClassName);

            return $block;
        }
        else
        {
            throw new Exception ($this->__('Class not found: %s', $blockClassName));
        }
    }

    public function CreateForm ($klass)
    {
        $formClassName = $this->_getConfig ()->getWidgetClassName ($klass);

        if (class_exists ($formClassName, true))
        {
            $form = $this->LoadDfmFile ($formClassName);
            if ($form && !$this->MainForm) $this->MainForm = $form;

            return $form;
        }
        else
        {
            throw new Exception ($this->__('Class not found: %s', $formClassName));
        }
    }

    public function CreateWidget ($klass, TObject $owner = null, TObject $parent = null)
    {
        $widgetClassName = $this->_getConfig ()->getWidgetClassName ($klass);

        if (class_exists ($widgetClassName, true))
        {
            $widget = $this->LoadDfmFile ($widgetClassName, $owner, $parent);

            return $widget;
        }
        else
        {
            throw new Exception ($this->__('Class not found: %s', $widgetClassName));
        }
    }

    public function CreateWindow ($klass)
    {
        $windowClassName = $this->_getConfig ()->getWidgetClassName ($klass);

        if (class_exists ($windowClassName, true))
        {
            $window = $this->LoadDfmFile ($windowClassName);

            if ($window && !$this->MainWindow) $this->MainWindow = $window;

            return $window;
        }
        else
        {
            throw new Exception ($this->__('Class not found: %s', $windowClassName));
        }
    }

    public function DoEvents ()
    {
        while ($this->EventsPending ()) $this->MainIteration ();
    }

    public function EventsPending ()
    {
        return Gtk::events_pending ();
    }

    public function GetErrorHandler ()
    {
        $closure = function (
            $errno, $errstr, $errfile, $errline /* , $errcontext */
        )
        {
            /**
             * Ignore casting errors and declarations should be compatible.
             */
            if (in_array ($errno, array (E_RECOVERABLE_ERROR, E_STRICT))) return true;

            echo sprintf ("%s\n%s: %d\n%s: %s\n%s: %s\n%s: %d\n",
                $this->__('--- ERROR ---'),
                $this->__('Number'), $errno,
                $this->__('String'), $errstr,
                $this->__('File'),   $errfile,
                $this->__('Line'),   $errline
            );
        };

        return $closure;
    }

    public function GetDescription ()
    {
        return $this->_description;
    }

    public function GetTitle ()
    {
        return $this->_title;
    }

    public function GetVersion ()
    {
        return $this->_version;
    }

    public function Init ()
    {
        set_error_handler ($this->GetErrorHandler ());

        $this->LoadLibrary ('cairo');
        $this->LoadLibrary ('php-gtk', 'php_gtk2');

        require GAMUZA_DESKTOP_GTK_DEFINES;
        require GAMUZA_DESKTOP_GTK_ENUMS;

        $this->Reinit ();

        $config = $this->_getConfig ();

        $this->Description = $config->GetDescription ();
        $this->Title       = $config->GetTitle ();
        $this->Version     = $config->GetVersion ();

        register_shutdown_function (array ($this, 'OnFatalError'));
    }

    public function LoadDfmFile (string $className, $owner = null, $parent = null)
    {
        $owner  = $owner ? $owner : $this;
        $parent = $parent ? $parent : $this;

        if (defined ("{$className}::DFM_FILE"))
        {
            $configModel = $this->_getConfig ();
            $moduleName  = strcmp ($className::MODULE_NAME, parent::MODULE_NAME) ? $className::MODULE_NAME : $configModel::MODULE_NAME;
            $filePath = $this->_getModuleDir ('dfm', $moduleName);
            $fileName = $className::DFM_FILE;

            $handle = fopen ($filePath . DS . $fileName, 'r');
            if (!$handle)
            {
                throw new Exception (__("Cannot open DFM file '%s' for class '%s'", $fileName, $className));
            }
            else
            {
                $object = $this->_getHelper ()->_parseDfmFileObject ($fileName, $handle, $owner, $parent);

                fclose ($handle);
            }
        }
        else
        {
            $object = new $className;

            $object->Owner  = $owner;
            $object->Parent = $parent;

            if (method_exists ($object, 'OnLoaded')) $object->OnLoaded ();
        }

        return $object;
    }

    private function LoadLibrary (string $libname, string $soname = null)
    {
        if (!extension_loaded ($libname))
        {
            $extension = ($soname ? $soname : $libname) . '.' . PHP_SHLIB_SUFFIX;

            if (!dl ($extension))
            {
                throw new Exception (__("Cannot load PHP dynamic library: %s", $extension));
            }
        }
    }

    public function MainIteration ()
    {
        Gtk::main_iteration ();
    }

    public function MessageBox (
        string $text,
        string $title = null,
        TMessageType $style = null,
        TButtonsType $buttons = null,
        TWindow $parent = null
    )
    {
        // prevent GTK errors on strings
        $_text = str_replace ("\0", "", $text);
        $_title = str_replace ("\0", "", $title);

        $_parent = !empty ($parent) ? $parent : $this->ActiveWindow;
        $_icon = !empty ($_parent) ? $_parent->IconFile : null;
        $_window = !empty ($_parent) ? $_parent->Handle : null;
        $_title = !empty ($_title) ? $_title : $this->Title;
        $_style = !empty ($style) ? $style : msgInfo;
        $_buttons = !empty ($buttons) ? $buttons : btnOk;

        $dialog = new GtkMessageDialog ($_window, Gtk::DIALOG_MODAL, $_style, $_buttons, $_text);

        $dialog->set_markup ($this->latin1 ($_text));
        $dialog->set_title ($this->latin1 ($_title));
        $dialog->set_transient_for ($_window);
        $dialog->set_position (Gtk::WIN_POS_CENTER);

        if ($_icon) $dialog->set_icon_from_file ($_icon);

        $result = $dialog->run ();
        $dialog->destroy();

        return $result;
    }

    public function Reinit ()
    {
        $this->_reset ();

        $this->_init ();
    }

    public function Run ()
    {
        try
        {
            Gtk::main ();

            $this->_call_user_func ($this, $this->OnTerminate);
        }
        catch (Exception $e)
        {
            $this->ShowException ($e);

            self::Run ();
        }
    }

    public function SetDescription (string $text)
    {
        $this->_description = $text;
    }

    public function SetTitle (string $text)
    {
        $this->_title = $text;
    }

    public function SetVersion (string $text)
    {
        $this->_version = $text;
    }

    public function ShowException (Exception $e)
    {
        $this->MessageBox ($e->getMessage (), $this->__("%s - Exception", $this->Title), msgError);
    }

    public function Terminate (/* int */ $error_code = 0)
    {
        exit ($error_code);
    }

    public function Quit ()
    {
        Gtk::main_quit ();
    }

    public function _getHelper (/* string */ $klass = 'desktop/application')
    {
        return Mage::helper ($klass);
    }

    private function _init ()
    {
        $this->_getApp ('admin', 'store', array ('config_model' => Desktop::ConfigModel ()))->setUseSessionInUrl (false);

        $this->_getApp ()->setErrorHandler ($this->GetErrorHandler ());

        $this->_getConfig ()->cleanCache ();
    }

    private function _reset ()
    {
        Mage::$headersSentThrowsException = false;

        Mage::reset ();
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
        case 'Description': { $result = $this->GetDescription (); break; }
        case 'Title':       { $result = $this->GetTitle ();       break; }
        case 'Version':     { $result = $this->GetVersion ();     break; }
        default:            { $result = parent::__get ($var);            }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Description': { $this->SetDescription ($val); break; }
        case 'Title':       { $this->SetTitle ($val);       break; }
        case 'Version':     { $this->SetVersion ($val);     break; }
        default:            { parent::__set ($var, $val);          }
        }
    }
}

