<?php
include_once'../model/PaisModel.php';
include_once'../DAO/PaisDao.php';

if(isset($_REQUEST['inserir'])){

    $nome = $_POST['nomepais'];
    $sigla = $_POST['siglapais'];
    $pais = new Pais($nome, $sigla);
    

    /*echo $pais->getNome().' '.$pais->getSigla();*/

    PaisDao::inserir($pais);

}
?>