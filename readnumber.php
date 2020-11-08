<form method="post">
    <input type="text" name="number">
    <input type="submit" value="submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $number = (float)$_POST["number"];
    if($number >=0 && $number < 10) {
        switch ($number) {
            case 0:
                echo "zezo";
                break;
            case 1:
                echo "one";
                break;
            case 2:
                echo "two";
                break;
            case 3:
                echo "three";
                break;
            case 4:
                echo "four";
                break;
            case 5:
                echo "five";
                break;
            case 6:
                echo "six";
                break;
            case 7:
                echo "seven";
                break;
            case 8:
                echo "eight";
                break;
            case 9:
                echo "nine";
                break;
        }
    }
}
