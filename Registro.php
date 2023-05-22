<?php 

include './lib/nuevaConexion.php';
include './lib/config.php';
// header('Content-Type: text/html; charset=UTF-8');
header('Content-Type: text/html; charset=UTF-8'); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
<title>Registro</title>
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
<div class="page-header min-vh-100" >
<div class="container">
<div class="row">
<div class="center" >
<div class="card card-plain colorFondo" style="color:white;" >
<div class="card-header pb-0 text-start colorFondo">
<br> 
<div class="container-fluid">
<div class="row">
<div class="col-4">
<img src="img/911R.PNG" alt="" width="90px" style="margin-top:0px;">
</div>
<div class="col-8">
<h2 class="font-weight-bolder" style="margin-top:25px;">SISTEMA DE SOPORTE</h2>
</div>
</div>
</div>
<br> <br>
<h3 id="lbltitulo" style="text-align:center; color: #ced6db;">Registro de usuario</h3> <br>
</div>
<div class="card-body">
<h5 style="color: #ced6db;">Ingrese sus datos a continuación: </h5>
<form role="form" id="frmRegistro" method="post">
<input type="text" id="tipoUser" name="tipoUser" value="1" hidden>
<div class="txt_field">
<input type="text" id="numEmpleadoNewUser" name="numEmpleadoNewUser" required>
<span></span>
<label>Número de empleado</label>
</div>
<div >
<label style=" color: #adadad; font-size: 16px;">Seleccione el departamento al que pertenece</label> <br>
<select name="departamentoT" id="departamentoT" style="color: black; width:200px; height:30px;">
<option value="0" selected>Departamentos</option>
<!-- <option value="1">IT</option>
<option value="2">Direccion de tecnologias</option> -->
<?php



$dept = "SELECT id_departamento, departamento FROM tbl_departamento";
$query = mysqli_query($mysqli, $dept);
while($departamento = mysqli_fetch_array($query)){
    ?>
    <option value="<?php echo ($departamento["departamento"])?>"> <?php echo $departamento["id_departamento"], ".-", $departamento["departamento"]?></option>
    <?php }  ?>
    </select>
    </div>
    <div class="txt_field">
    <input type="text" id="nameNewUser" name="nameNewUser" required>
    <span></span>
    <label>Nombre</label>
    </div>
    <div class="txt_field">
    <input type="text" id="mailNewUser" name="mailNewUser" required>
    <span></span>
    <label>Correo electrónico institucional</label>
    </div>
    <div class="txt_field">
    <input type="text" id="numNewUser" name="numNewUser" required>
    <span></span>
    <label>Número de teléfono</label>
    </div>
    <div class="txt_field">
    <input type="text" id="userNewUser" name="userNewUser" required>
    <span></span>
    <label>Usuario</label>
    </div>
    <div class="txt_field">
    <input type="password" id="passNewUser" name="passNewUser" required>
    <span></span>
    <label>Contraseña</label>
    </div>
    <div class="txt_field">
    <input type="password" id="passNewUserC" name="passNewUserC" required>
    <span></span>
    <label>Confirme su contraseña</label>
    </div>
    <div class="text-center">
    <button type="button" name="btnReg" id="btnReg" class="btn inicioSs" onclick="registrarUsuario()">Registrarse</button>
    </div>
    
    <div class="float-left signup_link">
    <a href="loginFuncional.php" id="btnsoporte">Volver atrás</a>
    </div>
    
    <!-- <div class="float-left signup_link">
    <a href="#" id="btnsoporte">Acceso Soporte</a>
    </div> -->
    
    
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.13.3/dist/sweetalert2.all.min.js"
    integrity="sha256-qLED6pNKyHLH2GHsu5GJIx4Lq1LrmGz7x2hZZ7kg4hU=" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
    $(document).on("click", "#btnsoporte", function () {
        if ($('#rol_id').val()==1){ //input hidden
            $('#lbltitulo').html("Acceso Soporte"); //cambia titulo
            $('#btnsoporte').html("Acceso Usuario"); //cambia titulo boton
            $('#rol_id').val(2); //cambia valor de hidden
            $('#tipoUser').val(2);
            $("#imgtipo").attr("src","img/2333500.png"); //cambia la imagen en atributo html
        }else{
            $('#lbltitulo').html("Acceso Usuario");
            $('#btnsoporte').html("Acceso Soporte");
            $('#rol_id').val(1);
            $('#tipoUser').val(1);
            $("#imgtipo").attr("src","img/2333503.png");
        }
    });
    
    function registrarUsuario(){
        
        var variable ="";
        
        var validEmail =  /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})\w+([.-]?\w+)*(\.\w{2,2})+$/;
        
        let exp = /911{1,1}/;
        // console.log(exp.test(variable));
        
        let exp1 = /gob{1,1}/;
        // console.log(exp1.test(variable));
        
        let exp2 = /hn{1,1}/;
        // console.log(exp2.test(variable));
        
        if($('#numEmpleadoNewUser').val() != "" && $('#nameNewUser').val() != "" && $('#mailNewUser').val() != "" && $('#numNewUser').val() != "" && $('#userNewUser').val() != "" && $('#passNewUser').val() != "" && $('#passNewUserC').val() != "" && $('#departamentoT').val() != 0){
            
            variable = $('#mailNewUser').val();
            
            if( validEmail.test(variable) ){
                if(exp.test(variable) && exp1.test(variable) && exp2.test(variable)){
                    
                    if($('#passNewUser').val() == $('#passNewUserC').val()){
                        $.ajax({
                            method:"POST",
                            data:$('#frmRegistro').serialize(),
                            url:"process/registrarUsuario.php",
                            success:function(respuesta){    
                                if(respuesta == 1){
                                    Swal.fire({
                                        icon: 'success',
                                        title: '¡Se ha registrado con exito! Ahora podrá ingresar con su correo institucional y su contraseña.',
                                        showConfirmButton: false,
                                        timer: 3500
                                    });
                                    setTimeout(function () {
                                        $(location).attr('href','loginFuncional.php');
                                    }, 3500);
                                    
                                } else{
                                    if(respuesta == 2){
                                        Swal.fire({
                                            icon: 'error',
                                            title: '¡Ups, hubo un fallo al registrar!',
                                            showConfirmButton: false,
                                            timer: 2100
                                        });
                                    } else{
                                        if(respuesta == 3){
                                            Swal.fire({
                                                icon: 'error',
                                                title: '¡Este correo ya esta registrado!',
                                                showConfirmButton: false,
                                                timer: 2100
                                            });
                                        }else{
                                            if(respuesta == 0){
                                                Swal.fire({
                                                    icon: 'error',
                                                    title: '¡Su número de empleado no existe! Por favor verifiquelo y vuelva a intentar.',
                                                    showConfirmButton: false,
                                                    timer: 3100
                                                });
                                            } else {
                                                Swal.fire({
                                                    icon: 'error',
                                                    title: '¡Su número de empleado ya esta en uso o esta desactivado! Por favor comuniquese con el administrador.',
                                                    showConfirmButton: false,
                                                    timer: 3100
                                                });
                                            }
                                        } 
                                    }
                                }
                            }
                        });
                    } else{
                        Swal.fire({
                            icon: 'error',
                            title: '¡Las contraseñas no coinciden!',
                            showConfirmButton: false,
                            timer: 2100
                        });
                    }
                    
                    
                    
                    
                    
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: '¡Debe colocar su correo institucional!',
                        showConfirmButton: false,
                        timer: 2100
                    });
                }   
            }else{
                Swal.fire({
                    icon: 'error',
                    title: '¡Debe colocar su correo institucional!',
                    showConfirmButton: false,
                    timer: 2100
                });
            }
            
            
            
            
        } else{
            Swal.fire({
                icon: 'error',
                title: '¡Debe llenar todos los campos!',
                showConfirmButton: false,
                timer: 2100
            });
        }
    }
    
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/argon-dashboard.min.js?v=2.0.2"></script>
    
    
    
    
    
    
    </body>
    </html>
    
    
    
    
    
    
    
    