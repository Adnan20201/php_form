<?php
session_start();

require_once "./INFo/header.php"

?>


<style>
  .card {
    background-color: #999;
  }
</style>

<section class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <h2>PHP Form</h2>
          </div>
          <div class="card-body">
            <form action="./INFo/form_submit.php" method="POST">

              <div class="mb-2">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" placeholder="Enter Your Name" class="form-control" id="name">
                <span class="text-danger">
                  <?php
                  if (isset($_SESSION['error_name'])) {
                    echo  $_SESSION['error_name'];
                  }
                  ?>
                </span>
              </div>

              <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" placeholder="Enter Your Email" class="form-control" id="email">
                <span class="text-danger">
                  <?php
                  if (isset($_SESSION['error_email'])) {
                    echo   $_SESSION['error_email'];
                  }
                  ?>
                </span>
              </div>


              <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" placeholder="Enter Your Password" class="form-control" id="password">
                <span class="text-danger">
                  <?php
                  if (isset($_SESSION['error_password'])) {
                    echo   $_SESSION['error_password'];
                  }
                  ?>
                </span>
              </div>

              <div class="mb-2">
                <label>Photo</label>
                <input type="file" name="photo" class="form-control" id="password">
                <span class="text-danger">
                  <?php

                  if (isset($_SESSION['error_photo'])) {
                    echo ($_SESSION['error_photo']);
                  }

                  ?>
                </span>
              </div>

              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php

require_once "./INFo/footer.php";
session_unset();

?>