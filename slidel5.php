<!-- Bai tap 1 -->
 <?php
 function getstringlentgth($str){
    return strlen($str);
 }
//  test
echo getstringlentgth("Xin chao!!");

// Bai tap 2
function extractsubstring($str, $start, $length){
return substr($str, $start, $length);
}
// test
echo extractsubstring("Xin chao", 4, 5);

// Bai tap 3
function baitap3($str, $substring){
    $position = strpos($str, $substring);
    return ($position !== false) ? $position : -1;
}

// test
echo baitap3("xin chao", "chao");
echo baitap3("xin chao", "PHP");

// Bai tap 4
function baitap4($str, $search, $replace){
    return str_replace($search, $replace, $str);
}
// test 
echo baitap4("Xin chao", "chao", "PHP");

// Bai tap 5
function baitap5($srt){
    return strtolower(($srt));
}
function baitap5_2($srt){
    return strtoupper($srt);
}
// test
echo baitap5("Xin chao");
echo baitap5_2("Xin chao");

// Bai tap 6
function baitap6($srt){
    return trim($srt);
}
// Test
echo baitap6("    Xin chao   ");

// Bai tap 7
function baitap7($str, $delimiter){
    return explode($delimiter, $str);
}
// test 
print_r(baitap7("Xin,chao,PHP", ","));

// Bai tap phong van tong hop 1
function baitapphongvan1($str){
    $trimmed = trim($str);
    $uppercased =  strtoupper($trimmed);
    $replaced = str_replace("PHP", "PHP Programing", "uppercased");
    return strlen($replaced);
}
// Test
echo baitapphongvan1("  Welcome to PHP!!  ");

// Bai tap phong van tong hop 2
function baitapphongvan2($str, $delimiter){
    $arr = explode($delimiter, $str);
    return isset($arr[1]) ? $arr[1] : "Khong co phan tu thu 2";
}
// test 
// echo baitapphongvan2()
 ?>