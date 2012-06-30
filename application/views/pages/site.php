<div class='row custom'>
<div class="logout span9">
		<a href="<?php echo site_url('home/logout') ?>">Logout</a>
	</div> 
<?php 
	$has_registered = $this->session->userdata("has_registered");	
	

	function print_details($key, $value){
		echo "<tr>";
		echo "<td> $key</td>";
		echo "<td> <b>$value</b> </td>";
		echo "</tr>";
	}
?>
	
	<?php if ($has_registered == 1) {
		//$this->session->sess_destroy(); 
		$obj = $camper[0];
		?>
		<div class="alert alert-success span10">
			<p>
				Please Print Your details and have at least one parent (guardian) to give  his/her consent by signing the form. 
				Please note that without a consent from a guardian you will not be allowed to make payment.		
			</p>
		</div>
		<div class='span10 '>
			<div>
				<h3>These are the details you submitted. <a class="btn btn-info right" href="#<?php echo $obj["_id"];?>" id='print_details'>Print Details</a></h3>
				
			</div>
			<div id='camper_records' class='well' >
				<table class='table table-bordered table-striped'>
		    
		    <tbody>
		    	<?php 
		    		
		    		print_details("First Name", $obj["firstName"]);
		    		print_details("Last Name", $obj["lastName"]);
		    		print_details("Other Name", $obj["otherName"]);
		    		print_details("Email", $obj["email"]);
		    		print_details("Date of Birth", $obj["dateOfBirth"]);
		    		print_details("Gender", $obj["gender"]);
		    		print_details("Area of Residence", $obj["residence"]);
		    		print_details("Church", $obj["church"]["name"]);
		    		print_details("Country of Residence", $obj["nationality"]);
		    		print_details("Phone Number", $obj["phoneNumber"]);
		    		$occType = $obj["occupation"]["type"];
		    		print_details("Occupation", $occType);
		    		if(trim($occType)=="student"){
		    			print_details("School", $obj["occupation"]["school"]);
		    			print_details("School Status", $obj["occupation"]["schoolStatus"]);
		    			print_details("Location of School", $obj["occupation"]["school_location"]);
		    			print_details("Educational Level", $obj["occupation"]["educationalLevel"]);
		    		}
		    		print_details("Role At Camp", $obj["role"]);
		    		print_details("Father's Name",$obj["parentalInfo"]["fathers_name"]);
		    		print_details("Father's Cell",$obj["parentalInfo"]["fathers_cell_number"]);
		    		print_details("Father's Off Number",$obj["parentalInfo"]["fathers_office_number"]);
		    		print_details("Mothers's Name",$obj["parentalInfo"]["mothers_name"]);
		    		print_details("Mother's Cell",$obj["parentalInfo"]["mothers_cell_number"]);
		    		print_details("Mother's Off Number",$obj["parentalInfo"]["mothers_office_number"]);
		    
		    		//print_details("Registeration Code", $obj["registrationCode"]);


		    	?>
		    </tbody>

			</table>
			</div>
			
		</div>
	<?php }
	else{
	?>
	
		<div class="alert alert-error">
			<p>
				You have not filled your registration form. This implies that you have not been registered. 
				<br />
				 <a href="<?php  echo site_url('registeration') ?>"> Please click Here to do so.</a> 
			</p>
		</div>
	<?php
	} ?>
</div>
<script type="text/javascript">
	
	(function(){
		var baseUrl =  "<?php echo base_url(); ?>" ;
		var url = baseUrl + "index.php/camper/";
		$("#print_details").click(function (){
			var id = $(this).attr("href");
			var old_id = id;
			id =  id.substring(1)
			var a = window.open(url + id, old_id, 'height=480,width=640', false);
			a.focus();

		});

	})();
</script>
