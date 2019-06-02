<?php
include('redir.php');
include("adtop.php");
include('../dbconn.php');
?>

<div class="container mt-4 mb-4">
    <div class="row ">
        <div class="col-md-6 mx-auto">
            <div class="card card-body mt-4 bg-dark">
                <span class="card-title text-center">
                    <h1 class="heading dispaly-4 pb-3 text-light">Activities  </h1>
                </span>

                <div class="card-action bg-light pl-4 pb-2 pt-2">
                    <a class="noul" href="adduser.php">Add a User</a>
                    <a class="float-right pr-4" href="adduser.php">
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
                <div class="card-action bg-light pl-4 pb-2 pt-2 mt-2 ">
                    <a class="noul" href="deluser.php">Delete a user</a>
                    <a class="float-right pr-4" href="deluser.php">
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
                <div class="card-action bg-light pl-4 pb-2 pt-2 mt-2 ">
                    <a class="noul" href="addordelque.php">Add or Delete a Question</a>
                    <a class="float-right pr-4" href="deluser.php">
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>


<?php
include('adfoot.php');
?>




