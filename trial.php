
<?php
include 'header.php'; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <center><img src="assets/img/carosal/1.png" alt="Los Angeles" style= "width:90%;"></center>
      </div>

      <div class="item">
        <center><img src="assets/img/carosal/2.png" alt="Chicago" style="width:90%;"></center>
      </div>
    
      <div class="item">
       <center> <img src="assets/img/carosal/3.png" alt="New york" style="width:90%;"></center>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>


        <!-- End Hero -->
        <!--? Popular Items Start -->
        <div class="popular-items pt-50">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                            <div class="popular-img">
                                <img src="assets/img/gallery/l1.jpg" alt="">
                                <div class="img-cap">
                                    <span>Laptop Bags</span>
                                </div>
                                <div class="favorit-items">
                                 <a href="laptop.php" class="btn">Shop Now</a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="popular-img">
                            <img src="assets/img/gallery/c1.jpg" alt="">
                            <div class="img-cap">
                                <span>Clutches</span>
                            </div>
                            <div class="favorit-items">
                             <a href="clutches.php" class="btn">Shop Now</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="popular-img">
                        <img src="assets/img/gallery/g1.jpg" alt="">
                        <div class="img-cap">
                            <span>Gym Bags</span>
                        </div>
                        <div class="favorit-items">
                         <a href="gym.php" class="btn">Shop Now</a>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                <div class="popular-img">
                    <img src="assets/img/gallery/b1.jpg" alt="">
                    <div class="img-cap">
                        <span>Backpacks</span>
                    </div>
                    <div class="favorit-items">
                     <a href="backpack.php" class="btn">Shop Now</a>
                 </div>
             </div>
         </div>
     </div>
 </div>
</div>
</div>
<!-- Popular Items End -->

<!--? New Arrival Start -->
        <div class="new-arrival">
            <div class="container py-5">
                <!-- Section tittle -->
                <div class="row justify-content-center">
                    <div class=" col-lg-8 col-md-10">
                        <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="2s"
                            data-wow-delay=".2s">
                            <h2>Limited Edition</h2>
                        </div>
                    </div>
                </div>
                <div class="container py-5">
                            <div class="row mt-4">
                            <?php
                           include 'db_connect.php';
                            $query = "select * from all_details WHERE type='shop'";
                            $query_run=mysqli_query($conn,$query);
                            $check=mysqli_num_rows($query_run)>0;
                            if($check)
                            {
                                while($row=mysqli_fetch_assoc($query_run)){
                                    ?>
                                    <div class="col-md-4 mt-2">
                                        <div class="card"  style=" height: 50rem;" >
                                         <?php echo '<center><img src="data:image/jpg;base64,'.base64_encode( $row['img'] ).'"alt="books images" style="width:250px; height:300px;">';?>
                                         <div class="card-body d-flex flex-column">                                        
                                                        <h4 class="card-title"><?php echo $row['head'];?></h4>
                                                        <h5 5class="card-title"><?php echo $row['description'];?></h5>
                                                    <h5 class="card-title"><?php echo "Rs.".$row['price'];?></h5>
                                                            <h4>
                                                                <a class="brand-text " href="new_detail.php?id=<?php echo $row['id']?>" 
                                                                style="color:#f44242 ;align-content: flex-end;" >View Details</a>
                                                            </h4>                                          
                                          </div>
                                        </div>
                                    </div>  
                        
                            <?php 
                                }
                            }
                            else{
                                echo 'No results';
                            }
                            ?>
                          </div>
                    </div>
                <!-- </div> -->
                <!-- Button -->
                <div class="row justify-content-center">
                    <div class="room-btn">
                        <a href="shop.php" class="border-btn">Browse More</a>
                    </div>
                   
                    
                </div>
            </div>
        </div>
        <!--? New Arrival End -->

<!--? Services Area Start -->
<div class="categories-area section-padding40 gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="cat-icon">
                        <img src="assets/img/icon/services1.jpg" height="100" ,width="100">
                    </div>
                    <div class="cat-cap">
                        <h5>Fast & Free Delivery</h5>
                        <p>Free delivery on all orders</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="cat-icon">
                        <img src="assets/img/icon/services2.jpg" height="100" ,width="100">
                    </div>
                    <div class="cat-cap">
                        <h5>Fast & Free Delivery</h5>
                        <p>Free delivery on all orders</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="cat-icon">
                        <img src="assets/img/icon/services3.jpg" height="100" ,width="100">
                    </div>
                    <div class="cat-cap">
                        <h5>Fast & Free Delivery</h5>
                        <p>Free delivery on all orders</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="cat-icon">
                        <img src="assets/img/icon/services4.jpg" height="100" ,width="100">
                    </div>
                    <div class="cat-cap">
                        <h5>Fast & Free Delivery</h5>
                        <p>Free delivery on all orders</p>
                    </div>
                    <h5>
                     
                   
                
                </h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!--? Services Area End -->
</main>
<?php
    include 'footer.php';
?>
