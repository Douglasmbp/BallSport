<?php 
    session_start();
    include "../../controladores/equipos/agregar.php";
    include "../../controladores/equipos/eliminar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BallSport</title>

    <script src="https://kit.fontawesome.com/8ed0adbcce.js" crossorigin="anonymous"></script>
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="../../estilos/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-image: linear-gradient(#000 50%, #ffff00);" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                <i class="fa-solid fa-medal"></i>
                </div>
                <div class="sidebar-brand-text mx-3">BallSport</div>
            </a>
            
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="index.php"  data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-solid fa-table-list"></i>
                    <span>Posiciones</span></a>
            </li>

            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link collapsed" href="equipos.php"  data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-solid fa-people-group"></i>
                    <span>Equipos</span></a>
            </li>

            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link collapsed" href="estadisticas.php"  aria-expanded="true" aria-controls="collapseTwo">
                <i class="fa-solid fa-chart-simple"></i>
                    <span>Estadisticas</span>
                </a>
            </li>

            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link collapsed" href="calendario.php"  aria-expanded="true" aria-controls="collapseTwo">
                <i class="fa-regular fa-calendar-days"></i>
                    <span>Calendario</span>
                </a>
            </li>

            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Logo directaGroup -->
                <img class="sidebar-card-illustration w-100" src="../../img/logo.jpg" alt="...">
        </ul>
        
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Navegador, Informacion del usuario -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['user_data']->nombre; ?></span>
                                <i class="fa-solid fa-user pr"></i>
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="../../controladores/login/salir.php" >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar Sesion
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="container-fluid row">
                    <form action="" method="post">
                        <h3>INSCRIBIR EQUIPOS</h3>
                        <div class="d-flex gap-4 align-items-end">
                            <div>
                                <label class="form-label ">Nombre del equipo:</label>
                                <input type="text" class="form-control" name="nombre">
                            </div>
                            <div>
                                <label class="form-label mx-3" >Cantidad de jugadores:</label>
                                <input type="text" class="form-control mx-3" name="jugadores">
                            </div>
                            <input type="submit" name="registrar" class="btn btn-dark mx-5" value="Registrar">
                        </div>
                    </form>
                </div>
                <?php if (!empty($mensaje)): ?>
                    <div><?php echo $mensaje; ?></div>
                <?php endif; ?>
                <hr class="sidebar-divider border-black mt-3">

                <div class="px-0 my-4">

                    <table class="table table-striped">
                        <thead class="text-white" style="background-color: #000 !important">
                            <tr>
                                <th scope="col">Nombre del equipo</th>
                                <th scope="col">Cantidad de jugadores</th>
                                <th scope="col">Fecha</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                include "../../controladores/equipos/mostrar.php";
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
                

    <!-- Bootstrap core JavaScript-->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../js/demo/chart-area-demo.js"></script>
    <script src="../../js/demo/chart-pie-demo.js"></script>

</body>

</html>