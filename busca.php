<?php
session_start();
include 'topo.php';
include 'conect_criar.php';
?>
	<div class="tudo">
	<div id="criar">
		<h1>Resultado da Busca</h1>
    </div>
    <div id="corpo" class="index">
        		
        <div id="meus">
<?php
$x = $_GET['s'];
try {
    $conn = new PDO('mysql:host=localhost;dbname=db_criar_eventos_system', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    $data = $conn->query("SELECT * FROM eventos where nome like '%$x%' or categoria like '%$x%' or descricao like '%$x%' or date_inicio_evento like '%$x%' or hora_inicio_evento like '%$x%' or date_inicio_evento like '%$x%' or date_inicio_evento like '%$x%'");
	if($data == "" || $data == null){
		echo "n há nada pra se ver</br>";
				echo "n há nada pra se ver</br>";
						echo "n há nada pra se ver</br>";
								echo "n há nada pra se ver</br>";
								
	}else{
    foreach($data as $row) {
		
    	$y = $row[7];	

    		 $hora="SELECT HOUR(hora_inicio_evento) FROM eventos WHERE cod_evento = $y";
		    $result4 = mysql_query($hora,$link);
		    $linha4 = mysql_fetch_assoc($result4);
		    $str4 = implode("", $linha4);
		    $hora2="SELECT MINUTE(hora_inicio_evento) FROM eventos WHERE cod_evento = $y";
		    $result7 = mysql_query($hora2,$link);
		    $linha7 = mysql_fetch_assoc($result7);
		    $str7 = implode("", $linha7);
		    $str7 = (int)$str7;
		    if($str7 < 10){
		        $str7 = "0".$str7;
		    }

		    $preco="SELECT MIN(preco) FROM ingresso WHERE estrangeira_ingresso = $y";
		    $result5 = mysql_query($preco,$link);
		    $linha5 = mysql_fetch_assoc($result5);
		    $str5 = implode("", $linha5);
		    $preco2="SELECT MAX(preco) FROM ingresso WHERE estrangeira_ingresso = $y";
		    $result6 = mysql_query($preco2,$link);
		    $linha6 = mysql_fetch_assoc($result6);
		    $str6 = implode("", $linha6);

		    $img="SELECT link_img FROM eventos WHERE  cod_evento = $y";
		    $result8 = mysql_query($img,$link);
		    $linha8 = mysql_fetch_assoc($result8);
		    $str8 = implode("", $linha8);

    		$mes="SELECT MONTH(date_inicio_evento) FROM eventos WHERE cod_evento = $y";
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

		    $dia="SELECT DAY(date_inicio_evento) FROM eventos WHERE cod_evento = $y";
		    $result0 = mysql_query($dia,$link);
		    $linha0 = mysql_fetch_assoc($result0);
		    $str0 = implode("", $linha0);
		    $dia_int = (int)$str0;
		    $dia_str = $dia_int;
		    if($dia_int < 10){
		        $dia_str = "0".$dia_int;
		    }  
       		
       		$ev_link="SELECT link_evento FROM eventos WHERE  cod_evento = $y";
    		$result12 = mysql_query($ev_link,$link);
    		$linha12 = mysql_fetch_assoc($result12);
    		$str12 = implode("", $linha12);
    		$str13 = "evento.php"."$str12";


    		$q0 = "select * from endereco where cod_endereco = $y ";  
    		$linha = mysql_fetch_assoc(mysql_query($q0, $link));

    		$q1 = "select * from ingresso where cod_ingresso = $y ";  
    		$linha1 = mysql_fetch_assoc(mysql_query($q1, $link));

    		




echo "                               
                                <a href='$str13'><div id='evento' class='ev_1'>
						
                                    <div id='cima'>
							
                                        <div id='date'>
								
                                            <div id='mes'><h3>$mes_string</h3></div><p>$dia_str</p>
							
                                        </div>
                                            <img src = galeria/upload/$row[link_img]></img>
							
                                        <div id='detalhes'>
								
                                            <div id='tam_detalhes'>
									
                                                <img src='galeria/mapa.png'></img><p id='p_local'>$linha[local]</p>
                                                <img src='galeria/cifrao.png'></img><p id='p_preco'>";if($str5 == $str6){echo 'R$'.$str5;}else {echo 'R$'.$str5. ' até R$'.$str6;}echo"</p>
                                                <img src='galeria/relogio.png'></img><p id='p_date'>$row[hora_inicio_evento] h</p>

                                            </div>
							
                                        </div>
						
                                    </div>
						
                                    <div id='baixo'>
							
                                        <p>$row[nome] -<br>  $linha[cidade] -BA</p>
						
                                    </div>        </div></a>";

    		

    }
	}
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
} ?>
</div>

