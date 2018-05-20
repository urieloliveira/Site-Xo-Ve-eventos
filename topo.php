
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
        
<!--SlideShow Script-->        
        <script type="text/javascript">
         
            inical = 0  
            array1 = new Array ("galeria/sshow_img1.png", "galeria/sshow_img2.jpg", "galeria/sshow_img3.jpg", "galeria/sshow_img4.jpg", "galeria/sshow_img5.jpg" )
         
            function comeco(){
            document.getElementById('imgId').src = array1[0]
            inical = 0
            }

            function mais(){
            inical = Math.floor (inical+ 1)
            if (inical > 4)
            {inical = 0}
            }

            function menos(){
            inical = Math.floor (inical-1)
            if (inical < 0)
            {inical = 4}
            }
            
            function temp(){
                 			setInterval("mais()", 5000)
            }
          
            function regular(){
            document.getElementById('imgId').src = array1[inical]
            window.setTimeout("regular()", 100)

           
            }
            
        </script>
<!--End SlideShow Script-->  

    </head>
	
    <body onLoad="comeco();regular();temp();">
            
            <div id="tudo">
	
                <div id="top" class="top-index">
		
                    <div class="t-top">	
			
                        <div id="logo">
                                    
                            <a href="index.php"><img src="galeria/xove.png"></img></a>
					
                        </div>
                                    
                        <div id="menu" class="menu-index">
                            
                            <a href="index.php">Home</a>
                            <a href="todos_eventos.php">Todos eventos</a>
                            <a href="pag_img.php">Sobre</a>
				
                        </div>
	
                        <div id="busca">
			
                            <form method="GET" class="search" action="busca.php">
				
                                <span class="search-icon"></span>
                                <input type="text" name="s" value="" placeholder="Busque no Xô-Vê Eventos..." required="required"></input>
				<button type="submit">Buscar</button>
				
                            </form>					
			    
                        </div>
			    
                        <div id="criar-evento">
                            
                            <a id="d-evento" href="criar_evento.php">Divulgue seu Eventos</a>
			    
                        </div>
                        <?php if(isset( $_SESSION["id"])){
							$br = $_COOKIE["login"];
                            
                             include 'conect_criar.php';

								$query_select_01 = "SELECT nome FROM users where login = '$br' ";
                                $query = mysql_query($query_select_01,$link);
                                $linha = mysql_fetch_assoc($query);
                                $str = implode("", $linha);
                                $query_select_2 = "select sobre from users where login = '$br'";
                                $quer = mysql_query($query_select_2, $link);
                                $linha2 = mysql_fetch_assoc($quer);
                                $string = implode("", $linha2);  
                            
                                echo "<div id='abrange'>
                            
                                
                            
                            
                            <ul id='session' class='menu'>
                            <li><a href='#'>$str $string</a>
                                              <ul>
                                                    <li><a href='meusEventos.php'>Meus eventos</a></li>
                                                    <li><a href='destroy_session.php'>sair</a></li>                    
                                              </ul>
                                          </li>               
                                </ul>

                        </div>";
			    
                        
                        
                        }  else {
                          
                            
                           echo "<div id='session_top'>						
                            
                            <a href='pag_cadastro.php'>Criar Conta</a>
                            <a href='pag_login.php'>Login</a>
			    
                        </div>"; 
                            
                        }
                                ?>
		        
                    </div>
                   
                </div>

