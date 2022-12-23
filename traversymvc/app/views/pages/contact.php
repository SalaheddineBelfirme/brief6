<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/nav.php'; ?>
    <div class="container pt-0"> 
       
        <div  class="row text-center mt-5">
            <h6 id="h1contact" class="bg-white text-center text-primary px-3">CONTACT US</h6>
          
        </div>
        <div class="row d-md-flex justify-content-between align-items-start  ">
            <div id="gpinfo" class="col-md-6 pt-0">
                <div class="mb-3">
                    <label for="" class="form-lable">First Name</label>
                    <input class="form-control" type="text">
                </div>
                <div class="mb-3">
                    <label for="" class="form-lable"> Last Name</label>
                    <input class="form-control" type="text">
                </div>
                <div class="mb-3">
                    <label for="" class="form-lable">tele</label>
                    <input class="form-control" type="enail">
                </div>
                <div class="mb-3">
                    <label for="" class="form-lable">Email</label>
                    <input class="form-control" type="enail">
                </div>
                <div class="">
                    <label for="" class="form-lable">Message</label>
                    <textarea class="form-control"  ></textarea>
                </div>
               
            </div>
            <div class="col-md-6 mt-5">
            <img src="<?php echo URLROOT ?>/public/imgg/Contact us-amico.png" class="d-block h-100" alt="...">
            </div>
 
        </div>
        <div class="col  text-center "> 
            <button class="btn btn-primary  mb-3 ">Send</button>
        </div>
        
    </div>
</body>
<footer>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</footer>
</html>