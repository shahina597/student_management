<?php
require_once 'admin_dbcon.php';
session_start();
if(!isset($_SESSION['user_login'])){
	header('Location:admin_login_index.php'); 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style link here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style link here -->
    <title>FCTISOFTWARE DEVELOPMENT COMPANY LIMITED</title>
</head>
<body>
    <div class="container-fluid m-0 p-0">
        <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-3 col-xl-2 col-xxl-2">
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true"><a class="text-light" href="admin_index.php?page=admin_dashboard">Dashboard</a></li>
                    <li class="list-group-item"><a class="d-block nav-link" style="background:red;" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Admission</a>
                        <ul class="collapse" id="collapseExample">
                           <li><a class="d-block nav-link" href="admin_index.php?page=today_admission">Today Admission</a></li>
                           <li><a class="d-block nav-link" href="">Today Admission</a></li>
                           <li><a class="d-block nav-link" href="">Today Admission</a></li>
                           <li><a class="d-block nav-link" href="">Today Admission</a></li>
                        </ul>

                
                </li>
                    <li class="list-group-item"><a href="admin_index.php?page=teacher_list">Teacher</a></li>
                    <li class="list-group-item"><a href="admin_index.php?page=student_list">Student</a></li>
                    <li class="list-group-item"><a href="logout">Logout</a></li>
                    <li class="list-group-item"><a class="d-block nav-link" style="background:red;" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Admission</a>
                        <ul class="collapse" id="collapseExample">
                           <li><a class="d-block nav-link" href="">Today Admission</a></li>
                           <li><a class="d-block nav-link" href="">Today Admission</a></li>
                           <li><a class="d-block nav-link" href="">Today Admission</a></li>
                           <li><a class="d-block nav-link" href="">Today Admission</a></li>
                        </ul>

                
                </li>
                </ul>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-9 col-xl-10 col-xxl-10">
        <?php
                  if(isset($_GET['page'])){
                      $page=$_GET['page'].'.php';
                  } else {
                   $page='admin_dashboard.php';
                  }
                  if(file_exists($page)){
                      require $page;
                  } else {
                      require '404.php';
                  }
        ?>
        </div>

        </div>
       
    </div>

<script>

var collapseElementList = [].slice.call(document.querySelectorAll('.collapse'))
var collapseList = collapseElementList.map(function (collapseEl) {
  return new bootstrap.Collapse(collapseEl)
})
var myCollapse = document.getElementById('myCollapse')
var bsCollapse = new bootstrap.Collapse(myCollapse, {
 
})

</script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>