<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bai3</title>
</head>
<body>
<form method="get">

    <h1>Simple Calculator</h1>
    <fieldset>
        <legend>Caculator</legend>
        <label for="so1">First Operation</label>
        <input type="number" name="a" id="so1"/><br>
        <label for="c">Toán tử</label>

        <select name="chontoantu" id="c">
            <option value="tru">+</option>
            <option value="nhan">-</option>
            <option value="chia">*</option>
            <option value="chia">/</option>
        </select>
        <br>
        <label for="so2">First Operation</label>
        <input type="number" name="b" id="so2"/><br>
        <input type="submit" id="xacnhan" value="Caculate"/>
    </fieldset>
</form>
<?php
($_SERVER["REQUEST_METHOD"] =="GET") {
    $a = $_GET["a"];
    $b = $_GET["b"];
    $chontoantu = $_GET["chontoantu"];

}

/*$_SERVER["REQUEST_METHOD"] == "POST") {

    $productDescription = $_POST["productDescription"];
    $listPrice = $_POST["listPrice"];
    $discountPercent = $_POST["discountPercent"];
    $discountAmount = $listPrice * ($discountPercent * 0.01);
    $discountPrice = $listPrice - $discountAmount;*/


?>

</body>
</html>