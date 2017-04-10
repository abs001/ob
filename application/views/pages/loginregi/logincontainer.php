        <div class="contact-us-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-7 contact-form1 wow fadeInLeft">
	                    <form role="form" action="<?php echo base_url();?>index.php/Login/sigin" method="post">
	                    	<div class="form-group">
	                    		<label for="contact-name">Email</label>
	                        	<input type="text" name="email" placeholder="Enter your Email..." class="contact-name" id="contact-name" autofocus="">
	                        </div>
	                    	<div class="form-group">
	                    		<label for="contact-password">Password</label>
	                        	<input type="password" name="password" class="contact-name" id="contact-name" placeholder="Your password">
	                        </div>
	                        <button type="submit" class="btn">Login</button>
	                    </form>
	                    <div class="col-sm-11" id="alert">
		                    <?php if($this->session->flashdata('message')!=null){?>
							<div id="danger-alert" class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div> 
							<?php }?>
	                    </div>
	                    <div class="col-sm-6">
	                    <a href="<?php echo base_url();?>index.php/Login/forgotpassword" >Forgot Password? Click to recover</a>
<h6> Not a Member Yet? <a href="<?php echo base_url()?>index.php/Login/newuser">Sign Up Now</a> </h6>
</div>
	                </div>
	                <div class="col-sm-5 contact-address wow fadeInUp">
	                	<img src="<?php echo base_url();?>assets/img/login.png" class="img-responsive">
	                </div>
	            </div>
	        </div>
        </div>