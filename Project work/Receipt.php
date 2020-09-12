<?php include "connect.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Packers And Movers</title>
    <link rel="stylesheet" href="Receipt-style.css" />
  </head>

  <body>
    <nav>
      <div class="logo">
        <h3>Packers And Movers</h3>
      </div>

      <ul class="nav-links">
        <li><a href="index.html">Home</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="booking.php">Booking</a></li>
        <li><a href="about.html">About</a></li>
        <!-- <li><a href="#">FAQ</a></li> -->
      </ul>

      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </nav>

      <div class="receipt">

        <div class="headings">
          <h3>Name</h3>
          <h3>Starting Address</h3>
          <h3>Destination Address</h3>
          <h3>Shipping Date</h3>
          <h3>Status</h3>
        </div>
        <div class="values">
        <?php
                if(isset($_POST['Check'])) {
                  $search=$_POST['search_num'];
                  $query = "select * from customer where phone_num='{$search}'";
                  
                $select_customer = mysqli_query($connection,$query);

                while($row = mysqli_fetch_assoc($select_customer))
                {
                  $name = $row['name'];
                  $from_address = $row['from_address'];
                  $to_address = $row['to_address'];
                  $shipping_date = $row['shipping_date'];
                  $status = $row['status'];

                  echo "<h3>{$name}</h3><br>";
                  echo "<h3>{$from_address}</h3><br>";
                  echo "<h3>{$to_address}</h3><br>";
                  echo "<h3>{$shipping_date}</h3><br>";
                  echo "<h3>{$status}</h3><br>";
                  }
                }
                  ?>
        </div>
    </div>

    <div class="border-bottom"></div>

    
    <script src="main.js"></script>
  </body>
</html>
