<form method="post">
    <input type="text" name="number">
    <input type="submit" value="submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    if($number < 2){
        echo "Hãy nhập số lớn hơn 2";
    } else {
        function isPrime($number)
        {
            for ($i = 2; $i <= $number / 2; $i++) {
                if ($number % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        $i = 2;
        echo "Danh sach cac so nguyen to: ";
        while ($i < $number) {
            if (isPrime($i)) {
                echo $i . " ";
            }
            $i++;
        }
    }

}