<?php

include_once'../model/ClienteModel.php';
include_once'../DAO/ClienteDao.php';

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

if(isset($_REQUEST['editar'])){
    $cliente = new Cliente();
    $cliente->setNome($_POST['nomecliente']);
    $cliente->setNacionalidade($_POST['naciocliente']);
    $cliente->setCpf($_POST['cpfcliente']);
    $cliente->setEmail($_POST['emailcliente']);
    $cliente->setTelefone($_POST['telcliente']);
    $cliente->setRua($_POST['ruacliente']);
    $cliente->setNumero($_POST['numruacliente']);
    $cliente->setComplemento($_POST['compruacliente']);
    $cliente->setCidade($_POST['nomecidade']);
    $cliente->setId($_GET['id']);
    ClienteDao::editar($cliente);
    header("Location: ../view/FrmCadastro_Cliente.php");

}

if(isset($_REQUEST['excluir'])){
    $id = $_GET['id'];
    $cliente = ClienteDao::buscarPorId($id);
    echo '<br><br><br>'
        .'<h3> Confirma a Exclusão do Cliente '.$cliente->getNome(). '?</h3>';
    echo '<a href="?ConfirmaExcluir&id='.$id.'">'
        .'<button> Sim </button></a>';
    echo '<a href="../view/FrmCadastro_Cliente.php"><button> Não </button></a>';

}

if(isset($_REQUEST['ConfirmaExcluir'])){
    $id = $_GET['id'];
    ClienteDao::excluir($id);
    header("Location: ../view/FrmCadastro_Cliente.php");
}

?>