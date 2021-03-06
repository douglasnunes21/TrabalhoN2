<?php
$action = "inserir";

include_once '../DAO/PetDao.php';
include_once '../DAO/ClienteDao.php';

$nome = "";
$id_tutor = "";
$raca = "";
$idade = "";
$inf_ad = "";

if (isset($_REQUEST['editar'])) {
    $pet = PetDao::buscarPorId($_GET['id']);
    $nome = $pet->getNome();
    $id_tutor = $pet->getId_tutor();
    $raca = $pet->getRaca();
    $inf_ad = $pet->getInf_ad();
    $action = "editar&id=" . $pet->getId();
}
?>

<html>

<head>
    <meta charset="utf-8" name="viewport" content="width = device-width,
            initial-scale = 1.0, user-scalable = no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css.css">
    <script src="https://kit.fontawesome.com/1b789b1e23.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
          <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
              <use xlink:href="" />
            </svg>
            <span class="fs-4" id="titulo_page"><i class="fa-solid fa-paw">&nbsp;</i><strong>Cadastrar Pet</strong><span>
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
        <form action="../controller/PetController.php?<?php echo $action?>" method="POST">
            <br />
        <h2 style="text-align: center;" id="descritivo" class="display-7">Informe os dados</h2>
        <br />
            <input value="<?php echo $nome?>" type="text" class="form-control" id="nomepet" name="nomepet" placeholder="Nome do Pet" /><br />
            <!--<input type="search" class="form-control" placeholder="Tutor"><button type="button" class="btn btn-primary">Pesquisar</button><br />-->
            <!--<div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Informe o CPF do tutor" id="cpftutor" name="cpftutor" aria-label="Recipient's username"
                    aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button" id="botao_home" name="butaopesquisartutor" >Pesquisar</button>
                </div>
            </div>-->
            <select class="form-select" name="nometutor" id="nometutor">
                <option>Selecione o Tutor</option>
               <?php
                    $lista = ClienteDao::buscar();
                    foreach($lista as $cliente){
                        $selecionar = "";
                        if($id_tutor == $cliente->getId()){
                            $selecionar = "selected";
                        }
                        echo '<option '.$selecionar.' value="'.$cliente->getId().'">'. 
                        $cliente->getNome().'</option>';
                   }

               ?>
            </select>
            <br>

            <!--<input type="text" id="nometutor" name="nometutor" class="form-control" placeholder="Nome do Tutor"/><br />-->
            <input value="<?php echo $raca?>" type="text" id="racapet" name="racapet" class="form-control" placeholder="Ra??a" /><br />
            <input value="<?php echo $idade?>" type="number" id="idadepet" name="idadepet" class="form-control" placeholder="Idade" /><br />
            <input value="<?php echo $inf_ad?>" type="text" id="inf_ad" name="inf_ad" class="form-control" placeholder="Informa????es Adicionais" /><br />
            <!--<textarea value="<?php echo $inf_ad?>" name="message" id="inf_ad" name="inf_ad" class="form-control" placeholder="Informa????es Adicionais"></textarea><br />-->
            <div style="float: right;">
                <!--<button type="clear" id="btnlimparcadpet" name="btnlimparcadpet" class="btn btn-outline-primary">Limpar</button>-->
                <button type="submit" id="btncadpet" name="btncadpet" class="btn btn-outline-success">Cadastrar</button>
            </div>

        </form>
        <br /><br /><br />

        <?php
        $lista = PetDao::buscar();
        ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Tutor</th>
                    <th>Ra??a</th>
                    <th>Idade</th>
                    <th>Informa????es Adicionais</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                   foreach($lista as $pet){
                       echo '<tr>';
                       echo '<td>'.$pet->getNome().'</td>';
                       echo '<td>'.$pet->getId_tutor()->getNome().'</td>';
                       echo '<td>'.$pet->getRaca().'</td>';
                       echo '<td>'.$pet->getIdade().'</td>';
                       echo '<td>'.$pet->getInf_ad().'</td>';
                       echo '<td><a href="FrmCadastro_Pet.php?editar&id='.$pet->getId().'"><button class="btn btn-outline-primary">Editar</button><a><td>';
                       echo '<td><a href="../controller/PetController.php?excluir&id='.$pet->getId().'"><button class="btn btn-outline-danger">Excluir</button><a><td>';
                       echo '</tr>';
                   }
                   ?>
            </tbody>
        </table>
        <!--<div style="float: right;">
            <button type="button" id="btnremovepet" name="btnremovepet" class="btn btn-outline-danger">Remover</button>
            <button type="button" id="btnalterapet" name="btnalterapet" class="btn btn-outline-primary">Alterar</button>
        </div>-->
    </div>
</body>

</html>