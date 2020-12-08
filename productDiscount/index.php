<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bai3</title>
</head>
<body>

<form method="post" action="display_discount.php">
    <label for="a"></label>
    <input type="text" name="motasanpham" placeholder="nhapmotavaoday" id="a"/> <br>
    <label for="b"></label>
    <input type="number" name="gianiemyetsanpham" placeholder="gia" id="b"/> <br>
    <label for="c"></label>
    <input type="number" name="tilechietkhauphantram" placeholder="chietkhau" id="c"/> <br>

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