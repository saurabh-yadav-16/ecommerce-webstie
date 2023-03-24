<?php

session_start();
include("server/connection.php");

if(!isset($_SESSION['logged_in'])){
    header("Location: login.php");
    exit();
}

if(isset($_GET['logout'])){
    session_destroy();
    header("Location: login.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">

<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/"; include($IPATH."header.html"); ?>

<body>
  <!--Navbar-->
  <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/"; include($IPATH."navbar.html"); ?>

  <!--Account-->
  <section class="my-5 py-5">
    <div class="row container mx-auto">
      <div class="text-center mt-3 pt-5 col-lg-6 col-12">
        <h3 class="font-weight-bold">Account Info</h3>
        <hr class="mx-auto" />
        <div class="account-info">
          <p>Name : <span><?php echo $_SESSION['user_name']; ?></span></p>
          <p>Email : <span><?php echo $_SESSION['user_email']; ?></span></p>
          <p><a href="" id="orders-btn">Your Orders</a></p>
          <p><a href="account.php?logout=1" id="logout-btn">Logout</a></p>
        </div>
      </div>
      <div class="col-lg-6 col-12">
        <form id="account-form" action="">
          <h3>Change Password</h3>
          <hr class="mx-auto" />
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="Password" id="account-password" placeholder="Password" required />
          </div>
          <div class="form-group">
            <label for="">Confirm Password</label>
            <input type="password" class="form-control" name="Confirm Password" id="account-password-confirm" placeholder="Password" required />
          </div>
          <div class="form-group">
            <input type="submit" value="Change Password" class="btn" id="change-pass-btn" />
          </div>
        </form>
      </div>
    </div>
  </section>

  <!--Orders-->
  <section class="orders container my-5 py-3">
    <div class="container mt-2">
      <h2 class="font-weight-bolde text-center">Your Orders</h2>
      <hr class="mx-auto">
    </div>
    <table class="mt-5 pt-5">
      <tr>
        <th>Product</th>
        <th>Date</th>
      </tr>
      <td>
        <div class="product-info">
          <img src="assets/imgs/shoe-01.jpg">
          <div>
            <p class="mt-3">White Shoes</p>
          </div>

        </div>
      </td>
      <td>
        <span>16-10-2022</span>
      </td>

      </tr>

    </table>

  </section>
  <!--footer-->
  <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/"; include($IPATH."footer.html"); ?>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>