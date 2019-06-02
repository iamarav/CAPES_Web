<?php
//include("applicant/ltop.php");
include("../dbconn.php");
include("redirect.php");
/*if ($_SESSION['testcomplete'] == 'yes') {
  header("Location:dash.php");    
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Serif" rel="stylesheet">
    <title>CAPES - Quiz</title>
</head>
<body onload="f1()">
<div class="bg-primary pt-2 pb-2">
<h6 >
Aptihub - Quiz </h6>    <?php echo " "."Candidate Name : ". $_SESSION['uname']." ";?>
</div>
<p id="timer" class="text-right" style="Position:fixed"></p>
<div class="container bg-light mt-4 pt-2 pl-2">
<form action="quiz.php" method="POST">

<ol type="1" >

<?php
$len=20;
for($i=1;$i<=$len;$i++){

    $quequery="SELECT * FROM dbans WHERE sno='$i'";
    $r=mysqli_query($conn,$quequery);
$quedata=mysqli_fetch_assoc($r);
?>
<div class="mt-4" >
            <li id="<?echo $quedata['sno'];?>"><?php echo $quedata['question'];?></li>
            <input type="radio" name="answer-<?php echo $quedata['sno']; ?>" value="<?php echo $quedata['opt1']; ?>" ><?php echo $quedata['opt1']; ?><br>
            <input type="radio" name="answer-<?php echo $quedata['sno']; ?>" value="<?php echo $quedata['opt2']; ?>" ><?php echo $quedata['opt2']; ?><br>
            <input type="radio" name="answer-<?php echo $quedata['sno']; ?>" value="<?php echo $quedata['opt3'];?>" ><?php echo $quedata['opt3'];?><br>
            <input type="radio" name="answer-<?php echo $quedata['sno']; ?>" value="<?php echo $quedata['opt4']; ?>" ><?php echo $quedata['opt4']; ?><br>
        </div>
        <?php
        
}

?>

        <input name="btn" id="btn1" value="Submit" class="btn btn-outline-success btn-block mt-4" type="submit">
        </ol>
        
</form>
</div>

<script>
var $endtime=new Date().getTime()+1200000;


var x=setInterval(function(){

var $starttime=new Date().getTime();
var $diff=$endtime - $starttime;

var $minutes = Math.floor($diff/(1000*60));
var $sec=Math.floor($diff%(1000*60)/1000)

document.getElementById('timer').innerHTML= $minutes + ':' + $sec;
if($diff<0)
{
    clearInterval(x);
    document.getElementById('timer').innerHTML="Times Up";
}
},1000);



</script>
<script language ="javascript" >
        var tmp;
        function f1() {
            tmp = setTimeout("callitrept()", 1200000);
        }
        function callitrept() {
            document.getElementById("btn1").click();
        }

        window.history.forward(1);
    </script>

    <script type="text/javascript">
   function disableRightClick(e)

{

  var message = "Right click disabled";



  if(!document.rightClickDisabled) // initialize

  {

    if(document.layers) 

    {

      document.captureEvents(Event.MOUSEDOWN);

      document.onmousedown = disableRightClick;

    }

    else document.oncontextmenu = disableRightClick;

    return document.rightClickDisabled = true;

  }

  if(document.layers || (document.getElementById && !document.all))

  {

    if (e.which==2||e.which==3)

    {

      alert(message);

      return false;

    }

  }

  else

  {

    alert(message);

    return false;

  }

}

disableRightClick();
</script>
<script type='text/javascript'>
  document.onkeydown = function (e) {
    e.preventDefault();
    alert("do not use keyboard")
  }


</script>
<?php
include('applicant/lbot.php');
?>