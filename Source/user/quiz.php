<?php
include("applicant/ltop.php");
include("../dbconn.php");
include("redirect.php");
$_SESSION['testcomplete'] = 'yes';
?>

<div class="alert alert-success mt-4 text-center" role="alert">
  <div style="font-family:monospace;font-size:2em"><?php echo("Thank You ".$_SESSION['uname']);?></div>
  </div>
<?php

 $tm = 0; // Do not edit, initialisation of variable
    $tq = 20; //Enter total number of questions here
    
    //first value can be anything as array initialise with 0
  /*  $ans = array('undef',
                 'D',
                'B',
                'A',
                'C',
                'D');*/
    for ($i=1; $i<= $tq; $i++){
        $query="SELECT answer FROM dbans where sno='$i'";

$ansdata=mysqli_fetch_assoc(mysqli_query($conn,$query));

    if(isset($_POST['answer-'.$i])){
        if($_POST['answer-'.$i] == $ansdata['answer'] ){
            $tm++;
        }    
    }
    }

?>
        <header><h1>Quiz</h1></header>
        <hr>
            <div id="result">
        <p>Result:
        <strong style="font-size:1.5em;" ><?= $tm; ?></strong>/<?= $tq; ?></p>
                </div>
    
    </body>
    
    

</html>

<?php
include('applicant/lbot.php');
?>