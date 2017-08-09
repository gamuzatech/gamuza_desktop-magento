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
    MESSAGE="Gamuza Desktop stopped because an error occurred while it was running!"

    echo -e "$MESSAGE\n" | cat - $TEMPFILE > "$TEMPFILE.cat"

    $MESSENGER --text-info --title "Gamuza Desktop - Error" --window-icon="error" --filename="$TEMPFILE.cat"

    rm -f "$TEMPFILE.cat"
}

echo -e "Gamuza Desktop - Visual Component Library for Magento - Version 0.0.1\n" \
        "Copyright © 2017 Gamuza Technologies. All rights reserved.\n"

[ ! "$PHP" ] && PHP="php"
ARGS="-d enable_dl=On"

uname -a
echo "[ $PHP -v ]"
$PHP -v

DIRNAME=$(dirname "$0")
cd $DIRNAME

cat << __EOF__ | $PHP $ARGS > $TEMPFILE
<?php require 'desktop.php';
__EOF__

RETURN=$?

if [ $RETURN != "0" ]; then
    Exception
fi

rm -f $TEMPFILE

exit $RETURN

