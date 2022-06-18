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
      <a href="FrmHome.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
          <use xlink:href="#" />
        </svg>
        <span class="fs-4" id="titulo_page" ><i class="fa-solid fa-paw">&nbsp;</i><strong>Cãobeleireiro</strong><span>
      </a>
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="FrmHome.php" class="nav-link"><i class="fa-solid fa-house fa-beat-fade">&nbsp;</i>Home</a></li>
        <li class="nav-item"><a href="FrmAgenda.php" class="nav-link"><i class="fa-solid fa-calendar-days">&nbsp;</i>Agenda</a></li>
        <li class="nav-item"><a href="FrmCadastro.php" class="nav-link"><i class="fa-solid fa-address-card">&nbsp;</i>Cadastro</a></li>
      </ul>
    </header>
  </div>
  <div class="container">
    <br />
    <h2 style="text-align: center;" id="descritivo" class="display-7">Selecione a opção desejada</h2>
    <br />
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <br>
          <!--<img class="card-img-top" src="img/img-agenda-2.png" alt="Card image cap">-->
          <i id="icone_home" class="fa-solid fa-calendar-days fa-10x" style="text-align: center;"></i>
          <div class="card-body" style="text-align: center;">
            <a href="FrmAgenda.php" id="botao_home" class="btn btn-dark">Agenda</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <br>
          <!--<img class="card-img-top" src="img/img-cadastro-2.png" alt="Card image cap">-->
          <i id="icone_home" class="fa-solid fa-address-card fa-10x" style="text-align: center;"></i>
          <div class="card-body" style="text-align: center;">
            <!--<h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
            <a href="FrmCadastro.php" id="botao_home" class="btn btn-dark">Cadastro</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</body>


</html>