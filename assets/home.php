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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="../res/Semantic/semantic.min.css"/>
  <link href="../res/css/home.css" rel="stylesheet"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"/>
</head>
<body id="body-pd">
  <header id="header" class="header">
    <div class="header_toggle"><i class="bx bx-menu" id="header-toggle"></i></div>
  </header>
  <div id="nav-bar" class="l-navbar">
    <nav class="nav">
      <div>
        <div class="nav-list">
          <li><a href="#" class="nav_link active"><i class='bx bx-grid-alt nav_icon'></i><span class="text nav-text">Dashboard</span></a></li>
          <li><a href="#" class="nav_link active"><i class='bx bx-hard-hat nav_icon'></i><span class="text nav-text">Obras</span></a></li>
          <li><a href="#" class="nav_link active"><i class='bx bx-grid-alt nav_icon'></i><span class="text nav-text">Concretos</span></a></li>
          <li><a href="#" class="nav_link active"><i class='bx bx-book-bookmark nav_icon'></i><span class="text nav-text">Agenda</span></a></li>
          <li><a href="#" class="nav_link active"><i class='bx bx-car nav_icon'></i><span class="text nav-text">Vagas</span></a></li>
          <li><a href="#" class="nav_link active"><i class='bx bx-cog nav_icon'></i><span class="text nav-text">Configuração</span></a></li>
          <div class="row bottom-content">
              <li><a href="#" class="nav_link active"><i class='bx bx-exit nav_icon'></i><span class="text nav-text">Sair</span></a></li>
              <div class="mode">
                <input type="checkbox" class="checkbox" id="chk" />
                <label for="chk" class="label">
                  <i class="fas fa-moon"></i>
                  <i class="fas fa-sun"></i>
                  <div class="ball"></div>
                </label>
              </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <section class="home">
    <div class="height-100">
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
<script>
     /* ======= Dark mode ====== */
 const chk = document.getElementById('chk')
 chk.addEventListener('change', () => {
  document.body.classList.toggle('dark')
 })
</script>
<script>
document.addEventListener("DOMContentLoaded", function(event) {
   
   const showNavbar = (toggleId, navId, bodyId, headerId) =>{
   const toggle = document.getElementById(toggleId),
   nav = document.getElementById(navId),
   bodypd = document.getElementById(bodyId),
   headerpd = document.getElementById(headerId)
   
   // Validate that all variables exist
   if(toggle && nav && bodypd && headerpd){
   toggle.addEventListener('click', ()=>{
   // show navbar
   nav.classList.toggle('show')
   // change icon
   toggle.classList.toggle('bx-x')
   // add padding to body
   bodypd.classList.toggle('body-pd')
   // add padding to header
   headerpd.classList.toggle('body-pd')
   })
   }
   }
   
   showNavbar('header-toggle','nav-bar','body-pd','header')
   
   /*===== LINK ACTIVE =====*/
   const linkColor = document.querySelectorAll('.nav_link')
   
   function colorLink(){
   if(linkColor){
   linkColor.forEach(l=> l.classList.remove('active'))
   this.classList.add('active')
   }
   }
   linkColor.forEach(l=> l.addEventListener('click', colorLink))
   
    // Your code to run since DOM is loaded and ready
   });


</script>
<script src="https://kit.fontawesome.com/998c60ef77.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<script src="../res/Semantic/semantic.min.js"></script>
</body>
</html>