<?php require APPROOT . '/views/inc/header.php';
require  APPROOT . '/controllers/Croisiere.php ';


?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<div id="container_crosi" class="container-fluid position-relative p-0  ">
  <?php require APPROOT . '/views/inc/nav.php'; ?>
  <div class="row">
    <div style="margin-top: 8%;" class="col-md-12 mb-5">
      <div class="card">
        <div class="card-body bg-light" style="overflow: auto;">
          <a data-bs-toggle="modal" data-bs-target="#cr" data-bs-whatever="@mdo">
            <i class="fas fa-plus">add croice</i>
          </a>
          <table id="tdata" class="table table-hover " >
            <thead>
              <tr>
                <td scope="col">name</td>
                <td scope="col">prix</td>
                <td scope="col">nb_nuits</td>
                <td scope="col">depart</td>
                <td scope="col">navier</td>
                <td scope="col">date</td>
                <td scope="col">image</td>

                <td scope="col">Action</td>
              </tr>
            </thead>
            <tbody>
              <?php $i = 0;
              foreach ($data['croisiere'] as $cr) { ?>
                <tr>


                  <td scope="row"><?php echo $cr->name?></td>
                  <td scope="row"><?php echo $cr->prix?>$</td>
                  <td scope="row"><?php echo $cr->nb_nuits; ?></td>
                  <td scope="row"> <?php echo $cr->nameP  ?>
                  <td scope="row"> <?php echo $cr->nameN  ?>
                  <td scope="row"> <input  type="datetime-local"  value="<?php echo $cr->datee  ?>" readonly></td>
                  <td scope="row"> <img style="width: 100px ;height: 100px;" id="imgp" src="../public/imgg/<?php echo $cr->image ?>" alt=""></td>
                  <td scope="row">

                  <form action="<?php echo URLROOT?>/Croisiere/DeleteCroisiere/<?php echo $cr->id_croisiere  ?>" method="post">           
                  
                      <button style="margin-left:10px" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
          <!-- ----------------------------------------------------- -->

          <!-- -------------------------------------------- -->

        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div style="margin-top: 8%;" class="col-md-12 mb-5">
      <div class="card">
        <div class="card-body bg-light" style="overflow: auto;">
          <a data-bs-toggle="modal" data-bs-target="#port" data-bs-whatever="@mdo">
            <i class="fas fa-plus"></i>
            <h5>add port</h5>
          </a>
          <table id="tdata" class="table table-hover ">
            <thead>
              <tr>
                <td scope="col">name</td>
                <td scope="col">pays</td>
                <td scope="col">ctgoery</td>
                
              </tr>
            </thead>
            <tbody>
              <?php $i = 0;
              foreach ($data['Port'] as $pr) { ?>
                <tr>


                  <td scope="row"><?php echo $pr->nameP?></td>
                  <td scope="row"><?php echo $pr->pays; ?></td>
                  <td scope="row">

                  <form action="<?php echo URLROOT?>/Port/deletePort/<?php echo $pr->id_port ?>" method="post">           
                     <button style="margin-left: 10px;" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
          <!-- ----------------------------------------------------- -->

          <!-- -------------------------------------------- -->

        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div style="margin-top: 8%;" class="col-md-12 mb-5">
      <div class="card">
        <div class="card-body bg-light" style="overflow: auto;">
          <a data-bs-toggle="modal" data-bs-target="#nv" data-bs-whatever="@mdo">
            <i class="fas fa-plus"></i>
            <h5>add navier</h5>
          </a>
          <table id="tdata" class="table table-hover ">
            <thead>
              <tr>
                <td scope="col">name</td>
                <td scope="col">place</td>
                <td scope="col">chomber</td>
                <td scope="col">action</td>
              </tr>
            </thead>
            <tbody>
              <?php $i = 0;
              foreach ($data['navier'] as $nv) { ?>
                <tr>
                  <td scope="row"><?php echo $nv->nameN?></td>
                  <td scope="row"><?php echo $nv->nb_place; ?></td>
                  <td scope="row"> <?php echo $nv->nb_chombre?>
                  <td scope="row">
                    <form action="<?php echo URLROOT?>/Navier/Deletenavier/<?php echo $nv->id_navire ?>" method="post">
                      <button style="margin-left: 10px;" type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
          <!-- ----------------------------------------------------- -->

          <!-- -------------------------------------------- -->

        </div>
      </div>
    </div>
  </div>

</div>


<div class="modal fade" id="nv" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New navier</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo URLROOT ?>/Navier/addNavier" style="width: 50%; margin: auto; margin-top: 10%;" class="was-validated">
          <div class="mb-3">
            <input type="text" placeholder="Name" name="namenv" class="form-control" aria-label="file example" required>
          </div>
          <div class="mb-3">
            <input type="number" placeholder="Number de place" name="nb_place" class="form-control" aria-label="file example" required>
          </div>
          <div class="mb-3">
            <input type="number" placeholder="Number de chomber" name="nb_chomber" class="form-control" aria-label="file example" required>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary" type="submit" name="add_navier"> ajoute croisiére </button>
      </div>
      </form>
    </div>
  </div>
</div>









<div class="modal fade" id="cr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New croisiere</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo URLROOT?>/Croisiere/addCroisiere"  class="d-flex flex-column gap-3" enctype="multipart/form-data" method="POST">


          <input name="name" type="text" class="form-control" placeholder="name" aria-label="Username" aria-describedby="basic-addon1" required>
          <input name="prix" type="text" class="form-control" placeholder="prix" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
          <input name="date" type="datetime-local" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
          <input accept=".jpg,jpeg,.png" name="imageadd" type="file" class="form-control" required>
          <input name="nights" type="number" class="form-control" placeholder="n°nights" aria-describedby="basic-addon1" required>

          <select name="navier" class="form-select" aria-label="Default select example" required>
            <option selected>Navier </option>
            <?php foreach ($data['navier'] as $row) { ?>

              <option value="<?php echo $row->id_navire ?>"><?php echo $row->nameN ?></option>
            <?php } ?>
          </select>

          <select name="port_depart" class="form-select" aria-label="Default select example" required>
            <option selected>PORT </option>
            <?php foreach ($data['Port'] as $row) { ?>

              <option value="<?php echo $row->id_port ?>"><?php echo $row->nameP ?></option>
            <?php } ?>
          </select>

          <div class="row">
            <?php foreach ($data['Port'] as $row) { ?>
              <div>
                <input type="checkbox" value="<?php echo $row->id_port ?>" name="checkport[]" class="form-check-input ">
                <label class="form-check-label" for="exampleCheck1"><?php echo $row->pays ?></label>
              </div>
            <?php } ?>



          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            <button id="btnSubAdd" class="btn bg-primary text-light  " name="submitadd" type="submit">Submit</button>

          </div>
        </form>
      </div>
    </div>
  </div>

</div>




  <div class="modal fade" id="port" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">



    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">New port</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">


          <form method="POST" action="<?php echo URLROOT ?>/Port/addPort" style="width: 50%; margin: auto; margin-top: 10%;" class="was-validated">

            <div class="mb-3">
              <input type="text" placeholder="Name" name="namePt" class="form-control" aria-label="file example" required>
            </div>
            <div class="mb-3">
              <input type="text" placeholder="point_depart" name="pays" class="form-control" aria-label="file example" required>
            </div>

            <div class="mb-3">
              <button type="submit" name="sub_addport" class="btn btn-primary" required> ajoute port</button>
            </div>
          </form>


        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    
    <script>
      $(document).ready( function () {
    $('#tdata').DataTable();
          } );
    </script>