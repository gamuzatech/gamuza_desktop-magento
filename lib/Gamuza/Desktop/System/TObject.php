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

namespace System;

use Mage;
use Exception;
use GObject;

/**
 * Class TObject
 *
 * @property GObject $Handle
 *
 * @property TObject $Owner
 * @property TObject $Parent
 */
class TObject
{
    const MODULE_NAME = 'Gamuza_Desktop';

    const EVENT_SIGNAL     = 0;
    const EVENT_CALLER     = 1;
    const EVENT_CALLBACK   = 2;
    const EVENT_HANDLER    = 3;

    protected $_events = null;
    protected $_handle = null;

    /**
     * Components
     */
    public $Owner;
    public $Parent;

    /**
     * Events
     */
    public function __construct (/* [ <paramdef>string gtype</paramdef> <paramdef>array properties</paramdef> ] */)
    {
        // $this->Handle = new GObject (/* gtype, properties */);
    }

    public function __destruct ()
    {
        // nothing
    }

    public function __connect ($signal, $event, $callback)
    {
        $caller = array ($this, '__on_event');

        $handler_id = $this->Connect ($signal, $caller, $callback);

        $this->_events [$event] = array (
            self::EVENT_SIGNAL   => $signal,
            self::EVENT_CALLER   => $caller,
            self::EVENT_CALLBACK => $callback,
            self::EVENT_HANDLER  => $handler_id
        );
    }

    public function __disconnect ($var)
    {
        $this->Disconnect ($this->_events [$var][self::EVENT_HANDLER]);

        unset ($this->_events [$var]);
    }

    public function __event ($var, $val, $method = 'set')
    {
        if (!empty ($var) && empty ($val))
        {
            if (!strcmp ($method, 'get')) return $this->_events [$var][self::EVENT_CALLBACK];
            else $this->__disconnect ($var);
        }
        else if (!empty ($var) && strpos ($var, 'On') === 0 && !empty ($val))
        {
            $signal = $this->__toSnakeCase (substr ($var, 2));

            $this->__connect ($signal, $var, $val);
        }
    }

    public function __on_event (GObject $object, array $event)
    {
        $this->_call_user_func ($this, $event [self::EVENT_CALLBACK]);
    }

    /**
     * Methods
     */
    public function Block (/* int */ $handler_id)
    {
        $this->Handle->block ($handler_id);
    }

    public function Connect (/* string */ $signal, /* callback */ $callback /* , mixed $user_param */ )
    {
        $args = func_get_args ();

        return $this->Handle->connect ($signal, $callback, $args);
    }

    public function ConnectAfter (/* string */ $signal, /* callback */ $callback /* , mixed $user_param */ )
    {
        $args = func_get_args ();

        return $this->Handle->connect_after ($signal, $callback, $args);
    }

    public function ConnectSimple (/* string */ $signal, /* callback */ $callback /* , mixed $user_param */ )
    {
        $args = func_get_args ();

        return $this->Handle->connect_simple ($signal, $callback, $args);
    }

    public function ConnectSimpleAfter (/* string */ $signal, /* callback */ $callback /* , mixed $user_param */ )
    {
        $args = func_get_args ();

        return $this->Handle->connect_simple_after ($signal, $callback, $args);
    }

    public function Disconnect (/* int */ $handler_id)
    {
        $this->Handle->disconnect ($handler_id);
    }

    public function Emit (/* string */ $signal_name)
    {
        $this->Handle->emit ($signal_name);
    }

    public function FreezeNotify ()
    {
        $this->Handle->freeze_notify ();
    }

    public function GetData (/* string */ $key)
    {
        return $this->Handle->get_data ($key);
    }

    public function getHandle ()
    {
        return $this->_handle;
    }

    public function GetProperty (/* string */ $property_name)
    {
        return $this->Handle->get_property ($property_name);
    }

    public function IsConnected (/* int */ $handler_id)
    {
        return $this->Handle->is_connect ($handler_id);
    }

    public static function ListProperties (/* int */ $gtype)
    {
        return GObject::list_properties ($gtype);
    }

    public function Notify (/* string */ $property_name)
    {
        $this->Handle->notify ($property_name);
    }

    public static function RegisterType (/* string */ $class_name)
    {
        return GObject::register_type ($class_name);
    }

    public function SetData (/* string */ $key, /* mixed */ $value)
    {
        $this->Handle->set_data ($key, $value);
    }

    public function SetHandle (GObject $object)
    {
        $this->_handle = $object;

        $this->SetData ('__tobject', $this);
    }

    public function SetProperty (/* string */ $property_name, /* mixed */ $value)
    {
        $this->Handle->set_property ($property_name, $value);
    }

    public static function SignalListIDs (/* int */ $gtype)
    {
        return GObject::signal_list_ids ();
    }

    public static function SingalListNames (/* int */ $gtype)
    {
        return GObject::signal_list_names ($gtype);
    }

    public static function SignalQuery (/* string / int */ $signal, /* int */ $gtype)
    {
        return GObject::signal_query ($signal, $gtype);
    }

    public function StopEmission ()
    {
        $this->Handle->stop_emission ();
    }

    public function ThawNotify ()
    {
        $this->Handle->thaw_notify ();
    }

    public function Unblock (/* int */ $handler_id)
    {
        $this->Handle->unblock ($handler_id);
    }

    public function latin1 (/* string */ $text)
    {
        return $this->_getHelper ()->latin1 ($text);
    }

    public function utf8 (/* string */ $text)
    {
        return $this->_getHelper ()->utf8 ($text);
    }

    public function _getHelper (/* string */ $klass = 'desktop')
    {
        return Mage::helper ($klass);
    }

    public function __toSnakeCase (/* string */ $text)
    {
        return $this->_getHelper ()->__toSnakeCase ($text);
    }

    public function __toString ()
    {
        return $this->Handle->__toString ();
    }

    public function __()
    {
        $args = func_get_args ();
        $expr = new \Mage_Core_Model_Translate_Expr (array_shift ($args), static::MODULE_NAME);
        array_unshift ($args, $expr);

        return Mage::app ()->getTranslator ()->translate ($args);
    }

    protected function _call_user_func ()
    {
        $func_args = func_get_args ();

        $object = $func_args [0];
        if (is_object ($object) && $object instanceof TObject)
        {
            $methodName = $func_args [1];
            if (empty ($methodName)) return false;

            // Retrieve arguments from stack
            $stack_args = array ();
            $stack = debug_backtrace();
            foreach ($stack as $element)
            {
                if ((array_key_exists ('object', $element) && !strcmp (get_class ($element ['object']), get_class ($object)))
                    && (array_key_exists ('function', $element) && !strcmp ($element ['function'], __FUNCTION__)))
                {
                    $stack_args = $element ['args'];
                    if (count ($stack_args))
                    {
                        unset ($stack_args [1]); // remove method name

                        // $stack_args = array_values ($stack_args);
                    }
                }
            }

            // Try to call member function with composite/array name from ptr/owner/parent/object/static
            $_ObjectPtr = null;
            if (is_array ($methodName))
            {
                $_ObjectPtr = $methodName [0];
                if (is_object ($_ObjectPtr))
                {
                    $methodName [0] = get_class ($_ObjectPtr);
                }

                $methodName = implode ('::', $methodName);
            }

            if (is_string ($methodName) && preg_match ('/([a-zA-Z0-9_]+)::([a-zA-Z0-9_]+)/', $methodName, $matches) === 1)
            {
                array_shift ($matches);

                $_objectName = $matches [0];
                $_methodName = $matches [1];

                if ((is_object ($_ObjectPtr) /* && $_ObjectPtr instanceof TObject */ && get_class ($_ObjectPtr) == $_objectName)
                    && (is_callable (array ($_ObjectPtr, $_methodName), true) && method_exists ($_ObjectPtr, $_methodName)))
                {
                    return call_user_func_array (array ($_ObjectPtr, $_methodName), $stack_args);
                }

                if ((is_object ($object->Owner) /* && $object->Owner instanceof TObject */ && get_class ($object->Owner) == $_objectName)
                    && (is_callable (array ($object->Owner, $_methodName), true) && method_exists ($object->Owner, $_methodName)))
                {
                    return call_user_func_array (array ($object->Owner, $_methodName), $stack_args);
                }

                if ((is_object ($object->Parent) /* && $object->Parent instanceof TObject */ && get_class ($object->Parent) == $_objectName)
                    && (is_callable (array ($object->Parent, $_methodName), true) && method_exists ($object->Parent, $_methodName)))
                {
                    return call_user_func_array (array ($object->Parent, $_methodName), $stack_args);
                }

                if (get_class ($object) == $_objectName && (is_callable (array ($object, $_methodName), true) && method_exists ($object, $_methodName)))
                {
                    return call_user_func_array (array ($object, $_methodName), $stack_args);
                }

                if (is_callable (array ($_objectName, $_methodName), true) && method_exists ($_objectName, $_methodName))
                {
                    return call_user_func_array (array ($_objectName, $_methodName), $stack_args);
                }
            }

            // Try to call member function with simple name from owner/parent/object/direct
            if (is_string ($methodName) && preg_match ('/([a-zA-Z0-9_]+)/', $methodName, $matches) === 1)
            {
                array_shift ($matches);

                $_methodName = $matches [0];

                if ((is_object ($object->Owner) /* && $object->Owner instanceof TObject */)
                    && (is_callable (array ($object->Owner, $_methodName), true) && method_exists ($object->Owner, $_methodName)))
                {
                    return call_user_func_array (array ($object->Owner, $_methodName), $stack_args);
                }

                if ((is_object ($object->Parent) /* && $object->Parent instanceof TObject */)
                    && (is_callable (array ($object->Parent, $_methodName), true) && method_exists ($object->Parent, $_methodName)))
                {
                    return call_user_func_array (array ($object->Parent, $_methodName), $stack_args);
                }

                if (is_callable (array ($object, $_methodName), true) && method_exists ($object, $_methodName))
                {
                    return call_user_func_array (array ($object, $_methodName), $stack_args);
                }

                if (is_callable ($_methodName, true) && function_exists ($_methodName))
                {
                    return call_user_func_array ($_methodName, $stack_args);
                }
            }

            throw new Exception (sprintf ("%s: %s", __METHOD__, $this->__("Cannot call event '%s' from '%s' class '%s' type '%s'",
                $methodName, $object->Name, get_class ($object), gettype ($object))));
        }
        else
        {
            throw new Exception (sprintf ("%s: %s", __METHOD__, $this->__("Invalid object '%s' class '%s' type '%s'",
                $object->Name, get_class ($object), gettype ($object))));
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
        case 'Handle': { $result = $this->getHandle ();                break;      }
        default:       { $result = $this->__event ($var, null, 'get'); /* event */ }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
        case 'Handle': { $this->setHandle ($val);            break;      }
        default:       { $this->__event ($var, $val, 'set'); /* event */ }
        }
    }
}

