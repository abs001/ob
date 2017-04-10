<!-- sign up form -->
	 <section>
         <div class="contact-us-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-7 contact-form1 wow fadeInLeft">
				<h3>Sign Up</h3>
				<form action="<?php echo  base_url();?>index.php/login/registration" method="post">
					<div id="alert"><?php if($this->session->flashdata('message')!=null){?>
											<div id="danger-alert" class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div> 
											<?php }?></div>
					<div class="error"><?php echo form_error('username'); ?></div>
					<div class="form-group">
                    		<label for="contact-name">Your Name</label>
							<input type="text" name="username" placeholder="Username" required="" autofocus=""> 
					</div>
					<div class="error"><?php echo form_error('mobile'); ?></div>
					<div class="form-group">
                    		<label for="contact-name">Mobile</label>
							<input type="text" name="mobile" placeholder="Mobile" required="" maxlength="10">
					</div>		
					<div class="error"><?php echo form_error('email'); ?></div>
					<div class="form-group">
                    		<label for="contact-name">Email</label>
					<input type="text" name="email" placeholder="Your Email" required=""> 
					</div>
					<div class="error"><?php echo form_error('password'); ?></div>
					<div class="form-group">
                    		<label for="contact-name">Password</label>
					<input type="password" name="password" placeholder="Password" required=""> 
					</div>
					<div class="error"><?php echo form_error('cpassword'); ?></div>
					<div class="form-group">
                    		<label for="contact-name">Confirm Password</label>
					<input type="password" name="cpassword" placeholder="Confirm Password" required="">
					</div>
					
						<span class="agree-checkbox">
							<label class="checkbox"><input type="checkbox" name="checkbox" required="">I agree to your <a class="w3layouts-t" href="<?php echo base_url();?>index.php/Help/terms" target="_blank">Terms of Use</a> and <a class="w3layouts-t" href="<?php echo base_url();?>index.php/Help/privacy" target="_blank">Privacy Policy</a></label>
						</span>
					<button type="submit" class="btn">Register</button>
				</form>
				</div>
				<div class="col-sm-5 contact-address wow fadeInUp">
				<br>
	             	<img src="<?php echo base_url();?>assets/img/register.png" class="img-responsive">
	            </div>
			</div>
		</div>
	</div>
	</section>
	<!-- //sign up form -->