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
            <li class="nav-item"><a href="Home.html" class="nav-link"><i class="fa-solid fa-house ">&nbsp;</i>Home</a></li>
            <li class="nav-item"><a href="Agenda.html" class="nav-link"><i class="fa-solid fa-calendar-days">&nbsp;</i>Agenda</a></li>
            <li class="nav-item"><a href="Cadastro.html" class="nav-link"><i class="fa-solid fa-address-card fa-beat-fade">&nbsp;</i>Cadastro</a></li>
          </ul>
        </header>
      </div>
    <div class="container">
        <form>
            <br />
        <h2 style="text-align: center;" id="descritivo" class="display-7">Informe os dados</h2>
        <br />
            <input type="text" class="form-control" id="nomepet" name="nomepet" placeholder="Nome" /><br />
            <!--<input type="search" class="form-control" placeholder="Tutor"><button type="button" class="btn btn-primary">Pesquisar</button><br />-->
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Tutor" id="nometutor" name="nometutor" aria-label="Recipient's username"
                    aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button" id="botao_home" name="butaopesquisartutor" >Pesquisar</button>
                </div>
            </div>
            <input type="text" id="racapet" name="racapet" class="form-control" placeholder="Raça" /><br />
            <input type="number" id="idadepet" name="idadepet" class="form-control" placeholder="Idade" /><br />
            <textarea name="message" id="infadd" name="infadd" class="form-control" placeholder="Informações Adicionais"></textarea><br />
            <div style="float: right;">
                <button type="clear" id="btnlimparcadpet" name="btnlimparcadpet" class="btn btn-outline-primary">Limpar</button>
                <button type="submit" id="btncadpet" name="btncadpet" class="btn btn-outline-success">Cadastrar</button>
            </div>

        </form>
        <br /><br /><br />
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Tutor</th>
                    <th>Raça</th>
                    <th>Idade</th>
                    <th>Informações Adicionais</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Astor</th>
                    <th>Douglas</th>
                    <th>Pug</th>
                    <th>2</th>
                    <th>Alergia a shampoo</th>
                </tr>
            </tbody>
        </table>
        <div style="float: right;">
            <button type="button" id="btnremovepet" name="btnremovepet" class="btn btn-outline-danger">Remover</button>
            <button type="button" id="btnalterapet" name="btnalterapet" class="btn btn-outline-primary">Alterar</button>
        </div>
    </div>
</body>

</html>