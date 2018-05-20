<?php
session_start();
include 'topo_criar.php';
?>
    <div id="criar">
	<h1>Meus eventos</h1>
    </div>		
    <div id="corpo" class="index">
        <div id="meus">
        <?php
		
        $ev_link="SELECT link_evento FROM eventos WHERE  cod_evento = 9";
        $result12 = mysql_query($ev_link,$link);
        $linha12 = mysql_fetch_assoc($result12);
        $str12 = implode("", $linha12);
        $str13 = "pag_edicao.php"."$str12";

        $query_id="SELECT COUNT(cod_evento) FROM eventos WHERE evento_user = 'uriel-1001'";
        $result_id = mysql_query($query_id,$link);
        $linha_id = mysql_fetch_assoc($result_id);
        $str_id = implode("", $linha_id);
        
        if($str_id == 0){
            echo 'Voce nao tem eventos cadastrados';
        }  else {
        include ('conect_criar.php');

                                    $cod="SELECT cod_evento FROM eventos WHERE date_inicio_evento >= curdate() order by date_inicio_evento";
                                    $result9 = mysql_query($cod,$link);
                                    $linha9 = mysql_fetch_assoc($result9);
                                    
                                    $count="SELECT COUNT(cod_evento) FROM eventos WHERE date_inicio_evento >= curdate() order by date_inicio_evento";
                                    $result10 = mysql_query($count,$link);
                                    $linha10 = mysql_fetch_assoc($result10);
                                    $string1 = implode("", $linha10);
                                    $str_int = (int)$string1;
                                        if($str_id > 0) {
                                            do {
                                                $cod1 = $linha9['cod_evento'];
            
        $mes="SELECT MONTH(date_inicio_evento) FROM eventos WHERE cod_evento = $cod1";
    $result = mysql_query($mes,$link);
    $linha = mysql_fetch_assoc($result);
    $str = implode("", $linha);
    $mes_int = (int)$str;

    if($mes_int == 1){
        $mes_string = "Jan";
    }elseif($mes_int == 2){
        $mes_string = "Fev";
    }elseif($mes_int == 3){
        $mes_string = "Mar";
    }elseif($mes_int == 4){
        $mes_string = "Abr";
    }elseif($mes_int == 5){
        $mes_string = "Mai";
    }elseif($mes_int == 6){
        $mes_string = "Jun";
    }elseif($mes_int == 7){
        $mes_string = "Jul";
    }elseif($mes_int == 8){
        $mes_string = "Ago";
    }elseif($mes_int == 9){
        $mes_string = "Set";
    }elseif($mes_int == 10){
        $mes_string = "Out";
    }elseif($mes_int == 11){
        $mes_string = "Nov";
    }elseif($mes_int == 12){
        $mes_string = "Dez";
    }

    $dia="SELECT DAY(date_inicio_evento) FROM eventos WHERE cod_evento = $cod1";
    $result0 = mysql_query($dia,$link);
    $linha0 = mysql_fetch_assoc($result0);
    $str0 = implode("", $linha0);
    $dia_int = (int)$str0;
    $dia_str = $dia_int;
    if($dia_int < 10){
        $dia_str = "0".$dia_int;
    }

    $nome="SELECT nome FROM eventos WHERE cod_evento = $cod1";
    $result1 = mysql_query($nome,$link);
    $linha1 = mysql_fetch_assoc($result1);
    $str1 = implode("", $linha1);

    $cat="SELECT cidade FROM endereco WHERE cod_endereco = $cod1";
    $result2 = mysql_query($cat,$link);
    $linha2 = mysql_fetch_assoc($result2);
    $str2 = implode("", $linha2);

    $local="SELECT local FROM endereco WHERE cod_endereco = $cod1";
    $result3 = mysql_query($local,$link);
    $linha3 = mysql_fetch_assoc($result3);
    $str3 = implode("", $linha3);

    $hora="SELECT HOUR(hora_inicio_evento) FROM eventos WHERE cod_evento = $cod1";
    $result4 = mysql_query($hora,$link);
    $linha4 = mysql_fetch_assoc($result4);
    $str4 = implode("", $linha4);
    $hora2="SELECT MINUTE(hora_inicio_evento) FROM eventos WHERE cod_evento = $cod1";
    $result7 = mysql_query($hora2,$link);
    $linha7 = mysql_fetch_assoc($result7);
    $str7 = implode("", $linha7);
    $str7 = (int)$str7;
    if($str7 < 10){
        $str7 = "0".$str7;
    }

    $preco="SELECT MIN(preco) FROM ingresso WHERE estrangeira_ingresso = $cod1";
    $result5 = mysql_query($preco,$link);
    $linha5 = mysql_fetch_assoc($result5);
    $str5 = implode("", $linha5);
    $preco2="SELECT MAX(preco) FROM ingresso WHERE estrangeira_ingresso = $cod1";
    $result6 = mysql_query($preco2,$link);
    $linha6 = mysql_fetch_assoc($result6);
    $str6 = implode("", $linha6);

    $img="SELECT link_img FROM eventos WHERE  cod_evento = $cod1";
    $result8 = mysql_query($img,$link);
    $linha8 = mysql_fetch_assoc($result8);
    $str8 = implode("", $linha8);

echo "                               
                                <a href='$str13'><div id='evento' class='ev_1'>
						
                                    <div id='cima'>
							
                                        <div id='date'>
								
                                            <div id='mes'><h3>$mes_string</h3></div><p>$dia_str</p>
							
                                        </div>
                                            <img src = galeria/upload/$str8></img>
							
                                        <div id='detalhes'>
								
                                            <div id='tam_detalhes'>
									
                                                <img src='galeria/mapa.png'></img><p id='p_local'>$str3</p>
                                                <img src='galeria/cifrao.png'></img><p id='p_preco'>";if($str5 == $str6){echo 'R$'.$str5;}else {echo 'R$'.$str5. ' até R$'.$str6;}echo" </p>
                                                <img src='galeria/relogio.png'></img><p id='p_date'>$str4:$str7 h</p>

                                            </div>
							
                                        </div>
						
                                    </div>
						
                                    <div id='baixo'>
							
                                        <p>$str1 -<br>  $str2 -BA</p>
						
                                    </div>        </div></a>";
        }while($linha9 = mysql_fetch_assoc($result9));
        }
        
                                                }
        
        ?>
        </div>
    </div>
 <div id="copy">
						
            <?php  

                include 'rodape.php';

            ?>

        </div>