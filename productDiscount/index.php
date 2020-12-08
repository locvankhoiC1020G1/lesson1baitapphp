<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bai3</title>
</head>
<body>

<form method="post" action="display_discount.php">
    <label for="a"></label>
    <input type="text" name="productDescription" placeholder="Nhập tên sản phẩm" id="a"/> <br>
    <label for="b"></label>
    <input type="number" name="listPrice" placeholder="giá" id="b"/> <br>
    <label for="c"></label>
    <input type="number" name="discountPercent" placeholder="chiết khấu %" id="c"/> <br>

    <input type="submit" value="Calculate Discount">
</form>
<?php
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $motasanpham = $_POST ["luongtiendautu"];
    $gianiemyetsanpham = $_POST ["luongtiendautu"];
    $tilechietkhauphantram = $_POST ["tilechietkhauphantram"];
    $tinhchietkhau = 0;

   $tinhchietkhau =  $gianiemyetsanpham * (($tilechietkhauphantram)/10);
   echo $tinhchietkhau;
}
*/?>
</body>
</html>