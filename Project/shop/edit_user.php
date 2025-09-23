<?php
include_once('header.php');
?>
    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading about-page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Edit Profile</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Contact Area Starts ***** -->
    <div class="contact-us">
        <div class="container">
            <div class="row">
               
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Edit Profile Here</h2>
                    </div>
                    <form  action="" method="post" enctype="multipart/form-data">
                        <div class="row">
						  <div class="col-lg-12 mb-5">
                            <fieldset>
                              <input name="name" value="<?php echo $fetch->name;?>" type="text" id="name" placeholder="Your name" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-12 mb-5">
                            <fieldset>
                              <input name="email" value="<?php echo $fetch->email;?>" type="text" id="email" placeholder="Your email" required="">
                            </fieldset>
                          </div>
                          
						   <div class="col-lg-12 mb-5">
                            <fieldset>
                              <input name="mobile" value="<?php echo $fetch->mobile;?>" type="number" id="password" placeholder="Your mobile" required="">
                            </fieldset>
                          </div>
						  <div class="col-lg-12 mb-5">
                            <fieldset>
							  Select Gender: <br>	
							  <?php
							  $gender=$fetch->gender;
							  ?>
                              Male : <input name="gender" type="radio" value="Male" <?php if($gender=="Male"){ echo "checked";}?>> 
							  Female : <input name="gender" type="radio" value="Female" <?php if($gender=="Female"){ echo "checked";}?>> 
                            </fieldset>
                          </div>
						  <div class="col-lg-12 mb-5">
                            <fieldset>
							  <?php
							  $lag=$fetch->lag;
							  $lag_arr=explode(",",$lag); // string to arr
							  ?>
							  Select Launguges: <br>	
                              Hindi : <input name="lag[]" type="checkbox" value="Hindi" <?php
							  if(in_array("Hindi",$lag_arr)) { echo "checked";}?>> 
							  English : <input name="lag[]" type="checkbox" value="English" <?php
							  if(in_array("English",$lag_arr)) { echo "checked";}?>> 
							  Gujarati : <input name="lag[]" type="checkbox" value="Gujarati" <?php
							  if(in_array("Gujarati",$lag_arr)) { echo "checked";}?>> 
                            </fieldset>
                          </div>
						  <div class="col-lg-12 mb-5">
                            <fieldset>
                              <input name="image" type="file" id="password">
							  <img src="assets/images/customers/<?php echo $fetch->image?>" style="width:100px" alt="">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" name="submit" >Save</button>
							</fieldset>
						  </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Contact Area Ends ***** -->
	
    <?php
	include_once('footer.php');
	?>