<?php
session_start();
include './lib/nuevaConexion.php';
include './lib/config.php';


// // PHP code to get the MAC address of Client
// $MAC = exec('getmac');

// // Storing 'getmac' value in $MAC
// $MAC = strtok($MAC, ' ');


// if($MAC == '48-4D-7E-A3-50-B3'){
//     echo $MAC; 
// } else{
//     echo "nope";
// }

if (isset($_POST["btnLogin"])) {
  if (isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
  }


  if (isset($_POST['username']) && isset($_POST['password'])) {
    // $username = mysqli_real_escape_string($mysqli, $_POST['username']);

    $username = $_POST['username'];
    $pass = $_POST['password'];
    $password = md5($pass);
    $tipoUser = $_POST['tipoUser'];
    $regional = $_POST['regional'];
    $estado = $_POST['estado'];
    //  $ip = "";

    // Consulta para obtener el valor de "regional" basado en el correo electrónico del usuario
    if ($tipoUser == 1) {
      $sql = "SELECT *, '1' AS regional FROM tbl_usuarios WHERE email_usuario = '$username'";
    } else {
      $sql = "SELECT *, '2' AS regional FROM tbl_admin WHERE email_usuario = '$username'";
    }
    $stmt = mysqli_query($mysqli, $sql);

    if ($row = mysqli_fetch_array($stmt)) {

      if ($password == $row['clave'] && $row['estado'] == 1 && $row['regional']) { //Si el estado es igual a uno va a dejar ingresar 
        session_start();



        // $ip = gethostbyname("helpdesk.911.gob.hn");
        // $_SESSION['ip'] = $ip;
        $_SESSION['user'] = $username;
        $_SESSION['clave'] = $password;
        $_SESSION['tipoUser'] = $tipoUser;
        $_SESSION['regional'] = $regional;
        $_SESSION["last_time"] = time();
        header('Location:index.php');
        exit;
      } else {
        header("Location: loginFuncional.php?error=Usuario o Contraseña Incorrecta");
      }
    } else {
      header("Location: loginFuncional.php?error=Usuario o Contraseña Incorrecta");
    }
  } else {
    header("Location: loginFuncional.php?error=Usuario y/o Contraseña están vacios");
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soporte Tecnico 9-1-1</title>
  <?php include "./inc/links.php"; ?>
  <link rel="icon" type="image/png" href="img/911icon.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link rel="stylesheet" href="styleHelpDesk.css">

</head>

<body style="font-family:Verdana,Helvetica,Futura,Arial,sans-serif;">
  <div id="bg">
    <img src="img/911Edificio.JPG" alt="">
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="center1">
              <div class="card card-plain colorFondo" style="color:white;">
                <div class="card-header pb-0 text-start colorFondo">
                  <br>
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-4">
                        <img src="./img/911R.png" alt="" width="90px" style="margin-top:0px;">
                      </div>
                      <div class="col-8">
                        <h2 class="font-weight-bolder" style="margin-top:25px;">SISTEMA DE SOPORTE</h2>
                      </div>
                    </div>


                  </div>
                  <br> <br> <br>
                  <h4 id="lbltitulo" style="text-align:center; color: #ced6db;">Acceso Usuario</h4> <br>
                  <input type="hidden" id="rol_id" name="rol_id" value="1">
                  <div>
                    <img src="img/2333503.png" alt="" id="imgtipo" width="130px" style="margin-left: 115px;">
                  </div> <br>

                  <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-warning" role="alert">
                      <?= htmlspecialchars($_GET['error']) ?>
                    </div>
                  <?php } ?>
                </div>
                <div class="card-body">
                  <form role="form" action="loginFuncional.php" method="post">
                    <input type="text" id="tipoUser" name="tipoUser" value="1" hidden>

                    <!-- <div class="mb-3 ">
                      <input type="text" class="inputLogin" placeholder="Usuario" id="username" name="username" aria-label="Email">
                    </div> -->
                    <div class="txt_field">
                      <input type="text" id="username" name="username" required>
                      <span></span>
                      <label>Correo Institucional</label>
                    </div>
                    <!-- <div class="mb-3">
                      <input type="password" class="form-control form-control-lg" placeholder="Contraseña" id="password" name="password" aria-label="Password">
                    </div> -->
                    <div class="txt_field">
                      <input type="password" id="password" name="password" required>
                      <span></span>
                      <label>Contraseña</label>
                    </div>
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-6 float-left signup_link">
                          <a href="#" id="btnsoporte">Acceso Soporte</a>
                        </div>
                        <!-- <div class="col-6 signup_link" style="text-align:right;">
                          <a href="Registro.php" id="btnRegistro">Registrarse</a>
                        </div> -->
                      </div>
                    </div>

                    <!-- <div class="float-left signup_link">
                            <a href="#" id="btnsoporte">Acceso Soporte</a>
                        </div> -->

                    <div class="text-center">
                      <button type="submit" name="btnLogin" id="btnLogin" class="btn inicioSs">Iniciar Sesión</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-color: white;
          background-size: cover;">
                <span class="mask bg-gradient-primary opacity-2"></span>
                
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>

  <script type="text/javascript">
    $(document).on("click", "#btnsoporte", function() {
      if ($('#rol_id').val() == 1) { //input hidden
        $('#lbltitulo').html("Acceso Soporte"); //cambia titulo
        $('#btnsoporte').html("Acceso Usuario"); //cambia titulo boton
        $('#rol_id').val(2); //cambia valor de hidden
        $('#tipoUser').val(2);
        $("#imgtipo").attr("src", "img/2333500.png"); //cambia la imagen en atributo html
      } else {
        $('#lbltitulo').html("Acceso Usuario");
        $('#btnsoporte').html("Acceso Soporte");
        $('#rol_id').val(1);
        $('#tipoUser').val(1);
        $("#imgtipo").attr("src", "img/2333503.png");
      }
    });
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.2"></script>








</body>

</html>