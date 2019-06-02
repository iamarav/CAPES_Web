<?php
include('redir.php');
include("adtop.php");
include('../dbconn.php');
?>
<div class="container mt-4 mb-4">
<div class="container mt-4 mb-4">
<div class="dropdown ">
  <button class="btn btn-outline-primary btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Add a Question
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <div class="container dropdown-item">
    <form action="addordelque.php" method="POST" class="form">
    <div class="form-group">
    <label for="question">Question</label>
    <input type="text-box" name="question" placeholder="Enter the question here" class="form-control">
    </div>

    <div class="row mt-4">
    <div class="col-sm">
    <div class="form-group">
    <input type="text-box" name="opt1" placeholder="Option 1" class="form-control">
    </div>
    </div>
    
    <div class="col-sm">
    <div class="form-group">
    <input type="text-box" name="opt2" placeholder="Option 2" class="form-control">
    </div>
    </div>
    </div>
    <div class="row mt-2">
    <div class="col-sm">
    <div class="form-group">
    <input type="text-box" name="opt3" placeholder="Option 3" class="form-control">
    </div>
    </div>
    <div class="col-sm">
    <div class="form-group">
    <input type="text-box" name="opt4" placeholder="Option 4" class="form-control">
    </div>
    </div>
    </div>
    
    <div class="form-group">
    <input type="text-box" name="answer" placeholder="Enter Answer Here" class="mt-3 form-control">
    </div>
    <div class="form-group">
    <input type="submit" name="addquesuccess" value="Add Question" class="btn btn-outline-success btn-block mt-4 mb-4">
    </div>
    </form>
    </div>
  </div>
</div>
</div>
</div>


<?php



if(isset($_POST['addquesuccess']))
{
$question=htmlentities($_POST['question']);
$opt1=htmlentities($_POST['opt1']);
$opt2=htmlentities($_POST['opt2']);
$opt3=htmlentities($_POST['opt3']);
$opt4=htmlentities($_POST['opt4']);
$answer=htmlentities($_POST['answer']);

$queryadd="INSERT INTO dbans (question, opt1, opt2, opt3, opt4, answer) VALUES ('$question', '$opt1', '$opt2', '$opt3', '$opt4', '$answer')";
if(mysqli_query($conn,$queryadd))
{
    ?>
    <script>
    alert("Question added Successfully");
    </script>
    <?php
}
else{
    ?>
    <script>
    alert('Query Failed');</script>
    <?php
}
}


?>

<div class="container mt-4 mb-4">
<div class="container mt-4 mb-4">
<div class="dropdown">
  <button class="btn btn-outline-primary btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Delete a Question
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <form action="addordelque.php" method=POST class="form dropdown-item">
<div class="row">
<div class="col-sm-3">
<div class="form-group">
<select name="searchby" class="mt-4 form-control">
<option value="byid">By ID</option>
<option value="byquestion">By Question</option>
<option value="byanswer">By Answer</option>
</select>
</div>
</div>

<div class="col-sm-7">
<div class="form-group mt-4">
<input type="text" name="delque" placeholder="Enter the details here" class="form-control">
</div>
</div>

<div class="col-sm-2">
<div class="form-group">
<input type="submit" class="mt-4 btn btn-outline-primary" value="Search" name="delsearch" >
</div>
</div>

</div>
</form>
  </div>
</div>
</div>
</div>


<?php

if(isset($_POST['delsearch']))
{
$searchby=htmlentities($_POST['searchby']);
$delque=htmlentities($_POST['delque']);

if($searchby=='byid')
{
$query="SELECT * FROM dbans WHERE sno='$delque'";

if(mysqli_num_rows(mysqli_query($conn,$query))<1)
{
  ?>
  <script>
  alert("No such record exists");</script>
   <?php
}
else{
$resultarray=mysqli_fetch_assoc(mysqli_query($conn,$query));
?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">question</th>
      <th scope="col">option 1</th>
      <th scope="col">option 2</th>
      <th scope="col">option 3</th>
      <th scope="col">option 4</th>
      <th scope="col">Answer</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $resultarray['sno'];  ?></th>
      <td><?php echo $resultarray['question'];  ?></td>
      <td><?php echo $resultarray['opt1'];  ?></td>
      <td><?php echo $resultarray['opt2'];  ?></td>
      <td><?php echo $resultarray['opt3'];  ?></td>
      <td><?php echo $resultarray['opt4'];  ?></td>
      <td><?php echo $resultarray['answer'];  ?></td>
      <td> <a href="deleteque.php?sno=<?php echo $resultarray['sno'];?>"> <i class="fa fa-trash-alt"></i></a></td>
    </tr>
  </tbody>
</table>


<?php
}
}

if($searchby=='byquestion')
{
$query="SELECT * FROM dbans WHERE question LIKE'%".$delque."%'";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)<1)
{
  ?>
  <script>
  alert("No data available");</script>
  <?php
}
else{
?> 
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">question</th>
      <th scope="col">option 1</th>
      <th scope="col">option 2</th>
      <th scope="col">option 3</th>
      <th scope="col">option 4</th>
      <th scope="col">Answer</th>
    </tr>
  </thead>
   <tbody>
<?php
while($resultarray=mysqli_fetch_assoc($result))
{?> 
 
    <tr>
      <th scope="row"><?php echo $resultarray['sno'];  ?></th>
      <td><?php echo $resultarray['question'];  ?></td>
      <td><?php echo $resultarray['opt1'];  ?></td>
      <td><?php echo $resultarray['opt2'];  ?></td>
      <td><?php echo $resultarray['opt3'];  ?></td>
      <td><?php echo $resultarray['opt4'];  ?></td>
      <td><?php echo $resultarray['answer'];  ?></td>
      <td> <a href="deleteque.php?sno=<?php echo $resultarray['sno'];?>"> <i class="fa fa-trash-alt"></i></a></td>
    </tr>
 
<?php
}
}
}?>
 </tbody>
</table>
<?php
if($searchby=='byanswer')
{
  $query="SELECT * FROM dbans WHERE answer LIKE'%".$delque."%'";
  $result=mysqli_query($conn,$query);
  if(mysqli_num_rows($result)<1)
  {
    ?>
    <script>
    alert("No data available");</script>
    <?php
  }
  else{
  ?> 
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">question</th>
        <th scope="col">option 1</th>
        <th scope="col">option 2</th>
        <th scope="col">option 3</th>
        <th scope="col">option 4</th>
        <th scope="col">Answer</th>
      </tr>
    </thead>
     <tbody>
  <?php
  while($resultarray=mysqli_fetch_assoc($result))
  {?> 
   
      <tr>
        <th scope="row"><?php echo $resultarray['sno'];  ?></th>
        <td><?php echo $resultarray['question'];  ?></td>
        <td><?php echo $resultarray['opt1'];  ?></td>
        <td><?php echo $resultarray['opt2'];  ?></td>
        <td><?php echo $resultarray['opt3'];  ?></td>
        <td><?php echo $resultarray['opt4'];  ?></td>
        <td><?php echo $resultarray['answer'];  ?></td>
        <td> <a href="deleteque.php?sno=<?php echo $resultarray['sno'];?>"> <i class="fa fa-trash-alt"></i></a></td>
      </tr>
   
  <?php
  }
  }
  }?>
   </tbody>
  </table>
  <?php
}

?>
<?php
include('adfoot.php');
?>
