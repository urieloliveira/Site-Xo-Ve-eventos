<?php
$divulga_nome = $_POST['nome'];
$divulga_categoria = $_POST['categoria'];
$divulga_date_inicio_evento = $_POST['date_inicio_evento'];
$divulga_hora_inicio_evento = $_POST['hora_inicio_evento'];
$divulga_date_final_evento = $_POST['date_final_evento'];
$divulga_hora_final_evento = $_POST['hora_final_evento'];
$divulga_local = $_POST['local'];
$divulga_av_rua = $_POST['av_rua'];
$divulga_numero = $_POST['numero'];
$divulga_bairro = $_POST['bairro'];
$divulga_cidade = $_POST['cidade'];
$divulga_descricao = $_POST['descricao'];
include 'conect_criar.php';
include_once 'classes/resize-class.php';

    $query3 = "SELECT login FROM users";
    $dados3 = mysql_query($query3,$link);
    $linha3 = mysql_fetch_assoc($dados3);
    $str3 = implode("", $linha3);
    
    
    $caminho = "galeria/upload/";

    $imagem = $_FILES['arquivo']['name'];
    
    $query = "INSERT INTO endereco (local,av_rua,numero,bairro,cidade,cod_endereco,endereco_user) VALUES ('$divulga_local','$divulga_av_rua','$divulga_numero','$divulga_bairro','$divulga_cidade',null,'$str3')";
    $verifica = mysql_query($query,$link);
    
    $query4 = "SELECT MAX(cod_endereco) FROM endereco";
    $dados = mysql_query($query4,$link);
    $linha = mysql_fetch_assoc($dados);
    $str = implode("", $linha);
    $ultimo_cod = (int)$str;
                
    if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $caminho . $imagem)) { 
            $resize_tamanho1 = new resize($caminho . $imagem);

            $resize_tamanho1->resizeImage(250, 200, 'crop');

            $tamanho1 = $ultimo_cod . $imagem;

            $resize_tamanho1->saveImage($caminho . $tamanho1, 100);

            unlink($caminho . $imagem);
    }
    
    $link_evento = "?cod_evento=".$ultimo_cod;
    
    $query1 = "INSERT INTO eventos (nome,categoria,date_inicio_evento,hora_inicio_evento,date_final_evento,hora_final_evento,descricao,cod_evento,estrangeira,evento_user,link_img,link_evento) VALUES ('$divulga_nome','$divulga_categoria','$divulga_date_inicio_evento','$divulga_hora_inicio_evento','$divulga_date_final_evento','$divulga_hora_final_evento','$divulga_descricao',null,'$ultimo_cod','$str3','$tamanho1','$link_evento')";
    $verifica1 = mysql_query($query1,$link);    
                if($verifica1){
                    echo"<script language='javascript' type='text/javascript'>window.location.href='ingresso.php'</script>";
                }else{
                    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='index.php'</script>";
                }
    
    
