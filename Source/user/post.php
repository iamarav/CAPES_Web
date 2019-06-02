<?php
include('company/ctop.php');
include('../dbconn.php');
include("redirect.php");
if(isset($_POST['postjob']))
{
if(empty($_POST['title'])||empty($_POST['company'])||empty($_POST['category'])||empty($_POST['location'])||empty($_POST['country'])||empty($_POST['aboutc']))
{
?>

<div class="alert alert-danger mt-4" role="alert">
  <?php echo("Please fill all the fields");?> 
  </div>

<?php
}

else{

$title=htmlentities($_POST['title']);
$company=htmlentities($_POST['company']);
$category=htmlentities($_POST['category']);
$location=htmlentities($_POST['location']);
$country=htmlentities($_POST['country']);
$aboutc=htmlentities($_POST['aboutc']);
$posted_on=date("d-m-y");
$posted_by=$_SESSION['uname'];
$expired=0;

// check for existing same job
$checkjob="SELECT * FROM jobs WHERE title='$title' AND company='$company' AND category='$category' AND locat='$location' AND country='$country' AND posted_by='$posted_by'";
$row_count=mysqli_num_rows(mysqli_query($conn,$checkjob));

if($row_count!=0)
{
?>
    <div class="alert alert-danger mt-4" role="alert">
  <?php echo("Record Already Exists");?> 
  </div>

<?php

}
else{
$postquery="INSERT INTO jobs (title,company,category,locat,country,aboutc,posted_on,posted_by,expired) VALUES ('$title','$company','$category','$location','$country','$aboutc','$posted_on','$posted_by','$expired')";

if(mysqli_query($conn,$postquery))
{
    ?>
    <script>
    alert("Posted");</script>
    <?php
}
else
{
    ?>
    <script>
    alert("failed");</script>
    <?php
}
}
}
}


?>
<div class="container">
<div class="container mt-4">

<form action="post.php" method="POST" enctype="multipart/form-data">
                        
                        <div class="form-group ">
                        <label for="title">Job Title </label>
                        <input type="text" name="title" placeholder="Job Title" class="form-control" >
                        </div>
                        <div class="form-group">
                        <label for="company">Company </label>
                        <input type="text" name="company" placeholder="Enter Company Name" class="form-control" >
                        
                        </div>
                        <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category" id="category" class=form-control>
                        <option value="engineering">Engineering</option>
                        <option value="marketing">Marketing</option>
                        <option value="management">Management/MBA</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" name="location" placeholder="location" class="form-control" >
                        </div>
                        <div class="form-group">
                        <label for="country">Country</label>
                        <select name="country" id="country" class=form-control>
                        <option value="IN">India</option>
                        <option value="US">United States</option>
                        <option value="UK">UK</option>
                        <option value="UAE">UAE</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="aboutc">Description</label>
                        <input type="textbox" name="aboutc" placeholder="Describe company(not more than 1000 words)" class="form-control" >
                        </div>
                        <div class="form-group">
                        </div>
                        <input type="submit" name='postjob' value="Register" class="btn btn-outline-primary btn-block mb-2">
                    </form>

</div>
</div>

















<?php
include('applicant/lbot.php');
?>