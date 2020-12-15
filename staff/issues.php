<!DOCTYPE html>
<html lang="en">

<?php include_once 'static/head.php'; 
include_once("../db.php");
$result = $pdo->query("SELECT * FROM issues");
?>

<body class="grey lighten-3">

  <!--Main Navigation-->
  <header>

<?php include_once 'static/navbar.php'; ?>
<?php include_once 'static/sidebar.php'; ?>
    
  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

      <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="#" >Issues</a>
            <span>/</span>
            <span></span>
          </h4>   

          <p><a href="addissue.php" class="btn">Add Issue</a></p>      
        </div>
      </div>
      <!-- Heading -->

      <!--Grid row-->
      <div class="row card wow fadeIn">
        <div class="col">
          <table class="table table-hover">
            <thead class="table-black">
              <tr>
                <th>Date time</th>
                <th>Status</th>
                <th>Client Name</th>
                <th>Description</th>
                <th>Option</th>
              </tr>
            </thead>
            <tbody>
              <?php   
                while($row = $result->fetch(PDO::FETCH_ASSOC)) {    
                  echo "<tr>";
                  echo "<td>".$row['timetsamp']."</td>";
                  echo "<td>".$row['status']."</td>";
                  echo "<td>".$row['client_name']."</td>";
                  echo "<td>".$row['issue_description']."</td>";
                  echo "<td> <a href='issue.php?id=".$row['issueid']."' class='btn btn-primary'>View</a></td>";
                 ?>
              <?php } ?>
            </tbody>
          </table>
        </div>
        
      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->
<?php include_once 'static/footer.php'; ?>

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>

</body>

</html>
