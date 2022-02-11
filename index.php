<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>PHP filters</title>
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<!-- Custom styles for this template -->
<link href="assets/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body class="sign">
	<div class="d-flex hide-section signpage">
		<div class="sign-bg"><img src="assets/images/sign.jpg" style="width:100%;height: calc(100vh);object-fit: cover"></div>
		<div class="section-range">
			<div class="sign-section">
				<div class="main-title"><p>Car Characters Filter<p></div>
				<div class="general-text create-account"><p>Welcome! Please search to car characters.</p></div>	
				<div class="sign-main-section">
					<div class="d-flex">
						<input type="text" id="CarYear" class="input-control property-section1" placeholder="Year">
						<input type="text" id="CarMake" class="input-control property-section2" placeholder="Make">
					</div>
					<div class="d-flex" style="margin-top: 10px">
						<input type="text" id="CarModel" class="input-control property-section1" placeholder="Model">
						<input type="text" id="CarTrim" class="input-control property-section2" placeholder="Trim">
					</div>
					<div class="d-flex" style="margin-top: 10px">
						<input type="text" id="CarFeatures" class="input-control property-section1" placeholder="Features">
						<input type="text" id="CarFueltype" class="input-control property-section2" placeholder="Fueltype">
					</div>
					<div class="d-flex" style="margin-top: 10px">
						<input type="text" id="CarTransmission" class="input-control property-section1" placeholder="Transmission">
						<input type="text" id="CarOdometer" class="input-control property-section2" placeholder="Odometer">
					</div>
					<div class="d-flex" style="margin-top: 10px">
						<input type="text" id="CarEngine" class="input-control property-section1" placeholder="Engine">
						<input type="text" id="CarColour" class="input-control property-section2" placeholder="Colour">
					</div>
					<div class="d-flex" style="margin-top: 10px">
						<input type="text" id="CarBodystyle" class="input-control property-section1" placeholder="Bodystyle">
						<input type="text" id="" class="input-control property-section2" style="border-bottom: 1px solid white">
					</div>
					<!-- <div><input type="text" class="input-control" id="filter_text" placeholder="Filter text"></div> -->
					<div class="property-gap"><div class="sign-btn"><button onclick="search()" class="signup-btn justify-content-center">search</button></div></div>
					<p id="result-section" class="result">

					</p>
			</div>

		</div>
	</div>	
</body>
<script type="text/javascript">
	function search()
	{
		var carYear=$("#CarYear").val();
		var carMake=$("#CarMake").val();
		var carModel=$("#CarModel").val();
		var carTrim=$("#CarTrim").val();
		var carFeatures=$("#CarFeatures").val();
		var carFueltype=$("#CarFueltype").val();
		var carTransmission=$("#CarTransmission").val();
		var carOdometer=$("#CarOdometer").val();
		var carEngine=$("#CarEngine").val();
		var carColour=$("#CarColour").val();
		var carBodystyle=$("#CarBodystyle").val();
			 	

		if (carYear=="" && carMake=="" && carModel=="" && carTrim=="" && carFeatures=="" && carFueltype=="" && carTransmission=="" && carOdometer=="" && carEngine=="" && carColour=="" && carBodystyle=="")
		{
			alert("Please type the some fields");
		}
		else
		{
		 	var userdata = {CarYear:carYear, CarMake:carMake, CarModel:carModel, CarTrim:carTrim, CarFeatures:carFeatures, CarFueltype:carFueltype, CarTransmission:carTransmission, CarOdometer:carOdometer, CarEngine:carEngine, CarColour:carColour, CarBodystyle:carBodystyle};
   			$.ajax({
            type: "post",
            url: "filteresult.php",
            data:userdata, 
            success: function(data){
            	// substr(data, 0, $length);
            	// substr(data,-$length);
            	alert("Filtering Result: "+data);
            	// $("#result-section").
            	// $("#result-section").text("Filtering Result:"+data);
            }
            });	
		}
	        $("#CarYear").val("");
			$("#CarMake").val("");
			$("#CarModel").val("");
			$("#CarTrim").val("");
			$("#CarFeatures").val("");
			$("#CarFueltype").val("");
			$("#CarTransmission").val("");
			$("#CarOdometer").val("");
			$("#CarEngine").val("");
			$("#CarColour").val("");
			$("#CarBodystyle").val("");
		}		
</script>
</html>