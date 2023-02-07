<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/nav.php';?>

<div class="container-xxl py-5 mt-5 "> <br>
            <div class="container">
                <div class="text-center wow fadeInUp"  data-wow-delay="0.1s">
                   
                    <h1 class="mb-5 ">Your Resrvation</h1>
                </div>
                <div class="row g-4 justify-content-center">
                  
                    <?php foreach($data['ResrvationCliont'] as $row) {?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp"Style="margin-left: 8px; width: 420px; " data-wow-delay="0.1s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <h1 class="text-center text-primary" style=" height: 50px;"><?php echo  $row->name  ?></h1>
                                <img class="img-fluid" style="width: 404px; height: 305px;" src="../public/imgg/<?php echo  $row->image; ?>"  alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i></small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i></small>
                                <input class="croses" type="hidden" value="<?php echo  $row->datee ?>">
                                <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i> Person</small>
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
                                    <a href="<?php echo URLROOT?>/Pages/deleteResrvation/<?php echo  $row->id_croisiere ?>/<?php echo  $row->id_navire ?>" class="btn btn-primary px-3" style="border-radius:  30px;"> Cancel</a>
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