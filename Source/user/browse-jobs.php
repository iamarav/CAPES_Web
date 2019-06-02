<?php
    require_once("ext/constants.php");
    
    require_once("../dbconn.php");

  include('redirect.php');
    if(isset($_GET['page'])){
        $page = $_GET['page'];

    }
    else{
        $page = 1;
    }
        $ul= $page*5;
        $ll= $page*5-5;

    if(isset($_GET['location'])){
        
        $location = $_GET['location']; //assigning category
        
        if($location == ""){
            echo 'Error. No Location Defined.';
            exit;
        }
    }
    else{
        $location = "IN";
    }


    if(isset($_GET['cat'])){
        
        $category = $_GET['cat']; //assigning category
        
        if($category == ""){
            echo 'category empty. (1)'; //Empty category
            exit;
        }

        $query = "SELECT * from jobs WHERE category='".$category."' && country='".$location."' && expired ='0' ORDER by id DESC LIMIT $ll , $ul ";
        $row = mysqli_query($conn, $query);
        
        //    mysqli_fetch_array
        
    }
    else{
      $category = "engineering";
      // echo 'Error Occured. (3)'; //no category variable defined.
        // exit;
        $query = "SELECT * from jobs WHERE expired ='0' ORDER by id DESC LIMIT $ll , $ul ";
        $row = mysqli_query($conn, $query);
        
    }

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Browse Jobs - <?= $projtitle; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/1-col-portfolio.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


  </head>

  <body>

    <!-- Navigation -->
<?php
    require_once('elements/navbar_1.php');  
    ?>

    <!-- Page Content -->
    <div class="container">
    <br> <br> <br>
        <form action="" method="get" class="input-group">
        <select id="cat" name="cat" class="form-control">
            <option value="engineering" >Engineering</option>
            <option value="marketing">Marketing</option>
            <option value="management">Management/MBA</option>
            
        </select>
        <select id="location" name="location" class="form-control">
            <option value="IN" >India</option>
            <option value="US">United States</option>
            <option value="UK">UK</option>
            <option value="UAE">UAE</option>
            
        </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" class="input-group-btn form-control btn-primary">
        </form>
            
      <!-- Page Heading -->
      <h1 class="my-4">Browse Jobs
        <small style="  text-transform: capitalize;"> for <?= $category ?> in <?= $location ?></small>
      </h1>

        <hr>
      <!-- Job-->
      <div class="row">
<!--
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
          </a>
        </div>
-->
        <?php
//        if(mysqli_fetch_array($row) == 0){
//            echo 'No Jobs found for category: <b style="text-transform: capitalize;"> '.$category.'</b>';
//        } 
//            else{
//        if($row == 0){
//           echo 'No Jobs found for category: <b style="text-transform: capitalize;"> '.$category.'</b>';
//        } 
    
          while($data = mysqli_fetch_array($row)){
//          $data = mysqli_fetch_array($row);
                  
      ?>
        <div class="col-md-5">
          <h3><?= $data['title']; ?></h3>
        <i>Posted by: <?= $data['posted_by']; ?> on <?= $data['posted_on']; ?></i>
            <br>
            <i class="fas fa-briefcase" style="color:brown" ></i> <b><?= $data['company'] ?></b>
            <br>
            <i class="fas fa-map-marker-alt" style="color:green" ></i>&nbsp; <?= $data['locat'] ?>
            
            
          <p> <i class="fas fa-info-circle" style="color:blue" ></i> <?= $data['aboutc'] ?></p>
          
          <a class="btn btn-primary" href="apply-job.php?id=<?= $data['id'] ?>">Apply Now</a>
        </div>
      </div>
        <hr>
          <div class="row">

          <?php
          }
            //}
                mysqli_close($conn);

          ?>
 
      </div>
      <!-- /.row -->


      

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="./?cat=<?= $category ?>&location=<?= $location ?>&page=1">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="./?cat=<?= $category ?>&location=<?= $location ?>&page=2">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="./?cat=<?= $category ?>&location=<?= $location ?>&page=3">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white"><?= $copyrighttxt; ?></p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
