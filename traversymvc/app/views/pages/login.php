<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/nav.php'; ?>
    <div class="container-fluid vh-100">
      
        <div class="row d-md-flex justify-content-between  align-items-start">
            <div id="slide" class="col-md-6">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="<?php echo URLROOT ?>/public/imgg/Contact us-amico.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="<?php echo URLROOT ?>/public/imgg/Contact us-bro.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="<?php echo URLROOT ?>/public/imgg/Contact us-pana.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            <div class="col-md-6">
                <form method="post" action="<?php echo URLROOT ?>/login/loginn/">
                        <div class="row d-flex justify-content-center align-items-center">
                            <img  id="imge_logi" class="w-25 d-flex-column justify-content-center " src="./imgg/logo-removebg-preview.png" alt="" >
                    
                            <h4 class=" bg-white text-center text-primary px-3">Hello agine</h4>
                            <p style="font-size: small  w-75 ;" class="text-muted text-center ">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Culpa, nihil quae maiores, iste nostrum laboriosam voluptas totam quis</p>

                            <div class="mb-3">
                                <input placeholder="Email" required  name="email"  class="form-control w-75 m-auto mb-3 " type="email">
                            </div>
                            <div class="mb-3">
                                <input placeholder="Password" name="pass" required class="form-control  w-75 m-auto  mb-3" type="password">
                            </div>
                    
                            <button type="submit" name="log" class="form-control btn btn-primary w-75 mb-4    ">Submit</button>
                     
                        </div>

                        <p style="font-size: small   w-75;" class="text-muted text-center ">Lorem ipsum dolor sit amet consectetur jhsjhsskms
                            adipisicing elit. Culpa, nihil quae maiores, iste nostrum <a href="signin">sgin up</a></p>
                  
                </form>

            </div>
         
        </div>
    </div>
</body>

</html>