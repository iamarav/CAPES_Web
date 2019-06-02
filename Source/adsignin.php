<?php
include("hf/top.php");
include('dbconn.php');
session_start();
if(isset($_SESSION['aid']))
{
    header('location:admin/addash.php');
}

if(isset($_POST['submit']))
{
    $username=htmlentities($_POST['username']);
    $password=htmlentities($_POST['password']);

   $qry="SELECT * FROM admin WHERE username='".$username."' && password='".$password."'";
 
    $result=mysqli_query($conn,$qry);
    
    $rowcount=mysqli_num_rows($result);
    
    if($rowcount<1)
    { (!empty($_POST['username']))?$username:''; 
    (!empty($_POST['password']))?$password:'';
?>
        <script>
    
alert('Enter a valid Username and Password');
    window.open('adsignin.php','_self');
</script>
   
   
   <?php 
    }
else{
    
    $data=mysqli_fetch_assoc($result);
    $id=$data['id'];
    
     session_start();
    $_SESSION['aid']=$id;
    
    header('location:admin/addash.php');
}
}

?>

<div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="text-center card card-body mt-4  bg-dark">
                    <h1 class="heading dispaly-4 pb-3 text-light">Admin Login</h1>
                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                                <input type="text"  placeholder="Username" value='' 
                            autocomplete='off'    name="username" class="form-control" >
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                </div>
                                <input type="password" placeholder="Password" value='' 
                            autocomplete='off'  name="password"class="form-control" >
                                </div>
                        </div>
                        <div class="form-group">

                            <input type="submit" name="submit" value="Log In" class="btn btn-primary btn-block">

                        </div>
                    </form>
                   
                    </div>
        </div>
        </div>

</div>





<?php
include('hf/bottom.php');
?>