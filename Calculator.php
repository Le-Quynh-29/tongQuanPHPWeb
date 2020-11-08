<html>
<header>
    <title>Ứng dụng Calculator</title>
    <style>

        .inline {
            display: inline-block;
            margin: 3em;
            width: 555px;
            height: 200px;
        }
        submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 30px;
        }
    </style>
</header>

<body>
<br>
<h1 style="color: red;">Ứng dụng Calculator</h1>
<br>
<fieldset class="inline">
    <legend>Calculator</legend>
    <form method="POST">
        First Operand <input type="text" id="first" name="FirstOperand"><br><br>
        Operator
        <select name="tinh">
            <option value="addition">addition</option>
            <option value="subtraction">subtraction</option>
            <option value="multiplication">multiplication</option>
            <option value="division">division</option>
        </select><br/>
        Second Operand <input type="text" id="second" name="SecondOperand"><br><br>
        <input type="submit" value="calculate">
    </form>


    <?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $FirstOperand = (float) $_POST['FirstOperand'];
            $SecondOperand = (float) $_POST['SecondOperand'];
            $operator = $_POST['tinh'];
            if($FirstOperand == "" || $SecondOperand == ""){
                echo "<h2>Bạn chưa nhập.</h2>";
            }else{
            if ($operator == "addition") {
                $result = $FirstOperand + $SecondOperand;
                echo  $FirstOperand." + ".$SecondOperand." = ".$result;
            } elseif ($operator == "subtraction") {
                $result = $FirstOperand - $SecondOperand;
                echo  $FirstOperand." - ".$SecondOperand." = ".$result;
            } elseif ($operator == "multiplication") {
                $result = $FirstOperand * $SecondOperand;
                echo  $FirstOperand." x ".$SecondOperand." = ".$result;
            } elseif ($operator == "division") {
                if ($SecondOperand == 0) {
                    $result = "Số thứ 2 ko thể là 0. Mời nhập lại.";
                    echo $result;
                } else $result = $FirstOperand / $SecondOperand;
                echo  $FirstOperand." / ".$SecondOperand." = ".$result;
            }
        }

    }
    ?>

</fieldset>

</body>


</html>
