
<?php include '_css.php'; ?>
<style>
  body {
    background-color: 
                  <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "cpe";

                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }

                  $sql = "SELECT * FROM color";
                  $result = mysqli_query($conn, $sql);

                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                          echo $row["color"];
                      }
                  } else {
                      echo "0 results";
                  }

                  mysqli_close($conn);
                  ?>;
       }
</style>

<body>

  <?php include 'navbar.php'; ?>

  
<hr>
<hr>
<hr>
  <section>
    <div class="container">
      
      <h2 class="display-4"><center>ANNOUNCEMENT</center></h2>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                <center><h4>SCHOOL ACTIVITY</h4></center>
              </div>
              <div class="card-body">
                <p class="card-text alert alert-success">
                   <?php include 'school_activity.php'; ?>
                </p>

              </div>
            </div>
          </div>                
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                <center><h4>OFFICE ADVISORY</h4></center>
              </div>
              <div class="card-body">
                <p class="card-text alert alert-success">
                    <?php include 'office_advisory.php'; ?>
              </p>
              </div>
            </div>
          </div>                
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                <center><h4>NOTICE OF MEETING</h4></center>
              </div>
              <div class="card-body">
                <p class="card-text alert alert-success">
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "cpe";

                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $sql = "SELECT * FROM notice_meeting";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $show = $row["announcement"];
                            $date = $row["date_posted"];
                        }
                    } else {
                        echo "0 results";
                    }

                    mysqli_close($conn);
                    ?>

                    <?php echo $show;?>
                    <br>
                     <p class="alert alert-warning"><b>Date Posted:</b><?php echo $date;?></p>
              </p>
              </div>
            </div>
          </div>                    
        </div><br/><br/>
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                <center><h4>SPECIAL ORDER</h4></center>
              </div>
              <div class="card-body">
                <p class="card-text alert alert-success">
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "cpe";

                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $sql = "SELECT * FROM special_order";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $show = $row["announcement"];
                            $date = $row["date_posted"];
                        }
                    } else {
                        echo "0 results";
                    }

                    mysqli_close($conn);
                    ?>

                    <?php echo $show;?>
                    <br>
                     <p class="alert alert-warning"><b>Date Posted:</b><?php echo $date;?></p>
              </p>
              </div>
            </div>
          </div>                
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                <center><h4>OFFICE MEMORANDUM</h4></center>
              </div>
              <div class="card-body">
                <p class="card-text alert alert-success">
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "cpe";

                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $sql = "SELECT * FROM office_memorandum";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $show = $row["announcement"];
                            $date = $row["date_posted"];
                        }
                    } else {
                        echo "0 results";
                    }

                    mysqli_close($conn);
                    ?>

                    <?php echo $show;?>
                    <br>
                     <p class="alert alert-warning"><b>Date Posted:</b><?php echo $date;?></p>
              </p>
              </div>
            </div>
          </div>                
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                <center><h4>OTHERS</h4></center>
              </div>
              <div class="card-body">
                <p class="card-text alert alert-success">
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "cpe";

                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $sql = "SELECT * FROM others";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            $show = $row["announcement"];
                            $date = $row["date_posted"];
                        }
                    } else {
                        echo "0 results";
                    }

                    mysqli_close($conn);
                    ?>

                    <?php echo $show;?>
                    <br>
                     <p class="alert alert-warning"><b>Date Posted:</b><?php echo $date;?></p>
              </p>
              </div>
            </div>
          </div>                    
        </div>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>

  <?php include '_js.php'; ?>

</body>

</html>
