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
        <form>
            <input type="text" class="form-control" id="nomecliente" name="nomecliente" placeholder="Nome" /><br />
            <input type="text" class="form-control" id="naciocliente" name="naciocliente"
                placeholder="Nacionalidade" /><br />
            <input type="text" class="form-control" id="cpfcliente" name="cpfcliente"
                placeholder="CPF e/ou Passaporte" /><br />
            <input type="email" class="form-control" id="emailcliente" name="emailcliente" placeholder="Email" /><br />
            <input type="tel" class="form-control" id="telcliente" name="telcliente" placeholder="Telefone" /><br />
            <input type="text" class="form-control" id="ruacliente" name="ruacliente" placeholder="Rua" /><br />
            <input type="number" class="form-control" id="numruacliente" name="numruacliente"
                placeholder="Numero" /><br />
            <input type="text" class="form-control" id="compruacliente" name="compruacliente"
                placeholder="Complemento" /><br />
            <select class="form-select">
                <option selected>Cidade</option>
                <option value="1">Curitiba</option>
                <option value="2">Florianopolis</option>
                <option value="3">Porto Alegre</option>
            </select><br />

            <a href="FrmCadastro_Pet.php"><button type="button"  id="botao_home" name="cadpet" class="btn btn-primary">Cadastre seu Pet</button></a><br />

            <div style="float: right;">
                <button type="clear" id="btnlimparcadecliente" name="btnlimparcadecliente"
                    class="btn btn-outline-primary">Limpar</button>
                <button type="submit" id="btncadcliente" name="btncadcliente"
                    class="btn btn-outline-success">Cadastrar</button>
            </div>
            <br /><br />
        </form>
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
                <tr>
                    <th>João</th>
                    <th>Brasileiro</th>
                    <th>999999999</th>
                    <th>joao@gmail.com</th>
                    <th>99999999</th>
                    <th>Teste</th>
                    <th>99</th>
                    <th>AP 101</th>
                    <th>Porto Alegre</th>
                </tr>
            </tbody>
        </table>
        <div style="float: right;">
            <button type="button" id="btnremovecliente" name="btnremovecliente"
                class="btn btn-outline-danger">Remover</button>
            <button type="button" id="btnalteracliente" name="btnalteracliente"
                class="btn btn-outline-primary">Alterar</button>
        </div>

    </div>
</body>

</html>