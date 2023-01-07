<?php
//condition:

// == [equal] berarti equal nilainya sama gak?
var_dump(1 == '1');
// === [identical] berarti sama persis nilainya dan data typenya sama
var_dump(1 === '1');

//switch-case
$angka = 75; 
switch($angka){
    case 100:
        echo "<br> nini angka 100";
        break;
    case 50:
        echo "ini angka 50";
        break;
    case 0:
        echo "ini angka 0";
        break;
    default:
        echo "<br> nilai tidak terdaftar <br>"; //<br> enter
        echo $angka * 2;
}

if ($angka === 100)
    echo "ini angka 100";
else if ($angka === 50)
    echo "ini angka 50";
else if ($angka === 0)
    echo "ini angka 0";
else
    echo "nilai tidak terdaftar";
?>