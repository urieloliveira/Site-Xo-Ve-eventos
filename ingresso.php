<?php
include 'topo_criar.php';
include 'conect_criar.php';
?>
    <div id="criar">
	<h1>Criar ingresso</h1>
    </div>		
    <div id="corpo" class="index">
        <div id="form">
                <div id="ingresso">
                        <div id="titulo">Ingresso</div>
                        <form method="POST" action="envia_ingresso.php">
                            
                            <div id="div">
                                <label class="label-ingresso0">Tipo de ingresso*</label>
                                        <select name="tipo">
                                                <option value="" selected="selected">-- Selecione um tipo de ingresso --</option>
                                                <option value="Entrada gratis">Entrada gratis</option>
                                                <option value="Ingresso unico">Ingresso unico</option>
                                                <option value="VIP">VIP</option>
                                                <option value="Camarote">Camarote</option>
                                                <option value="Pista">Pista</option>
                                                <option value="Meia entrada">Meia entrada</option>
                                        </select><br>
                                        
                                            <label class="label-ingresso1">Preço*</label><input type="number" name="preco" class="form_input"><br>
                                            <label class="label-ingresso2">Quantidade*</label><input type="number" name="quantidade" class="form_input"><br>
                                            <label class="label-ingresso3">inicio das vendas</label><input type="date" name="date_inicio_vendas" class="form_input">
                                            <input type="time" name="hora_inicio_vendas" class="form_input"><br>
                                            <label class="label-ingresso4">Termino das vendas</label><input type="date" name="date_final_vendas" class="form_input">
                                            <input type="time" name="hora_final_vendas" class="form_input">  
                                </div>
                                <button type="submit">Criar ingresso</button>
                            </form>
                        <?php 
                            $query1 = "SELECT MAX(cod_endereco) FROM endereco";
                            $dados1 = mysql_query($query1,$link);
                            $linha1 = mysql_fetch_assoc($dados1);
                            $str1 = implode("", $linha1);
                            $ultimo_cod1 = (int)$str1;
                            
                            $query = "SELECT COUNT(cod_ingresso) FROM ingresso WHERE estrangeira_ingresso = $ultimo_cod1";
                            $dados = mysql_query($query,$link);
                            $linha = mysql_fetch_assoc($dados);
                            $str = implode("", $linha);
                            $ultimo_cod = (int)$str;

                            if($ultimo_cod > 0){
                                echo "<a href='index.php'>Finalizar</a>";
                            }
                        ?>        
                </div>
        </div>
    </div>

