<?php
session_start();
include 'topo_criar.php';
?>
<?php
    
    $str_cod_ev = $_GET['cod_evento'];
    $cod_ev = (int)$str_cod_ev;
        
    $ing="SELECT cod_ingresso FROM ingresso WHERE estrangeira_ingresso = $cod_ev";
    $result_ing = mysql_query($ing,$link);
    $linha_ing = mysql_fetch_assoc($result_ing);      


    $cod_in = $linha_ing['cod_ingresso'];
                                                
    $date_in="SELECT date_inicio_evento FROM eventos WHERE cod_evento = $cod_ev";
    $result = mysql_query($date_in,$link);
    $linha = mysql_fetch_assoc($result);
    $str = implode("", $linha);

    $date_fi="SELECT date_final_evento FROM eventos WHERE cod_evento = $cod_ev";
    $result0 = mysql_query($date_fi,$link);
    $linha0 = mysql_fetch_assoc($result0);
    $str0 = implode("", $linha0);

    $nome="SELECT nome FROM eventos WHERE cod_evento = $cod_ev";
    $result1 = mysql_query($nome,$link);
    $linha1 = mysql_fetch_assoc($result1);
    $str1 = implode("", $linha1);
    
    $cat="SELECT categoria FROM eventos WHERE cod_evento = $cod_ev";
    $result_ca = mysql_query($cat,$link);
    $linha_ca = mysql_fetch_assoc($result_ca);
    $str_ca = implode("", $linha_ca);
    
    $des="SELECT descricao FROM eventos WHERE cod_evento = $cod_ev";
    $result_de = mysql_query($des,$link);
    $linha_de = mysql_fetch_assoc($result_de);
    $str_de = implode("", $linha_de);

    $user="SELECT evento_user FROM eventos WHERE cod_evento = $cod_ev";
    $result_us = mysql_query($user,$link);
    $linha_us = mysql_fetch_assoc($result_us);
    $str_us = implode("", $linha_us);
    
    $cid="SELECT cidade FROM endereco WHERE cod_endereco = $cod_ev";
    $result2 = mysql_query($cid,$link);
    $linha2 = mysql_fetch_assoc($result2);
    $str2 = implode("", $linha2);
    
    $av="SELECT av_rua FROM endereco WHERE cod_endereco = $cod_ev";
    $result_av = mysql_query($av,$link);
    $linha_av = mysql_fetch_assoc($result_av);
    $str_av = implode("", $linha_av);
    
    $num="SELECT numero FROM endereco WHERE cod_endereco = $cod_ev";
    $result_n = mysql_query($num,$link);
    $linha_n = mysql_fetch_assoc($result_n);
    $str_n = implode("", $linha_n);
    
    $bairro="SELECT bairro FROM endereco WHERE cod_endereco = $cod_ev";
    $result_ba = mysql_query($bairro,$link);
    $linha_ba = mysql_fetch_assoc($result_ba);
    $str_ba = implode("", $linha_ba);

    $local="SELECT local FROM endereco WHERE cod_endereco = $cod_ev";
    $result3 = mysql_query($local,$link);
    $linha3 = mysql_fetch_assoc($result3);
    $str3 = implode("", $linha3);

    $hora="SELECT HOUR(hora_inicio_evento) FROM eventos WHERE cod_evento = $cod_ev";
    $result4 = mysql_query($hora,$link);
    $linha4 = mysql_fetch_assoc($result4);
    $str4 = implode("", $linha4);
    if($str4 < 10){
        $str4 = "0".$str4;
    }
    $hora2="SELECT MINUTE(hora_inicio_evento) FROM eventos WHERE cod_evento = $cod_ev";
    $result7 = mysql_query($hora2,$link);
    $linha7 = mysql_fetch_assoc($result7);
    $str7 = implode("", $linha7);
    $str7 = (int)$str7;
    if($str7 < 10){
        $str7 = "0".$str7;
    }
    
    $hora3="SELECT HOUR(hora_final_evento) FROM eventos WHERE cod_evento = $cod_ev";
    $result_h = mysql_query($hora3,$link);
    $linha_h = mysql_fetch_assoc($result_h);
    $str_h = implode("", $linha_h);
    $str_h = (int)$str_h;
    if($str_h < 10){
        $str_h = "0".$str_h;
    }
    $hora4="SELECT MINUTE(hora_final_evento) FROM eventos WHERE cod_evento = $cod_ev";
    $result_m = mysql_query($hora4,$link);
    $linha_m = mysql_fetch_assoc($result_m);
    $str_m = implode("", $linha_m);
    $str_m = (int)$str_m;
    if($str_m < 10){
        $str_m = "0".$str_m;
    }
    
    $preco="SELECT MIN(preco) FROM ingresso WHERE estrangeira_ingresso = $cod_ev";
    $result5 = mysql_query($preco,$link);
    $linha5 = mysql_fetch_assoc($result5);
    $str5 = implode("", $linha5);
    $preco2="SELECT MAX(preco) FROM ingresso WHERE estrangeira_ingresso = $cod_ev";
    $result6 = mysql_query($preco2,$link);
    $linha6 = mysql_fetch_assoc($result6);
    $str6 = implode("", $linha6);
    
    $img="SELECT link_img FROM eventos WHERE  cod_evento = $cod_ev";
    $result8 = mysql_query($img,$link);
    $linha8 = mysql_fetch_assoc($result8);
    $str8 = implode("", $linha8);		

                                                ?>
    <div id="criar">
	<h1>editar evento</h1>
    </div>		
    <div id="corpo" class="index">
        <div id="form">
            <form method="POST" action="edita.php" enctype="multipart/form-data" >
                <div id="descricao">
                        <div id="titulo">Descrição do evento</div>
                        <script>
                            function verificaEmpr(emp){

                            var div = document.getElementById('divea');

                            if (emp.checked == true)	
                            div.style.display = 'block';
                            else
                            div.style.display = 'none';
                            }
                        </script>
                        
                        <div  id="divea" class="upload">
                            <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
                            <input name="arquivo" type="file"/>
                            
                            <div id="alerta">
                                <label>A imagem escolhida deve estar em formato JPG, GIF, ou PNG. A dimensão recomendada é de 250 x 200 pixels. Imagens com altura ou largura diferentes destas seram redimensionadas e/ou cortadas.</label>
                            </div>
                            
                        </div>
                        <div id="descricao_div" display="none">
                        <label>Nome do evento*</label><br><input type="text" name="nome" <?php echo"value='$str1'"?> required="required" class="descricao_input"><br>
                                <label>Categoria*</label>
                                        <select name="categoria" required="required" <?php echo"value = '$str_ca'"?>>
                                                <option value="Sem categoria">-- Escolha uma opção --</option>
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
                                        </select>
                                        <input type="checkbox" name="chec" onClick="verificaEmpr(this);" class="form_checbox">Selecionar imagem
                        </div>
                </div>
                <div id="quando">
                        <div id="titulo">Quando</div>
                                <label>inicio do evento*</label>
                                <label class="label-quando">Termino do evento*</label><br>
                                <input <?php echo "value='$str'"?> type="date" name="date_inicio_evento" required="required" class="form_input">
                                <input <?php echo"value = '$str4:$str7'"?> type="time"  name="hora_inicio_evento" required="required" class="form_input">
                                <label class="label-quando2"></label>
                                <input <?php echo "value='$str0'"?> type="date" name="date_final_evento" required="required" class="form_input">
                                <input <?php echo"value = '$str_h:$str_m'"?> type="time"  name="hora_final_evento" required="required" class="form_input"> 
                </div>
                <div id="endereco">
                        <div id="titulo">Local do evento</div>
                                <label class="label-endereco0">Local*</label><input <?php echo"value = '$str3'"?>  type="text"  name="local" required="required" class="form_input"><br>
                                <label class="label-endereco1">Av/Rua*</label><input <?php echo"value = '$str_av'"?> type="text" name="av_rua" required="required" class="form_input"><br>
                                <label class="label-endereco2">Numero:</label><input <?php echo"value = '$str_n'"?> type="number" name="numero" class="form_input"><br>
                                <label class="label-endereco3">Bairro:</label><input <?php echo"value = '$str_ba'"?> type="text" name="bairro" class="form_input"><br>
                                <label class="label-endereco4">Cidade*</label>
                                        <select name="cidade"  required="required" <?php echo"value = '$str2'"?>>
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
                                </select><br>
                </div>
                <div id="programacao">
                    <div id="titulo">Descrição da Programação</div>
                    <textarea cols="80" rows="30" name="descricao" <?php echo "value='$str_de'"?>></textarea>
                </div>
                <button type="submit" class="form_buttonx">Salvar Alterações</button><br>
                <button type="submit" class="form_buttony">Excluir Evento</button>
            </form>
                    
    </div>
</div>