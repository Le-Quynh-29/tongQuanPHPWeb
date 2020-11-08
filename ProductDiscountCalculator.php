<h1 style="color: blue">Product Discount Calculator</h1>
<form method="post" style="border: 1px solid blue;width: 200px; height: 50px">
    <input type="text" name="money">
    <input type="submit" value="Calculate">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $money = (float)$_POST["money"]."000";
    if($money >0){
        $DiscountAmount = $money*0.8;
        echo "Sản phẩm bạn mua có giá ".$money." sau khi giảm giá còn ".$DiscountAmount;
    } else {
        echo "Bạn đang âm tiền";
    }
}

