<?php
if(!isset($_COOKIE['login'])){
    header("Location: pag_login.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
	
    <head>
		
        <title>Xô-Vê Eventos</title>
		
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="content-language" content="pt-br" />
	<meta name="description" content="O melhor site de noticias do Brasil" />
	<meta name="author" content="Uriel, Madson" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/divulgue_evento.css">
	
    </head>

    <body>
    
        <div class="tudo">

            <div id="top" class="top-divulgue">
            
                <div class="t-top">	
                
                    <div id="logo" class="logo-divulgue">
                    
                        <a href="index.php"><img src="galeria/xove.png"></a>
                        
                    </div>
                    
                    <div id="menu" class="menu-divulgue">
                    
                        <a href="index.php">Home</a>
                        <a href="">Criar evento</a>
                        <a href="">Meus eventos</a>
                        
                    </div>
                    
                    <div id="session" class="session-divulgue">						
                    
                        
                        
                    </div>
                    
                </div>
                
            </div>
            
            <div id="corpo" class="index">

                <div id="criar">
	<h1>Criar evento</h1>
    </div>		
    <div id="corpo" class="index">
        <div id="form">
            <form method="POST" action="divulgue.php">
                <div id="descricao">
                        <div id="titulo">Descrição do evento</div>
                        
                        <div id='upload' style="display:none;">
                            
                        </div>
                        <div id="descricao_div">
                        <label>Nome do evento*</label><br><input type="text" name="nome" required="required" class="descricao_input"><br>
                                <label>Categoria*</label>
                                        <select name="categoria" required="required">
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
                                        <input type="checkbox" name="opcao" value="1" id="chec" class="form_checbox">Selecionar imagem
                        </div>
                </div>
                <div id="quando">
                        <div id="titulo">Quando</div>
                                <label>inicio do evento*</label>
                                <label class="label-quando">Termino do evento*</label><br>
                                <input type="date" name="date_inicio_evento" required="required" class="form_input">
                                <input type="time" name="hora_inicio_evento" required="required" class="form_input">
                                <label class="label-quando2"></label>
                                <input type="date" name="date_final_evento" required="required" class="form_input">
                                <input type="time" name="hora_final_evento" required="required" class="form_input"> 
                </div>
                <div id="endereco">
                        <div id="titulo">Local do evento</div>
                                <label class="label-endereco0">Local*</label><input type="text" name="local" required="required" class="form_input"><br>
                                <label class="label-endereco1">Av/Rua*</label><input type="text" name="av_rua" required="required" class="form_input"><br>
                                <label class="label-endereco2">Numero:</label><input type="number" name="numero" class="form_input"><br>
                                <label class="label-endereco3">Bairro:</label><input type="text" name="bairro" class="form_input"><br>
                                <label class="label-endereco4">Cidade*</label>
                                        <select name="cidade" required="required">
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
                    <textarea cols="80" rows="30" name="programacao"></textarea>
                </div>
                <button type="submit" class="form_button">Criar evento</button>
            </form>
                    
    </div>
</div>
            
            <?php
            
                include 'rodape.php';
            
            ?>
            
        </div>
        
    </body>
    
</html>    