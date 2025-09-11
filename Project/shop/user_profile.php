<?php
include_once('header.php');
?>
    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading about-page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Profile</h2>
                        <span>HI... <?php echo $_SESSION['u_name'];?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image">
                        <img src="assets/images/customers/<?php echo $fetch->image?>" width="100%" height="250px" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <h4>Account ID: <?php echo $fetch->id?> </h4>
                        <span>Name : <?php echo $fetch->name?></span>
                        <span>Email : <?php echo $fetch->email?></span>
                        <span>Mobile : <?php echo $fetch->mobile?></span>
                        <span>Gender : <?php echo $fetch->gender?></span>
                        <span>Lag : <?php echo $fetch->lag?></span>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** About Area Ends ***** -->


    <?php
	include_once('footer.php');
	?>
    