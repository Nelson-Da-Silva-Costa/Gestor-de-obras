<?php
  require ('../config/config.php');
  require ('../php/widgets.php');
  require('../config/checks.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php
  session_start();
  $action = $_GET['action'];
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestor de obras</title>
  <link rel="icon" type="image/png" href="../../res/icons/logo.png"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="../../res/Semantic/semantic.min.css"/>
  <link href="../../res/css/home.css" rel="stylesheet"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"/>
<style>
  #notf {
    margin-left: -40px;
  }
</style>
</head>
<body id="body-pd">
  <header id="header" class="header">
    <div class="header_toggle"><i class="bx bx-menu" id="header-toggle"></i></div>
    <div class="row">
      <div id="notf" class="col">
        <div class="mode">
          <input type="checkbox" class="checkbox" id="chk" />
          <label for="chk" class="label">
            <i class="fas fa-moon"></i>
            <i class="fas fa-sun"></i>
            <div class="ball"></div>
          </label>
        </div>
      </div>
      <div id="notf" class="col">
        <a href="?action=concreto" type="button" class="icon-button">
        <span class="material-icons">push_pin</span>
        <span class="icon-button__badge">
          <?php
              $total = 0;
              $n = 1;
              $sql = "SELECT * FROM concretos WHERE day(data) = day(current_timestamp) AND month(data) = month(current_timestamp)";
              $sql = $conn->query($sql);
              $total = $sql->num_rows;
              echo '<b>'.$total.'</b>';
            ?>
          </span>
        </a>
      </div>
      <div id="notf" class="col">
        <a href="?action=agenda" type="button" class="icon-button">
        <span class="material-icons">notifications</span>
        <span class="icon-button__badge">
          <?php
              $total = 0;
              $n = 1;
              $sql = "SELECT * FROM agenda WHERE day(data) = day(current_timestamp) AND month(data) = month(current_timestamp)";
              $sql = $conn->query($sql);
              $total = $sql->num_rows;
              echo '<b>'.$total.'</b>';
            ?>
          </span>
        </a>
      </div>
    </div>
  </header>
  <div id="nav-bar" class="l-navbar">
    <nav class="nav">
      <div>
        <div class="nav-list">
          <li><a href="?action=dashboard" class="nav_link active"><i class='bx bx-grid-alt nav_icon'></i><span class="text nav-text">Dashboard</span></a></li>
          <li><a href="?action=obras" class="nav_link active"><i class='bx bx-hard-hat nav_icon'></i><span class="text nav-text">Obras</span></a></li>
          <li><a href="?action=concreto" class="nav_link active"><i class='bx bx-pin nav_icon'></i><span class="text nav-text">Concretos</span></a></li>
          <li><a href="?action=agenda" class="nav_link active"><i class='bx bx-book-bookmark nav_icon'></i><span class="text nav-text">Agenda</span></a></li>
          <li><a href="?action=vagas" class="nav_link active"><i class='bx bx-car nav_icon'></i><span class="text nav-text">Vagas</span></a></li>
          <li><a href="?action=config" class="nav_link active"><i class='bx bx-cog nav_icon'></i><span class="text nav-text">Configuração</span></a></li>
          <div class="row bottom-content">
              <li><a href="../config/logout.php" class="nav_link active"><i class='bx bx-exit nav_icon'></i><span class="text nav-text">Sair</span></a></li>
          </div>
        </div>
      </div>
    </nav>
  </div> 
  <div class="height-100">
      <?php
        $serach = mysqli_real_escape_string($conn ,$_GET['action']);
        if($action == NULL or $action == "dashboard" && $serach == NULL ){
          include_once("dashboard.php");
          }
          elseif($action == "dashboard"){
            include_once("dashboard.php");
          }
          elseif($action == "obras"){
            include_once("obras.php");
          }
          elseif($action == "vagas"){
            include_once("vagas.php");
            }
          elseif($action == "concreto"){
            include_once("concreto.php");
          }
          elseif($action == "agenda"){
            include_once("agenda.php");
          }
          elseif($action == "config"){
            include_once("config.php");
          }
          elseif($action == "obrasNovas"){
            include_once("obrasNovas.php");
          }
          elseif($action == "obrasParadas"){
            include_once("obrasParadas.php");
          }
      ?>
    </div>
<?php mysqli_close($conn); ?>

<script src="../../res/js/config.js"></script>
<script src="https://kit.fontawesome.com/998c60ef77.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<script src="../../res/Semantic/semantic.min.js"></script>
</body>
</html>