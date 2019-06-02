<?php
include('company/ctop.php');
include('../dbconn.php');
include("redirect.php");
?>

<div class="container mt-4 ">
<div class="container mt-4">

<form action="delete-job.php"  method="POST">
<div class="row mt-4">

<div class="col-sm-8">
<div class="form-group">

<select name="category" class="form-control">
<option value="engineering">Engineering</option>
<option value="marketing">Marketing</option>
<option value="management">Management</option>
</select>
</div>
</div>

<div class="col-sm-4">
<div class="form-group">
<input type="submit" class="form-control btn btn-outline-primary" name="search-del" value="Search">
</div>
</div>

</div>
</form>


<?php
if(isset($_POST['search-del']))
{
$category=htmlentities($_POST['category']);
$posted_by= $_SESSION['uname'];
$query="SELECT * FROM jobs WHERE posted_by='$posted_by' AND category='$category'";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)<1)
{
    ?>
    <div class="alert alert-danger mt-4" role="alert">
    <?php echo("no such records");?> 
    </div>

    <?php
}
else{
?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Company</th>
      <th scope="col">Category</th>
      <th scope="col">Location</th>
      <th scope="col">Posted On</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
<?php
$jobdata=mysqli_fetch_assoc($result);

?>


  <tbody>
    <tr>
      <th scope="row"><?=$jobdata['title']?></th>
      <td><?=$jobdata['company']?></td>
      <td><?=$jobdata['category']?></td>
      <td><?=$jobdata['locat']?></td>
      <td><?=$jobdata['posted_on']?></td>
      <td><a href="deljob-action.php?id=<?=$jobdata['id']?>"><i class="fa fa-trash"></i></a></td>
      
    </tr>
    
  </tbody>
</table>

<?php
}

}

else{
    $posted_by= $_SESSION['uname'];

$queryall="SELECT * FROM jobs WHERE posted_by='$posted_by'";
$resultall=mysqli_query($conn,$queryall);
if(mysqli_num_rows($resultall)<1){
    ?>
    <div class="alert alert-danger mt-4" role="alert">
    <?php echo("No job has been posted");?> 
    </div>

    <?php
}
else{
?>
<div class="alert alert-info mt-4 display-4 " role="alert">
    <?php echo("All Posted Jobs");?> 
    </div>
    
    
    <table class="table table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Company</th>
      <th scope="col">Category</th>
      <th scope="col">Location</th>
      <th scope="col">Posted On</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  
<?php
while($joball=mysqli_fetch_assoc($resultall))
{
?>

<tbody>
    <tr>
      <th scope="row"><?=$joball['title'];?></th>
      <td><?=$joball['company'];?></td>
      <td><?=$joball['category'];?></td>
      <td><?=$joball['locat'];?></td>
      <td><?=$joball['posted_on'];?></td>
      <td><a href="deljob-action.php?id=<?=$joball['id']?>"><i class="fa fa-trash"></i></a></td>
    </tr>
    
  </tbody>


<?php
}
?>


</table>
<?php
}




}?>






</div>
</div>





<?php
include('applicant/lbot.php');
?>