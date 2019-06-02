<?php
include("hf/top.php");
include('dbconn.php');
include('ss.php');

?>
<div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-4 col-lg-4"></div>
            <div class="col-md-8 col-sm-8 col-xs-4 col-lg-4 mx-auto">
                <div class="text-center card card-body mt-4  bg-light">
                    <h1 class="heading dispaly-4 pb-3 text-dark"> Login as</h1>
                    <?php
                    if(isset($_POST['submit']))
                    {
                        if($_POST['email']==null)
                        {
                            ?> 
 
 <div class="alert alert-danger mt-4" role="alert">
  <?php echo("Please enter email");?> 
  </div>

<?php
                        }
                        elseif($_POST['pass']==null)
                        {
                            ?> 
 
 <div class="alert alert-danger mt-4" role="alert">
  <?php echo("Please enter password");?> 
  </div>

<?php
                        }
                        else
                        {
$usercategory=htmlentities($_POST['usercategory']);
$email=htmlentities($_POST['email']);
$pass=htmlentities($_POST['pass']);




    $qry="SELECT * FROM users WHERE email='".$email."' && pass='".$pass."' ";
    $result=mysqli_query($conn,$qry);
    $rowcount=mysqli_num_rows($result);
    
    if($rowcount<1){
        (!empty($_POST['email']))?$email:''; 
        (!empty($_POST['pass']))?$pass:'';
    ?>
            <div class="alert alert-danger mt-4" role="alert">
      <?php echo("Please enter a valid Combination");?> 
      </div>
       
       <?php 
    
    }
    else{
        $data=mysqli_fetch_assoc(mysqli_query($conn,$qry));
        $usercategorycheck=$data['usercategory'];

        if($usercategorycheck==$usercategory)
{
if($usercategory==2)
{
        $id=$data['id'];
        
        session_start();
        $userdata=mysqli_fetch_assoc(mysqli_query($conn,$qry));
        $_SESSION['contact']=$userdata['contact'];
        $_SESSION['email']=$userdata['email'];
        $_SESSION['imgc']=$userdata['imgc'];
        $_SESSION['uname']=$userdata['uname'];
        $_SESSION['usercategory']=$usercategory;
        $_SESSION['uid']=$id;
    
        header("location:user/dash.php?usercategory=".$usercategory."&id=".$id);
}
else{
    
        $data=mysqli_fetch_assoc(mysqli_query($conn,$qry));
        $id=$data['id'];
        
        session_start();
        $userdata=mysqli_fetch_assoc(mysqli_query($conn,$qry));
        $_SESSION['contact']=$userdata['contact'];
        $_SESSION['email']=$userdata['email'];
        $_SESSION['imgc']=$userdata['imgc'];
        $_SESSION['uname']=$userdata['uname'];
        $_SESSION['usercategory']=$userdata['usercategory'];
        $_SESSION['cid']=$id;
    
        header("location:user/dashc.php?usercategory=".$usercategory."&id=".$id);
        
    
}       
    
}
if($usercategorycheck!=$usercategory){
?>

<script>
alert('No such user exists or ');
</script>
<?php
}
}



                        }
                    }
                    
                    
                    ?>
                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
                    <div class="form-group">
                        <select name="usercategory" class="form-control" >
                        <option value="1">Company</option>
                        <option value="2">Applicant</option>
                        </select>
                      
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                                <input type="email"  placeholder="Email" value='' 
                            autocomplete='off'    name="email" class="form-control" >
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                </div>
                                <input type="password" placeholder="Password" value='' 
                            autocomplete='off'  name="pass"class="form-control" >
                                </div>
                        </div>
                        <div class="form-group">

                            <input type="submit" name="submit" value="Log In" class="btn btn-outline-primary btn-block">

                        </div>
                    </form>
                    <p>Not a Registered User?&nbsp;<a href="signup.php" class="mx-auto" style="color:cyan;text-decoration:none;"><b>Sign Up </b></a>&nbsp;here</p>

                    </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-4 col-lg-4"></div>

        </div>
</div>

  <?php
include("hf/bottom.php");
  ?>