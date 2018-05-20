<?php
    
         session_start();
         
        if( !isset($_COOKIE['login']) ) {
            
            include 'conect_criar.php';
            include 'topo.php';
            
            
        }else {
            
            include 'topo_login.php';
            
        }

        $str_cod_ev = $_GET['cod_evento'];
        $cod_ev = (int)$str_cod_ev;
        
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
    
    $email="SELECT email FROM users WHERE login = '$str_us'";
    $result_em = mysql_query($email,$link);
    $linha_em = mysql_fetch_assoc($result_em);
    $str_em = implode("", $linha_em);
    
    $user_name="SELECT nome FROM users WHERE login = '$str_us'";
    $result_un = mysql_query($user_name,$link);
    $linha_un = mysql_fetch_assoc($result_un);
    $str_un = implode("", $linha_un);
    
    $user_sobre="SELECT sobre FROM users WHERE login = '$str_us'";
    $result_usn = mysql_query($user_sobre,$link);
    $linha_usn = mysql_fetch_assoc($result_usn);
    $str_usn = implode("", $linha_usn);
    
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
            <div class="tudo">
                <div id="criar">
                    <h1>eventos</h1>
                </div>
                <div id="corpo" class="index">
                    <div id="form">
                        <div>
                            <h1><?php echo $str1; ?></h1>
                        </div>
                        
                        <div id="ev_left">
                            <div id="ev_img">
                                <?php echo "<img src = galeria/upload/$str8>"; ?>
                            </div>
                            <div id="ev_info">
                                <span><b>Categoria:</b></span> <label><?php echo $str_ca; ?></label><br>
                                <span><b>Inicio:</b></span> <label><?php echo date('d/m/Y', strtotime($str)) . " ás " . $str4 .":". $str7; ?> </label><br>
                                <span><b>Termino:</b></span> <label><?php echo date('d/m/Y', strtotime($str1)). " ás " . $str_h .":". $str_m; ?></label>
                            </div>
                        </div>
                        <div id="ev_rigth">
                            <span><b>Cidade:</b></span> <label><?php echo $str2 . "-BA"; ?></label><br>                            
                            <span><b>Av/rua:</b></span> <label><?php echo $str_av.",".$str_n; ?></label><br>
                            <span><b>Bairro:</b></span> <label><?php echo $str_ba; ?></label><br>
                            <span><b>Local do evento:</b></span> <label><?php echo $str3; ?></label>
                        </div>
                        <div id="ev_ingresso">
                            <div id="ev_titulo">Ingresso</div>
                                <table border='1px' cellpadding='5px' cellspacing='0' id='table_ingresso'>
                                    <tr class='cor'>
                                    <td>Tipo</td>
                                    <td>Preço</td>
                                    <td>Quantidade</td>
                                    <td>Inicio das vendas</td>
                                    <td>termino das vendas</td>
                               </tr>
                                <?php
                                    $ing="SELECT cod_ingresso FROM ingresso WHERE estrangeira_ingresso = $cod_ev";
                                    $result_ing = mysql_query($ing,$link);
                                    $linha_ing = mysql_fetch_assoc($result_ing);

                                    $count="SELECT COUNT(cod_ingresso) FROM ingresso WHERE estrangeira_ingresso = $cod_ev";
                                    $result10 = mysql_query($count,$link);
                                    $linha10 = mysql_fetch_assoc($result10);
                                    $string1 = implode("", $linha10);
                                    $str_int = (int)$string1;
                                    
                                        if($str_int > 0) {
                                            do {
                                                $cod_in = $linha_ing['cod_ingresso'];
                                                
                                                $tipo="SELECT tipo FROM ingresso WHERE cod_ingresso = $cod_in";
                                                $result_ti = mysql_query($tipo,$link);
                                                $linha_ti = mysql_fetch_assoc($result_ti);
                                                $str_ti = implode("", $linha_ti);
                                                
                                                $preco_in="SELECT preco FROM ingresso WHERE cod_ingresso = $cod_in";
                                                $result_pi = mysql_query($preco_in,$link);
                                                $linha_pi = mysql_fetch_assoc($result_pi);
                                                $str_pi = implode("", $linha_pi);
                                                
                                                $quan="SELECT quantidade FROM ingresso WHERE cod_ingresso = $cod_in";
                                                $result_qu = mysql_query($quan,$link);
                                                $linha_qu = mysql_fetch_assoc($result_qu);
                                                $str_qu = implode("", $linha_qu);
                                                
                                                $div="SELECT date_inicio_vendas FROM ingresso WHERE cod_ingresso = $cod_in";
                                                $result_div = mysql_query($div,$link);
                                                $linha_div = mysql_fetch_assoc($result_div);
                                                $str_div = implode("", $linha_div);
                                                
                                                $hiv="SELECT hora_inicio_vendas FROM ingresso WHERE cod_ingresso = $cod_in";
                                                $result_hiv = mysql_query($hiv,$link);
                                                $linha_hiv = mysql_fetch_assoc($result_hiv);
                                                $str_hiv = implode("", $linha_hiv);
                                                
                                                $data_in = "$str_div $str_hiv";
                                                
                                                $dfv="SELECT date_final_vendas FROM ingresso WHERE cod_ingresso = $cod_in";
                                                $result_dfv = mysql_query($dfv,$link);
                                                $linha_dfv = mysql_fetch_assoc($result_dfv);
                                                $str_dfv = implode("", $linha_dfv);
                                                
                                                $hfv="SELECT hora_final_vendas FROM ingresso WHERE cod_ingresso = $cod_in";
                                                $result_hfv = mysql_query($hfv,$link);
                                                $linha_hfv = mysql_fetch_assoc($result_hfv);
                                                $str_hfv = implode("", $linha_hfv);
                                                    if($str_ti == ""){
                                                        $str_ti = "Entrada gratis";
                                                    }
                                                    if($str_qu == "0"){
                                                        $str_qu = "indefinida";
                                                    }
                                                        echo "<tr>
                                                                <td>".$str_ti."</td>
                                                                <td>"."R$".$str_pi."</td>
                                                                <td>".$str_qu."</td>
                                                                <td>";
                                                                if($str_div == "0000-00-00"){
                                                                    echo 'Não informado';
                                                                }else{
                                                                    echo date('d/m/Y', strtotime($str_div)). " ás ". date('H:i', strtotime($str_hiv));}
                                                        echo "</td>
                                                                <td>";
                                                                    if($str_dfv == "0000-00-00"){
                                                                    echo 'Não informado';
                                                                }else{
                                                                    echo date('d/m/Y', strtotime($str_dfv)). " ás ". date('H:i', strtotime($str_hfv));}
                                                        echo "</td>
                                                              </tr>";
                                                
                                            }while($linha_ing = mysql_fetch_assoc($result_ing));
                                        }
                                ?> 
                            </table>
                        </div>
                        <div id="ev_descricao">
                            <h3>Descrição do evento</h3>
                            <p><?php if($str_de == "") echo'Sem descrição.';else echo $str_de; ?></p>
                        </div>
                        <div id="ev_autor">
                            <div id="ev_titulo">Contato do produtor</div>
                            <div id="ev_contato">
                                <span><b>Nome:</b></span> <label><?php echo $str_un." ".$str_usn; ?></label><br>
                                <span><b>E-mail:</b></span> <label><?php echo $str_em; ?></label>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div id="copy" class="copy_criar">
						
                    <?php  

                        include 'rodape.php';

                    ?>

                </div>
            </div>

