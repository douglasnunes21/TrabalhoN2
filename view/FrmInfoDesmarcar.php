<?php

$action = "inserir";


include_once '../DAO/PetDao.php';
include_once '../DAO/ClienteDao.php';
include_once '../DAO/InfoagendaDao.php';


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
                  <use xlink:href="#" />
                </svg>
                <span class="fs-4" id="titulo_page"><i class="fa-solid fa-paw">&nbsp;</i><strong>Agenda</strong><span>
              </a>
        
              <ul class="nav nav-pills">
                <li class="nav-item"><a href="FrmHome.php" class="nav-link"><i class="fa-solid fa-house">&nbsp;</i>Home</a></li>
                <li class="nav-item"><a href="FrmAgenda.php" class="nav-link"><i class="fa-solid fa-calendar-days fa-beat-fade">&nbsp;</i>Agenda</a></li>
                <li class="nav-item"><a href="FrmCadastro.php" class="nav-link"><i class="fa-solid fa-address-card">&nbsp;</i>Cadastro</a></li>
              </ul>
            </header>
          </div>
        <div class="container">
           <!-- <br />
            <h2 style="text-align: center;" id="descritivo" class="display-7">Informe os dados</h2>
            <br />-->
        <?php
        $lista = InfoagendaDao::buscar();
        ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Horario</th>
                    <th>Tutor</th>
                    <th>Pet</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                   foreach($lista as $infoagenda){
                       echo '<tr>';
                       echo '<td>'.$infoagenda->getData().'</td>';
                       echo '<td>'.$infoagenda->getHorario().'</td>';
                       echo '<td>'.$infoagenda->getTutor().'</td>';
                       echo '<td>'.$infoagenda->getPet().'</td>';
                       echo '<td><a href="../controller/InfoagendaController.php?excluir&id='.$infoagenda->getId().'"><button class="btn btn-outline-danger" >Excluir</button><a><td>';
                       echo '</tr>';
                   }
                   ?>
            </tbody>
        </table>
    </div>
    </body>
</html>