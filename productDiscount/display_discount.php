<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

$motasanpham = $_POST["motasanpham"];
$gianiemyetsanpham = $_POST["gianiemyetsanpham"];
$tilechietkhauphantram = $_POST["tilechietkhauphantram"];
$tinhchietkhau = 0;
$giasanphamsaukhichietkhau = 0;
$tinhchietkhau =  $gianiemyetsanpham * (($tilechietkhauphantram) * 0.1);
$giasanphamsaukhichietkhau =  $gianiemyetsanpham - $tinhchietkhau;
echo "giá sản phẩm sau chiết kh ấu" . $tinhchietkhau;
}

?>