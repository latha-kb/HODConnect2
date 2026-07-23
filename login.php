<?php
session_start();

$error = "";

if(isset($_POST['login']))
{
    $password = $_POST['password'];

    if($password == "hod@cse")
    {
        $_SESSION['hod_login'] = true;
        header("Location: hod.php");
        exit();
    }
    else
    {
        $error = "Incorrect Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>

<title>HOD Login</title>

<link rel="stylesheet" href="assets/css/style.css">

<style>

.login-box{

width:400px;
margin:100px auto;
background:white;
padding:30px;
border-radius:10px;
box-shadow:0 0 10px gray;

}

input[type=password]{

width:100%;
padding:12px;
margin-top:10px;
margin-bottom:20px;
font-size:16px;

}

.login-btn{

width:100%;
padding:12px;
background:#0d6efd;
color:white;
border:none;
font-size:18px;
border-radius:6px;
cursor:pointer;

}

.error{

color:red;
text-align:center;
margin-bottom:15px;

}

</style>

</head>

<body>

<div class="login-box">

<h2 align="center">HOD Login</h2>

<?php

if($error!="")
{
    echo "<div class='error'>$error</div>";
}

?>

<form method="POST">

<label>Password</label>

<input type="password"
name="password"
placeholder="Enter Password"
required>

<button
class="login-btn"
name="login">

Login

</button>

</form>

</div>

</body>

</html>