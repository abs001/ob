<?php 
	$userid = $_SESSION['adminid'];
	$query = "SELECT * from tution WHERE tutid='$realid'";
	$realedit=$this->db->query($query); //Dont change realedit
	if($this->db->affected_rows()==0){
		$this->session->set_flashdata('message','Record not found !');
		$data['pagename']="tution_view.php";
		redirect(base_url().'index.php/Admin/tution_view');
	}
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>TUTION / EDIT / ID : <?php echo $realid;?></h2>
            </div>
            <!-- CONTAINER ADD -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Edit Tution</h2>
                        </div>
                        <div class="body">
                        <?php foreach ($realedit->result_array() as $row){?>	
                        	<form action="<?php echo base_url();?>index.php/Admin/tution/update/<?php echo $row['tutid'];?>" id="frmFileUpload" method="post" enctype="multipart/form-data">
								<div class="row clearfix">
	                                <div class="col-md-4">
	                                    <label for="Name">Name </label><span style="color: red;"> * </span><span style="color: red;" class="error" id="name_error"></span>
										  <div class="form-line">	
										  	<input type="text" class="form-control" id="name" name="name" placeholder="Vendor name" required="required" value="<?php echo $row['name'];?>">
										  </div>	
	                                </div>
	                                <div class="col-md-8">
	                                    <label for="title">Title </label><span style="color: red;"> * </span><span style="color: red;" class="error" id="title_error"></span>
										  <div class="form-line">	
										  	<textarea class="form-control" id="title" name="title" placeholder="title" required="required"><?php echo $row['title'];?></textarea>
										  </div>	
	                                </div>
	                                <div class="col-md-12">
	                                    <label for="address">Address</label><span style="color: red;"> * </span><span style="color: red;" class="error" id="address_error"></span>
										  <div class="form-line">	
										  	<textarea class="form-control" id="address" name="address" placeholder="Address" required="required" ><?php echo $row['address'];?></textarea>
										  </div>	
	                                </div>
	                                <div class="col-md-12">
	                                    <label for="description">Description </label><span style="color: red;"> * </span><span style="color: red;" class="error" id="description_error"></span>
										  <div class="form-line">	
										  	<textarea class="form-control" id="description" name="description" placeholder="Description" required="required"><?php echo $row['description'];?></textarea>
										  </div>	
	                                </div>
	                               <div class="col-md-4">
	                                    <label for="mobile">Mobile </label><span style="color: red;"> * </span><span style="color: red;" class="error" id="mobile_error"></span>
										  <div class="form-line">	
										  	<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile no." required="required" value="<?php echo $row['mobile'];?>">
										  </div>	
	                                </div>
	                               <div class="col-md-8">
	                                    <label for="mobile">Email </label><span style="color: red;"> * </span><span style="color: red;" class="error" id="email_error"></span>
										  <div class="form-line">	
										  	<input type="text" class="form-control" id="email" name="email" placeholder="Email ID." required="required" value="<?php echo $row['email'];?>">
										  </div>	
	                                </div>
	                                <div class="col-md-4">
	                                    <label for="city">City </label><span style="color: red;"> * </span><span style="color: red;" class="error" id="city_error"></span>
										  <div class="form-line">	
										  	<input type="text" class="form-control" id="city" name="city" placeholder="City" required="required" value="<?php echo $row['city'];?>">
										  </div>	
	                                </div>
	                               <div class="col-md-4">
	                                    <label for="city">Area </label><span style="color: red;"> * </span><span style="color: red;" class="error" id="area_error"></span>
										  <div class="form-line">	
										  	<input type="text" class="form-control" id="area" name="area" placeholder="Area" required="required" value="<?php echo $row['area'];?>">
										  </div>	
	                                </div>
	                               <div class="col-md-4">
	                                    <label for="offerenddate">Offer end date </label>
										  <div class="form-line">	
										  	<input type="date" class="form-control" id="offerend" name="offerend" placeholder="mm/dd/yyyy" value="<?php echo $row['offerend'];?>">
										  </div>	
	                                </div>
	                                <input type="hidden" name="userid" value="<?php echo $row['userid'];?>">
	                            </div>
	                                <input type="submit" class="btn btn-block btn-lg btn-success waves-effect" value="SUBMIT">
                            </form>
                            <?php }?>
                    </div>
                        </div> <!-- #END# CARD -->
                    </div>
                </div>
                <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Edit / Delete images</h2>
                        </div>
                        	 <?php 
			                    $query = "SELECT tution.tutid, tution.`name`, tution.title, tution.address,tution.description, tution.mobile, tution.email, tution.city, tution.area, tution.date, tution.offerend, tution.category, tution.userid, tut_img.tutid, tut_img.path, tut_img.id FROM tution INNER JOIN tut_img ON tution.tutid = tut_img.tutid WHERE tution.tutid = $realid";
			                    $realeditimg=$this->db->query($query);
			                    foreach ($realeditimg->result_array() as $row_img){
			                    ?>	
			                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
			                    	<hr>
									<img alt="<?php echo $row['title'];?>" src="<?php echo base_url();echo $row_img['path'];?>" width="200" height="200">
					                <form action="<?php echo base_url();?>index.php/Admin/UpdateImage/tution" method="post" enctype="multipart/form-data">
					                	<input type="hidden" name="imgid" value="<?php echo $row_img["id"];?>">
					                	<input type="hidden" name="postid" value="<?php echo $row_img["tutid"];?>">
					                	<input type="file" name="image" required="required">
					                	<input type="submit" class="btn btn-success" value="Change Image">
					                </form>
					                <br>
					                <a href="<?php echo base_url();?>index.php/Admin/DeleteImage/tution/<?php echo $row_img["id"];?>/<?php echo $row_img["tutid"];?>"><input type="submit" class="btn btn-danger" value="Delete Image  &nbsp;"></a>
					                <hr>
				                </div>
				                <?php }?>
                	</div> 
                </div>       
           	</div> 
           	<div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	 <div class="card">
                        <div class="header">
                            <h2>Add more images to this post</h2>
                        </div>
                     </div>   
                     <!-- Add more imgaes -->
                     <div class="body">
                            <form action="<?php echo base_url();?>index.php/Admin/AddMoreImages" id="frmFileUpload" class="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="realid" value="<?php echo $realid;// DONT change realid?>">
                                <input type="hidden" name="category" value="tution">
                                <div class="dropzone"> 
	                                <div class="dz-message">
	                                    <div class="drag-icon-cph">
	                                        <i class="material-icons">touch_app</i>
	                                    </div>
	                                    <h3>Choose image<span style="color: red;">*</span> and submit post </h3>
	                                    <em>To choose multiple images press and hold CTRL key.</em>
	                                </div>
	                                <div class="fallback">
	                                   <input type="file" id="image" multiple="multiple" name="image[]" required="required">
	                                </div>
	                                <br>
	                                <input type="submit" value="Upload" class="btn btn-success" />
                                </div>
                                
                            </form>
                        </div>
                </div>
            </div>    
           	</div>
            <!-- #END# CONTAINER ADD -->
    </section>
    <!-- Jquery Core Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/jquery/jquery.min.js"></script>
	<!-- Validation -->
    <script src="<?php echo base_url();?>assets/js/validation.js"></script>
    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Bootstrap Colorpicker Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/dropzone/dropzone.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- Multi Select Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/multi-select/js/jquery.multi-select.js"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/jquery-spinner/js/jquery.spinner.js"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- noUISlider Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/nouislider/nouislider.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url();?>assets_admin/plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url();?>assets_admin/js/admin.js"></script>
    <script src="<?php echo base_url();?>assets_admin/js/pages/forms/advanced-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url();?>assets_admin/js/demo.js"></script>