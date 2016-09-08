<?php
session_start();

if (isset($_SESSION['id'])) {
	// Put stored session variables into local PHP variable
	$uid = $_SESSION['id'];
	$usname = $_SESSION['username'];
	$result = "Test variables: <br /> Username: ".$usname. "<br /> Id: ".$uid;
} else {
	$result = "You are not logged in yet";
}
?>
<!doctype html>
<html>

<head>
<style>
body {*/
    margin: 0;
}
#website {
    width: 100%;
    height: 100vh;
}
</style>
</head>

<body>

   <iframe src="#" id="website">
       <p>Your browser does not support iframes.</p>
   </iframe>


    <script>

      var answer = prompt("Password");
       console.log(answer);
if (answer != "unblock2016") {
  alert("False or no Pssword")
}
if (answer == "unblock2016") {
  var url = prompt("Please enter website url:", "http://");
        document.getElementById("website").src = url;
}
    </script>
</body>

</html>
