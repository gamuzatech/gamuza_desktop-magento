#!/bin/bash

#
# @package      Gamuza Desktop
# @description  Visual Component Library for Magento
# @copyright    Copyright (c) 2017 Gamuza Technologies (http://www.gamuza.com.br/)
# @author       Eneias Ramos de Melo <eneias@gamuza.com.br>
#

TEMPFILE=$(mktemp "/tmp/gamuza.desktop.XXXXXX")

MESSENGER="zenity"

function Exception ()
{
    $MESSENGER --text-info --title "Gamuza Desktop - Error" --window-icon="error" --filename=$TEMPFILE
}

echo -e "Gamuza Desktop - Visual Component Library for Magento - Version 0.0.1\n" \
        "Copyright © 2017 Gamuza Technologies. All rights reserved.\n"

[ ! "$PHP" ] && PHP="php"
ARGS="-H -d enable_dl=On"

uname -a
$PHP $ARGS -v

DIRNAME=$(dirname "$0")
cd $DIRNAME

cat << __EOF__ | $PHP $ARGS > $TEMPFILE

<?php require 'desktop.php';

__EOF__

RETURN=$?

echo $RETURN

if [ $RETURN == 255 ] || [ $RETURN == 139 ]; then
    sed -i '1i Gamuza Desktop stopped because an error occurred while it was running!' $TEMPFILE

    Exception
fi

echo $TEMPFILE

cat $TEMPFILE

rm -f $TEMPFILE

exit $RETURN

