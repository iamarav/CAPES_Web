

<?php
include("company/ctop.php");
include("../dbconn.php");
include("redirect.php");


if(isset($_GET['action'])){
    echo '<script type= "text/javascript">alert("'.$_GET['action'].'")</script>';
  }
  ?>
  
  <div class="alert alert-primary mt-4 text-center" role="alert">
    <div style="font-family:monospace;font-size:2em"><?php echo("Welcome ".$_SESSION['uname']);?></div>
    </div>
    <div class="jumbotron">
    <h1 class="display-4">Hello !</h1>
    <p class="lead"> <strong>CAPES - Computerized Application for Paperless Examination Screening</strong> is an <strong>Online Recruitment Portal </strong> where a candidate can apply for the jobs and any company/organization can post an advertisement for the vacancy of certain job.<br> For applying for a job or posting an ad, the user has to <strong> register</strong> himself firstly.<br> <br>
    The user can also test his aptitude skills and sharpen them by visiting <strong>Aptitude Test Portal</strong>.
    A user can post a job advertisement and a candidate who wants to apply can apply for the same. <br></p>
    <hr class="my-4">
    <p>Lets Get Started!</p>
    <div class="row"><div class="col-sm col-md col-lg">
   <a class="btn btn-primary btn-lg" href="post.php" role="button">Post a new job</a>
    </div>
    <div class="col-sm col-md col-lg "> &nbsp;</div>
    <div class="col-sm col-md col-lg ">
   <a class="btn btn-primary btn-lg " href="delete-job.php" role="button">Delete/Check the posted jobs</a>
    </div>
    </div>
  </div>



<?php
include('company/cbot.php');
?>