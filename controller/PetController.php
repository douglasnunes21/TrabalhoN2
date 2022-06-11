<?php

include_once'../model/PetModel.php';
include_once'../DAO/PetDao.php';

if(isset($_REQUEST['inserir'])){

    $nome = $_POST['nomepet'];
    $id_tutor = $_POST['nometutor'];
    $raca = $_POST['racapet'];
    $idade = $_POST['idadepet'];
    $inf_ad = $_POST['inf_ad'];

    $pet = new Pet($nome, $id_tutor, $raca, $idade, $inf_ad);     
    //echo $cidade->getNome().' '.$cidade->getEstado().' '.$cidade->getPais(). ' '.$cidade->getCep();

    PetDao::inserir($pet);

    header("Location: ../view/FrmCadastro_Pet.php");

}

if(isset($_REQUEST['editar'])){
    $pet = new Pet();
    $pet->setNome($_POST['nomepet']);
    $pet->setId_tutor($_POST['nometutor']);
    $pet->setRaca($_POST['racapet']);
    $pet->setIdade($_POST['idadepet']);
    $pet->setInf_ad($_POST['inf_ad']);
    $pet->setId($_GET['id']);
    PetDao::editar($pet);
    header("Location: ../view/FrmCadastro_Pet.php");

}

if(isset($_REQUEST['excluir'])){
    $id = $_GET['id'];
    $pet = PetDao::buscarPorId($id);
    echo '<br><br><br>'
        .'<h3> Confirma a Exclusão do Pet '.$pet->getNome(). '?</h3>';
    echo '<a href="?ConfirmaExcluir&id='.$id.'">'
        .'<button> Sim </button></a>';
    echo '<a href="../view/FrmCadastro_Pet.php"><button> Não </button></a>';

}

if(isset($_REQUEST['ConfirmaExcluir'])){
    $id = $_GET['id'];
    PetDao::excluir($id);
    header("Location: ../view/FrmCadastro_Pet.php");
}


?>