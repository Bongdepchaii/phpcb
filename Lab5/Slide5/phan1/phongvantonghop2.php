<?php
// Bai tap phong van tong hop 2
function baitapphongvan2($str, $delimiter){
    $arr = explode($delimiter, $str);
    return isset($arr[1]) ? $arr[1] : "Khong co phan tu thu 2";
}
// test 
echo baitapphongvan2("Hello, World,PHP", ",");
echo "</br>";
echo baitapphongvan2("Hello", ",");
echo "</br>";

?>