<?php
    include'topo.php';
?>
        <div class="tudo">
            <div id="criar">
                <h1>Entrar</h1>
            </div>    
            <div id="corpo" class="index">
                <div id="contem" class="contem_login">
                <div id="cadastro_login" class="cadastro_left">
                    <form method="POST" action="login.php">
                        <label>login*</label><br><input type="text" name="login" required="required"><br>
                        <label>Senha*</label><br><input type="password" name="senha" required="required"><br>

                        <button type="submit" class="form_button_log">Fazer login</button>
                        <a href="pag_cadastro.php">Criar uma conta</a>
                    </form>
                </div>
                <div id="cadastro" class="cadastro_rigth">
                    
                </div>
            </div>
</div>
            <div id="copy">
                <?php

                    include 'rodape.php';

                ?>
            </div>
        </div>
        
    </body>
    
</html> 