<?php
$action = "inserir";
include_once '../DAO/PaisDao.php';
include_once '../DAO/EstadoDao.php';
include_once '../DAO/CidadeDao.php';
include_once '../DAO/ClienteDao.php';

$nome = "";
$nacionalidade = "";
$cpf = "";
$email = "";
$telefone = "";
$rua = "";
$numero = "";
$complemento = "";
$cidade = "";

if (isset($_REQUEST['editar'])) {
    $cliente = ClienteDao::buscarPorId($_GET['id']);
    $nome = $cliente->getNome();
    $nacionalidade = $cliente->getNacionalidade();
    $cpf = $cliente->getCpf();
    $email = $cliente->getEmail();
    $telefone = $cliente->getTelefone();
    $rua = $cliente->getRua();
    $numero = $cliente->getNumero();
    $complemento = $cliente->getComplemento();
    $idCidade = $cliente->getCidade();
    $action = "editar&id=" . $cliente->getId();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

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
          <a href="FrmCadastro_Cliente.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
              <use xlink:href="" />
            </svg>
            <span class="fs-4" id="titulo_page"><i class="fa-solid fa-paw">&nbsp;</i><strong>Cadastrar Cliente</strong><span>
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
        <form action="../controller/ClienteController.php?<?php echo $action?>" method="POST">
            <input value="<?php echo $nome?>" type="text" class="form-control" id="nomecliente" name="nomecliente" placeholder="Nome" /><br />
            <input value="<?php echo $nacionalidade?>" type="text" class="form-control" id="naciocliente" name="naciocliente"
                placeholder="Nacionalidade" /><br />
            <input value="<?php echo $cpf?>" type="text" class="form-control" id="cpfcliente" name="cpfcliente"
                placeholder="CPF e/ou Passaporte" /><br />
            <input value="<?php echo $email?>" type="email" class="form-control" id="emailcliente" name="emailcliente" placeholder="Email" /><br />
            <input value="<?php echo $telefone?>" type="tel" class="form-control" id="telcliente" name="telcliente" placeholder="Telefone" /><br />
            <input value="<?php echo $rua?>" type="text" class="form-control" id="ruacliente" name="ruacliente" placeholder="Rua" /><br />
            <input value="<?php echo $numero?>" type="number" class="form-control" id="numruacliente" name="numruacliente"
                placeholder="Numero" /><br />
            <input value="<?php echo $complemento?>" type="text" class="form-control" id="compruacliente" name="compruacliente"
                placeholder="Complemento" /><br />
            <!--<select class="form-select">
                <option selected>Cidade</option>
                <option value="1">Curitiba</option>
                <option value="2">Florianopolis</option>
                <option value="3">Porto Alegre</option>
            </select>-->
            <select class="form-select" name="nomecidade" id="nomecidade">
                <option>Selecione a Cidade</option>
               <?php
                    $lista = CidadeDao::buscar();
                    foreach($lista as $cidade){
                        $selecionar = "";
                        if($idCidade == $cidade->getId()){
                            $selecionar = "selected";
                        }
                        echo '<option '.$selecionar.' value="'.$cidade->getId().'">'. 
                        $cidade->getNome().'</option>';
                   }

               ?>
            </select>

            <br>

            <!--<a href="FrmCadastro_Pet.php"><button type="button"  id="botao_home" name="cadpet" class="btn btn-primary">Cadastre seu Pet</button></a><br />-->

            <div style="float: right;">
                <!--<button type="clear" id="btnlimparcadecliente" name="btnlimparcadecliente"
                    class="btn btn-outline-primary">Limpar</button>-->
                <button type="submit" id="btncadcliente" name="btncadcliente"
                    class="btn btn-outline-success">Cadastrar</button>
            </div>
            <br /><br />
        </form>
        <a href="FrmCadastro_Pet.php"><button type="button"  id="botao_home" name="cadpet" class="btn btn-primary">Cadastre seu Pet</button></a><br />
        <br>
        <?php
        $lista = ClienteDao::buscar();
        ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Nacionalidade</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Rua</th>
                    <th>Número</th>
                    <th>Complemento</th>
                    <th>Cidade</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                   foreach($lista as $cliente){
                       echo '<tr>';
                       echo '<td>'.$cliente->getNome().'</td>';
                       echo '<td>'.$cliente->getNacionalidade().'</td>';
                       echo '<td>'.$cliente->getCpf().'</td>';
                       echo '<td>'.$cliente->getEmail().'</td>';
                       echo '<td>'.$cliente->getTelefone().'</td>';
                       echo '<td>'.$cliente->getRua().'</td>';
                       echo '<td>'.$cliente->getNumero().'</td>';
                       echo '<td>'.$cliente->getComplemento().'</td>';
                       echo '<td>'.$cliente->getCidade().'</td>';
                       echo '<td><a href="FrmCadastro_Cliente.php?editar&id='.$cliente->getId().'"><button class="btn btn-outline-primary">Editar</button><a><td>';
                       echo '<td><a href="../controller/ClienteController.php?excluir&id='.$cliente->getId().'"><button class="btn btn-outline-danger">Excluir</button><a><td>';
                       echo '</tr>';
                   }
                   ?>
            </tbody>
        </table>
        <!--<div style="float: right;">
            <button type="button" id="btnremovecliente" name="btnremovecliente"
                class="btn btn-outline-danger">Remover</button>
            <button type="button" id="btnalteracliente" name="btnalteracliente"
                class="btn btn-outline-primary">Alterar</button>
        </div>-->

    </div>
</body>

</html>