<?php
 //chuỗi Palindrome (là chuỗi có dạng đọc xuôi hay đọc ngược đều như nhau)
function isPalindrome($str) {
    $str = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $str));
    $reversedString = strrev($str);

    if ($str === $reversedString) {
        return true;
    } else {
        return false;
    }
}

// Chuỗi ban đầu
$str = "eye";

if (isPalindrome($str)) {
    echo "String is a Palindrome.";
} else {
    echo "String is not a Palindrome.";
}