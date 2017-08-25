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
 * Class GamuzaArrow
 */
class GamuzaArrow extends GtkArrow
{
    public function __construct (TArrowType $direction = null, TShadowType $shadow_type = null)
    {
        if ($direction !== null && $shadow_type !== false)
        {
            return call_user_func ('parent::__construct', $direction, $shadow_type);
        }

        parent::__construct (arrUp, shaNone);
    }
}

/**
 * Class TArrow
 */
class TArrow extends TMisc
{
    /**
     * Events
     */
    public function __construct (TArrowType $direction = null, TShadowType $shadow_type = null)
    {
        parent::__construct ();

        $this->Handle = new GamuzaArrow ($direction, $shadow_type);
    }

    /**
     * Methods
     */
    public function Set (TArrowType $arrow_type, TShadowType $shadow_type)
    {
        $this->Handle->set ($arrow_type, $shadow_type);
    }
}

