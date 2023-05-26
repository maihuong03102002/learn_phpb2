<?php
function checkWordExits($str,$word){
    $position = strpos($str,$word); //tìm kiếm từ cụ thể trong chuỗi
    if($position !== false){
        echo "Chuỗi '$str' chứa từ '$word'.";
    }else{
        echo "Chuỗi '$str' không chứa từ '$word'. ";
    }
}
checkWordExits("Hello PHP!","Word");