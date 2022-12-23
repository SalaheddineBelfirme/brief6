<?php require APPROOT . '/views/inc/header.php'; ?>
    <form style="width: 50%; margin: auto; margin-top: 10%;" class="was-validated">
        <div class="mb-3">
            <input type="text" placeholder="Name" name="name" class="form-control" aria-label="file example" required>
          </div>
          <div class="mb-3">
            <input type="text" placeholder="Prix" name="prix" class="form-control" aria-label="file example" required>
          </div>
          <div class="mb-3">
            <input type="number" placeholder="Number de nout" name="nb_neut" class="form-control" aria-label="file example" required>
          </div>
          <div class="mb-3">
            <input type="file" class="form-control" aria-label="file example" required>
          </div>
        <div class="mb-3">
            <select class="form-select" required aria-label="select example">
              <option value="">Port</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
      
          </div>
       
      
        <div class="mb-3">
          <select class="form-select" required aria-label="select example">
            <option value="">navire</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
   
          </div>
      
        <div class="mb-3">
          <button class="btn btn-primary" type="submit" disabled> ajoute croisiére </button>
        </div>
      </form>

</body>