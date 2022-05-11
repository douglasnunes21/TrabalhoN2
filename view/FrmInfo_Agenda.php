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
                  <use xlink:href="#" />
                </svg>
                <span class="fs-4" id="titulo_page"><i class="fa-solid fa-paw">&nbsp;</i><strong>Agendar</strong><span>
              </a>
        
              <ul class="nav nav-pills">
                <li class="nav-item"><a href="Home.html" class="nav-link"><i class="fa-solid fa-house">&nbsp;</i>Home</a></li>
                <li class="nav-item"><a href="Agenda.html" class="nav-link"><i class="fa-solid fa-calendar-days fa-beat-fade">&nbsp;</i>Agenda</a></li>
                <li class="nav-item"><a href="Cadastro.html" class="nav-link"><i class="fa-solid fa-address-card">&nbsp;</i>Cadastro</a></li>
              </ul>
            </header>
          </div>
        <div class="container">
            <br />
            <h2 style="text-align: center;" id="descritivo" class="display-7">Informe os dados</h2>
            <br />
            
        <form>
            <input class="form-control" type="text" placeholder="Horário Marcado" readonly> <br />
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Tutor" id="nometutor" name="nometutor" aria-label="Recipient's username"
                    aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button" id="botao_home" name="butaopesquisartutor" >Pesquisar</button>
                </div>
            </div>
            <select class="form-select">
                <option selected>Selecione o Pet</option>
                <option value="1">Astor</option>
            </select><br />
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Senha" id="senha" name="senha" aria-label="Recipient's username"
                    aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button" id="btnagendar" name="btnagendar" >Agendar</button>
                </div>
            </div>
        </form>
    </div>
    </body>
</html>