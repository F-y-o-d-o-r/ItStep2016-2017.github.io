<?php

/*if (isset($_POST[menu])) {
    switch ($_POST[menu]) {//key
        case button:
            include_once 'forma.php';
            break;
        //case...
    }
}*/

if (isset($_POST['auto']) or isset($_POST['zapcasti'])) {
    include_once 'mass_' . key($_POST) . '.php';//polugestkiy include

    $algoritm = 'algoritm_' . key($_POST);
    $algoritm();
} else {
    include_once 'mass_auto.php';
    $algoritm = "algoritm_auto";
    $algoritm();
}
//print_r($price);

function algoritm1()
{
    global $price;
    usort($price, 'func');
}

function algoritm_auto()
{
    global $price;
    usort($price, 'func'); //!!!
    foreach ($price as $k1 => $mas1) {
        $rr = ''; //!!!
        foreach ($mas1 as $k2 => $mas2) {
            //$price[$k1][$k2]='<span style="color:sienna">'.$mas2.'</span>'; //!!!
            $rr = $rr . "<td style='color:sienna'>$mas2</td>"; //!!!
        }
        if(isset($_POST['auto'])){
            $rr = "<tr>$rr</tr>"; //!!!
            echo $rr; //!!!
        } else {
            //print_r($rr);
            echo '<script>';
            echo 'var r_tbod=document.getElementById("tbod");';
            echo 'var r_tr=document.createElement("tr");';
            echo 'r_tr.innerHTML="'.$rr.'";';
            echo 'r_tbod.appendChild(r_tr);';
            echo '</script>';
        }
    }
}

function algoritm_zapcasti()
{
    global $price;
    usort($price, 'func'); //!!!
    foreach ($price as $k1 => $mas1) {
        $rr = ''; //!!!
        foreach ($mas1 as $k2 => $mas2) {
            //$price[$k1][$k2]='<span style="color:green">'.$mas2.'</span>'; //!!!
            $rr = $rr . "<td style='color:green'>$mas2</td>"; //!!!
        }
        $rr = "<tr>$rr</tr>"; //!!!
        echo $rr; //!!!
    }
}

function func($a1, $a2)
{
    $a11 = $a1[2];
    $a22 = $a2[2];
    if ($a11 > $a22) {
        return 1;
    } else if ($a11 == $a22) {
        return 0;
    } else {
        return -1;
    }
}

?>