<?php

         session_start();
         
        if( !isset($_COOKIE['login']) ) {
            
            include 'topo.php';
            
            
        }else {
            
            include 'topo_login.php';
            
        }
		
?>
            <div class="tudo">
                <div id="criar">
                    <h1><?php echo $_GET['name']; ?></h1>
                </div>
                <div id="corpo" class="index">
                    <div id="form">
                        <div>
                            <h1>Evento</h1>
                        </div>
                        
                    </div>                    
                </div>
            </div>