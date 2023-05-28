<?php
function checkWordExits($str,$word){
    $position = strpos($str,$word); //tìm kiếm từ cụ thể trong chuỗi
    if($position !== false){
        echo "the string '$str' contain the word '$word'.";
    }else{
        echo "the string '$str' does not contain the word '$word'. ";
    }
}
checkWordExits("Hello PHP!","Word");
