<?php


saveimage();

function saveimage() {
    $timestamp1 = date("d-m-Y H:i:s");
    $titulo = $_POST['txtTitulo'];
    $conteudo = $_POST['txtConteudo'];
    $categoria = $_POST['txtCategoria'];
    $con = mysql_connect("localhost", "root", "");
    mysql_select_db("siteSucesso");
    $query = "INSERT INTO blog (titulo,conteudo,categoria) values ('$titulo','$conteudo','$categoria')";
    $result = mysql_query($query, $con);

    if ($result) {
        echo 'Post realizado com sucesso, Clique em voltar.';
    } else {
        echo 'Falha ao public post, entre em contato com o adminstrador ALCIDES.SILVANETO@OUTLOOK.COM';
    }
}

?>