<?php

include('../dbconn.php');
include('redirect.php');
if($_SESSION['usercategory']==2)
{
    include('applicant/ltop.php');
}

else{
    include('company/ctop.php');


}

?>
<div class="row mt-4">
    <div class="col"></div>
    <div class="col"></div>
    <div class="col"></div>
    <div class="col">
        <img style="border-radius:50%;height:150px;width:150px" src="../userimg/<?php echo($_SESSION['imgc']);?>" alt="<?php echo($_SESSION['imgc']);?>" />
    </div>
    <div class="col"></div>
    <div class="col"></div>
    <div class="col"></div>

</div>
<div class="container mt-4 pd-4">
    <div class="card bg-light">
        <h4 class="card-heading text-center my-auto">Profile</h4>
    <div class="card-body">
        <div class="alert alert-info mt-4" role="alert">
  <div class="row">
             <div class="col">Name </div> 
            <div class="col text-right"><?php echo($_SESSION['uname']);?></div>
  </div>
  </div>
        <div class="alert alert-info" role="alert">
  <div class="row">
             <div class="col">Email </div> 
            <div class="col text-right"><?php echo($_SESSION['email']);?></div>
  </div>
  </div>
        <div class="alert alert-info" role="alert">
  <div class="row">
             <div class="col">Contact No. </div> 
            <div class="col text-right"><?php echo($_SESSION['contact']);?></div>
  </div>
  </div>
            
        
    </div>
    </div>
</div>

<?php
include('applicant/lbot.php');
?>