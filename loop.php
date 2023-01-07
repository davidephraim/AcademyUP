<?php
//[FOR] Loop
for ($i = 0; $i <= 10; $i++)
    echo "$i ";
for ($i = 0; $i < 11; $i++)
    echo "<br>$i ";

    echo "<br>";
echo "<br>";

for ($i = 0; $i < 11; ++$i)
echo "* ";

echo "<br>";
echo "<br>";

for($i=1; $i<=10; $i++){
    $data = $i * 2;
    echo "$i ";
    echo " | ";
    // echo "<br>";
    echo "$data ";
}

//while
echo "<br><br><br>";
$i = 0;
while($i <= 10){
    echo "$i ";
    $i++;
}
echo "<br><br>";
$j = 0;
while($j <= 10){
    $angka = $j * $j;
    echo "$angka ";
    $j++;
}
echo "<br>";
$k = 0;
while($k <= 10){
    $angka = pow($k, 2); //power/pangkat pow(var, numb);
    echo "$angka ";
    $k++;
}

echo "<br><br> Double For <br><br>";
for($i = 1; $i<=5;$i++){
    for ($j = 1; $j <= 5; $j++)
        echo "Proses $i: $j <br/>";
}

echo "<br><br> Double For <br><br>";
for($i = 1; $i<=5;$i++){
    for ($j = 1; $j <= $i; $j++)
        echo "Proses $i: $j <br/>";
}

echo "<br><br> Double For Inc <br><br>";
for($i = 1; $i<=5;$i++){
    for ($j = 1; $j <= $i; $j++)
    echo "* ";
    echo "<br/>";
}
echo "<br><br> Double For Inc <br><br>";
for($i=1; $i<=10; $i++){
    $temp = $i;
    for ($j = 1; $j <= $i; $j++){
        echo "$temp ";
        $temp += $i;
    }
    echo "<br/>";
}

echo "<br><br> Double For Dec <br><br>";
for($i = 5; $i<=1; $i--){
    for ($j = 5; $j <= $i; $j--)
    echo "* ";
    echo "<br/>";
}
echo "<br><br> Double For Inc <br><br>";
for($i=10; $i<=1; $i--){
    $temp = $i;
    for ($j = $i; $j <= 10; $j--){
        echo "$temp ";
        $temp -= $i;
    }
    echo "<br/>";
}

?>