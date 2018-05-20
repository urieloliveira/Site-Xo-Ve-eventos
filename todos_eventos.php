<?php
session_start();
include 'topo.php';
include 'conect_criar.php';
?>

            <div class="tudo">
			
                <div id="corpo" class="index">

                    <div class="t-corpo">
                        <div id="abrange_tds">
                            <h2><center>Todos os eventos</center></h2>
                        <div id="filtro">
                            <div id="filtro_titulo">FILTRO</div>
							<form method="POST" action="filtrado.php" >
							<label>Categoria*</label>
							<select name="categoria">
                                                <option value="Sem categoria">-- Escolha uma categoria --</option>
                                                <option value="Congresso, seminário">Congresso, seminário</option>
                                                <option value="Curso, workshop">Curso, workshop</option>
                                                <option value="Encontro, networking">Encontro, networking</option>
                                                <option value="Esportivo">Esportivo</option>
                                                <option value="Feira, exposição">Feira, exposição</option>
                                                <option value="Filme, cinema e teatro">Filme, cinema e teatro</option>
                                                <option value="Gastronômico">Gastronômico</option>
                                                <option value="Religioso, espiritual">Religioso, espiritual</option>
                                                <option value="Show, música e festa">Show, música e festa</option>
                                                <option value="Outro evento">Outro evento</option>
                                        </select></br>
										<label class="label-endereco4">Cidade*</label>
                                        <select name="cidade">
                                        <option value="">-- Escolha uma cidade --</option>
                                        <option value="ABAÍRA">ABAÍRA</option>     
                                        <option value="ANDARAÍ">ANDARAÍ</option>     
                                        <option value="B. ESTIVA">B. ESTIVA</option>    
                                        <option value="B.MACAÚBAS">B.MACAÚBAS</option>
                                        <option value="BONINAL">BONINAL</option>     
                                        <option value="BONITO">BONITO</option>    
                                        <option value="CANARANA">CANARANA</option>    
                                        <option value="IBICOARA">IBICOARA</option>     
                                        <option value="IBIPITANGA">IBIPITANGA</option>    
                                        <option value="IBITIARA">IBITIARA</option>     
                                        <option value="IRAQUARA">IRAQUARA</option>     
                                        <option value="IRECÊ">IRECÊ</option>    
                                        <option value="ITABERABA">ITABERABA</option>     
                                        <option value="ITAETÊ">ITAETÊ</option>    
                                        <option value="JUSSIAPE">JUSSIAPE</option>
                                        <option value="LENÇÓIS">LENÇÓIS</option> 
                                        <option value="M. DO CHAPÉU">M. DO CHAPÉU</option> 
                                        <option value="MACAÚBAS">MACAÚBAS</option>    
                                        <option value="MARCIONÍLIO">MARCIONÍLIO</option>    
                                        <option value="MUCUGÊ">MUCUGÊ</option>     
                                        <option value="N. HORIZONTE">N. HORIZONTE</option>     
                                        <option value="N. REDENÇÃO">N. REDENÇÃO</option>    
                                        <option value="O. BREJINHOS">O. BREJINHOS</option>
                                        <option value="PALMEIRAS">PALMEIRAS</option>
                                        <option value="PIATÃ">PIATÃ</option>     
                                        <option value="R. DE CONTAS">R. DE CONTAS</option>     
                                        <option value="S.SOARES">S.SOARES</option>     
                                        <option value="SEABRA">SEABRA</option>
                                        <option value="UTINGA">UTINGA</option>     
                                        <option value="WAGNER">WAGNER</option> 
                                </select></br>
								<label class="label-endereco4">Periodo*</label>
								<select name="categoria">
												<option value="">-- Escolha um periodo --</option>
												<option value="Unico">Evento Unico</option>
                                                <option value="Semanal">Semanal</option>
                                                <option value="Mensal">Mensal</option>
                                                <option value="Anual, workshop">Anula</option>
                                        </select></br>
										<button type="submit">Filtrar</button>
							</form>
                        </div>
        		<?php                        
                                    include ('conect_criar.php');

                                    $cod="SELECT cod_evento FROM eventos";
                                    $result9 = mysql_query($cod,$link);
                                    $linha9 = mysql_fetch_assoc($result9);
                                    
                                    $count="SELECT COUNT(cod_evento) FROM eventos";
                                    $result10 = mysql_query($count,$link);
                                    $linha10 = mysql_fetch_assoc($result10);
                                    $string1 = implode("", $linha10);
                                    $str_int = (int)$string1;
                        ?>
                            <div id='todos_eventos'>
                                    <?php
                                        $i = 0;
                                        if($str_int > 0) {
                                            do {
                                                $cod1 = $linha9['cod_evento'];                                                            
                                                    include 'select.php';                                                   
                                            }while($linha9 = mysql_fetch_assoc($result9));
                                        }
                                    ?>  
                            </div>
                    </div>

                    </div>
		
                </div>
            
            </div>
 <div id="copy">
						
            <?php  

                include 'rodape.php';

            ?>

        </div>

