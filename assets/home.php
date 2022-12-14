<?php
  require ('config/config.php');
  require('config/checks.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php
  session_start();
  $action = $_GET['q'];
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestor de obras</title>
  <link rel="icon" type="image/png" href="../res/icons/logo.png"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
  <link href="../res/css/home.css" rel="stylesheet"/>
</head>
<body>
  <nav class="sidebar close">
    <header>
      <div class="image-text">
        <span class="image">
          <img src="../res/icons/logo.png" alt=""/>
        </span>
        <div class="text logo-text">
          <span class="name">
            Gestor de Obras
          </span>
          <span class="profission">
            NSinfo
          </span>
        </div>
      </div>
      <i class='bx bx-chevron-right toggle'></i>
    </header>
    <div class="menu-bar">
      <div class="menu">
          <ul class="menu-links">
            <li class="nav-link" <?php if($action == NULL or $action == "dashboard"){?> <?php } ?>
              <a href="?action=dashboard">
                <i class='bx bx-home-alt icon' ></i>
                  <span class="text nav-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-link" <?php if( $action == "obras"){?>  <?php } ?>
              <a href="?action=obras">
                <i class='bx bx-hard-hat icon' ></i>
                <span class="text nav-text">Obras
                </span>
              </a>
            </li>
            <li class="nav-link" <?php if( $action == "agenda"){?>  <?php } ?>
              <a href="?action=agenda">
                <i class='bx bx-book-bookmark icon'></i>
                <span class="text nav-text">Agenda
                </span>
              </a>
            </li>
            <li class="nav-link" <?php if( $action == "concreto"){?>  <?php } ?>
              <a href="?action=concreto">
                <i class='bx bx-pie-chart-alt icon' ></i>
                <span class="text nav-text">Concretos
                </span>
              </a>
            </li>
            <li class="nav-link" <?php if( $action == "vagas"){?>  <?php } ?>
              <a href="?action=vagas">
                <i class='bx bx-car icon' ></i>
                <span class="text nav-text">Vagas Carros
                </span>
              </a>
            </li>
            <li class="nav-link" <?php if( $action == "configuracao"){?>  <?php } ?>
              <a href="?action=config">
                <i class='bx bx-cog icon' ></i>
                <span class="text nav-text">Configuração
                </span>
              </a>
            </li>
          </ul>
      </div>
      <div class="bottom-content">
        <li class="nav-link">
          <a href="config/logout.php">
            <i class='bx bx-log-out icon' ></i>
            <span class="text nav-text">Sair</span>
          </a>
        </li>
        <li class="mode">
          <div class="sun-moon">
            <i class='bx bx-moon icon moon'></i>
            <i class='bx bx-sun icon sun'></i>
          </div>
          <span class="mode-text text">Dark mode</span>
          <div class="toggle-switch">
            <span class="switch"></span>
          </div>
        </li>
      </div>
    </div>
  </nav>
<<<<<<< HEAD
  <section class="home">
    <div class="text">
=======
   <section class="home">
    <div class="height-100 text-align-center">
>>>>>>> 5b883de82877649e45918eaccbb9a738282737b3
        <?php
    
          $serach = mysqli_real_escape_string($conn ,$_GET['q']);

          if($action == NULL or $action == "dashboard" && $serach == NULL ){
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
                         
          ?>  
    </div>
  </section>
<?php mysqli_close($conn); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
const body = document.querySelector('body'),
  sidebar = body.querySelector('nav'),
  toggle = body.querySelector(".toggle"),
  modeSwitch = body.querySelector(".toggle-switch"),
  modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})


modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>