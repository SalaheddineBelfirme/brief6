<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/nav.php';
var_dump($data['Rooms']) ;
?>




<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->


<div class="container py-4 my-4 mx-auto d-flex flex-column hederDetails">
    <div class="header">
        <div class="row r1">
            <div class="col-md-9 abc">
                <h1>Tyre Mountain Cycle 21</h1>
            </div>
            <div class="col-md-3 text-right pqr"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                    class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
            <p class="text-right para">Based on 250 Review</p>
        </div>
    </div>
    <div class="container-body mt-4">
        <div class="row r3">
                <div class="col-md-6 p-0 klo">
                <form method="post" action="<?php echo URLROOT ?>/Reservation/reservation/" >
                    <input id="prixcr" value="<?php echo  $data['croisiere'][0]->prix ?>" type="hidden">
                    <input name="idCR" id="idcr" value="<?php echo  $data['croisiere'][0]->id_croisiere ?>" type="hidden">
                    <input name="prixhi" id="prixsw"  value="<?php echo  $data['croisiere'][0]->prix ?>" type="TEXT">
                    <ul>
                        <li class="name"> <label for="name">name</label><?php echo  $data['croisiere'][0]->name ?></li>
                        <li> <label for="">date : <span><?php echo  $data['croisiere'][0]->datee ?></span></label> </li>
                        <li> <label for="">Prix : <span id="prix" name="prixx"><?php echo  $data['croisiere'][0]->prix ?></span>$</label> </li>
                        <li> <label for="">chomber</label>  
                            <select name="chombercr"  id="prixchomber" onchange='swprix()' name="" id="">
                            <?php foreach($data['Rooms'] as $row ){ ?>
                                <option data-prix="<?php echo $row->prix ?>" value="<?php echo $row->num_chambre ?>"><?php echo $row->type ?></option>                       
                                <?php }?>
                            </select>
                        </li>
                    </ul>
                    <h5>traget</h5>
                    <ul>
                        <?php foreach($data['ports'] as $row ){ ?>
                        <li><?php echo $row->nameP ?></li>
                        <?php }?>
                    </ul>
                    <div class="row r4">
                        <div class="col-md-2 myt "><button name="btnResereve" type="submit" class="btn btn-outline-warning">BUY NOW</button></div>
                    </div>
                    </form>
                </div>

            <div class="col-md-6"> <img
                    src="<?php echo URLROOT  ?>/imgg/<?php echo $data['croisiere'][0]->image ?>"
                    width="90%" height="95%"> </div>
        </div>
    </div>

</div>