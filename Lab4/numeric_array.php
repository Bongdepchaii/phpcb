<?php

$so = array(1, 2, 3, 4, 5);
echo "phan tu dau: " . $so [0] . "<br>";
echo "phan tu thu hai: " . $so [1] . "<br>";
echo "phan tu thu ba: " . $so [2] . "<br>";

echo "cac phan tu cua mang: " . "<br>";
foreach ($so as $cacsotrongmang){
    echo $cacsotrongmang . "<br>";
}

array_push($so, 6);
echo "Sau khi them phan tu so 6 thi: ";
print_r($so);
echo "<br>";

array_pop($so);
echo "sau khi xoa phan tu so cuoi: ";
print_r($so);
echo "<br>";

$dem = count($so);
echo "cac so phan tu trong mang do la: ". $dem . "<br>";

?>