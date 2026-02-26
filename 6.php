<?php
$logged=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
  include 'server.php';
  $name=$_POST['name'];
  $password=$_POST['password'];
  $sql="SELECT * FROM collab WHERE name='$name' 
  AND password='$password'";  
  $result=mysqli_query($con,$sql);
  if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
      //echo "Login Successful";
      $logged=1;
      session_start();  //no need to login again a session method is started with this function
      $_SESSION['name']=$name;
      header('signup.php');
    }
    else{
        //echo "Invalid Data";
        $invalid=1;
    } 
  }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font
awesome.min.css"> <!--social media plugins-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
function formValidation() {
  let x = document.forms["form1"]["name"].value;
  if (x == "") {
    alert("Fill in the details");
    return false;
  }
}
function newFunction(){
  document.getElementById("Form1").reset();
}
</script>
  <style>
    .mb-3.success input,.form-control.error input{
border-width:2px;
border-color: green;
    }
  h2{
    text-align:center;
  }
  div.formstyle{
    margin: 8px;
  border: 1px solid rgb(17, 16, 16);
  padding-inline: 50px;
  box-shadow: 0 2px 10px black;
  padding: 20px;;
  }
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .fa-twitter {
 /* background: #ee0805;*/
  color: rgb(16, 14, 14);
  width: 100%; 
}
.fa-facebook {
 /* background: #ee0805;*/
  color: rgb(16, 14, 14);
  width: 100%; 
}
.fa-instagram {
 /* background: #ee0805;*/
  color: rgb(16, 14, 14);
  width: 100%; 
}
.fa {
  padding: 15px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 2px 1px;
}
.fa:hover {
    opacity: 0.7;
}
  .bg {
    background: "bg.jpg";
  }
  .container-fluid img {vertical-align: middle;}
  .container-fluid .content {
  background-image: url("blue.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  padding: 50px;
}
  </style>
</head>
<body>
<?php
if($invalid){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error</strong> Invalid Credentials.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
  ?>
<?php
if($logged){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Congrats</strong> You are successfully Logged In.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
  ?>
<!-- header -->
<!--navbar-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="signup.php">Sign In</a>
      </li>
    </ul>
</nav>
<!-- login form-->
<div class="container mt-3">
    <div class="row justify-content-md-center">
        <div class="col-xl-6">
  <div class="formstyle">
  <strong><font color="#6D2819" size="15" face="times new"><h2>Login</h2>
  <form action="6.php" method="post" id="Form1" name="form1" onSubmit="return formValidation()">
    <!--Name-->
    <div class="mb-3">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter the Name" name="name">
   </div>
   <!--Password-->
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" 
name="password">
      </div>
    </div>
    <div class="text-center">
    <button type="submit" class="btn btn-primary">Login</button>
    <button type="button" class="btn btn-warning"  onclick="newFunction()" 
value="Reset">Reset</button>
</div>
</font></strong></form>
</div>
</div>
    <!-- SignIn form2
  <div class="col-xl-6">
<div class="formstyle">
<h2>Signin</h2>
<form action="5.php" method="post" name="form2" onSubmit="return validateForm()">-->
  <!--Email
<div class="mb-3">
<label for="email">Email:</label>
<input type="email" name="email" class="form-control" id="email" placeholder="Enter email" 
name="email">
<small>Enter a valid email</small></div>-->
<!--Password
<div class="mb-3">
<label for="pwd">Password:</label>
<input type="password" name="password" class="form-control" id="pwd" placeholder="Enter 
password" name="pswd">
<small>Enter a valid password</small></div>
<div class="form-check mb-3">
<label class="form-check-label">
  <input class="form-check-input" type="checkbox" name="remember"> Remember me
</label>
</div>
<button type="submit" class="btn btn-primary" href="" vlaue="Submit">Submit</button>
</form>
</div>
</div>-->
</div>
</div>
<!-- Footer -->
<div class="container-fluid">
  <div class="content">
    <div class="p-9 text-white text-center">
    <p>Contact</p>
    <p>Phone:29899489230</p>
    <p>Thanks for shopping</p>
    <a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-instagram"></a>
  </div>
  </div>
  </div>
  </div>
  </div>
  <!--Script-->
  </body>
  </html>