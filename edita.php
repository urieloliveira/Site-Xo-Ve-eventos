<?php
include 'conect.php';

$ed_nome = $_POST['nome'];
$ed_categoria = $_POST['categoria'];
$ed_date_inicio_evento = $_POST['date_inicio_evento'];
$ed_hora_inicio_evento = $_POST['hora_inicio_evento'];
$ed_date_final_evento = $_POST['date_final_evento'];
$ed_hora_final_evento = $_POST['hora_final_evento'];
$ed_local = $_POST['local'];
$ed_av_rua = $_POST['av_rua'];
$ed_numero = $_POST['numero'];
$ed_bairro = $_POST['bairro'];
$ed_cidade = $_POST['cidade'];
$ed_descricao = $_POST['descricao'];

$ev_link="SELECT link_evento FROM eventos WHERE  cod_evento = 9";
        $result12 = mysql_query($ev_link,$link);
        $linha12 = mysql_fetch_assoc($result12);
        $str12 = implode("", $linha12);
        
        
$up="UPDATE eventos SET nome= '$ed_nome' , categoria= '$ed_categoria', date_inicio_evento= '$ed_date_inicio_evento', hora_inicio_evento= '$ed_hora_inicio_evento', date_final_evento ='$ed_date_final_evento', hora_final_evento= '$ed_hora_final_evento', descricao= '$ed_descricao' WHERE cod_evento = 9";
$result_up = mysql_query($up,$link);        

header('location:meusEventos.php');