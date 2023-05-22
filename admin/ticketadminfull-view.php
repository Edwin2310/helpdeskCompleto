
                           <!----------------------------------- Vista de los tickets exclusiva para el administrador ----------------------------------->
                                               <!--  Se observan todos los tickets resueltos, pendientes, en proceso y rechazados -->
<?php if($_SESSION['nombre']!="" && $_SESSION['tipo']=="1"){ ?>
    <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <img src="./img/email2.png" alt="Image" class="img-responsive animated tada">
            </div>
            <div class="col-sm-20">
            <h4><a href="" class="btn btn-primary pull-right"><i class="fa fa-refresh"></i>&nbsp;&nbsp;Actualizar</a></h4>
            <br>   <br> <br>
              <h3 class="text-info"> Bienvenido aquí se muestran todos los Tickets los cuales podra modificar e imprimir.</h3>
            
            </div>
          </div>
        </div>
        <br>
            <?php
            /* Actualizar */
                header("Content-Type: text/html;charset=utf-8");
                if(isset($_POST['id_edit']) && isset($_POST['asignar'])){
                    $id_edit=MysqlQuery::RequestPost('id_edit');
                    $asignar_t=  MysqlQuery::RequestPost('asignar');
            
                    if(MysqlQuery::Actualizar("ticket", "asignar_ticket='$asignar_t'", "id=$id_edit")){
            
                        echo '
                            <div class="alert alert-info alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <h4 class="text-center">TICKET Actualizado</h4>
                                <p class="text-center">
                                    El ticket fue actualizado con éxito
                                </p>
                            </div>
                        ';
                      }
                    }     

                /*Suma de los tickets pendientes, en proceso, resuelto, rechazado*/
                /* Todos los tickets*/
                $num_ticket_all=Mysql::consulta("SELECT * FROM ticket");
                $num_total_all=mysqli_num_rows($num_ticket_all);

                /* Tickets pendientes*/
                $num_ticket_pend=Mysql::consulta("SELECT * FROM ticket WHERE estado_ticket='Pendiente'");
                $num_total_pend=mysqli_num_rows($num_ticket_pend);

                        /*Suma de tickets especiales pendientes*/
        
                $num_ticket_especial=Mysql::consulta("SELECT * FROM tbl_ticket WHERE estado_ticket='Pendiente'");
                $num_total_especial=mysqli_num_rows($num_ticket_especial);

                /* Tickets en proceso*/
                $num_ticket_proceso=Mysql::consulta("SELECT * FROM ticket WHERE estado_ticket='En Proceso'");
                $num_total_proceso=mysqli_num_rows($num_ticket_proceso);

                /* Tickets resueltos*/
                $num_ticket_res=Mysql::consulta("SELECT * FROM ticket WHERE estado_ticket='Resuelto'");
                $num_total_res=mysqli_num_rows($num_ticket_res);
                
                 /* Tickets rechazados*/
                 $num_ticket_rech=Mysql::consulta("SELECT * FROM ticket WHERE estado_ticket='Rechazado'");
                 $num_total_rech=mysqli_num_rows($num_ticket_rech);

            ?>

            <div class="container">
                <div class="row">
                    <div class="col-md-20">
                        <ul class="nav nav-pills nav-justified">
                            
                            <li><a href="./admin.php?view=ticketadmin&ticket=all"><i class="fa fa-list"></i>&nbsp;&nbsp;Todos los tickets&nbsp;&nbsp;<span class="badge"><?php echo $num_total_all; ?></span></a></li>
                           
                           
                            <li><a href="./admin.php?view=ticketadmin&ticket=pending"><i class="fa fa-envelope"></i>&nbsp;&nbsp;Tickets pendientes&nbsp;&nbsp;<span class="badge"><?php echo $num_total_pend; ?></span></a></li>
                             
                            <li><a href="./admin.php?view=ticketespecial&ticket=pending"><i class="fa fa-envelope"></i>&nbsp;&nbsp;Tickets especiales &nbsp;&nbsp;<span class="badge"><?php echo $num_total_especial; ?></span></a></li>
                            
                            <li><a href="./admin.php?view=ticketadmin&ticket=process"><i class="fa fa-folder-open"></i>&nbsp;&nbsp;Tickets en proceso&nbsp;&nbsp;<span class="badge"><?php echo $num_total_proceso; ?></span></a></li>

                            <li><a href="./admin.php?view=ticketadmin&ticket=resolved"><i class="fa fa-thumbs-o-up"></i>&nbsp;&nbsp;Tickets Resueltos&nbsp;&nbsp;<span class="badge"><?php echo $num_total_res; ?></span></a></li>

                            <li><a href="./admin.php?view=ticketadmin&ticket=rejected"><i class="fa fa-thumbs-o-down"></i>&nbsp;&nbsp;Tickets Rechazados&nbsp;&nbsp;<span class="badge"><?php echo $num_total_rech; ?></span></a></li>

                        </ul>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-20">
                        <div class="table-responsive">
                            <?php
                                $mysqli = mysqli_connect(SERVER, USER, PASS, BD);
                                mysqli_set_charset($mysqli, "utf8");

                                $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
                                $regpagina = 10;
                                $inicio = ($pagina > 1) ? (($pagina * $regpagina) - $regpagina) : 0;

                                
                                if(isset($_GET['ticket'])){
                                    if($_GET['ticket']=="all"){
                                        $consulta="SELECT SQL_CALC_FOUND_ROWS * FROM ticket ORDER BY fecha DESC LIMIT $inicio, $regpagina";
                                    }elseif($_GET['ticket']=="pending"){
                                        $consulta="SELECT SQL_CALC_FOUND_ROWS * FROM ticket WHERE estado_ticket='Pendiente' LIMIT $inicio, $regpagina";
                                    }if($_GET['ticket']=="pending"){
                                        $consulta="SELECT SQL_CALC_FOUND_ROWS * FROM tbl_ticket WHERE estado_ticket='Pendiente' LIMIT $inicio, $regpagina";
                                    }elseif($_GET['ticket']=="process"){
                                        $consulta="SELECT SQL_CALC_FOUND_ROWS * FROM ticket WHERE estado_ticket='En Proceso' LIMIT $inicio, $regpagina";
                                    }elseif($_GET['ticket']=="resolved"){
                                        $consulta="SELECT SQL_CALC_FOUND_ROWS * FROM ticket WHERE estado_ticket='Resuelto' LIMIT $inicio, $regpagina";
                                    }elseif($_GET['ticket']=="rejected"){
                                        $consulta="SELECT SQL_CALC_FOUND_ROWS * FROM ticket WHERE estado_ticket='Rechazado' LIMIT $inicio, $regpagina";
                                    }else{
                                        $consulta="SELECT SQL_CALC_FOUND_ROWS * FROM ticket ORDER BY fecha DESC LIMIT $inicio, $regpagina";
                                    }
                                }else{
                                    $consulta="SELECT SQL_CALC_FOUND_ROWS * FROM ticket ORDER BY fecha DESC LIMIT $inicio, $regpagina";
                                }


                                $selticket=mysqli_query($mysqli,$consulta);

                                $totalregistros = mysqli_query($mysqli,"SELECT FOUND_ROWS()");
                                $totalregistros = mysqli_fetch_array($totalregistros, MYSQLI_ASSOC);
                        
                                $numeropaginas = ceil($totalregistros["FOUND_ROWS()"]/$regpagina);

                                if(mysqli_num_rows($selticket)>0):
                            ?>

                            <!-- Tabla que muestra todos los tickets  -->
                            <table class="table table-hover table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Fecha y hora</th>
                                        <th class="text-center">Serie</th>
                                        <th class="text-center">Estado del Ticket</th>
                                        <th class="text-center">Nombre</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Departamento</th>
                                        <th class="text-center">Atendido por</th>
                                        <th class="text-center">Asignar Ticket</th>
                                        <th class="text-center">Ticket Asignado</th>
                                        <th class="text-center">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $ct=$inicio+1;
                                        while ($row=mysqli_fetch_array($selticket, MYSQLI_ASSOC)): 
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $ct; ?></td>
                                        <td class="text-center"><?php echo $row['fecha']; ?></td>
                                        <td class="text-center"><?php echo $row['serie']; ?></td>
                                        <td class="text-center"><?php echo $row['estado_ticket']; ?></td>
                                        <td class="text-center"><?php echo $row['nombre_usuario']; ?></td>
                                        <td class="text-center"><?php echo $row['email']; ?></td>
                                        <td class="text-center"><?php echo $row['id_dept']; ?></td>
                                        <td class="text-center"><?php echo $row['atendidopor']; ?></td>
                                        <td class="text-center">
                                        <div class="form-group">
                       
                                             <div class="col-sm-15">
                                               <div class='input-group'>
                                                  <select class="form-control"  name="asignar">
                                                    <option> Seleccione un Técnico</option>
                                                    <option value="Fabricio">Fabricio</option>
                                                    <option value="Joel">Joel</option>
                                                    <option value="Rony">Rony</option>
                                                    <option value="Jose Mario">Jose Mario</option>
                                                    <option value="Cesar">Cesar</option>
                                                    <option value="Tharin">Tharin</option>
                                                   </select>
                                                 </div> 
                                               </div>

                                               <div class="form-group">
                                           <div class="col-sm-offset-2 col-sm-10">
                                               <button type="submit" class="btn btn-info" href="admin.php?view=ticketadminfull&id" >Asignar Ticket</button>
                                          </div>
                                     </div>
                                        </div>
                                        </td>
                                        <td class="text-center"><?php echo $row['asignar_ticket']; ?></td>
                                        <td class="text-center">
                                            
                                        <a href="./lib/pdf.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-success" target="_blank"><i class="fa fa-print" aria-hidden="true"></i></a>
                                        <a href="admin.php?view=ticketedit&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    
                                        </td>
                                    </tr>
                                    <?php
                                        $ct++;
                                        endwhile; 
                                    ?>
                                </tbody>
                            </table>

                            <!-- Fin tabla -->

                            <!-- Conteo de tickets al llegar a 10 cambia a la siguiente página -->
                            <?php else: ?>
                                <h2 class="text-center">No hay tickets registrados en el sistema</h2>
                            <?php endif; ?>
                        </div>

                        <?php 
                            if($numeropaginas>=1):
                            if(isset($_GET['ticket'])){
                                $ticketselected=$_GET['ticket'];
                            }else{
                                $ticketselected="all";
                            }
                        ?>
                        <nav aria-label="Page navigation" class="text-center">
                            <ul class="pagination">
                                <?php if($pagina == 1): ?>
                                    <li class="disabled">
                                        <a aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                <?php else: ?>
                                    <li>
                                        <a href="./admin.php?view=ticketadmin&ticket=<?php echo $ticketselected; ?>&pagina=<?php echo $pagina-1; ?>" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                
                                
                                <?php
                                    for($i=1; $i <= $numeropaginas; $i++ ){
                                        if($pagina == $i){
                                            echo '<li class="active"><a href="./admin.php?view=ticketadmin&ticket='.$ticketselected.'&pagina='.$i.'">'.$i.'</a></li>';
                                        }else{
                                            echo '<li><a href="./admin.php?view=ticketadmin&ticket='.$ticketselected.'&pagina='.$i.'">'.$i.'</a></li>';
                                        }
                                    }
                                ?>
                                
                                <?php if($pagina == $numeropaginas): ?>
                                    <li class="disabled">
                                        <a aria-label="Previous">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                <?php else: ?>
                                    <li>
                                        <a href="./admin.php?view=ticketadmin&ticket=<?php echo $ticketselected; ?>&pagina=<?php echo $pagina+1; ?>" aria-label="Previous">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </nav>
                        <?php endif; ?>
                    </div>
                    <!-- Fin cambuo de pagina -->
                </div>
            </div><!--container principal-->
<?php
}else{
?>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <img src="./img/Stop.png" alt="Image" class="img-responsive animated slideInDown"/><br>
                   
                </div>
                <div class="col-sm-7 animated flip">
                    <h1 class="text-danger">Lo sentimos esta página es solamente para Tecnicos de Soporte Técnico 9-1-1</h1>
                    <h3 class="text-info text-center">Inicia sesión como Tecnicos para poder acceder</h3>
                </div>
                <div class="col-sm-1">&nbsp;</div>
            </div>
        </div>
<?php
}
?>
<!-- 
/* Eliminar Tickets */
                /* if(isset($_POST['id_del'])){
                    $id = MysqlQuery::RequestPost('id_del');
                    if(MysqlQuery::Eliminar("ticket", "id='$id'")){
                        echo '
                            <div class="alert alert-info alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <h4 class="text-center">TICKET ELIMINADO</h4>
                                <p class="text-center">
                                    El ticket fue eliminado del sistema con exito
                                </p>
                            </div>
                        ';
                    }else{
                        echo '
                            <div class="alert alert-danger alert-dismissible fade in col-sm-3 animated bounceInDown" role="alert" style="position:fixed; top:70px; right:10px; z-index:10;"> 
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <h4 class="text-center">OCURRIÓ UN ERROR</h4>
                                <p class="text-center">
                                    No hemos podido eliminar el ticket
                                </p>
                            </div>
                        '; 
                    }
                }*/                /* *********** Fin Eliminar Tickets ***********  */ -->