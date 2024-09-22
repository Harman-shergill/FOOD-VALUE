<?php
session_start();
if(!isset($_SESSION['email'])){ //check
    echo "<script>window.location.assign('adminlogin.php?msg=Please Login!!')</script>";
}
$email=$_SESSION['email']; //store

include("header1.php");
?>
<style>
    label{
        color: black;
    }
</style>
<div class="container my-5">
<?php

if(isset($_GET['msg'])){
?>
 <div class="alert alert-secondary"><?php echo $_GET['msg']?></div>
<?php
}
?>
 <div class="card px-5 c1" >
    <h1 class="text-center my-3" style="color:black">Add NGO</h1>
    <form method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
        <div class="row my-3">
            <div class="col-md-2">
                <label>NGO Name</label>
            </div>
            <div class="col-md-10">
                <input class="form-control" type="text" name="name" required>
                <div id="nameError" style="color: red;"></div>

            </div>
        </div>
        <div class="row my-3">
            <div class="col-md-2">
                <label>NGO Image</label>
            </div>
            <div class="col-md-10">
                <input class="form-control" type="file" name="ngo_image" required>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md-2"  >
                <label>Email</label>
            </div>
            <div class="col-md-10">
                <input class="form-control" type="email" name="email" required>
                <div id="emailError" style="color: red;"></div>

            </div>
        </div>
        <div class="row my-3">
            <div class="col-md-2" >
                <label>Password</label>
            </div>
            <div class="col-md-10">
                <input class="form-control" type="password" name="password" required>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md-2" >
                <label>Description</label>
            </div>
            <div class="col-md-10">
                <textarea name="description" type="text" rows="5" cols="108" required></textarea>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md-2" >
                <label>Address</label>
            </div>
            <div class="col-md-10">
                <textarea name="address" rows="5" cols="108" required></textarea>
            </div>
        </div>
        
        <button class="btn btn-primary d-block mx-auto my-3 w-50 mt-5 mb-5" name="submit_btn">Add</button>
    </form>
</div>
</div>
<?php
    if(isset($_POST['submit_btn'])){
        $ngo=$_POST['name'];
       
        $img_name=$_FILES['ngo_image']['name'];
        
        $img_path=$_FILES['ngo_image']['tmp_name']; //temporary path
        
        $new_name=rand().$img_name;//uniqueness by using random function
        move_uploaded_file($img_path,"images/".$new_name);//image store in folder from to
        

        $em=$_POST['email'];
        $pass=md5($_POST['password']);
        $desc=$_POST['description'];
        $addr=$_POST['address'];
        

        include("config.php");
        $query="INSERT into `ngo`(`ngo_name`,`thumbnail`,`email`,`password`,`description`,`address`)
                            VALUES('$ngo','$new_name','$em','$pass','$desc','$addr')";
        $result=mysqli_query($connect,$query);
        if($result>0){
            echo "<script>window.location.assign('add_ngo.php?msg=NGO Added Successfully!!')</script>";
        }
        else{
            echo "<script>window.location.assign('add_ngo.php?msg=Error while adding!!')</script>";
        }
    
    }
               
?>
<?php
include("footer.php");
?>
<script>
function validateForm() {
  var name = document.getElementsByName("name")[0].value;
  var email = document.getElementsByName("email")[0].value;

  // Validate name
  if (name.trim() === "") {
    displayError("nameError", "Please enter your name.");
    return false;
  } else if (!isAlphabetic(name)) {
    displayError("nameError", "Please enter alphabetic characters only for Name.");
    return false;
  } else {
    hideError("nameError");
  }

  // Validate email
  if (email.trim() === "") {
    displayError("emailError", "Please enter your email address.");
    return false;
  } else if (!validateEmail(email)) {
    displayError("emailError", "Please enter a valid email address.");
    return false;
  } else {
    hideError("emailError");
  }



  return true; // Form is valid
}

function isAlphabetic(input) {
  var letters = /^[A-Za-z\s]+$/;
  return letters.test(input);
}

function validateEmail(email) {
  var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return pattern.test(email);
}

function displayError(errorId, errorMessage) {
  var errorElement = document.getElementById(errorId);
  errorElement.textContent = errorMessage;
  errorElement.style.display = "block";
}

function hideError(errorId) {
  var errorElement = document.getElementById(errorId);
  errorElement.style.display = "none";
}
</script>
