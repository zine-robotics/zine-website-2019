<?php
include 'db.php';
if(isset($_POST['cid']))
{
$error=1;
$cid=$_POST['cid'];
$name=$_POST['fname'];
$hos=$_POST['hos'];
$email=$_POST['email'];
$number=$_POST['mno'];
$branch=$_POST['branch'];
if(empty($cid)||empty($name)||empty($hos)||empty($email)||empty($number)||empty($branch))
{
$success="<h3 class='heading--secondary' style='color:red'>All fields are required.</h3>";
$error=0;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$success=$success."<br><h3 class='heading--secondary' style='color:red'>Invalid email format.</h3>";
$error=0;
}
$numlength = strlen((string)$number);
if($numlength!==10)
{
$success=$success."<br><h3 class='heading--secondary' style='color:red'>Number should be of length 10.</h3>";
$error=0;
}
$year=substr($cid,0,4);
$year=trim($year);
$recheck=1;
if($year=="2018")
{
$recheck=0;
}
if($recheck)
{
if(($year!="2017"))
{
$success=$success."<br><h3 class='heading--secondary' style='color:red'>You College ID is not valid for this.</h3>";
$error=0;
}
}
if($error)
{
$query="INSERT INTO vishal_kothari (cid,name, hos, email, mno, branch) VALUES ( '$cid', '$name', '$hos', '$email', '$number', '$branch' )";
$result=mysqli_query($conn,$query);
if($result)
{
$query="SELECT ID FROM vishal_kothari WHERE cid='$cid'";
$result=mysqli_query($conn,$query);
$result=mysqli_fetch_array($result);
$display=$result[0];
$success="<h2 class='heading--secondary' style='color:green'>User Registered. ID is ".$display.".</h2>";
}
else
{
$success="<h2 class='heading--secondary' style='color:red'>You have already been registered.</h2>";
}
}
}
echo "<html lang='en'>
<head>
<meta charset='UTF-8'>
<title>Register Form</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,700,300'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='css/style.css'>
<link rel='stylesheet' type='text/css' href='css/Fonts/stylesheet.css'>
<link rel='stylesheet' href='css/carousel.css'>
</head>
<body>
<div id='particles-js'></div>
<div class='signup__container'>
<div class='container__child signup__thumbnail'>
<div class='thumbnail__logo'>
<img src='zlogo.png' width='180' height='80' style='align-self:center'>
</div>
<div class='thumbnail__content'>
<h1 class='heading--primary index_1'>Welcome to ZINE.</h1>
<h2 style='margin-left:55px;' class='heading--secondary index_2'>Gear up for the </h2>
<h2 style='margin-left:70px;' class='heading--secondary index_3'>workshop 2018</h2>
</div>
<div class='thumbnail__links'>
<ul class='list-inline m-b-0 text-center'>
<li><a href='http://zine.co.in/' target='_blank'><i class='fa fa-globe'></i></a></li>
<li><a href='mailto:kv27448851@gmail.com' target='_blank'><fa class='fa fa-envelope-o'></fa></a></li>
<li><a href='https://facebook.com/ROBOTICS.ZINE' target='_blank'><i class='fa fa-facebook'></i></a></li>
<li><a href='https://www.instagram.com/zine.robotics/' target='_blank'><i class='fa fa-instagram'></i></a></li>
</ul>
</div>
<div class='signup__overlay'></div>
</div>
<div class='container__child signup__form'>
<form action='' method='POST'>
<div class='form-group'>
<label for='cid'>College ID</label>
<input class='form-control' type='text' name='cid' id='cid' placeholder='College ID' required />
</div>
<div class='form-group'>
<label for='cid'>Name</label>
<input class='form-control' type='text' name='fname' id='fname' placeholder='Name' required />
</div>
<div class='form-group'>
<label for='email'>Email</label>
<input class='form-control' type='text' name='email' id='email' placeholder='example@example.com' required />
</div>
<div class='form-group'>
<label for='mno'>Mobile Number</label>
<input class='form-control' type='text' name='mno' id='mno' minlength='10' placeholder='9876543210' required />
</div>
<div class='form-group'>
<label for='branch'>Choose Branch</label>
<select class='form-control' id='branch' name='branch'>
<option value='CSE'>Computer Science Engineering</option>
<option value='ECE'>Electronics and Communication Engg.</option>
<option value='EE'>Electrical Engineering</option>
<option value='ME'>Mechanical Engineering</option>
<option value='CE'>Chemical Engineering</option>
<option value='CIE'>Civil Engineering</option>
<option value='MME'>Metallurgical Engineering</option>
<option value='ARC'>Architecture</option>
</select>
</div>
<div class='form-group'>
<label for='hos'>Are you Hosteller?</label>
<select class='form-control' id='hos' name='hos'>
<option value='1'>Yes</option>
<option value='2'>No</option>
</select>
</div>
<div class='m-t-lg'>
<ul class='list-inline'>
<li>
<input class='btn btn--form' type='submit' value='Register' />
</li>
</ul>
</div>
</form>
</div>
</div>
<script src='particles.js'></script>
<script src='js/app.js'></script>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='js/index.js'></script>	
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='js/index.js'></script>
</body>
<script>
</script>
</html>";
?>