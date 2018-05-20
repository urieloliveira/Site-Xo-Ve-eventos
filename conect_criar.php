<?php
  $servidor = 'localhost'; 
  $banco    = 'db_criar_eventos_system'; 
  $usuario  = 'root'; 
  $senha    = '';
  $link     = mysql_connect($servidor, $usuario, $senha);
  $db       = mysql_select_db($banco,$link); 

