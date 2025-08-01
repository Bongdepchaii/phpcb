<?php
function countWordd0ccurrences($text, $word){
    return substr_count($text, $word);

}

$text = "The puick brow fox jumps over the lazy dog. The dog was not amused.";

$occurences = countWordd0ccurrences($text, "dog");

echo "Số lần xuất hiện từ 'dog': " . $occurences ;
?>

