<?php

session_start();

if (!empty($_SESSION['cart'])){

  //let user in

  //send user to homr page
}else{
  header('location:index.php');
}


?>



<?php include("layouts/header.php");?>

    <!--Checkout-->
    <!--Register-->
    <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
            <h2 class="form-weight-bold">Checkout</h2>
            <hr class="mx-auto">
        </div>
        <div class="mx-auto container">
            <form id="checkout-form" method="POST" action="server/place_order.php">
                <p class="text-center" style="color: red;">
                    <?php if(isset($_GET['message'])){ echo $_GET['message'];} ?>
                    <?php if(isset($_GET['message'])) {?>
                        <a href="login.php" class="btn btn-primary">Login</a>

                        <?php }?>
                </p>
                <div class="form-group checkout-small-element">
                    <label>Name</label>
                    <input type="text" class="form-control" id="checkout-name" name="name" placeholder="Enter your Name" required/>
                </div>
                <div class="form-group checkout-small-element">
                    <label>Email</label>
                    <input type="text" class="form-control" id="checkout-email" name="email" placeholder="Enter your Email" required/>
                </div>
                <div class="form-group checkout-small-element">
                    <label>Phone</label>
                    <input type="tel" class="form-control" id="checkout-phone" name="phone" placeholder="Phone Number" required/>
                </div>
                <div class="form-group checkout-small-element">
                    <label>City</label>
                    <input type="text" class="form-control" id="checkout-city" name="city" placeholder="Enter your City" required/>
                </div>
                <div class="form-group checkout-large-element">
                    <label>Address</label>
                    <input type="text" class="form-control" id="checkout-address" name="address" placeholder="Enter your address" required/>
                </div>
                <div class="form-group checkout-btn-container">
                  <p>Total Amount: $<?php echo $_SESSION['total']; ?></p>
                    <input type="submit" name="place_order" class="btn" id="checkout-btn" value="Place Order"/>
                
                
            </form>
        </div>
      </section>




      <?php include("layouts/footer.php");?>