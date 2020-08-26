<?php
    if(strlen($_GET["v1"]) > strlen($_GET["v2"])){
        echo "<b>x tem mais carcteres!</b>";
    }
    else if(strlen($_GET["v1"]) < strlen($_GET["v2"]){
        echo "<b>y tem mais carcteres!</b>";
    }else{
        echo "<b>x e y tem a mesma quantidadade de carcteres!</b>";
    }
?>