<?php

error_reporting(0);

if(isset($_POST['login'])){
    $kulAd="g201210553@ogr.sakarya.edu.tr";
    $sifre="g201210553";
    $kullaniciAdi=$_POST["kullaniciAdi"];
    $parola=$_POST["parola"];
    if($kullaniciAdi!="" && $parola!=""){
        if($kullaniciAdi==$kulAd && $parola==$sifre){
            echo "Hoşgeldiniz G201210553 <br><hr>";
          
        }
        else{
            header("Location:../html/login.html");
        }
    }
    else{
        header("Location:../html/login.html");
    }
}
else {
    header("Location:../html/login.html");
}
?>
