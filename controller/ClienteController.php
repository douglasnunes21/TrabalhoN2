<?php

include_once'../model/ClienteModel.php';
include_once'../DAO/ClienteDao.php';
include_once'../model/CidadeModel.php';
include_once'../DAO/CidadeDao.php';

if(isset($_REQUEST['inserir'])){

    $nome = $_POST['nomecliente'];
    $nacionalidade = $_POST['naciocliente'];
    $cpf = $_POST['cpfcliente'];
    $email = $_POST['emailcliente'];
    $telefone = $_POST['telcliente'];
    $rua = $_POST['ruacliente'];
    $numero = $_POST['numruacliente'];
    $complemento = $_POST['compruacliente'];
    $cidade= $_POST['nomecidade'];

    $cliente = new Cliente($nome, $nacionalidade, $cpf, $email, $telefone, $rua, $numero, $complemento, $cidade);     
    //echo $cidade->getNome().' '.$cidade->getEstado().' '.$cidade->getPais(). ' '.$cidade->getCep();

    ClienteDao::inserir($cliente);

    header("Location: ../view/FrmCadastro_Cliente.php");

}

?>