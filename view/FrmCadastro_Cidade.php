<?php
$action = "inserir";

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
          <a href="FrmCadastro_Cidade.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
              <use xlink:href="" />
            </svg>
            <span class="fs-4" id="titulo_page"><i class="fa-solid fa-paw">&nbsp;</i><strong>Cadastrar Cidade</strong><span>
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
        <form action="../controller/CidadeController.php?<?php echo $action?>" method="POST">
            <br />
            <h2 style="text-align: center;" id="descritivo" class="display-7">Informe os dados</h2>
            <br />
            <input type="text" class="form-control" id="nomecidade" name="nomecidade" placeholder="Nome" /><br />
            <select class="form-select">
                <option selected>Selecione o Estado</option>
                <option value="1">PR</option>
                <option value="2">RS</option>
                <option value="3">SC</option>
            </select><br />
            <select class="form-select">
                <option selected>Selecione o País</option>
                <option value="1">Brasil</option>
                <option value="2">Paraguai</option>
                <option value="3">Uruguai</option>
            </select><br />
            <input type="text" class="form-control" id="cepcidade" name="cepcidade" placeholder="CEP" /><br />
            <div style="float: right;">
                <button type="reset" id="btnlimparcadcidade" name="btnlimparcadcidade"
                    class="btn btn-outline-primary">Reset</button>
                <button type="submit" id="btncadcidade" name="btncadcidade"
                    class="btn btn-outline-success">Cadastrar</button>
            </div>
        </form>
        <br />
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Estado</th>
                    <th>País</th>
                    <th>CEP</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Porto Alegre</th>
                    <th>Rio Grande do Sul</th>
                    <th>Brasil</th>
                    <th>9999999</th>
                </tr>
            </tbody>
        </table>
        <div style="float: right;">
            <button type="button" id="btnremovecidade" name="btnremovecidade"
                class="btn btn-outline-danger">Remover</button>
            <button type="button" id="btnalteracidade" name="btnalteracidade"
                class="btn btn-outline-primary">Alterar</button>
        </div>
    </div>
</body>

</html>