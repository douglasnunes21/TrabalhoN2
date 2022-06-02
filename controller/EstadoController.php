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
        $estado->setNome($_POST['nomeestado']);
        $estado->setUf($_POST['siglaestado']);
        $estado->setPais($_POST['nomepais']);
        $estado->setId($_GET['id']);
        EstadoDao::editar($estado);
        header("Location: ../view/FrmCadastro_Estado.php");
    
}
    if(isset($_REQUEST['excluir'])){
        $id = $_GET['id'];
        $estado = EstadoDao::buscarPorId($id);
        echo '<br><br><br>'
            .'<h3> Confirma a Exclusão do Estado '.$estado->getNome(). '?</h3>';
        echo '<a href="?ConfirmaExcluir&id='.$id.'">'
            .'<button> Sim </button></a>';
        echo '<a href="../view/FrmCadastro_Estado.php"><button> Não </button></a>';

}

    if(isset($_REQUEST['ConfirmaExcluir'])){
        $id = $_GET['id'];
        EstadoDao::excluir($id);
        header("Location: ../view/FrmCadastro_Estado.php");
    }

?>