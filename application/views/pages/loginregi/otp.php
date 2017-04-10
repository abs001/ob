	 <section>
        <div class="contact-us-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-7 contact-form1 wow fadeInLeft">
			<h3>Verify your OTP</h3>
				<form action="<?php echo  base_url();?>index.php/Login/verifyotp" method="post">
					<div class="form-group">
	                    		<label for="contact-name">OTP</label>
					<input type="text" name="otp" placeholder="Enter OTP" required="" autofocus="">
					</div>
					<input type="hidden" name="email" value="<?php echo $email;?>"> 
					<div id="alert"><?php if($this->session->flashdata('message')!=null){?>
											<div id="danger-alert" class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div> 
											<?php }?></div>
					<button type="submit" class="btn">Verify</button>
				</form>
				<span color="red">Click to <a href="<?php echo base_url();?>index.php/Login/resendotp">Resend OTP</a></span>
			</div>
		</div>
	</div>
</div>		
	</section>