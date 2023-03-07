<?php require APPROOT . '/views/inc/header.php'; ?>
       <?php require APPROOT . '/views/inc/nav.php'; ?>
    <div class="container-fluid vh-100">
        <div class="row d-md-flex justify-content-between  align-items-start">
            <div class="col-md-6">
                <form action="">
                    <div class="row d-flex justify-content-center align-items-center">
                     
                        <img class="w-25 d-flex-column justify-content-center " src="<?php echo URLROOT ?>/public/imgg/logo-removebg-preview.png"            alt="">
                        <h3 class="mt-3 text-center"> Welecome to ur second Home </h3>
                        <p style="font-size: small ;" class="text-muted text-center ">Lorem ipsum dolor sit amet
                            consectetur
                            adipisicing elit. Culpa, nihil quae maiores, iste nostrum laboriosam voluptas totam quis</p>
                        <div class="mb-3">
                            <input placeholder="Name" required class="form-control w-75 m-auto mb-3 " type="text">
                        </div>
                        <div class="mb-3">
                            <input placeholder="Last Name" required class="form-control w-75 m-auto mb-3 " type="text">
                        </div>

                        <div class="mb-3">
                            <input placeholder="Email" required class="form-control w-75 m-auto mb-3 " type="email">
                        </div>
                        <div class="mb-3">
                            <input placeholder="Password" required class="form-control  w-75 m-auto  mb-3"
                                type="password">
                        </div>
                        <div class="mb-3">
                            <select required class="form-control w-75 m-auto mb-3 " type="text">
                                <option value="1">Admin</option>
                                <option value="0">Cleint</option>
                            </select>
                        </div>

                        <button type="submit" class="form-control btn btn-primary w-75 mb-4  ">Submit</button>

                    </div>

                    <p style="font-size: small ;" class="text-muted text-center ">Lorem ipsum dolor sit amet consectetur
                        jhsjhsskms
                        adipisicing elit. Culpa, nihil quae maiores, iste nostrum <a href="login.html">login</a></p>

                </form>

            </div>
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


        </div>
    </div>
    <?php require APPROOT . '/views/inc/footer.php'; ?>  