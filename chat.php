<?php
mysql_connect("localhost", "root", "");
mysql_select_db("siteSucesso");
?>


<html>
    <head>
        <title>Sucesso Construtora</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/login.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    </head>

    <body class="body">



        <header class="mainheader">
            <?php
            include('/include/menu.php');
            ?>
        </header>


        <div class="espacador"></div>

        <div id="comslider_in_point_1313068"></div><script type="text/javascript">var oCOMScript1313068 = document.createElement('script');oCOMScript1313068.src = "http://commondatastorage.googleapis.com/comslider/target/users/1495226612x0b598a73a77f405f11eb46969ddd8db7/comslider.js?timestamp=1495226868";oCOMScript1313068.type = 'text/javascript';document.getElementsByTagName("head").item(0).appendChild(oCOMScript1313068);</script>

        <div class="mainContent">

            <div class="list-of-posts">
                <?php
                $sql = mysql_query("SELECT * FROM blog WHERE categoria = 'chat' ORDER BY id DESC");
                while ($row = mysql_fetch_array($sql)) {
                    $titulo = $row['titulo'];
                    $conteudo = $row['conteudo'];
                    $categoria = $row['categoria'];
                    $data = $row['data'];
                    ?>

                    <article class="post">
                        <header>
                            <h2><a href="#" title="Post exemplo"><?php echo ($titulo) ?></a></h2>
                        </header>
                        <footer>
                            <p class="post-info">Postado por Alcides Bezerra as <?php echo $data ?></p>
                        </footer>
                        <content>
                            <p><?php echo $conteudo ?></p>
                        </content>
                    </article>
                    <?php
                }
                ?>

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



