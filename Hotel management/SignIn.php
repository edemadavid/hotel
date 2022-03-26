<?php include "./mainheader.php"; ?>

<Head>
  <style>
    
  </style>
</Head>

<section class="container-fluid bg">
  <div class="row ">
      
    <div class="col-md-8 col-lg-6 col-xl-4 offset-4 ">
        <form class="form-container glass">
          <div class="d-flex flex-row align-items-center justify-content-center ">
            <p class="lead fw-normal mb-0 me-3 text-center">Sign into your account!</p>
            
          </div>

          <div class=" my-4">
            <p class="text-center fw-bold mx-3 mb-0 text-center"> Nice to See you!  Please log in with your account.</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter email" />
            
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" />
            
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
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Sign In</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register1.php"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  
  </div>
</section>
    
<?php include "./mainfooter.php"; ?>