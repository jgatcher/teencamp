<html>
<head>
	
	<link href="<?php echo base_url(); ?>/assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <!-- <link href="<?php echo base_url(); ?>/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/datepicker.css" rel="stylesheet">
     --><!-- <link href="<?php echo base_url(); ?>/assets/css/custom.css" rel="stylesheet"> -->
	<title><?php echo $title ?> </title>

</head>
<body>
	  <div class="container">

	<?php 
		function print_details($key, $value){
			echo "<tr>";
			echo "<td> $key</td>";
			echo "<td> <b>$value</b> </td>";
			echo "</tr>";
		}
		$obj  = $camper[0];
	 ?>
	<div class='row'>
		<div class='span9'>

			<div>
				<h1>Registration Details</h1>
			</div>
			<br />
			<div id='camper_records' class='well'>
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
		    

			    	?>
			    	</tbody>
			</table>
			</div>

			<div>
				<p>
					I ........................................................................................
					 consent that my Son / Daughter/ Ward 
					..........................................................................................
					 can attend Teen Camp 2012 being held at 
					Abokobi Presbyterian Women's Centre from the 4th to August 2012. 
				</p>
				<p>
					Signed ............................................................
				</p>
				<p>
					If your child is under medication, possess allegies and any other kind of medical condition, kindly indicate along with instructions  <br>
					............................................................................................................................................................................<br>............................................................................................................................................................................
					............................................................................................................................................................................<br>............................................................................................................................................................................
					............................................................................................................................................................................<br>............................................................................................................................................................................
					............................................................................................................................................................................<br>............................................................................................................................................................................
				</p>
				<p>
					Telephone Number your would like us to call in case of emergency <br>
					....................................................................
				</p>
			</div>
	</div>
	</div>
	 
</div>
<script type="text/javascript">
	window.onload =  function (){
		//window.print();
	}
</script>
</body>
</html>