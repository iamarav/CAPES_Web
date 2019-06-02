<?php
include('redir.php');
include("../dbconn.php");
include("adtop.php");
?>
<div class="container bg-light">
<div class="display-4 mt-4 mb-4">Add a user here</div>
<?php 
if(isset($_POST['addc']))
{
if($_POST['uname']==null || $_POST['contact']==null || $_POST['email']==null || $_POST['pass']==null)
{
 ?> 
 
 <div class="alert alert-danger mt-4" role="alert">
  <?php echo("Please fill all the fields");?> 
  </div>

<?php
}


else{

$uname=htmlentities($_POST['uname']);
$contact=htmlentities($_POST['contact']);
$email=htmlentities($_POST['email']);
$pass=htmlentities($_POST['pass']);
$usercategory=htmlentities($_POST['usercategory']);
$imgc=$_FILES['imgc']['name'];
$tempname=$_FILES['imgc']['tmp_name'];
move_uploaded_file($tempname,"../userimg/$imgc");

if(strlen($pass)<8)
{?>
  <div class="alert alert-danger mt-4" role="alert">
  <?php echo("Length of password should be more than 7");?> 
  </div>
  <?php
}
elseif(strlen($contact)!=10)
{
  ?>
  <div class="alert alert-danger mt-4" role="alert">
  <?php echo("Enter a correct Conact Number");?> 
  </div>
  <?php
}

else{

$check1="SELECT id FROM users WHERE contact='$contact'";
$check2="SELECT id FROM users WHERE email='$email'";
if(mysqli_num_rows(mysqli_query($conn,$check1)))
{
  ?>
  <div class="alert alert-danger mt-4" role="alert">
  <?php echo('User already Exists with same contact number');?> 
  </div>
  <?php
}
elseif(mysqli_num_rows(mysqli_query($conn,$check1)))
{ 
  ?>
  <div class="alert alert-danger mt-4" role="alert">
  <?php echo('User already Exists with same email');?> 
  </div>
  <?php
}
else{
$qry="INSERT INTO users (uname,contact,email,pass,imgc,usercategory ) VALUES ('$uname','$contact','$email','$pass','$imgc','$usercategory')";
if(mysqli_query($conn,$qry))
{?>
 <script> alert("Account Added Successfully");
 window.open("adduser.php","_self");
 </script>
 <?php
}
else{
  ?><script>
  alert("Unable to add due to some technical error");
  window.open("adduser.php","_self");</script>
  <?php 
}
}
}
}}
?>
<div class="card">
<div class="card-body">
<form action="adduser.php" method="POST" enctype="multipart/form-data">
                        
                        <div class="form-group ">
                        <label for="uname">Name </label>
                        <input type="text" name="uname" id="name" placeholder="Enter Name Here" class="form-control" >
                        </div>
                        <div class="form-group">
                        <label for="contact">Mobile No. </label>
                        <input type="number" name="contact" id="contact" placeholder="Enter Here" class="form-control" >
                        
                        </div>
                        <div class="form-group">
                        <label for="email">Email </label>
                        <input type="email" name="email" id="email" placeholder="Enter Email Address Here" class="form-control">
                        
                        </div>
                        <div class="form-group">
                        <label for="pass">Password </label>
                        <input type="password" name="pass" id="pass" placeholder="Enter Password Here" class="form-control" >
                        </div>
                        <div class="form-group mt-4 mx-auto">
                        <label for="imgc">Image </label>
                        <input type="file" name='imgc' class="form-control" required >
                        </div>

                        <div class="form-group">
                        <label for="usercategory">Category </label>
                        <select name="usercategory" class="form-control" >
                        <option value="1">Company</option>
                        <option value="2">Applicant</option>
                        </select>
                        </div>

                        <input type="submit" name='addc' value="Register" class="btn btn-outline-primary btn-block mb-2">
                    </form>
</div>
</div>
</div>

<?php
include("adfoot.php");
  ?>