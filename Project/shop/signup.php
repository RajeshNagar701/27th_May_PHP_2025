<?php
include_once('header.php');
?>
    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading about-page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Signup Us</h2>
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
                        <h2>Signup Here</h2>
                    </div>
                    <form id="contact" action="" method="post">
                        <div class="row">
						  <div class="col-lg-12 mb-5">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="Your name" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-12 mb-5">
                            <fieldset>
                              <input name="email" type="text" id="email" placeholder="Your email" required="">
                            </fieldset>
                          </div>
                           <div class="col-lg-12 mb-5">
                            <fieldset>
                              <input name="password" type="password" id="password" placeholder="Your password" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" name="submit" >Signup</button>
							  <br><br>
							  <a href="login.php">If you already Registered then Login Here</a> 
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