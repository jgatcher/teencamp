	<div class='custom'>
		<div class='instructions'>
			<h2>Register for Teen Camp in just 3 simple steps.</h2>
			<h3>Step 1. Sign Up</h3>
			<ol>
			  <li class="step1 selected">1</li>
			  <li class="step2">2</li>
			  <li class="step3">3</li>
			</ol>
		</div>
	</div>
			<?php  

			$attributes_signup = array('class' => 'custom', 'id'=>'signup_form' );
		?>
		
		<div class="row stuff" >
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
							<h2>Sign Up </h2>
							<?php echo form_open('home/signup', $attributes_signup); ?>

								<label>Email:</label>
								<p>
									<input type='text' name='email' id='email' class='span3'>
								</p>
								
								<label>Password:</label>
								<p>
									<input type='password' name='password' id='password' class='span3'>
								</p>
								
								<label>Confirm Password:</label>
								<p>
									<input type='password' name='confpassword' id='confpassword' class='span3'>
								</p>
								
								<input type='submit' value='Sign Up' class='btn btn-primary' id='signUpBtn'>
								<a class='form_links' id='click_login' href="<?php echo base_url() ?>index.php/home/view_login ">Already signed up?</a>
							<?php echo form_close(); ?>
							 
						</div>
					</div>
					<div class="span5">
						    <?php include("carousel.php"); ?>
					</div>
			</div>
		</div>

		<?php //include("testimonials.php"); ?>
		



<script type="text/javascript">
	(function(){

		$("#signup_form").submit(function () {
		    var f =  $(this);
		    var data = window.data = $(this).serializeArray();	
		    var pass = f.find("#password").val();
		    var pass2 = f.find("#confpassword").val();
		    var email = f.find("#email").val();

		    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if(!filter.test(email)){
            	alert("please enter a valid email");
                return false;
            }

		    if(pass.length < 5){
		        alert("password must be more than 5 characters");
		        return false;
		    }
			
		    if(pass != pass2){
		       alert("password don't match");
		       return false;
		    }
		});

		

	})();
</script>
