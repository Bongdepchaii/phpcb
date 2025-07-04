<?php
    $so_nguyen = 10;
    $so_thuc = 10.5;
    $chuoi = "Good morning";
    $mang = array(1, 2, 3, 4, 5);
    class Woman{
        public $ten;
        public $tuoi;
        public function __construct($ten, $tuoi){
            $this->ten = $ten;
            $this->tuoi = $tuoi;
        }
    }
    $nguoi = new Woman("Thanh Bui", 19);
    $gia_tri_null = null;
    $gia_tri_boolean = true;
    function ham(){
        return "Day la mot ham";
    }
    $gia_tri_callable = "ham";
    $ket_noi = fopen("file.txt", "r");
    echo '<pre>';
    echo "So nguyen: $so_nguyen\n";
    echo "So thuc: $so_thuc\n";
    echo "Chuỗi: $chuoi\n";
    print_r($mang);
    echo "Name: {$nguoi->ten}, age: {$nguoi->tuoi}\n";
    echo "Gia tri null: $gia_tri_null\n";
    echo "Gia tri boolean: $gia_tri_boolean\n";
    echo "Gia tri callable:" . $gia_tri_callable() . "\n";

    $chuoi = '12345';
    var_dump($chuoi);
    $chuoi_ep_kieu = (int)$chuoi;
    var_dump($chuoi_ep_kieu);
    $chuoi_don_gian = "Hi $chuoi" . "\n";
    echo $chuoi_don_gian;
    $chuoi_doi_kep = "Hi $chuoi";
    echo $chuoi_doi_kep;

    $a = 10;
    $b = 5;
    $ket_qua_cong = $a + $b;
    echo "kq cong: $ket_qua_cong\n";
    $ket_qua_tru = $a - $b;
    echo "kq tru: $ket_qua_tru\n";
    $ket_qua_nhan = $a * $b;
    echo "kq nhan: $ket_qua_nhan\n";
    $ket_qua_chia = $a / $b;
    echo "kq chia: $ket_qua_chia\n";
    $ket_qua_chia_lay_du = $a % $b;
    echo "kq lay du: $ket_qua_chia_lay_du\n";
    $ket_qua_luy_thua = $a ** $b;
    echo "kq luy thua: $ket_qua_luy_thua\n";
    $a++;
    echo "Gia tri sau khi tang: $a\n";
    $b--;
    echo "Gia tri sau khi giam: $b\n";

    $c = 10;
    $d = 10;
    $ket_qua_bang = $c == $d;
    echo "Kq so sanh bang: " . ($ket_qua_bang ? 'true' : 'false') . "\n";
    $ket_qua_khong_bang = $c != $d;
    echo "Kq so sanh khong bang: " . ($ket_qua_khong_bang ? 'true' : 'false') . "\n";
    $ket_qua_lon_hon = $c > $d;
    echo "Ket qua lon hon: " . ($ket_qua_lon_hon ? 'true' : 'false') . "\n";
    $ket_qua_nho_hon = $c < $d;
    echo "Ket qua nho hon: " . ($ket_qua_nho_hon ? 'true' : 'false') . "\n";
    $ket_qua_lon_hon_bang = $c >= $d;
    echo "Ket qua lon hon so sanh hoac bang: " . ($ket_qua_lon_hon_bang ? 'true' : 'false') . "\n";
    $ket_qua_nho_hon_bang = $c <= $d;
    echo "Ket qua so sanh nho hon hoac bang: " . ($ket_qua_nho_hon_bang ? 'true' : 'false') . "\n";
?>