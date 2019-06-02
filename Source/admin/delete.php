
<?php
//include("adtop.php");
include('redir.php');
include('../dbconn.php');
   
$contact=$_GET['contact'];

    $qry1="DELETE FROM users WHERE contact='$contact'";
    
    $result1=mysqli_query($conn,$qry1); 
    
    if($result1)
    {
    ?><script>
alert("Data Deleted Successfully");
window.open("deluser.php","_self");

</script> 
    
   <?php   
    }
    
    else
    {
        ?><script>
alert("Data Not updated");</script><?php  
    }
    