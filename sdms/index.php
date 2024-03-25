
  <?php include("includes/head.php"); ?>
  <body class="hold-transition login-page">
    <!-- Logo box -->
    <div class="login-box">  
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <div class="login-logo">
            <p><b>
            </b></p><!-- Link can also be removed -->
            <center><img src="company/system.png" width="150" height="130" class="user-image" alt="User Image"/></center>
          </div>
          <p class="login-box-msg"><b> <h4> <center> System Management </center></h4> </b></p>

          <form action="" method="post">
            <div class="input-group mb-3">
              <input type="text" name="username" class="form-control" placeholder="Username" required value="<?php if(isset($_COOKIE["user_login"])) { echo $_COOKIE["user_login"]; } ?>">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" name="password" class="form-control" placeholder="Password" required value="<?php if(isset($_COOKIE["userpassword"])) { echo $_COOKIE["userpassword"]; } ?>">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember">
                  <label for="remember">
                    Remember Me
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" name="login" class="btn btn-primary btn-block" data-toggle="modal" data-taget="#modal-default">Login</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
          <p class="mb-1">
            <a href="forgotpassword.php">I forgot my password</a>
          </p>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <?php include("includes/foot.php"); ?>
  </body>
  </html>