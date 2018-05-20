<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
	
    <head>
		
        <title>Xô-Vê Eventos</title>
        <link rel="sortcut icon" href="galeria/x-icon.png" type="image/x-icon" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="pt-br" />
	<meta name="description" content="O melhor site de noticias do Brasil" />
	<meta name="author" content="Uriel, Madson" />
        <link rel="stylesheet" type="text/css" href="css/style.css"></link>
        <link rel="stylesheet" type="text/css" href="css/divulgue_evento.css"></link>
        <link rel="stylesheet" type="text/css" href="css/criar-conta.css"></link>
	
    </head>

    <body class="body_criar">
    
        <div class="tudo">

            <div id="top" class="top-divulgue">
            
                <div class="t-top">	
                
                    <div id="logo" class="logo-divulgue">
                    
                        <a href="index.php"><img src="galeria/xove.png"></a>
                        
                    </div>
                    
                    <div id="menu" class="menu-divulgue">
                    
                        <a href="index.php">Home</a>
                        <a href="criar_evento.php">Criar evento</a>
                        <a href="meusEventos.php">Meus eventos</a>
                        
                    </div>
                    <div id="abrange">
                           <?php
                            include 'conect_criar.php';
                                $query_select_01 = "SELECT nome FROM users";
                                $query = mysql_query($query_select_01,$link);
                                $linha = mysql_fetch_assoc($query);
                                $str = implode("", $linha);
                                $query_select_2 = "select sobre from users";
                                $quer = mysql_query($query_select_2, $link);
                                $linha2 = mysql_fetch_assoc($quer);
                                $string = implode("", $linha2);
                            ?>
                            
                            <ul id="session_criar" class="menu">
                            <li><a href="#"><?php echo $str ." ". $string; ?></a>
                                              <ul>
                                                    <li><a href="meusEventos.php">Meus eventos</a></li>
                                                    <li><a href="destroy_session.php">sair</a></li>                    
                                              </ul>
                                          </li>               
                                </ul>

                        </div>
                </div>
                
            </div>

