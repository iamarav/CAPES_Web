
<?php
include("adtop.php");
include('redir.php');
include('../dbconn.php');
?>

<div class="container pt-4 ">
<div class="card bg-dark col-6 mx-auto col-sm col-md col-lg col-xs">
    <div class="card-body ">
        <div class="card-title h2 ali">
            <span style="color:white"> Search User</span>
        </div>
        <div class="card-content mt-4">
            <form action="deluser.php" method="post" class="form">
                <div class="row">
                   
                    <div class="col">
                            <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                Contact
                                            </div>
                                        </div>
                                        <input type="number" class="form-control" name="contact" required>
                                    </div>
                                </div>
                    </div>
                    </div>
                    <input type="submit" value="Search" name='search' class="form-control btn btn-outline-primary">
                     <!--  <i class="fa fa-search btn btn-outline-primary form-control">           </i>           -->    
            </form>
        </div>
    </div>
</div>
</div>
<?php
if(isset($_POST['search']))
{?>
<div class="container">
                        
              <table class="table table-bordered bg-dark mt-4 mb-4" style="color:white">
              <col width="150">
              <col width="150">
              <col width="150">
              <col width="150">
              <col width="150">
              <col width="150">
              
<thead>
<tr>
<th scope="col">S.No.</th>
<th scope="col">id</th>
<th scope="col">Name</th>
<th scope="col">Contact No.</th>
<th scope="col">Email</th>
<th scope="col">Image</th>
<th scope="col">category</th>
<th scope="col">Action</th>


</tr>
</thead>



<?php

include("../dbconn.php");

$contact=htmlentities($_POST['contact']);
//$name=htmlentities($_POST['name']);

$query="SELECT * FROM users WHERE contact LIKE '%".$contact."%'";
$result=mysqli_query($conn,$query);
// echo mysqli_fetch_assoc($result);
if(mysqli_num_rows($result)<1)
{
?><script>
alert("No Record Found");</script><?php
}
else
{ 
$count=0;
while($data=mysqli_fetch_assoc($result))
{
    $count++;
    ?>
<tbody>
<tr>
<td><?php echo $count; ?></td>
<td><?php echo $data['id']; ?></td>
<td><?php echo $data['uname']; ?></td>
<td><?php echo $data['contact']; ?></td>
<td><?php echo $data['email']; ?></td>
<td><img src="../userimg/<?php echo $data['imgc']; ?>" style="width:100px;height:100px;"></td>
<td><?php if($data['usercategory']==1)
{
    echo "Company";
} 

else{

echo"Applicant";

}
?></td>
<td><a href="delete.php?contact=<?php echo $data['contact'];?>"><i class="fa fa-trash"></i></a></td>

</tr>
</tbody>

    <?php
}
}
}
?>
 </table>
</div>










<?php 
include('adfoot.php');
?>