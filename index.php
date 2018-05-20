<?php
	session_start();
        
        include 'topo.php';
        
        
?>

            <div class="tudo">
			
                <div id="corpo" class="index">

                    <div class="t-corpo">		
<!--Slide Show-->                            				 
                            <a id="slider"><div id="slider">
                      
                          
                            <div id="img"><img id="imgId"></div>
                            <div id="prev"><a id="prev" href="javascript:menos()"><img class="click" src="galeria/ante_slide.png"/></a></div>
                            <div id="next"><a id="next" href="javascript:mais()"><img class="click" src="galeria/prox_slid.png"/></a></div>
        <div id="desc"><a>EVENTOS EM DESTAQUE</a></div>
                        
                            
                           </div>	</a>
  
<!--End Slide Show-->
<!--Proximos Eventos-->

			<div id="p_eventos">
	
                            <h2><center>Proximos eventos</center></h2>
        		<?php                        
                                    include ('conect_criar.php');

                                    $cod="SELECT cod_evento FROM eventos WHERE date_inicio_evento >= curdate() order by date_inicio_evento";
                                    $result9 = mysql_query($cod,$link);
                                    $linha9 = mysql_fetch_assoc($result9);
                                    
                                    $count="SELECT COUNT(cod_evento) FROM eventos WHERE date_inicio_evento >= curdate() order by date_inicio_evento";
                                    $result10 = mysql_query($count,$link);
                                    $linha10 = mysql_fetch_assoc($result10);
                                    $string1 = implode("", $linha10);
                                    $str_int = (int)$string1;
                        ?>
                            
                                    <?php
                                        $i = 0;
                                        if($str_int > 0) {
                                            do {
                                                $cod1 = $linha9['cod_evento'];            
                                                $i++;
                                            if($i > 0 && $i <=8){
                                                    if($i == 1){
                                                        echo "<div id='gp_eventos'>		
                                                            <div id='pag' class='ante'><a href='#'><img src='galeria/ante.png'/></a></div>
                                                            <div id='pag' class='prox'><a href='#'><img src='galeria/prox.png'/></a></div>";
                                                    }
                                                    include 'select.php';
                                                    if($i == 8){
                                                        echo "</div>";
                                                    }
                                            }
                                            if($i > 8 && $i <=16){
                                                    if($i == 9){
                                                        echo "<div id='gp_eventos'>		
                                                            <div id='pag' class='ante'><a href='#'><img src='galeria/ante.png'/></a></div>
                                                            <div id='pag' class='prox'><a href='#'><img src='galeria/prox.png'/></a></div>";
                                                    }
                                                    include 'select.php';
                                                    if($i == 16){
                                                        echo "</div>";
                                                    }
                                            }
                                            if($i > 16 && $i <=24){
                                                    if($i == 17){
                                                        echo "<div id='gp_eventos'>		
                                                            <div id='pag' class='ante'><a href='#'><img src='galeria/ante.png'/></a></div>
                                                            <div id='pag' class='prox'><a href='#'><img src='galeria/prox.png'/></a></div>";
                                                    }
                                                    include 'select.php';
                                                    if($i == 24){
                                                        echo "</div>";
                                                    }
                                            }
                                            if($i > 24 && $i <=32){
                                                    if($i == 25){
                                                        echo "<div id='gp_eventos'>		
                                                            <div id='pag' class='ante'><a href='#'><img src='galeria/ante.png'/></a></div>
                                                            <div id='pag' class='prox'><a href='#'><img src='galeria/prox.png'/></a></div>";
                                                    }
                                                    include 'select.php';
                                                    if($i == 32){
                                                        echo "</div>";
                                                    }
                                            }
                                            if($i > 32 && $i <=40){
                                                    if($i == 33){
                                                        echo "<div id='gp_eventos'>		
                                                            <div id='pag' class='ante'><a href='#'><img src='galeria/ante.png'/></a></div>
                                                            <div id='pag' class='prox'><a href='#'><img src='galeria/prox.png'/></a></div>";
                                                    }
                                                    include 'select.php';
                                                    if($i == 40){
                                                        echo "</div>";
                                                    }
                                            }
                                            if($i > 40 && $i <=48){
                                                    if($i == 41){
                                                        echo "<div id='gp_eventos'>		
                                                            <div id='pag' class='ante'><a href='#'><img src='galeria/ante.png'/></a></div>
                                                            <div id='pag' class='prox'><a href='#'><img src='galeria/prox.png'/></a></div>";
                                                    }
                                                    include 'select.php';
                                                    if($i == 48){
                                                        echo "</div>";
                                                    }
                                            }
                                            if($i > 48 && $i <=56){
                                                    if($i == 49){
                                                        echo "<div id='gp_eventos'>		
                                                            <div id='pag' class='ante'><a href='#'><img src='galeria/ante.png'/></a></div>
                                                            <div id='pag' class='prox'><a href='#'><img src='galeria/prox.png'/></a></div>";
                                                    }
                                                    include 'select.php';
                                                    if($i == 56){
                                                        echo "</div>";
                                                    }
                                            }
                                            if($i > 56 && $i <=64){
                                                    if($i == 57){
                                                        echo "<div id='gp_eventos'>		
                                                            <div id='pag' class='ante'><a href='#'><img src='galeria/ante.png'/></a></div>
                                                            <div id='pag' class='prox'><a href='#'><img src='galeria/prox.png'/></a></div>";
                                                    }
                                                    include 'select.php';
                                                    if($i == 64){
                                                        echo "</div>";
                                                    }
                                            }
                                            if($i > 64 && $i <=72){
                                                    if($i == 65){
                                                        echo "<div id='gp_eventos'>		
                                                            <div id='pag' class='ante'><a href='#'><img src='galeria/ante.png'/></a></div>
                                                            <div id='pag' class='prox'><a href='#'><img src='galeria/prox.png'/></a></div>";
                                                    }
                                                    include 'select.php';
                                                    if($i == 72){
                                                        echo "</div>";
                                                    }
                                            }
                                            if($i > 72 && $i <=80){
                                                    if($i == 73){
                                                        echo "<div id='gp_eventos'>		
                                                            <div id='pag' class='ante'><a href='#'><img src='galeria/ante.png'/></a></div>
                                                            <div id='pag' class='prox'><a href='#'><img src='galeria/prox.png'/></a></div>";
                                                    }
                                                    include 'select.php';
                                                    if($i == 80){
                                                        echo "</div>";
                                                    }
                                            }
                                            if($i > 80){
                                                echo 'Ver todos os eventos';
                                            }    
                                            }while($linha9 = mysql_fetch_assoc($result9));
                                        }
                                    ?>           
			</div>
<!--End Proximos Eventos-->
                    </div>
			
                    <div class="bot">
				
                        <div class="t-bot">
                                    					
                            
				
                        </div>
			
                    </div>
		
                </div>
                
            </div>
       <div id="copy">
						
            <?php  

                include 'rodape.php';

            ?>

        </div>