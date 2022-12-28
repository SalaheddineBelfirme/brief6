<?php require APPROOT . '/views/inc/header.php';
// echo ($data['title']);
print_r($data['croisiere']);

?>

    <div  id="container_crosi"   class="container-fluid position-relative p-0  ">
    <?php require APPROOT . '/views/inc/nav.php'; ?>
        <div class="search-form">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <form id="search-form" name="gs" method="submit" role="search" action="#">
                    <div class="row">
                      <div class="col-lg-2">
                        <h4>Sort Deals By:</h4>
                      </div>
                      <div class="col-lg-4">
                          <fieldset>
                              <select name="Location" class="form-select" aria-label="Default select example" id="chooseLocation" onChange="this.form.click()">
                                  <option selected>Destinations</option>
                                  <option type="checkbox" name="option1" value="Italy">Italy</option>
                                  <option value="France">France</option>
                                  <option value="Switzerland">Switzerland</option>
                                  <option value="Thailand">Thailand</option>
                                  <option value="Australia">Australia</option>
                                  <option value="India">India</option>
                              
                              </select>
                          </fieldset>
                      </div>
                      <div class="col-lg-4">
                          <fieldset>
                              <select name="Price" class="form-select" aria-label="Default select example" id="choosePrice" onChange="this.form.click()">
                                  <option selected>Price Range</option>
                                  <option value="100">$100 - $250</option>
                                  <option value="250">$250 - $500</option>
                                  <option value="500">$500 - $1,000</option>
                                  <option value="1000">$1,000 - $2,500</option>
                                  <option value="2500+">$2,500+</option>
                              </select>
                          </fieldset>
                      </div>
                      <div class="col-lg-2">                        
                          <fieldset>
                              <button class="border-button">Search Results</button>
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
                   
                    <h1 class="mb-5">Awesome Packages</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <?php foreach($data['croisiere'] as $row) {?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <h1><?php echo  $row->image;  ?>hhhhhhh</h1>
                                <img class="img-fluid" src="<?php echo  URLROOT .  $row->image ?>" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Thailand</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>3 days</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2 Person</small>
                            </div>
                            <div class="text-center p-4">
                                <h3 class="mb-0">$149.00</h3>
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
   


