<?php
    $nDato1c=$_GET["caNum1"];


        if ($nDato1c==0 || $nDato1c==1||$nDato1c==2 || $nDato1c==3 ){
            echo "Totalmente reprobado, sin salvacion";
            echo"<a href='index.php'>Inicio</a>";

        }else if ($nDato1c==4 || $nDato1c==5 ){
            echo "Reprobado, casi lo logras";
            echo"<a href='index.php'>Inicio</a>";

        }else if ($nDato1c==6){
            echo "Pansaste";
            echo"<a href='index.php'>Inicio</a>";

        }else if ($nDato1c==7 || $nDato1c ==8){
            echo "Bien hecho";
            echo"<a href='index.php'>Inicio</a>";

        }else if ($nDato1c==9 || $nDato1c==10){
            echo "Excelencia";
            echo"<a href='index.php'>Inicio</a>";

        }else {
            echo "Ingresa una cifra creible y valida";
            echo"<a href='index.php'>Inicio</a>";

        }





?>