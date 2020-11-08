<h1>Chuyển đổi tiền tệ</h1>
<form method="post">
    <input type="text" name="money">
    <input type="submit" value="Quy đổi">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $money =(float)$_POST["money"];
    if ($money > 0) {
            $usd = $money * 23000;
            echo "Từ " . $money . " USD " . " sau khi đổi bạn có " . $usd . " VND";
    } else{
            echo "Bạn không đủ tiền để quy đổi";
    }
}