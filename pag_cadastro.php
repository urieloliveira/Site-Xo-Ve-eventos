<?php
    include'topo.php';
?>
        <div class="tudo">
            <div id="criar">
                <h1>Criar conta</h1>
            </div>    
            <div id="corpo" class="index">
                <div id="contem" class="contem_criar">
                    <div id="cadastro_criar" class="cadastro_left">
                        <form method="POST" action="cadastro.php">
                            <label>Nome*</label><br><input type="text" name="nome" required="required" placeholder="Nome"><br>
                            <label>Sobre Nome*</label><br><input type="text" name="sobre" required="required" placeholder="Sobrenome"><br>
                            <label>E-mail*</label><br><input type="email" name="email" required="required" placeholder="@dominio.com"><br>
                            <label>login*</label><br><input type="text" name="login" required="required"><br>
                            <label>Senha*</label><br><input type="password" name="senha" required="required"><br>

                            <button type="submit" class="form_button_log">Criar conta</button>
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