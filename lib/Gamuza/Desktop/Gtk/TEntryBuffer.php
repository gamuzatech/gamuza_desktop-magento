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
 * Class TEntryBuffer
 *
 * @property int          $Bytes
 * @property int          $Length
 * @property string|array $Text
 * @property int          $MaxLength
 *
 * @property string|array $OnInsertedText;
 * @property string|array $OnDeletedText;
 */
class TEntryBuffer extends System\TObject
{
    use TEditable;
    use TCellEditable;

    /**
     * Events
     */
    public function __construct (/* [ string $initial_chars [, int $n_initial_chars ]] */)
    {
        parent::__construct ();

        $this->Handle = new GtkEntry (/* $initial_chars, $n_initial_chars */);
    }

    /**
     * Methods
     */
    public function DeleteText (int $position, int $n_chars)
    {
        return $this->Handle->delete_text ($position, $n_chars);
    }

    public function EmitInsertedText (int $position, string $chars, int $n_chars)
    {
        $this->Handle->emit_inserted_text ($position, $chars, $n_chars);
    }

    public function EmitDeletedText (int $position, int $n_chars)
    {
        $this->Handle->emit_deleted_text ($position, $n_chars);
    }

    public function GetBytes ()
    {
        return $this->Handle->get_bytes ();
    }

    public function GetLength ()
    {
        return $this->Handle->get_length ();
    }

    public function GetMaxLength ()
    {
        return $this->Handle->get_max_length ();
    }

    public function GetText ()
    {
        return $this->Handle->get_text ();
    }

    public function InsertText (int $position, string $chars, int $n_chars)
    {
        return $this->Handle->insert_text ($position, $chars, $n_chars);
    }

    public function SetText (string $chars, int $n_chars)
    {
        $this->Handle->set_text ($chars, $n_chars);
    }

    public function SetMaxLength (int $max_lenth)
    {
        $this->Handle->set_max_length ($max_length);
    }

    /**
     * Properties
     */
    function __get ($var)
    {
        $result = null;

        switch ($var)
        {
            case 'Bytes':  { $result = $this->GetBytes ();   break; }
            case 'Length': { $result = $this->GetLength ();  break; }
            case 'Text':   { $result = $this->GetText ();    break; }
            default:       { $result = parent::__get ($var);        }
        }

        return $result;
    }

    function __set ($var, $val)
    {
        switch ($var)
        {
            case 'Text':
            {
                $list ($chars, $n_chars) = $val;

                $this->SetText ($chars, $n_chars);

                break;
            }
            case 'MaxLength': { $this->SetMaxLength ($val); break; }
            default:          { parent::__set ($var, $val);        }
        }
    }
}

