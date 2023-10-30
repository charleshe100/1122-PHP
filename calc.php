<?php
if(!empty($_GET)){

    $weight=(!empty($_GET['weight']))?$_GET['weight']:'沒有體重資料';
    $weight=(!empty($_GET['height']))?$_GET['height']:'沒有體重資料';
    
    $weight=$_GET['weight'];
    $height=$_GET['height'];
    // $_GET是系統存在的變數，裡面沒有值，預設會是$_GET=[] 
    $bmi=round($weight/($height*$height),2);
    // round，控制小數點後的位數   
    echo "體重：".$weight;
    echo "身高：".$height;
    echo "BMI：".$bmi;

    header("location:bmi.php?w=$weight&h=$height&bmi=$bmi");
    
}else{
    header("location:請輸入必要的資訊");
}







?>