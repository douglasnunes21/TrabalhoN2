<?php

if(isset($_REQUEST['inserir'])){

    $nome = $_POST['nomepais'];
    $sigla = $_POST['siglapais'];

    echo $nome.' '.$sigla;

}
?>