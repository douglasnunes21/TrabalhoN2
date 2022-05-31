<?php
include_once'../model/EstadoModel.php';
include_once'../DAO/EstadoDao.php';

if(isset($_REQUEST['inserir'])){

    $nome = $_POST['nomeestado'];
    $uf = $_POST['siglaestado'];
    $pais = $_POST['nomepais'];

    $estado = new Estado($nome, $uf, $pais);     
    echo $estado->getNome().' '.$estado->getUf().' '.$estado->getPais();

    EstadoDao::inserir($estado);

    header("Location: ../view/FrmCadastro_Estado.php");

}
if(isset($_REQUEST['editar'])){
    $estado = new Estado();
    $nome->setNome($_POST['nomeestado']);
    $uf->setUf($_POST['siglaestado']);
    $pais->setPais($_POST['nomepais']);
    $id->setId($_GET['id']);
    EstadoDao::editar($estado);

    header("Location: ../view/FrmCadastro_Estado.php");
    
}

?>