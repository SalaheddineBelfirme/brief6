<?php require APPROOT . '/views/inc/header.php'; ?>
<body>
    <form style="width: 50%; margin: auto; margin-top: 10%;" class="was-validated">
        <div class="mb-3">
            <h1 class=" m-auto text-center text-primary">ajouter un navier </h1>
        </div>
        <div class="mb-3">
            <input type="text" placeholder="Name" name="name" class="form-control" aria-label="file example" required>
          </div>
        <div class="mb-3">
            <input type="number" placeholder="nombre de chambre" name="nb_chombre" class="form-control" aria-label="file example" required>
          </div>
          <div class="mb-3">
            <input type="number" placeholder=" nombre de place " name=" nombre de place" class="form-control" aria-label="file example" required>
          </div>
        <div class="mb-3">  
            <button  type="submit" name="sub_port" class="btn btn-primary" required> ajoute port</button>
        </div>
     </form>
</body>

