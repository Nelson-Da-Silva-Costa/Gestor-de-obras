<?php
  session_start();
  $action = GET['action'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
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
            <li class="nav-link" <?php if($action == NULL or $action == "obras"){?> <?php } ?>>
              <a href="#">
                <i class='bx bx-home-alt icon' ></i>
                  <span class="text nav-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-link" <?php if( $action == "obras"){?>  <?php } ?>>
              <a href="#">
                <i class='bx bx-hard-hat icon' ></i>
                <span class="text nav-text">Obras
                </span>
              </a>
            </li>
            <li class="nav-link" <?php if( $action == "agenda"){?>  <?php } ?>>
              <a href="#">
                <i class='bx bx-book-bookmark icon'></i>
                <span class="text nav-text">Agenda
                </span>
              </a>
            </li>
            <li class="nav-link" <?php if( $action == "concreto"){?>  <?php } ?>>
              <a href="#">
                <i class='bx bx-pie-chart-alt icon' ></i>
                <span class="text nav-text">Concretos
                </span>
              </a>
            </li>
            <li class="nav-link" <?php if( $action == "vagas"){?>  <?php } ?>>
              <a href="#">
                <i class='bx bx-car icon' ></i>
                <span class="text nav-text">Vagas Carros
                </span>
              </a>
            </li>
            <li class="nav-link" <?php if( $action == "configuracao"){?>  <?php } ?>>
              <a href="home.html?action=configuracao">
                <i class='bx bx-cog icon' ></i>
                <span class="text nav-text">Configuração
                </span>
              </a>
            </li>
          </ul>
      </div>
      <div class="bottom-content">
        <li class="nav-link">
          <a href="#">
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
  <section class="home">
    <div class="text">Dashboard Sidebar
        <?php
    
          $serach = mysqli_real_escape_string($conn ,$_GET['q']);

          if($action == NULL or $action == "obras" && $serach == NULL ){
                        include_once("obras.php");
                      }
                      elseif($action == "obras"){
                        include_once("obras.php");
                      }
                      elseif($action == "vagas"){
                        include_once("vagas.php");
                       }
                       elseif($action == "terceirizado"){
                        include_once("terceirizado.php");
                       }
                    
                      elseif($action == "historico"){
                        include_once("historico_vaga.php");
                       }
                      elseif($action == "concretos"){
                        include_once("totalConcreto.php");
                      }
                      elseif($action == "agenda"){
                        include_once("agenda.php");
                      }
                      elseif($action == "configuracao"){
                        include_once("usuario.php");
                      }
                       elseif($action == "saida"){
                        include_once("saida_vaga.php");
                      }                   elseif($action == "entrada"){
                        include_once("entrada_vaga.php");
                      }
                       elseif($action == "editagenda"){
                        include_once("editaragenda.php");
                      }
						           elseif($action == "edita_concreto"){
                        include_once("atualiza_concreto.php");
                      }
                         
          ?>  
    </div>
  </section>
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
</script>
</body>
</html>