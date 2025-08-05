<!-- Bai tap 1 -->
 <?php
 function getstringlentgth($str){
    return strlen($str);
 }
//  test
echo getstringlentgth("Xin chao!!");
echo "</br>";

// Bai tap 2
function extractsubstring($str, $start, $length){
return substr($str, $start, $length);
}
// test
echo extractsubstring("Xin chao", 4, 5);
echo "</br>";

// Bai tap 3
function baitap3($str, $substring){
    $position = strpos($str, $substring);
    return ($position !== false) ? $position : -1;
}

// test
echo baitap3("xin chao", "chao");
echo baitap3("xin chao", "PHP");
echo "</br>";

// Bai tap 4
function baitap4($str, $search, $replace){
    return str_replace($search, $replace, $str);
}
// test 
echo baitap4("Xin chao", "chao", "PHP");
echo "</br>";

// Bai tap 5
function baitap5($srt){
    return strtolower(($srt));
}
function baitap5_2($srt){
    return strtoupper($srt);
}
// test
echo baitap5("Xin chao");
echo "</br>";
echo baitap5_2("Xin chao");
echo "</br>";

// Bai tap 6
function baitap6($srt){
    return trim($srt);
}
// Test
echo baitap6("    Xin chao   ");
echo "</br>";

// Bai tap 7
function baitap7($str, $delimiter){
    return explode($delimiter, $str);
}
// test 
print_r(baitap7("Xin,chao,PHP", ","));
echo "</br>";

?>


