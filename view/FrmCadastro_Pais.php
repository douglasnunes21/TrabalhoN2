<?php
$action = "inserir";

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
          <a href="Cadastro_Pais.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
              <use xlink:href="" />
            </svg>
            <span class="fs-4" id="titulo_page"><i class="fa-solid fa-paw">&nbsp;</i><strong>Cadastrar País</strong><span>
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
        <br />
        <h2 style="text-align: center;"  id="descritivo" class="display-7">Informe os dados</h2>
        <br />
        <form action="../controller/PaisController.php?<?php echo $action?>" method="POST">
            <input type="text" class="form-control" id="nomepais" name="nomepais" placeholder="Nome" /><br />
            <input type="text" class="form-control" id="siglapais" name="siglapais" placeholder="Sigla" /><br />
            <!--<label>Sigla: </label>-->
            <!--<select class="form-select">
                <option selected>Selecione a Sigla</option>
                <option value="1">BRA</option>
                <option value="2">PAR</option>
                <option value="3">URU</option>
            </select><br />-->
            <div style="float: right;">
                <button type="reset" id="btnresetcadpais" name="btnresetcadpais"
                    class="btn btn-outline-primary"value="Limpar">Reset</button>
                <button type="submit" id="btncadpais" name="btncadpais"
                    class="btn btn-outline-success" value="Cadastrar">Cadastrar</button>
            </div>
            <br />
            <!--<button type="submit">Cadastrar</button>
            <button type="clear">Limpar</button>-->
        </form>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sigla</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td id="td1"></td>
                    <td id="td2"></td>
                </tr>
            </tbody>
        </table>
        <div style="float: right;">
            <button type="button" id="btnremovepais" name="btnremovepais" class="btn btn-outline-danger" value="remover">Remover</button>
            <button type="button" id="btnalterapais" name="btnalterapais" class="btn btn-outline-primary" value="alterar">Alterar</button>
        </div>
    </div>
</body>

</html>