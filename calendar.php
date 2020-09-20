<head>
	
	<link href="css/datepicker.css" rel="stylesheet" id="bootstrap-css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<style>
		.input-group
		{
			padding-top: 20px;
			padding-left: 250px;
		}
		.input-group input
		{
			height: 50px;
			background-color: #f0f0f0;
		}
		.view-calender
		{
			height: 25vh;
			
		}
		@media (min-width: 320px) and (max-width: 419px)
		{
			.input-group
			{
				padding-top: 5px;
				padding-left: 50px;
			}
		}
		@media (min-width: 920px)
		{
			.input-group
			{
				padding-top: 15px;
				padding-left: 142px;
			}
			.date
			{
               width: 1000px;
			}
			.center
			{
				padding-right: 250px;
			}
			.view-calender
		{
			height: 25vh;
			padding-left: 180px;
		}
		}
		@media (min-width: 420px) and (max-width: 558px)
		{
			.input-group
			{
				padding-top: 5px;
				padding-left: 80px;
			}
		}
		@media (min-width: 558px) and (max-width: 919px)
		{
			.input-group
			{
				padding-top: 5px;
				padding-left: 40px;
			}
		}



	</style>

    
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script>
		function getfocustxt()
		{
			document.getElementById("date").focus();
		}
	    $(function () {
	        $('#datepicker').datepicker({
	            format: "dd-mm-yyyy",
	            autoclose: true,
	            todayHighlight: true,
		        showOtherMonths: true,
		        selectOtherMonths: true,
		        autoclose: true,
		        changeMonth: true,
		        changeYear: true,
		        orientation: "button"
	        });
	    });
	</script>
</head>

