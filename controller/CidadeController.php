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

if(isset($_REQUEST['editar'])){
    $cidade = new Cidade();
    $cidade->setNome($_POST['nomecidade']);
    $cidade->setEstado($_POST['nomeestado']);
    $cidade->setPais($_POST['nomepais']);
    $cidade->setCep($_POST['cepcidade']);
    $cidade->setId($_GET['id']);
    CidadeDao::editar($cidade);
    header("Location: ../view/FrmCadastro_Cidade.php");

}

if(isset($_REQUEST['excluir'])){
    $id = $_GET['id'];
    $cidade = CidadeDao::buscarPorId($id);
    echo '<br><br><br>'
        .'<h3> Confirma a Exclusão da Cidade '.$cidade->getNome(). '?</h3>';
    echo '<a href="?ConfirmaExcluir&id='.$id.'">'
        .'<button> Sim </button></a>';
    echo '<a href="../view/FrmCadastro_Cidade.php"><button> Não </button></a>';

}

if(isset($_REQUEST['ConfirmaExcluir'])){
    $id = $_GET['id'];
    CidadeDao::excluir($id);
    header("Location: ../view/FrmCadastro_Cidade.php");
}
?>