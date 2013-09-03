		<?php  

			$attributes_signup = array('class' => 'custom', 'id'=>'signup_form' );
		?>
		<style type="text/css">
			.close_reg {
				font-size: 38px;
				color: black;
				font-weight : bold;
				line-height: 145px;
			}
		</style>
		<div class="row hero-unit stuff" >
			<div class='custom'>
					<div class='span4 well'>
						<?php 
							$error = $this->session->flashdata('err');
							if(!empty($error)){
								?>
								<div class="alert alert-error">
									<?php echo  $error; ?>
								</div>
						<?php	}
						 ?>

						<div id='signup_div'>
							<div class='close_reg'>
								<span>REGISTERATION</span>
								<br>
								<span> CLOSED</span>
					
							 </div>
						</div>
					</div>
					<div class="span5">
						    <?php include("carousel.php"); ?>
					</div>
			</div>
		</div>

		<?php //include("testimonials.php"); ?>
		



