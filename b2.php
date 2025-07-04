<?php
define("PI", 3.14);
echo PI."\n";

const NAME = 'THANHBUI';
echo(NAME."\n");

$a = 10;
if ($a > 5){
    echo "a is greater than 5\n";
} else {
    echo "a is not greater than 5\n";
}

$tuoi = 18;
if($tuoi < 18 ){
    echo "Ban chua du tuoi de lai xe may";
} else if ($tuoi > 18 && $tuoi <= 60){
    echo "Ban da du tuoi lai oto";
} else {
    echo "Ban da du tuoi lai xe may";
}
print_r($tuoi);
?>