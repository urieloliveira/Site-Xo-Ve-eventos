<?php
$divulga_tipo = $_POST['tipo'];
$divulga_preco = $_POST['preco'];
$divulga_quantidade = $_POST['quantidade'];
$divulga_date_inicio_vendas = $_POST['date_inicio_vendas'];
$divulga_hora_inicio_vendas = $_POST['hora_inicio_vendas'];
$divulga_date_final_vendas = $_POST['date_final_vendas'];
$divulga_hora_final_vendas = $_POST['hora_final_vendas'];
include 'conect_criar.php';

$query3 = "SELECT login FROM users";
    $dados3 = mysql_query($query3,$link);
    $linha3 = mysql_fetch_assoc($dados3);
    $str3 = implode("", $linha3);
    
$query = "SELECT MAX(cod_evento) FROM eventos";
    $dados = mysql_query($query,$link);
    $linha = mysql_fetch_assoc($dados);
    $str = implode("", $linha);
    $ultimo_cod = (int)$str;
    
$query = "INSERT INTO ingresso (tipo,preco,quantidade,date_inicio_vendas,hora_inicio_vendas,date_final_vendas,hora_final_vendas,cod_ingresso, estrangeira_ingresso,ingresso_user) VALUES ('$divulga_tipo','$divulga_preco','$divulga_quantidade','$divulga_date_inicio_vendas','$divulga_hora_inicio_vendas','$divulga_date_final_vendas','$divulga_hora_final_vendas',null,'$ultimo_cod','$str3')";
    $verifica = mysql_query($query,$link);    
                if($verifica){
                    echo"<script language='javascript' type='text/javascript'>alert('Ingresso cadastrado');window.location.href='ingresso.php'</script>";
                }else{
                    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='ingresso.php'</script>";
                }
