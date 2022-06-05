<?php

include_once'../model/CidadeModel.php';
include_once'../DAO/CidadeDao.php';

if(isset($_REQUEST['inserir'])){

    $nome = $_POST['nomecidade'];
    $estado = $_POST['nomeestado'];
    $pais = $_POST['nomepais'];
    $cep = $_POST['cepcidade'];

    $cidade = new Cidade($nome, $estado, $pais, $cep);     
    echo $cidade->getNome().' '.$cidade->getEstado().' '.$cidade->getPais(). ' '.$cidade->getCep();

    CidadeDao::inserir($cidade);

    header("Location: ../view/FrmCadastro_Cidade.php");

}
?>