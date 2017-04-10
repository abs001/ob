<!-- forgot form -->
	 <section>
        <div class="contact-us-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-7 contact-form1 wow fadeInLeft">
			<h3>Forgot Password</h3>
				<form action="<?php echo base_url();?>index.php/login/forgot" method="post">
					<div class="form-group">
	                    		<label for="contact-name">Email</label>
					<input type="text" name="email" placeholder="Your Email" required=""> 
					</div>
						<div id="alert">
						<?php if($this->session->flashdata('message')!=null){?>
												<div id="danger-alert" class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div> 
												<?php }?>
						</div>
					<button type="submit" class="btn">Submit</button>
				</form>
			</div>
		</div>
		</div>
		</div>
	</section>
	
	<!-- //Forgot form -->