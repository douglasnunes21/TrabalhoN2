<?php

if(isset($_REQUEST['inserir'])){

    $nome = $_POST['nomecidade'];
    $cep = $_POST['cepcidade'];

    echo $nome.' '.$cep;

}
?>