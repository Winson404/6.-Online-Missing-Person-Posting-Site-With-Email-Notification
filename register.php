<?php 
    include 'navbar.php'; 
    // include 'login.php';
?>

<!-- ======= GIVE BACKGROUND COLOR FOR NAVBAR: GI CUSTOMIZED NAKO NI ======= -->
  <div id="hero" style="height: 40px;"></div>
<!-- ======= GIVE BACKGROUND COLOR FOR NAVBAR: GI CUSTOMIZED NAKO NI ======= -->



<!-- ======= Contact Section ======= -->
    <section id="register" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Sign-up</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->


          <?php if(isset($_SESSION['success'])) { ?> 
              <h5 class="alert text-success" role="alert"><b><?php echo $_SESSION['success']; ?></b></h5> 
          <?php unset($_SESSION['success']); } ?>


          <?php if(isset($_SESSION['invalid']) && isset($_SESSION['error'])) { ?>
              <h5 class="alert text-danger" role="alert"><b><?php echo $_SESSION['invalid']; ?> <?php echo $_SESSION['error']; ?></b></h5>
          <?php unset($_SESSION['invalid']);  unset($_SESSION['error']);  } ?>


          <?php  if(isset($_SESSION['exists'])) { ?>
              <h5 class="alert text-danger" role="alert"><b><?php echo $_SESSION['exists']; ?></b></h5>
          <?php unset($_SESSION['exists']); } ?>

        </div>


        <div class="row">
          <!-- LOAD IMAGE PREVIEW -->
          
          <div class="col-lg-12">
            <form action="register_code.php" method="post" enctype="multipart/form-data" class="bg-body p-5 rounded" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 50px;" id="form">
              <div class="row">
                
                <div class="form-group col-md-4 mb-3">
                  <label for="firstname">First name</label>
                  <input type="text" class="form-control" id="firstname" name="firstname" placeholder = "First Name (Required)" required>
                </div>
                <div class="form-group col-md-3 mb-3">
                  <label for="middlename">Middle name</label>
                  <input type="text" class="form-control" id="middlename" placeholder = "Middle Name" name="middlename">
                </div>
                <div class="form-group col-md-3 mb-3">
                  <label for="lastname">Last name</label>
                  <input type="text" class="form-control" id="lastname" name="lastname" placeholder = "Laste Name (Required)" required>
                </div>
                <div class="form-group col-md-2 mb-3">
                  <label for="suffix">Suffix</label>
                  <input type="text" class="form-control" id="suffix" placeholder = "Suffix (Optional)" name="suffix">
                </div>
                <div class="form-group col-md-3 mb-3">
                  <label for="gender">Sex</label>
                  <select class="form-control form-select" id="gender" name="gender" required>
                    <option value="" selected disabled>Select your Sex</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
                <div class="form-group col-md-3 mb-3">
                  <label for="dob">Date of Birth</label>
                  <input type="date" class="form-control" name="dob" placeholder="Date of birth" required id="updatetxtbirthdate" onkeyup="update_getAgeVal(0)" onblur="update_getAgeVal(0);" onchange="update_getAgeVal(0);">
                </div>
                <div class="form-group col-md-2 mb-3">
                  <label for="age">Age</label>
                  <input type="text" class="form-control"  placeholder="Age" readonly id="updatetxtage">
                  <input type="hidden" class="form-control" name="age" placeholder="Age" required id="updateagestatus">
                  <span id="age_text"></span>
                </div>
                
               
                <div class="col-auto form-group col-md-4 mb-3">
                  <label for="contact">Contact number</label>
                  <div class="input-group">
                    <div class="input-group-text">+63</div>
                    <input type="tel" class="form-control" pattern="[7-9]{1}[0-9]{9}" id="contact" name="contact" placeholder = "Contact Number (Required)" required maxlength="10">
                  </div>
                </div>
                <!-- <div class="form-group col-md-4 mb-3">
                  <label for="contact">Contact number</label>
                  <input type="number" class="form-control" id="contact" name="contact" placeholder = "Contact Number (Required)" required>
                </div> -->
                <div class="form-group col-md-4 mb-3">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder = "Email (Required)" required onkeydown="validation()" onkeyup="validation()">
                  <span id="text"></span>
                </div>
                 <div class="form-group col-md-4 mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control form-control"  name="password" placeholder = "Password must Have atleast 8 characters long" required id="newpassword" minlength="8">
                </div>
                <div class="form-group col-md-4 mb-3">
                  <label for="cpassword">Confirm password</label>
                   <input type="password" class="form-control form-control" placeholder="Confirm password" name="cpassword" required id="confirmpassword" onkeyup="validate_password()" minlength="8">
                <small id="wrong_pass_alert"></small>
                </div>
                <div class="form-group col-md-12 mb-3">
                  <label for="address">Address</label>
                  <textarea class="form-control" cols="30" rows="2" id="address" name="address" placeholder = "Current Address (Required)" required></textarea>
                </div>
                <div class="form-group col-md-6 mb-3">
                  <label for="fileToUpload">Upload Your Profile Picture</label>
                  <input type="file" class="form-control" id="fileToUpload" name="fileToUpload" required onchange="getImagePreview(event)">
                </div>
                <div class="form-group col-lg-6 mb-4">
                    <div class="form-group" id="preview">
                    </div>
                </div>
                <div class="form-group col-md-6 mb-3">
                  <label for="fileToUpload">Upload Your ID</label>
                  <input type="file" class="form-control" id="fileToUpload" name="IdfileToUpload" required onchange="getID(event)">
                </div>
                <div class="form-group col-lg-6 mb-4">
                    <div class="form-group" id="IDpreview">
                    </div>
                </div>
                <div class="col-md-12">
                  <hr>
                  <input type="checkbox" required> Accept <a type="button" href="" data-bs-toggle="modal" data-bs-target="#exampleModal" style="text-decoration: none;">Terms and Privacy</a>
                </div>  
                <p class="mt-3">Already have an account? <a href="login.php" >Click here!</a></p>
                

                

              <div class="text-center mt-3"><button type="submit" class="btn btn-primary" name="create_user" id="registerbutton">Register</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->






    <!-- Modal for TERMS AND AGREEMENT -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Terms and Agreement</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p style="text-align: justify;">i-LaFI respects the privacy of the users. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website i-LaFi. Please read this privacy policy carefully. If you do not agree with the terms of this privacy policy, please do not access the site.</p>
            <p style="text-align: justify;">We reserve the right to make changes to this Privacy Policy at any time and for any reason. We will alert you about any changes by updating the "Last Updated" date of this Privacy Policy on the Site. and you waive the right to receieve specific notice of each such change or modification.</p>
            <p style="text-align: justify;">You are encouraged to periodically review this Privacy Policy to stay informed of updates. You will be deemed to have been made aware of, will be subject to, and will be deemed to have accepted the changes in any revised Privacy Policy by your continued use of the Site after the date such revised Privacy Policy is posted.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>







<?php include 'footer2.php'; ?>
 

<script>
  function formatDate(date){
    var d = new Date(date),
    month = '' + (d.getMonth() + 1),
    day = '' + d.getDate(),
    year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    return [year, month, day].join('-');

    }

    function getAge(dateString){
    var birthdate = new Date().getTime();
    if (typeof dateString === 'undefined' || dateString === null || (String(dateString) === 'NaN')){
    // variable is undefined or null value
    birthdate = new Date().getTime();
    }
    birthdate = new Date(dateString).getTime();
    var now = new Date().getTime();
    // now find the difference between now and the birthdate
    var n = (now - birthdate)/1000;
    if (n < 604800){ // less than a week
    var day_n = Math.floor(n/86400);
    if (typeof day_n === 'undefined' || day_n === null || (String(day_n) === 'NaN')){
    // variable is undefined or null
    return '';
    }else{
    return day_n + ' day' + (day_n > 1 ? 's' : '') + ' old';
    }
    } else if (n < 2629743){ // less than a month
    var week_n = Math.floor(n/604800);
    if (typeof week_n === 'undefined' || week_n === null || (String(week_n) === 'NaN')){
    return '';
    }else{
    return week_n + ' week' + (week_n > 1 ? 's' : '') + ' old';
    }
    } else if (n < 31562417){ // less than 24 months
    var month_n = Math.floor(n/2629743);
    if (typeof month_n === 'undefined' || month_n === null || (String(month_n) === 'NaN')){
    return '';
    }else{
    return month_n + ' month' + (month_n > 1 ? 's' : '') + ' old';
    }
    }else{
    var year_n = Math.floor(n/31556926);
    if (typeof year_n === 'undefined' || year_n === null || (String(year_n) === 'NaN')){
    return year_n = '';
    }else{
    return year_n + ' year' + (year_n > 1 ? 's' : '') + ' old';
    }
    }
  }

function update_getAgeVal(pid){
var birthdate = formatDate(document.getElementById("updatetxtbirthdate").value);
var count = document.getElementById("updatetxtbirthdate").value.length;
if (count=='10'){
var age = getAge(birthdate);
var str = age;
var res = str.substring(0, 1);
if (res =='-' || res =='0'){
document.getElementById("updatetxtbirthdate").value = "";
document.getElementById("updatetxtage").value = "";
document.getElementById("updateagestatus").value = "";
$('#updatetxtbirthdate').focus();
return false;
}else{
document.getElementById("updatetxtage").value = age;
document.getElementById("updateagestatus").value = age;
}
}else{
document.getElementById("updatetxtage").value = "";
document.getElementById("updateagestatus").value = "";
return false;
}
}
</script>
<script>

  function agevalidation() {
    var age = document.getElementById("age").value;

    if(age < 12) {
        document.getElementById('age_text').style.color = 'red';
        document.getElementById('age_text').innerHTML = 'Must be 12yrs old and above.';
        document.getElementById('registerbutton').disabled = true;
        document.getElementById('registerbutton').style.opacity = (0.4);
    } else {

        document.getElementById('age_text').style.color = 'green';
        document.getElementById('age_text').innerHTML = '';
        document.getElementById('registerbutton').disabled = false;
        document.getElementById('registerbutton').style.opacity = (1);

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
        document.getElementById('registerbutton').disabled = false;
        document.getElementById('registerbutton').style.opacity = (1);
    } 
    else {
        document.getElementById('text').style.color = 'red';
        document.getElementById('text').innerHTML = 'Invalid email';
        document.getElementById('registerbutton').disabled = true;
        document.getElementById('registerbutton').style.opacity = (0.4);
        
    }
  }



   function getImagePreview(event)
  {
    var image=URL.createObjectURL(event.target.files[0]);
    var imagediv= document.getElementById('preview');
    var newimg=document.createElement('img');
    var text=document.createElement('p');
    text.innerHTML='Profile Photo Preview';
    text.style['position']="relative";
    text.style['margin-left']="162px";
    text.style['margin-top']="10px";
    text.style['font-weight']="bold";
    imagediv.innerHTML='';
    newimg.src=image;
    newimg.width="90";
    newimg.height="90";
    newimg.style['border-radius']="50%";
    newimg.style['display']="block";
    newimg.style['margin-left']="auto";
    newimg.style['margin-right']="auto";
    newimg.style['box-shadow']="rgba(100, 100, 111, 0.2) 0px 7px 29px 0px";
    imagediv.appendChild(newimg);
    imagediv.appendChild(text);
  }

   function getID(event)
  {
    var idimage=URL.createObjectURL(event.target.files[0]);
    var idimagediv= document.getElementById('IDpreview');
    var idnewimg=document.createElement('img');
    var idtext=document.createElement('p');
    idtext.innerHTML='ID Preview';
    idtext.style['position']="relative";
    idtext.style['margin-left']="207px";
    idtext.style['margin-top']="10px";
    idtext.style['font-weight']="bold";
    idimagediv.innerHTML='';
    idnewimg.src=idimage;
    idnewimg.width="90";
    idnewimg.height="90";
    idnewimg.style['border-radius']="50%";
    idnewimg.style['display']="block";
    idnewimg.style['margin-left']="auto";
    idnewimg.style['margin-right']="auto";
    idnewimg.style['box-shadow']="rgba(100, 100, 111, 0.2) 0px 7px 29px 0px";
    idimagediv.appendChild(idnewimg);
    idimagediv.appendChild(idtext);
  }

</script>

<script>
    function validate_password() {

      var pass = document.getElementById('newpassword').value;
      var confirm_pass = document.getElementById('confirmpassword').value;
      if (pass != confirm_pass) {
        document.getElementById('wrong_pass_alert').style.color = 'red';
        document.getElementById('wrong_pass_alert').innerHTML = 'X Password did not matched!';
        document.getElementById('registerbutton').disabled = true;
        document.getElementById('registerbutton').style.opacity = (0.4);
      } else {
        document.getElementById('wrong_pass_alert').style.color = 'green';
        document.getElementById('wrong_pass_alert').innerHTML = '✓ Password matched!';
        document.getElementById('registerbutton').disabled = false;
        document.getElementById('registerbutton').style.opacity = (1);
      }
    }

</script>


