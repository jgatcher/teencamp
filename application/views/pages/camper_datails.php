<html>
<head>
	
	<link href="<?php echo base_url(); ?>/assets/css/bootstrap.css" rel="stylesheet">
    <style>
	    body {
	        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
	    }
      	
      	.well {
      		background: none;
      		padding : 0px;
      	}

      	.rules li{
			margin-bottom: 11px;
		}

		.row {
			margin-left: 130px;
		}
    </style>
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
		<div class='span8'>

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
					Abokobi Presbyterian Women's Centre from the  13th to 17th august 2012. 
				</p>
				<p>
					Signed ............................................................
				</p>
				<p>
					If your child is under medication, possess allegies and any other kind of medical condition, kindly indicate along with instructions  <br>
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
	<p style="page-break-before: always">
	<div class="row ">
		<div class=' rules'>
			<h2>Camp Rules</h2>
			<br />
			<ol>
				<li>You are responsible for your roommates, so always know where they are.</li>
				<li>Keep your room neat at all times.</li>
				<li>Observe Lights out!!!</li>
				<li>NO CROSSING OVER!! (i.e. boys cannot visit girls' rooms and vice versa!)</li>
				<li>Be part of camp activities.</li>
				<li>When you wake up, have your quiet time (morning devotion) before you leave the room.</li>
				<li>Be punctual for all activities.</li>
				<li>Supervisors must ensure that rooms are locked when leaving for camp activities.</li>
				<li>No mobile phones and electronic gadgets.</li>
				<li>Campers should  please bring the following  along to camp:
					<br>
					<ul>
						<li>Bible notebook, pens and pencils</li>
						<li>Toiletries</li>
						<li>Sleeping cloth and warm clothing</li>
						<li>Rain jacket or umbrella</li>
						<li>Bucket (optional)</li>
						<li>Slippers</li>
						<li>Pair of shorts and trainers for sports</li>
						<li>Money for books and other literature</li>
						<li>Any necessary medication</li>
					</ul>
				</li>

 
			</ol>	
			<br>
			<p>
				Reporting  time is 7:00am and departure from Accra Ridge Church and Manet on Monday 13th of August, 2012 is 9:00am PROMPT. 
				Campers will be returning from Abokobi to Accra Ridge Church and Manet on Friday, 17th of August, 2012 at 4:00pm.
			</p>
			<p>
				RSVP: Naa Tsoo 0242379350, Rosie 0244063748, Anthony 0244226692, Gabriel 024445419

			</p>
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