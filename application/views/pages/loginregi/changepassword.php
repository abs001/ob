 <?php if(isset($_SESSION['email'])){?>
 <section>
        <div class="contact-us-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-7 contact-form1 wow fadeInLeft">
			<?php $result=$this->db->get_where('register',array('email'=>$email))->result_array();
			foreach ($result as $query){
			?>
			<h3>Change Password</h3>
				<form action="<?php echo  base_url();?>index.php/login/changepassword/<?php echo $query['reg_id'];?>" method="post">
					<div class="form-group">
	                    		<label for="contact-name">New Password</label>
					<input type="password" name="password" placeholder="New Password" required="">
					</div>
					<div class="form-group">
	                    		<label for="contact-name">Confirm Password</label>		
					<input type="password" name="confirmpassword" placeholder="Confirm Password" 
					required="">
					</div>
					<button type="submit" class="btn">Change Password</button>
				</form><?php }?>
			</div>
		</div>
		</div>
		</div>
	</section><?php }else{ redirect(base_url().'index.php/Login/login');
	$this->session->set_flashdata('message','Login here!!!');
	}?>