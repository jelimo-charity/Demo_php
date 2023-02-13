<?php

if(isset($_POST['submit']))
{
 function calculateBMI(){
    $height=$_POST['height'];
    $mass=$_POST['mass'];

    $bmi=$mass / $height;

    if(isset($_POST['CALCULATE'])) {
        $bmi= $_POST['bmi'];
        if($bmi < 18.5) {
            echo '['
        }
    }
 }
}



?>