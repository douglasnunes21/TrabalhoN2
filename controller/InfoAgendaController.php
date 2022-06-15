<?php

include_once'../model/InfoagendaModel.php';
include_once'../DAO/InfoagendaDAO.php';

if(isset($_REQUEST['inserir'])){

    $data = $_POST['datamarcada'];
    $horario = $_POST['horario'];
    $tutor = $_POST['nometutor'];
    $pet = $_POST['nomepet'];

    $infoagenda = new Infoagenda($data, $horario, $tutor, $pet);     
    echo $infoagenda->getData().' '.$infoagenda->getHorario().' '.$infoagenda->getTutor(). ' '.$infoagenda->getPet();

    InfoagendaDao::inserir($infoagenda);

    header("Location: ../view/FrmAgenda.php");

}

if(isset($_REQUEST['excluir'])){
    $id = $_GET['id'];
    $infoagenda = InfoagendaDao::buscarPorId($id);
    echo '<br><br><br>'
        .'<h3> Confirma a Exclusão da Data '.$infoagenda->getData(). '?</h3>';
    echo '<a href="?ConfirmaExcluir&id='.$id.'">'
        .'<button> Sim </button></a>';
    echo '<a href="../view/FrmAgenda.php"><button> Não </button></a>';

}

if(isset($_REQUEST['ConfirmaExcluir'])){
    $id = $_GET['id'];
    InfoagendaDao::excluir($id);
    header("Location: ../view/FrmAgenda.php");
}


?>