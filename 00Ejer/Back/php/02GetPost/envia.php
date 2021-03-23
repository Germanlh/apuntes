<?php
    if(isset($_GET["enviar_btn"])){
        echo "Enviaste GET";
    }
    else if(isset($_POST["enviar_btn"])){
        echo "Enviaste POST";
    }
?>