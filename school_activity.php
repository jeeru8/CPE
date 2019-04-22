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

                    $sql = "SELECT * FROM school_activity";
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