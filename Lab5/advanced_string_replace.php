<?php

function relaceword($text, $searchWord, $replaceWord) {
    return str_replace($searchWord, $replaceWord, $text);
}

$text = "The puick brow fox jumps over the lazy dog. The dog was not amused.";

$updateText = relaceword($text, "dog", "cat");

echo "Đoạn văn bản sau khi thay thế: " . $updateText;
?>