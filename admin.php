<?php ?>


<html>
    <head>

        <?php
        session_start();
        if ((!isset($_SESSION['login']) == true) and ( !isset($_SESSION['senha']) == true)) {
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            header('location:index.php');
        }

        $logado = $_SESSION['login'];
        ?>


        <title>TODO supply a title</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/login.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>



        <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>


    </head>

    <body class="body">



        <header class="mainheader">


            <?php
            include('/include/menu.php');
            ?>

        </header>





        <div class="mainContent">
            <div class="list-of-posts">

                <article class="post">
                    <header>
                        <h2><a href="#" title="Post exemplo">Nova postagem:</a></h2>
                    </header>
                    <content>
                        <form action="postar.php" method="post" enctype="multipart/form-data">
                            
                            <p>Título:</p>
                            <input type="textarea" class="txtTitulo" name="txtTitulo" id="txtTitulo" />
                            <p>Conteúdo:</p>


                            <textarea name="txtConteudo"></textarea>
                            <script>
                                CKEDITOR.replace('txtConteudo');
                            </script>



                            <p>Categoria:</p>
                            <input type="textarea" class="txtCategoria" name="txtCategoria" id="txtCategoria" />
                            <input type="submit" name="submit" value="Enviar"  />
                        </form>


                    </content>
                </article>

                <div class="pagination">

                </div>


            </div>



        </div>

        <?php
        include('/include/sidebar.php');
        ?>



        <?php
        include('/include/footer.php');
        ?>


        <script src="js/paginate.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>



