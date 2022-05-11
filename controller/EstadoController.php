<?php

if(isset($_REQUEST['inserir'])){

    $nome = $_POST['nomeestado'];
    $sigla = $_POST['siglaestado'];

    echo $nome.' '.$sigla;

}
?>