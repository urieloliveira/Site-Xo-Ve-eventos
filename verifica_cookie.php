<?php
    
if(!isset($_COOKIE['login'])){
    header("pag_login.php");
}else{
    header("pag_cadastro.php");
}

?>
