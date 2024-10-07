<?php

function printStringReturnNumber() {
    echo "Возвращает строку\n";
    return 999;
}


$my_num = printStringReturnNumber();
echo $my_num, "\n";