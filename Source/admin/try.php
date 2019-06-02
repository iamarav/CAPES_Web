<div class="container mt-4 mb-4">
<div class="container mt-4 mb-4">
<div class="dropdown">
  <button class="btn btn-outline-secondary btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
</div>
</div>
<?php

if(isset($_POST['delbyid']))
{

?>
<form action="addordelque.php" method="POST" class="form">
<div class="row">
<div class="col-sm-9 ml-3">
<input type="text" name="sno" placeholder="Search by ID"></div>
<div class="col-sm-3 mr-3">
<input type="submit" name="byid" class="btn btn-outline-primary" value="Search"></div>
</div>
</form>

<?php

}

if(isset($_POST['delbyid']))
  {}

if(isset($_POST['delbyid']))
{}




  
?>
<?php

if(isset($_POST['addque']))
{
    
}
?>

<div class="dropdown">
  <button class="btn btn-outline-primary btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Delete a Question
  </button>
  <div class="row">
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <div class="container dropdown-item">
    <form action="adordelque.php" method="POST" class="form">
    <input type="submit" value="Delete using ID" name="delbyid" class="btn btn-block btn-light"></form>
    <form action="adordelque.php" method="POST" class="form">
    <input type="submit" value="Delete using Question" name="delbyque" class="btn btn-block btn-light" ></form>
    <form action="adordelque.php" method="POST" class="form">
    <input type="submit" value="Delete using Answer" name="delbyans"class="btn btn-block btn-light"></form>
    </div>
  </div>
  </div>
</div>

<!--
<form action="addordelque.php" action=POST class="form dropdown-item">
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
<div class="form-group">
<label for="delque">Question Details</label>
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