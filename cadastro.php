<?php

    $nome = $_POST['nome'];
    $sobre = $_POST['sobre'];
    $mail = $_POST['email'];        
    $login = $_POST['login'];
    $senhar = $_POST['senha'];
    
    include 'conect_criar.php';

    $query_select_01 = "SELECT login FROM users WHERE login = '$login'";
    $select_01 = mysql_query($query_select_01,$link); 
    $testa_01 = mysql_num_rows($select_01);
    $query_select_02 = "SELECT email FROM users WHERE email = '$mail'";
    $select_02 = mysql_query($query_select_02,$link); 
    $testa_02 = mysql_num_rows($select_02);
    

                    if($testa_01 == 1 || $testa_02 == 1){
                
                        echo"<script language='javascript' type='text/javascript'>alert('Esse login ou email já está cadastrado');window.location.href='pag_cadastro.php'</script>";

                    }else{
                
                        $query_select_03 = "INSERT INTO users VALUES ('$nome','$sobre','$mail','$login','$senhar')";
                        mysql_query($query_select_03,$link);
                       header ('location:index.php');
                    
                    }
                
           






