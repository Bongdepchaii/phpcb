<?php
// define("PI", 3.14);
// echo PI."\n";

// const NAME = 'THANHBUI';
// echo(NAME."\n");

// $a = 10;
// if ($a > 5){
//     echo "a is greater than 5\n";
// } else {
//     echo "a is not greater than 5\n";
// }

// $tuoi = 18;
// if($tuoi < 18 ){
//     echo "Ban chua du tuoi de lai xe may";
// } else if ($tuoi > 18 && $tuoi <= 60){
//     echo "Ban da du tuoi lai oto";
// } else {
//     echo "Ban da du tuoi lai xe may";
// }
// print_r($tuoi);

// cau lenh switch duoc kiem tra mot bien voi nhieu gia tri khac nhau va thuc hien theo
// cu phap
// $ngay = 1;
// switch ($ngay) {
//     case 1:
//         echo "ngay so 1";
//         break;
//     case 2:
//         echo "Ngay so 2";
//     case 3:
//         echo "ngay so 1";
//         break;
//     case 4:
//         echo "Ngay so 4";
//         break;
//     case 5:
//         echo "ngay so 5";
//         break;
//     case 6:
//         echo "Ngay so 6";
//         break;
//     default:
//         echo "Ngay khong hop le";
// }

// for ($i = 0; $i <= 5; $i++) {
//     if ($i == 3) {
//         continue; // bo qua gia tri 3
//     }
//     echo "Gia tri cua i la: $i\n";
// }

//  2: Vong lap while
// Vong lap while duoc su dung de lap qua mot doan ma cho den khi dieu kien con dung.
// Cu phap 
// $i = 0;
// while ($i <= 5) {
//     echo "gia tri cua i la: $i\n";
//     $i++;
// }
// 3: Vong lap do while
// Vong lap do while tuong tu nhu trong vong lap while, nhung no dam bao doan ma se duoc thuc hien it nhat 1 lan truoc khi kiem tra dieu kien.
// Cu phap
// $i = 0; 
// do{
//     echo "Gia tri cua i la: $i\n";
//     $i++;
// } while ( $i <= 5);

// 4: Vong lap foreach 
// Vong lap foreach duoc su dung lap qua cac phan tu cua mot mang hoac mot phan tu co trong do
// Cu phap
$fruits = array("Apple", "Bnana", "Orange");
foreach ($fruits as $fr){
    echo "Fruit: $fr\n";
}


