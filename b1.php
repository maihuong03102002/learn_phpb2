<?php
function isEven($number){
    if($number % 2==0){
        return true;
    }
    else{
        return false;
    }
}
$number = 12;
if(isEven($number)){
    echo "$number this is even";
}
else{
    echo "$number this is not even";
}