<?php include_once "form/header.html"; ?>
<!DOCTYPE html>
<html lang="en">
  <body>
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(http://localhost/plateforme/platformeRecrutement/plateforme/images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            <div class="row justify-content-center mt-5">
              <div class="col-md-8 text-center">
                <h1>Register</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 mb-5"  data-aos="fade">
            <form method="POST" action="http://localhost/plateforme/platformeRecrutement/plateforme/gestion/compte/insertCompte.php" class="p-5 bg-white">
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" name="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="login">Login</label> 
                  <input type="login" id="login" name="login" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Password</label> 
                  <input type="password" id="password" name="password" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-12">
                  <p>Have an account? <a href="login.php">Log In</a></p>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Sign In" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>
<?php include_once "form/bottom.html"; ?>