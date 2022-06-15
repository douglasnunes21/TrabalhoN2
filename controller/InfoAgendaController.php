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


?>