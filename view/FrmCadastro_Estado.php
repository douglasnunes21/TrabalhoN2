<?php
$action = "inserir";
include_once '../DAO/PaisDao.php';
include_once '../DAO/EstadoDao.php';

$nome = "";
$uf = "";
$pais = "";

if (isset($_REQUEST['editar'])) {
    $estado = EstadoDao::buscarPorId($_GET['id']);
    $nome = $estado->getNome();
    $uf = $estado->getUf();
    $idPais = $estado->getPais();
    $action = "editar&id=" . $estado->getId();
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" name="viewport" content="width = device-width, initial-scale = 1.0, user-scalable = no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css.css">
    <script src="https://kit.fontawesome.com/1b789b1e23.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="FrmCadastro_Estado.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="" />
                </svg>
                <span class="fs-4" id="titulo_page"><i class="fa-solid fa-paw">&nbsp;</i><strong>Cadastrar Estado</strong><span>
            </a>
            <!--<div style="margin-right: 20%;">
                <img src="logo-1.png">
              </div>-->

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="FrmHome.php" class="nav-link"><i class="fa-solid fa-house ">&nbsp;</i>Home</a></li>
                <li class="nav-item"><a href="FrmAgenda.php" class="nav-link"><i class="fa-solid fa-calendar-days">&nbsp;</i>Agenda</a></li>
                <li class="nav-item"><a href="FrmCadastro.php" class="nav-link"><i class="fa-solid fa-address-card fa-beat-fade">&nbsp;</i>Cadastro</a></li>
            </ul>
        </header>
    </div>
    <div class="container">
        <br />
        <h2 style="text-align: center;" id="descritivo" class="display-7">Informe os dados</h2>
        <br />

        <form action="../controller/EstadoController.php?<?php echo $action ?>" method="POST">
            <input value="<?php echo $nome?>" type="text" class="form-control" id="nomeestado" name="nomeestado" placeholder="Nome" /><br />
            <input value="<?php echo $uf?>" type="text" class="form-control" id="siglaestado" name="siglaestado" placeholder="Sigla" /><br />
            <!--<select class="form-select">
                <option selected>UF</option>
                <option value="1">PR</option>
                <option value="2">RS</option>
                <option value="3">SC</option>
            </select><br />
            <select class="form-select">
                <option selected>País</option>
                <option value="1">Brasil</option>
                <option value="2">Paraguai</option>
                <option value="3">Uruguai</option>
            </select><br />-->

            <select class="form-select" name="nomepais" id="nomepais">
                <option>Selecione o País</option>
               <?php
                    $lista = PaisDao::buscar();
                    foreach($lista as $pais){
                        $selecionar = "";
                        if($idPais == $pais->getId()){
                            $selecionar = "selected";
                        }
                        echo '<option '.$selecionar.' value="'.$pais->getId().'">'. 
                        $pais->getNome().'</option>';
                   }

               ?>


            </select>
            <div style="float: right;">
                <button type="reset" id="btnlimparcadestado" name="btnlimparcadestado" class="btn btn-outline-primary" value="Limpar">Reset</button>
                <button type="submit" id="btncadestado" name="btncadestado" class="btn btn-outline-success" value="Cadastrar">Cadastrar</button>
            </div>
            <br />
        </form>

        <?php
        $lista = EstadoDao::buscar();
    ?>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>UF</th>
                    <th>País</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                   foreach($lista as $estado){
                       echo '<tr>';
                       echo '<td>'.$estado->getNome().'</td>';
                       echo '<td>'.$estado->getUf().'</td>';
                       echo '<td>'.$estado->getPais()->getNome().'</td>';
                       echo '<td><a href="FrmCadastro_Estado.php?editar&id='.$estado->getId().'"><button>Editar</button><a><td>';
                       echo '<td><a href="../controller/EstadoController.php?excluir&id='.$estado->getId().'"><button>Excluir</button><a><td>';
                       echo '</tr>';
                   }
                   ?>
            </tbody>
        </table>
        <div style="float: right;">
            <button type="button" id="btnremoveestado" name="btnremoveestado" class="btn btn-outline-danger" onclick="remover()" value="remover">Remover</button>
            <button type="button" id="btnalteraestado" name="btnalteraestado" class="btn btn-outline-primary" onclick="alterar()" value="alterar">Alterar</button>
        </div>
    </div>
</body>

</html>