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
            <option value="cong">+</option>
            <option value="tru">-</option>
            <option value="nhan">*</option>
            <option value="chia">/</option>
        </select>
        <br>
        <label for="so2">First Operation</label>
        <input type="number" name="b" id="so2"/><br>
        <input type="submit" value="Caculate"/>
    </fieldset>
</form>
</body>
</html>

<?php
function calc($num1, $chontoantu , $num2)
{
switch ($chontoantu) {
case "cong":
return $num1 + $num2;
case "tru":
return $num1 - $num2;
case "nhan":
return $num1 * $num2;
case "chia":
return $num1 / $num2;

}
}

if ($_SERVER['REQUEST_METHOD'] == "GET") {
$num1 = $_GET['a'];
$chontoantu = $_GET['chontoantu'];
$num2 = $_GET['b'];

$result = calc($num1, $chontoantu, $num2);

try {
$result = calc($num1,$chontoantu,$num2);
}
catch (Exception $exception){
$exception ->getMessage();
$result = $exception;
}
echo $result;
}

?>