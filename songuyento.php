<form method="post">
    <input type="text" name="number">
    <input type="submit" value="submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $number = $_POST["number"];
    function isPrime($number){
        for($i =2; $i <= $number/2;$i++){
            if($number%$i==0){
                return false;
            }
        }
        return true;
    }

        $count = 0;
        $i = 2;
        echo "Danh sach cac so nguyen to: " ;
        while ($i > 0) {
            if (isPrime($i)) {
                echo $i . " ";
                $count++;
                if ($count == $number) {
                    break;
                }
            }
            $i++;
        }


}