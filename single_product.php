<?php
include('server/connection.php');

if(isset($_GET['product_id'])){
  $product_id= $_GET['product_id'];
    $stmt = $conn->prepare("SELECT * FROM products WHERE product_id=?");
    $stmt->bind_param("i",$product_id);
    $stmt->execute();

  $product = $stmt->get_result();

}




else{
  header('location: index.php');
}

?>



<?php include("layouts/header.php");?>

      

      <!--Single Product-->
      <section class="container single-product my-5 pt-5">
        <div class="row mt-5">
          <?php while($row = $product->fetch_assoc()){ ?>
          

            <div class="col-lg-5 col-md-6 col-sm-12">
                <img class="img-fluid w-100 pb-1" src="assets/imgs/<?php echo $row['product_image']; ?>" id="mainImg"/>
                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="assets/imgs/<?php echo $row['product_image']; ?>" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="assets/imgs/<?php echo $row['product_image2']; ?>" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="assets/imgs/<?php echo $row['product_image3']; ?>" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="assets/imgs/<?php echo $row['product_image4']; ?>" width="100%" class="small-img">
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h6>Men Shoes</h6>
                <h3 class="py-4"><?php echo $row['product_name']; ?></h3>
                <h2>$<?php echo $row['product_price']; ?></h2>

                <form method="POST" action="cart.php">  

                  <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>"/>
                  <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>"/>
                  <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>"/>
                  <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>"/>


                    <input type="number" name="product_quantity" value="1"/>
                    <button class="buy-btn" type="submit" name="add_to_cart">Add To Cart</button>
                </form>
                
                <h4 class="mt-5 mb-5">Product Details</h4>
                <span><?php echo $row['product_description']; ?></span>
            </div>
          
            <?php } ?>
            
        </div>
      </section>

      <!--Related Products-->
      <!--Featured-->
    <section id="related-products" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
          <h3>Related Products</h3>
          <hr class="mx-auto">

        </div>
        <div class="row mx-auto container-fluid">
  <!--Featured 1-->        
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/featured1.jpg"/>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            
          </div>
            <h5 class="p-name">Sports Shoes</h5>
            <h4 class="p-price">$199.9</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
  <!--Featured 2-->
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/featured2.jpg"/>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            
            
          </div>
            <h5 class="p-name">School Bag</h5>
            <h4 class="p-price">$19.99</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
  <!--Featured 3-->
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/featured3.jpg"/>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            
          </div>
            <h5 class="p-name">Watch</h5>
            <h4 class="p-price">$59.5</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
  
  <!--Featured 4-->        
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/featured4.jpg"/>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            
          </div>
            <h5 class="p-name">Jeans</h5>
            <h4 class="p-price">$99</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
        </div>
      </section>










      <!--Footer-->
    <footer class="mt-5 py-5">
        <div class="row container mx-auto pt-5">
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <img class="logo" src="assets/imgs/logo.jpg">
            <p class="pt-3">We provide best items in the industry</p>
          </div>
          <div class="footer-one col-lg-3 col-md-6 col-sm-12"> 
            <h5 class="pb2">Featured</h5>
            <ul class="text-uppercase">
              <li><a href="#">Men</a></li>
              <li><a href="#">Women</a></li>
              <li><a href="#">Boys</a></li>
              <li><a href="#">Girls</a></li>
              <li><a href="#">Clothes</a></li>
              <li><a href="#">Featured</a></li>
            </ul>
          </div>
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-2">Contact us</h5>
            <div>
              <h6 class="text-uppercase">Address</h6>
              <p> 1234 Street Name, City</p>
              <div>
                <h6 class="text-uppercase">Phone</h6>
                <p>1234567890</p>
              </div>
              <div>
                <h6 class="text-uppercase">Email</h6>
                <p>123abc@gmail.com</p>
              </div>
            </div>
        </div>
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
          <h5 class="pb-2">Instagram</h5>
          <div class="row">
            <img src="assets/imgs/footer1.jpg" class="img-fluid w-25 h-100 m-2"/>
            <img src="assets/imgs/footer2.jpg" class="img-fluid w-25 h-100 m-2"/>
            <img src="assets/imgs/footer3.jpg" class="img-fluid w-25 h-100 m-2"/>
            <img src="assets/imgs/footer4.jpg" class="img-fluid w-25 h-100 m-2"/>
            <img src="assets/imgs/footer5.jpg" class="img-fluid w-25 h-100 m-2"/>
          </div>
        </div> 
        <div class="copyright mt-5">
          <div class="row container mx-auto">
            <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
              <img src="assets/imgs/payment.jpg"/>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-12 mb-4 text-nowrap mb-3">
              <p>eCommerce @2025 All right reserved</p>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
  
            </div>
          </div>
        </div>
      </footer>




    <!-- JavaScript Bundle with Popper -->
   
    <script>
     var mainImg= document.getElementById("mainImg");
     var smallImg=document.getElementsByClassName("small-img");

     for(let i=0; i<4; i++){
      smallImg[i].onclick= function(){
      mainImg.src=smallImg[i].src;
     }
    }
     
     
    </script>

<?php include("layouts/footer.php");?>
  