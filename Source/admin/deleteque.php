<?php
include('redir.php');
include("adtop.php");
include('../dbconn.php');

$sno=$_GET['sno'];

$querydel="DELETE FROM dbans WHERE sno='$sno'";
if(mysqli_query($conn,$querydel))
{
?>
<script>
alert("done");
window.open("addordelque.php","_self");
</script>
<?php

}
else
{
    ?>
    <script>
    alert("failed");
    window.open("addordelque.php","_self");
    </script>
    <?php
}


include('adfoot.php');
?>