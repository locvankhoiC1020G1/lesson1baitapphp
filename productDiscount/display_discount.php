<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $productDescription = $_POST["productDescription"];
    $listPrice = $_POST["listPrice"];
    $discountPercent = $_POST["discountPercent"];
    $discountAmount = $listPrice * ($discountPercent * 0.01);
    $discountPrice = $listPrice - $discountAmount;
    echo "mô tả sản phẩm:" . $discountAmount;
    echo "giá sản phẩm:" . $listPrice;
    echo "Tỉ lệ chiết khấu %:" . $discountAmount;
    echo "Lượng chiết khấu:" . $discountAmount;
    echo "Giá sau khi chiết khấu" . $discountPrice;
}

?>