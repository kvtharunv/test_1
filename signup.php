<?php //server scripting language (used on the server side)
$registered=0; //variable to check success or failure
$userexsists=0;
if($_SERVER['REQUEST_METHOD']=='POST'){ //using request method and to perform post operation include 'server.php'; //uses the include statement to include all the files
include'server.php' ;
$name=$_POST['name'];
 $password=$_POST['password'];
 $email=$_POST['email'];
 $dob=$_POST['dob'];
 $sql="SELECT * FROM collab WHERE name='$name'";

 $result=mysqli_query($con,$sql);
 if($result){
 $num=mysqli_num_rows($result); //It is generally used to check if data is present in the database ornot
 if($num>0){
 //echo "User already exist";
 $userexsists=1;
 }else{

 $sql="INSERT INTO collab (name,password,email,dob)VALUES ('$name','$password','$email',' $dob')";
 $result=mysqli_query($con,$sql);
 if($result){
 //echo "Registered successfully";
  $registered=1;
 }else{
 die(mysqli_error($con));
 }
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
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fontawesome.min.css"> <!--social media plugins-->
 <script >
function formValidation() {
 let x = document.forms["form2"]["name"].value;
 if (x == "") { //if the field is empty
 alert("Name must be filled out");
 return false;
 }
 }
 function newFunction(){
 document.getElementById("Form2").reset(); // used to access the id
}
</script>
 <style>
 .mb-3.success input,.form-control.error input{
border-width:2px;
border-color: green;
 }
 h2{

 text-align:center;
 font-family: 'Times New Roman';
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
if($userexsists){
 echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
 <strong>Error</strong> User already exist.
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>
<?php
if($registered){
 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
 <strong>Congrats</strong> l
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
 ?>
<!--navbar-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
 <div class="container-fluid">
 <ul class="navbar-nav">
 <li class="nav-item">
    <a class="nav-link active" href="index.php">Home</a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="6.php">Login</a>
 </li>
 </ul>
 </div>
</nav>
<div class="container mt-3">
 <div class="row justify-content-md-center">
 <!-- login form
 <div class="col-xl-6">
 <div class="formstyle">
 <h2>Login</h2>
 form action="" name="form1">-->
 <!--Email
 <div class="mb-3">
 <label for="email">Email:</label>
 <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"> <small>Enter a valid email</small></div>-->
 <!--Password
 <div class="mb-3">
 <label for="pwd">Password:</label>
 <input type="password" class="form-control" id="pwd" placeholder="Enter password"
name="pswd">
 <small>Enter a valid password</small></div>
 <div class="form-check mb-3">
 <label class="form-check-label">
 <input class="form-check-input" type="checkbox" name="remember"> Remember me
 </label>
 </div>
 <button type="submit" class="btn btn-primary" href="">Login</button>

 </form>
</div>
</div>-->



<div class="col-xl-6">
<div class="formstyle">
<strong><font color="#6D2819" size="15" face="times new"><h2>Sign In</h2>
<form action="signup.php" method="post" id="Form2" name="form2
" onSubmit="return formValidation()">
 <!--Name-->
<div class="mb-3">
<label for="name">Name:</label>
<input type="text" name="name" class="form-control" id="name" placeholder="Enter the name"></div>
<!--Password-->
<div class="mb-3">
<label for="password">Password:</label>
<input type="text" name="password" class="form-control" id="password" placeholder="Enterpassword">
<!--email-->
<div class="mb-3">
<label for="email">email:</label>
<input type="text" name="email" class="form-control" id="email" placeholder="Enter your mail"></div>
<!--dob-->
<div class="mb-3">
<label for="dob">date of birth:</label>
<input type="text" name="dob" class="form-control" id="dob" placeholder="Enter the dob"></div>

</div>
<div class="text-center">
<button type="submit" class="btn btn-primary" value="Submit">Submit</button>
<button type="button" class="btn btn-warning" onclick="newFunction()"
value="Reset">Reset</button>
</div>
</font></strong></form>
</div>
</div>
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
 </body>
 </html>