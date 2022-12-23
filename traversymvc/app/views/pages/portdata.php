<?php require APPROOT . '/views/inc/header.php'; ?>

    <div  id="container_crosi"   class="container-fluid position-relative p-0  ">
    <?php require APPROOT . '/views/inc/nav.php'; ?>
    <div class="row">
        <div style="margin-top: 8%;" class="col-md-12 mb-5" >
            <div class="card">
              <div class="card-body bg-light" style="overflow: auto;">
              <a href="add_croisi">
                <i class="fas fa-plus"></i>
              </a>
              <table  id="tdata" class="table table-hover ">
        <thead>
          <tr>
            <td  scope="col">name</td>
            <td scope="col">prix</td>
            <td scope="col">ctgoery</td>
            <td scope="col">description</td>
            <td scope="col">image</td>
            <td scope="col">Action</td>   
          </tr>
        </thead>
        <tbody>
          <?php $i=0; foreach($prods as $user ){ ?>
          <tr>
          
      
            <td  scope="row" ><?php echo $user[2]
            ?></td>
            <td scope="row"><?php echo $user[1]; ?></td>
            <td scope="row"> <?php echo $user[7] ?>
            <td scope="row"> <?php echo $user[3] ?>
            <td scope="row"> <img  id="imgp" src="./public/images/<?php echo $user[4]?>" alt=""></td>
            <td  scope="row" >
          
            <form action=" " method="post">
              <input type="hidden" name="id_de" value="<?php echo $user[0]; ?>">
              <button style="margin-left: 10px;"  class="btn btn-danger"><i class="fa fa-trash"></i></button>
            </form>
          </td>
          </tr>
          <?php }?>
        </tbody>
        </table>
        <!-- ----------------------------------------------------- -->
      
      <!-- -------------------------------------------- -->
      
              </div>
            </div>
          </div>
    </div>
       


        </div>
