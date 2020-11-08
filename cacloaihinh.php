<?php

for ($i = 0; $i < 3; $i++) {
    echo "<br>";
    for ($j = 0; $j < 7; $j++) {
        echo "*";
    }
}
echo "<br>";
for ($i = 1; $i <= 5; $i++) {
    echo "<br>";
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
}
echo "<br>";
for($i=5; $i>=1; $i--)
{
    echo "<br>";
    for($j=1; $j<=$i; $j++)
    {
        echo "*";
    }
}

