<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bai2</title>
</head>
<body>


<form method="post">
    <h3>Future Value Calculator</h3>
    <label for="a">so tien dau tu:</label>
    <input id="a" type="number" name="luongtiendautu" placeholder="Inventment Amount"/> <br>
    <label for="b">lai sua cua nam:</label>
    <input id="b" type="number" name="laisuatnam" placeholder="Yearly Interest Rate"/> <br>
    <label for="c">so nam dau tu:</label>
    <input id="c" type="number" name="sonamdautu" placeholder="Number of Years"/> <br>
    <input type="submit" id="tinhgiatrituonglai" value="Calculate"/>
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $luongtiendautu = $_POST["luongtiendautu"];
    $laisuatnam = $_POST["laisuatnam"];
    $sonamdautu = $_POST["sonamdautu"];
    $giatrituonglai = 0;
    echo $sonamdautu;
    for ($i = 0; $i < $sonamdautu; $i++) {
        $giatrituonglai = $luongtiendautu + ($luongtiendautu * $laisuatnam);
    }
    echo $giatrituonglai;

}
?>
</body>
</html>
