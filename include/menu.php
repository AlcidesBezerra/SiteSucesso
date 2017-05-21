<img src="img/logo.gif"/>
<div id="id01" class="modal">

                <form class="modal-content animate" method="post" action="ope.php" id="formLogin" name="formLogin" >
                    <fieldset id="fie">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display = 'none'" class="close" title="Close Modal">&times;</span>
                        
                    </div>

                    <div class="container">
                        <label><b>Usuário</b></label>
                        <input type="text" placeholder="Digite seu usuario" name="login" id="login" required >

                        <label><b>Senha</b></label>
                        <input type="password" placeholder="Digite sua senha" name="senha" id="senha" required >

                        <button type="submit">Login</button>
                    </div>

                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id01').style.display = 'none'" class="cancelbtn">Cancelar</button>
                        <span class="psw">Esqueceu a <a href="#">senha?</a></span>
                    </div>
                    
                </form>
            </div>

            <script>
            // Get the modal
                var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
                window.onclick = function (event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            </script>
            
            
            
            
            
            
            
            
            <nav>
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="quemsomos.php">Quem Somos</a></li>
                    <li><a href="empreendimentos.php">Empreendimentos</a></li>
                    <li><a href="entregas.php">Entregas</a></li>
                    <li><a href="videos.php">Vídeos</a></li>
                    <li><a href="contato.php">Fale Conosco</a></li>
                    <li><a  href="chat.php">Chat</a></li>
                    <li><a  onclick="document.getElementById('id01').style.display = 'block'" href="#">Login</a></li>
                </ul>
            </nav>