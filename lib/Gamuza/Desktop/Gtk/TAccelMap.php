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
 * Class TAccelMap
 */
class TAccelMap extends System\TObject
{
    /**
     * Events
     */
    public function __construct ()
    {
        parent::__construct ();

        $this->Handle = new GtkAccelMap ();
    }

    /**
     * Methods
     */
    public function AddEntry (string $accel_path, int $accel_key, GdkModifierType $accel_mods)
    {
        $this->Handle->add_entry ($accel_path, $accel_key, $accel_mods);
    }

    public function AddFilter (string $filter_pattern)
    {
        $this->Handle->add_filter ($filter_pattern);
    }

    public function ChangeEntry (string $accel_path, int $accel_key, GdkModifierType $accel_mods, bool $replace)
    {
        return $this->Handle->change_entry ($accel_path, $accel_key, $accel_mods, $replace);
    }

    public function Children (mixed $data, TAccelMapForeach $callback)
    {
        $this->Handle->for_each ($data, $callback);
    }

    public function ChildrenUnfiltered (mixed $data, TAccelMapForeach $callback)
    {
        $this->Handle->foreach_unfiltered ($data, $callback);
    }

    public function Load (string $file_name)
    {
        $this->Handle->load ($file_name);
    }

    public function LoadFd (int $fd)
    {
        $this->Handle->load_fd ($fd);
    }

    public function LoadScanner (GScanner $scanner)
    {
        $this->Handle->load_scanner ($scanner);
    }

    public function LockPath (string $accel_path)
    {
        $this->Handle->lock_path ($accel_path);
    }

    public function LookupEntry (string $accel_path, TAccelKey $key)
    {
        return $this->Handle->lookup_entry ($accel_path, $key);
    }

    public function Save (string $file_name)
    {
        $this->Handle->save ($file_name);
    }

    public function SaveFd (int $fd)
    {
        $this->Handle->save_fd ($fd);
    }

    public function UnlockPath (string $accel_path)
    {
        $this->Handle->unlock_path ($accel_path);
    }
}

