<?php
include_once'../model/PaisModel.php';
include_once'../DAO/PaisDao.php';

    if(isset($_REQUEST['inserir'])){

        $nome = $_POST['nomepais'];
        $sigla = $_POST['siglapais'];
        $pais = new Pais($nome, $sigla);
        

    /*echo $pais->getNome().' '.$pais->getSigla();*/

        PaisDao::inserir($pais);
        header("Location: ../view/FrmCadastro_Pais.php");

    }

    if(isset($_REQUEST['editar'])){
        $pais = new Pais();
        $pais->setNome($_POST['nomepais']);
        $pais->setSigla($_POST['siglapais']);
        $pais->setId($_GET['id']);
        PaisDao::editar($pais);
        header("Location: ../view/FrmCadastro_Pais.php");

    }
    if(isset($_REQUEST['excluir'])){
        $id = $_GET['id'];
        $pais = PaisDao::buscarPorId($id);
        echo '<br><br><br>'
            .'<h3> Confirma a Exclusão do Pais '.$pais->getNome(). '?</h3>';
        echo '<a href="?ConfirmaExcluir&id='.$id.'">'
            .'<button> Sim </button></a>';
        echo '<a href="../view/FrmCadastro_Pais.php"><button> Não </button></a>';

    }

    if(isset($_REQUEST['ConfirmaExcluir'])){
        $id = $_GET['id'];
        PaisDao::excluir($id);
        header("Location: ../view/FrmCadastro_Pais.php");
    }


?>