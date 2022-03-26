<?php
include "./mainheader.php";

?>
<section class="container-fluid bg">
  <div class="row">
    <div class="col-12 col-sm-6 col-md-3">
    
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 p-5 ">
        <form class="form-container mt-2 glass">
          <div class="d-flex flex-row align-items-center justify-content-center ">
            <p class="lead fw-normal mb-0 me-3 text-center">Get an account!</p>
            
          </div>

          <div class=" my-4">
            <p class="text-center fw-bold mx-3 mb-0 text-center"> Nice to See you!  Please register to get an account.</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" id="form3Example3" class="form-control form-control-lg" required
              placeholder="Enter First Name" />
            
          </div>
          <div class="form-outline mb-4">
            <input type="text" id="form3Example3" class="form-control form-control-lg" required
              placeholder="Enter Last Name" />
          
          </div>
          <div class="form-outline mb-4">
            <input type="email" id="form3Example3" class="form-control form-control-lg" required
              placeholder="Enter email" />
  
          </div>
          <div class="form-outline mb-4">
         
            <input type="password" id="form3Example3" class="form-control form-control-lg" required
              placeholder="Enter Password" />
             
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form3Example4" class="form-control form-control-lg" required
              placeholder="Repeat Password" />
            
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center mt-4 pt-2">
            <button type="button" class="btn btn-danger btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
            <p class="small fw-bold mt-2 pt-1 mb-0"><a href=""
                class="link-danger"></a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  
  </div>
</section>
    



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


<?php include "./mainfooter.php"; ?>