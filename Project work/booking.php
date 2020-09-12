
<?php

include "connect.php";

?>

<?php
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone_num = $_POST['phone_num'];
        
        $from_city = $_POST['from_city'];
        $from_address = $_POST['from_address'];
        $to_city = $_POST['to_city'];
        
        $to_address = $_POST['to_address'];
        // $shipping_date = date('d-m-y');
        $shipping_date = $_POST['shipping_date'];
        $shift_type = $_POST['shift_type'];
        $shift_items = $_POST['shift_items'];
        
        
        $query = "insert into customer (name,email,phone_num,from_city,from_address,to_city,to_address,shipping_date,shift_type,shift_items) values ('{$name}','{$email}','{$phone_num}','{$from_city}','{$from_address}','{$to_city}','{$to_address}','{$shipping_date}','{$shift_type}','{$shift_items}')";
        $create_post = mysqli_query($connection,$query);
        // confirm($create_post);
    }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="booking-style.css" />
    <script>
      $(document).ready(function () {
        $(".check-form").hide();
        $(".check").css("background", "none");

        $(".check").click(function () {
          $(".book-form").hide();
          $(".check-form").show();
          $(".Book").css("background", "none");
          $(".check").css("background", "#fff");
        });

        $(".Book").click(function () {
          $(".book-form").show();
          $(".check-form").hide();
          $(".Book").css("background", "#fff");
          $(".check").css("background", "none");
        });
      });
    </script>
  </head>
  <body>
    <nav>
      <div class="logo">
        <h3>Packers And Movers</h3>
      </div>

      <ul class="nav-links">
        <li><a href="index.html">Home</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="booking.html">Booking</a></li>
        <li><a href="about.html">About</a></li>
        <!-- <li><a href="#">FAQ</a></li> -->
      </ul>

      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </nav>

    <div class="container">
      <div class="Book">Book</div>
      <div class="check">Check Status</div>
      <div class="book-form">
        <form action="" method="post">
        <label for="">Name:</label>
        <input type="text" class="input" name="name" /><br />

        <label for="">Email:</label>
        <input type="text" class="input" name="email" /><br />

        <label for="">Mobile No.</label>
        <input type="tel" class="input" name="phone_num" /><br />

        <label for="">Starting city</label>
        <input type="text" class="input" placeholder="Mumbai/Pune" name="from_city" /><br />

        <label for="">From where do you want to Pack?</label>
        <input type="text" class="input" placeholder="Entire address" name="from_address" /><br />

        <label for="">Destination city</label>
        <input type="text" class="input" placeholder="Mumbai/Pune" name="to_city" /><br />

        <label for="">Where are you shifting to?</label>
        <input type="text" class="input" placeholder="Entire address" name="to_address" /><br />

        <label>Date</label>
        <input type="date" class="input" name="shipping_date" /><br />

        <label>What do you want to shift?</label>
        <input type="text" class="input" placeholder="Office/Home/etc" name="shift_type" /><br />

        <label>Please mention all the items</label>
        <textarea
          class="textarea"
          name="shift_items"
          cols="30"
          rows="5"
          placeholder="major items"
        ></textarea
        ><br />

        <input type="submit" value="Submit" class="btn" name="submit" />
      </div>
      </form>
      <form action="Receipt.php" method="post">
      <div class="check-form">
        <label for="check">Enter your phone number</label>
        <input type="text" class="input" name="search_num" /><br />
        <input type="submit" value="Check" class="btn" name="Check" />

      </div>
      </form>
    </div>
    <script src="main.js"></script>
  </body>
</html>
