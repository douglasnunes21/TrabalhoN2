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
      <a href="FrmAgenda.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
          <use xlink:href="#" />
        </svg>
        <span class="fs-4" id="titulo_page"><i class="fa-solid fa-paw">&nbsp;</i><strong>Cãobeleireiro</strong><span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="FrmHome.php" class="nav-link"><i class="fa-solid fa-house">&nbsp;</i>Home</a></li>
        <li class="nav-item"><a href="FrmAgenda.php" class="nav-link"><i class="fa-solid fa-calendar-days fa-beat-fade">&nbsp;</i>Agenda</a></li>
        <li class="nav-item"><a href="FrmCadastro.php" class="nav-link"><i class="fa-solid fa-address-card">&nbsp;</i>Cadastro</a></li>
      </ul>
    </header>
  </div>
    <div class="container">
      <br />
    <h2 style="text-align: center;" id="descritivo" class="display-7">Selecione a opção desejada</h2>
    <br />
        <!--<form action="FrmInfo_Agenda.php" method="POST">
          <label>Agendar Atendimento</label> <br /><br />
          <div class="input-group mb-3">
                <input type="date" name="marcar" class="form-control" placeholder="Informe a data" aria-label="Recipient's username" aria-describedby="button-addon2" required>
                <div class="input-group-append">
                <a href="FrmInfo_Agenda.php"><button class="btn btn-primary" id="botao_home" type="submit" id="button-addon2">Agendar</button></a>
                </div>
              </div>
            <div class="input-group">
                <select class="form-select" id="inputGroupSelect04" aria-label="Exemplo de select com botão addon">
                  <option selected>Selecione um horário</option>
                  <option value="1">08:00</option>
                  <option value="2">09:00</option>
                  <option value="3">10:00</option>
                </select>
                <div class="input-group-append">
                  <a href="FrmInfo_Agenda.php"><button class="btn btn-primary" id="botao_home" type="button">Agendar</button></a>
                </div>
              </div>
              <br /><br />
              </form> 
        <form action="FrmInfoDesmarcar.php" method="POST">
          <label>Desmarcar Atendimento</label> <br /><br />
          <div class="input-group mb-3">
                <input type="date" name="desmarcar" class="form-control" placeholder="Informe a data" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                <a href="FrmInfoDesmarcar.php"><button class="btn btn-primary" id="botao_home" type="submit" id="button-addon2">Desmarcar</button></a>
                </div>
              </div>
              <br /><br />        
            </form>--> 

            <div class="card-group">
            <div class="card" style="text-align: center;">
              <br>
              <!--<div class="input-group mb-3">
                <input type="date" name="marcar" class="form-control" placeholder="Informe a data" aria-label="Recipient's username" aria-describedby="button-addon2" required>
                <div class="input-group-append">
                <a href="FrmInfo_Agenda.php"><button class="btn btn-primary" id="botao_home" type="submit" id="button-addon2">Agendar</button></a>
                </div>
              </div>-->
              <!--<img class="card-img-top" src="img/img-cad-1.png" alt="Card image cap">-->
              <i id="icone_home" class="fa-solid fa-calendar-check fa-10x" style="text-align: center;"></i>
              <div class="card-body">
              <!--<input type="date" name="marcar" class="form-control" placeholder="Informe a data" aria-label="Recipient's username" aria-describedby="button-addon2" required>-->
              <br>  
              <a href="FrmInfo_Agenda.php" id="botao_home" class="btn btn-dark">Agendar Atendimento</a>
            </div>
            </div>
            <div class="card" style="text-align: center;">
              <br>
              <!--<img class="card-img-top" src="img/img-cad-2.png" alt="Card image cap">-->
              <i id="icone_home" class="fa-solid fa-calendar-xmark fa-10x" style="text-align: center;"></i>
              <div class="card-body">
              <br> 
                <a href="FrmInfoDesmarcar.php" id="botao_home" class="btn btn-dark">Desmarcar Atendimento</a>
            </div>
            </div>
          </div>
    </div>
</body>

</html>