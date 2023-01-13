<?php 

require_once '../app/controllers/Pages.php';

// require_once 'libraries/Controller.php';


?>
<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0" >
            <a href="" class="navbar-brand p-0">
                <!-- <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1> -->
                <img src=" <?php echo URLROOT?>/public/imgg/logo-removebg-preview.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a  href="home" class="nav-item nav-link active">Home</a>
                    <a href="about" class="nav-item nav-link">About</a>
                    <a href="croisiere" class="nav-item nav-link">croisiere</a>
                    <a style="display:<?php echo Pages::test();?>" href="dashboard" class="nav-item nav-link">dashboard</a>
                    <!-- <div class="nav-item dropdown">
                        <a href="dashboard" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">dashbord</a>
                        <div class="dropdown-menu m-0">
                            <a href="portdata" class="dropdown-item">naveir</a>
                            <a href="portdata" class="dropdown-item">port</a>
                            <a href="404" class="dropdown-item">404 Page</a>
                        </div>
                    </div> -->
                    <a href="resvarstion" class="nav-item nav-link">resvarstion</a>
                </div>
                    <a href="contact" class="nav-item nav-link">Contact</a>
                </div>
                <a href="<?php echo Pages::testlog();?>" class="btn btn-primary rounded-pill py-2 px-4"><?php echo Pages::testlog();?></a>
            </div>
        </nav>