<?php
    require './Data-base.php';

    if($_SESSION['Auth']){
        unset($_SESSION['Auth']);
        header('Location:../public/index.php');
    }

?>
    
    