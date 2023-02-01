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
                    <a  href="<?php echo URLROOT ?>/Pages/home" class="nav-item nav-link active">Home</a>
                    <a href="<?php echo URLROOT ?>/Pages/about" class="nav-item nav-link">About</a>
                    <a href="<?php echo URLROOT ?>/Pages/croisiere" class="nav-item nav-link">croisiere</a>
                    <a style="display:<?php echo Pages::test();?>" href="dashboard" class="nav-item nav-link">dashboard</a>
                 
                    <a href="<?php echo URLROOT ?>/Pages/resvarstion" class="nav-item nav-link">resvarstion</a>
                </div>
                    <a href="<?php echo URLROOT ?>/Pages/contact" class="nav-item nav-link">Contact</a>
                </div>
                <a href=" <?php echo URLROOT ?>/Pages/<?php echo Pages::testlog();?>" class="btn btn-primary rounded-pill py-2 px-4"><?php echo Pages::testlog();?></a>
            </div>
        </nav>