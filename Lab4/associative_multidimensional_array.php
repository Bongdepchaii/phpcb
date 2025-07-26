<?php

$kethop = array(
    "name" => "Bong",
    "age" => 19,
    "city" => "BMT"
);

echo "Ten: " . $kethop["name"] . "<br>";
echo "Tuoi: " . $kethop["age"] . "<br>";
echo "Diachi: " . $kethop["city"] . "<br>";

echo "thong tin chi tiet:<br>";
foreach ($kethop as $key => $value){
    echo $key . " " . $value . "<br>";
}

$matran = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

echo "Mang da trieu:<br>";
for ( $i = 0; $i < count($matran); $i++){
    for ($j = 0; $j < count($matran[$i]); $j++){
        echo $matran [$i][$j] . " ";
    }
    echo "<br>";
}

$keys = array_keys($kethop);
echo "Cac khoa cua mang ket hop:  ";
print_r($keys);
echo "<br>";

$values = array_values($kethop);
echo "Cac gia tri cua mang ket hop: ";
print_r($values);
echo "<br>";
 
?>

