<head>
	<!-- Favicon -->
	<link href="img/icons/icon.jpg" rel="shortcut icon"/>
</head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<body onLoad="popUp()">
<script>
  function popUp(){

    swal({
  title: "Logged In Successfully!!",
  text: "",
  icon: "success",
  button:"OK",
}).then(function() {
    window.location = "dashboard_check.php";
});
  }
</script>
<!-- <body onload="myFunction()"></body>

<script>
function myFunction() {
  setTimeout(function(){ location.href='dashboard.php' }, 500);
}
</script> -->