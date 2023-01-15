<?php require APPROOT . '/views/inc/header.php';

?>

    <div  id="container_crosi"   class="container-fluid position-relative p-0  ">
    <?php require APPROOT . '/views/inc/nav.php'; ?>
        <div class="search-form">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <form id="search-form" name="gs" method="post" role="search" action="<?php echo URLROOT?>/Pages/croisiere/">
                    <div class="row">
                      <div class="col-lg-2">
                        <h4>Sort Deals By:</h4>
                      </div>
                      <div class="col-lg-3">
                          <fieldset>
                            
                              <input name="date" type="datetime-local" class="form-select" aria-label="Default select example" id="chooseLocation">
                            
                             
                          </fieldset>
                      </div>
                      <div class="col-lg-3">
                          <fieldset>
                              <select name="port" class="form-select" aria-label="Default select example" id="chooseLocation" onChange="this.form.click()">
                                  <option value="<?php echo null ?>" selected>port</option>
                                  <?php foreach($data['filter'] as $row) {?>
                                  <option value="<?php echo $row->id_port ?>"><?php echo $row->nameP ?></option>
                                  <?php } ?>
                          
                              </select>
                          </fieldset>
                      </div>
                      <div class="col-lg-3">
                          <fieldset>
                              <select name="navier" class="form-select" aria-label="Default select example" id="choosePrice" >
                              <option value="<?php echo null ?>" selected>Navier</option>
                                  <?php foreach($data['filter'] as $row) {?>
                                  <option value="<?php echo $row->id_navire ?>"><?php echo $row->nameN ?></option>
                                  <?php } ?>
                              </select>
                          </fieldset>
                      </div>
                      <div class="col-lg-2">                        
                          <fieldset>
                              <button type="submit"  class="border-button"  >Search Results</button>
                            
                          </fieldset>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

        <!-- Package Start -->
        <div class="container-xxl py-5 mt-5 "> <br>
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                   
                    <h1 class="mb-5 ">Awesome Packages</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <button ></button>
                    <?php foreach($data['croisiere'] as $row) {?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <h1 class="text-center text-primary"><?php echo  $row->name  ?></h1>
                                <img class="img-fluid" style="width: 404px; height: 305px;" src="../public/imgg/<?php echo  $row->image; ?>"  alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo  $row->nameP  ?></small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i><?php echo  $row->datee  ?></small>
                                <input class="croses" type="text" value="<?php echo  $row->datee ?>">
                                <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i><?php echo  $row->nb_place  ?> Person</small>
                            </div>
                            <div class="text-center p-4">
                                <h3 class="mb-0"><?php echo  $row->prix  ?></h3>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                          
                                <div class="d-flex justify-content-center mb-2">
                                    <!-- <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a> -->
                                    <a href="#" class="btn btn-primary px-3" style="border-radius:  30px;">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- Package End -->

    </div>
   


