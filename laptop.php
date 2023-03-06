<?php
 include 'header.php';
?>
    <main>
        <!-- breadcrumb Start-->
        <div class="page-notification">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="trial.php ">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Laptop Bags</a></li> 
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- listing Area Start -->
        <div class="category-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="section-tittle mb-50">
                            <h2>Shop with us</h2>
                            <p>Laptop Bags</p>  
                        </div>
                    </div>
                </div>
                
                    <div class="container py-5">
                            <div class="row mt-4">
                            <?php
                            include 'db_connect.php';

                            $query = "select * from all_details WHERE type='laptop'";
                            $query_run=mysqli_query($conn,$query);
                            $check_clutches=mysqli_num_rows($query_run)>0;
                            if($check_clutches)
                            {
                                while($row=mysqli_fetch_assoc($query_run)){
                                    ?>
                                    <div class="col-md-4 mt-2">
                                        <div class="card"  style=" height: 44rem;" >
                                            
                                         <?php echo '<center><img src="data:image/jpg;base64,'.base64_encode( $row['img'] ).'"alt="laptop images" style="width:260px; height:230px;">';?>
                                         <div class="card-body" align-self="normal">
                                        
                                            <h2 class="card-title"><?php echo $row['head'];?></h2>
                                            <p class="card-text">
                                                <?php echo $row['description'];?>
                                            </p>
                                        <h4 class="card-title"><?php echo "Rs.".$row['price'];?></h4>
<div class="card-action right-align">
<a class="brand-text" href="laptop_details.php?id=<?php echo $row['id']?>"  style="color:#f44242" >View Details</a>
</div>
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


                    </div>
</div>
</div>
</div>
<!-- listing-area Area End -->
<?php
 include 'footer.php';
?>