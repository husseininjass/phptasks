<?php
function check(){
    $names = array("hussein" , "Itachi");

    for($i = 0 ; $i < count($names)-1 ; $i++){
        echo ctype_lower($names[$i]);
    }
}
check();