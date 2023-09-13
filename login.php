<title>Login | </title>
<?php include 'topbar.php'; ?>
<style>
  @media only screen and (max-width: 995px) {
  #delete {
    margin-top: 100px;
  }
}
@media only screen and (max-width: 767px) {
  #delete {
    margin-top: 200px;
  }
}
@media only screen and (max-width: 316px) {
  #delete {
    margin-top: 250px;
  }
}
</style>
<body class="hold-transition login-page" id="delete">
  <div class="login-box" style="margin-top: 500px;">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="#" class="h1"><b>Login</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Sign in to start your session</p>
<?php 
    if(isset($_POST['changepassword'])) {
    $user_Id = $_POST['user_Id'];
    $cpassword = md5($_POST['cpassword']);
    $update = mysqli_query($conn, "UPDATE users SET password='$cpassword' WHERE user_Id='$user_Id'");
    if($update) {
        $_SESSION['message'] = "Password has been changed. Please login to your account.";
        $_SESSION['text'] = "Successfully changed";
        $_SESSION['status'] = "success";
        include 'sweetalert_messages.php';
        echo '<script>window.history.go(+1); </script>';
?>
      <form action="login_code.php" method="POST">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="email@gmail.com" name="email" id="email" onkeydown="validation()" onkeyup="validation()" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <!-- FOR INVALID EMAIL -->
        <div class="input-group mt-1 mb-2">
          <small id="text" style="font-style: italic;"></small>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="password" name="password" minlength="8" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" onclick="myFunction()">
              <label for="remember">
                Show password
              </label>
            </div>
          </div>
        </div>
        <div class="social-auth-links text-center mt-4">
          <button class="btn btn-block btn-primary" type="submit" name="login" id="login">Sign-in</button>
          <p class="mt-1"><a href="forgotpassword.php" class="text-center">Forgot password?</a></p>  
          <hr>
        </div>
      </form>

<?php } else { 
    $_SESSION['message'] = "Something went wrong while changing your password.";
    $_SESSION['text'] = "Please try again";
    $_SESSION['status'] = "error";
    include 'sweetalert_messages.php';
    echo '<script>window.history.go(-1); </script>';
    } 
  } elseif(isset($_POST['admin_changepassword'])) { 

    $admin_Id = $_POST['admin_Id'];
    $cpassword = md5($_POST['cpassword']);
    $update = mysqli_query($conn, "UPDATE admin SET password='$cpassword' WHERE admin_Id='$admin_Id'");
    if($update) {
        $_SESSION['message'] = "Password has been changed. Please login to your account.";
        $_SESSION['text'] = "Successfully changed";
        $_SESSION['status'] = "success";
        include 'sweetalert_messages.php';
        echo '<script>window.history.go(+1); </script>';
?>

      <form action="login_code.php" method="POST">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="email@gmail.com" name="email" id="email" onkeydown="validation()" onkeyup="validation()" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <!-- FOR INVALID EMAIL -->
        <div class="input-group mt-1 mb-2">
          <small id="text" style="font-style: italic;"></small>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="password" name="password" minlength="8" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" onclick="myFunction()">
              <label for="remember">
                Show password
              </label>
            </div>
          </div>
        </div>
        <div class="social-auth-links text-center mt-4">
          <button class="btn btn-block btn-primary" type="submit" name="login" id="login">Sign-in</button>
          <p class="mt-1"><a href="forgotpassword.php" class="text-center">Forgot password?</a></p>  
          <hr>
        </div>
      </form>

<?php } else { 

      $_SESSION['message'] = "Something went wrong while changing your password.";
      $_SESSION['text'] = "Please try again";
      $_SESSION['status'] = "error";
      include 'sweetalert_messages.php';
      echo '<script>window.history.go(-1); </script>';

?>

<?php } } else { 
?>

      <form action="login_code.php" method="POST">
        <div class="input-group">
          <input type="email" class="form-control" placeholder="email@gmail.com" name="email" id="email"  onkeydown="validation()" onkeyup="validation()">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <!-- FOR INVALID EMAIL -->
        <div class="input-group mt-1 mb-2">
          <small id="text" style="font-style: italic;"></small>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="password" name="password" minlength="8">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" onclick="myFunction()">
              <label for="remember">
                Show password
              </label>
            </div>
          </div>
        </div>
        <div class="social-auth-links text-center mt-4">
          <button class="btn btn-block btn-primary" type="submit" name="login" id="login">Sign-in</button>
          <p class="mt-1"><a href="forgotpassword.php" class="text-center">Forgot password?</a></p>  
          <hr>
        </div>
      </form>


<?php } ?>

      <p class="mt-3"><a href="register.php?#register" class="text-center">Create new account</a></p>
    </div>
  </div>
</div>

<?php 
    include 'footer.php'; 
    include 'sweetalert_messages.php';
?>

<script>

  function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}



  function validation() {
    var email = document.getElementById("email").value;
    var pattern =/.+@(gmail)\.com$/;
    // var pattern =/.+@(gmail|yahoo)\.com$/;
    var form = document.getElementById("form");

    if(email.match(pattern)) {
        document.getElementById('text').style.color = 'green';
        document.getElementById('text').innerHTML = 'Valid email';
        document.getElementById('login').disabled = false;
        document.getElementById('login').style.opacity = (1);
    } 
    else {
        document.getElementById('text').style.color = 'red';
        document.getElementById('text').innerHTML = 'Invalid email';
        document.getElementById('login').disabled = true;
        document.getElementById('login').style.opacity = (0.4);
        
    }
  }



</script>

