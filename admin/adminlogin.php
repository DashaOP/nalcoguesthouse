<!DOCTYPE html>
<html>
  <?php session_start(); ?>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
     crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Admin Panel</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" 
    integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <style>
    body{
      background:url('../images/background.jpg');
      overflow:hidden;
    }
    .loginform{
      text-align:center;
      position: absolute;
    left: 0;
    right: 0;
    margin: auto;
    padding-top:20px;
    font-family: 'Oswald', sans-serif;
    font-size:170%;
    }
    .logo{
      text-align:center;
      padding-top:50px;
    }
    #btn{
      border-radius:7px;
      width:300px;
      background:#FDFEFE;
      border-bottom:5px solid #0462B6;
      color:#0462B6;
    }
    .header{
      float:right;
      font-family:'Oswald',sans-serif;      
    }
    .head{
      border-radius:10px;
      background-color:#015AAB;
      color:;
      margin:10px;
      border:none;
    }
    .head:hover{
      background:#F3D472;
    }
    a:hover {
    color: #F3D472;
   }
   a{
  color:white;
   }
   a:link{
     text-decoration:none;
   }
   a:visited{
     text-decoration:none;
   }
    </style>
  </head>
  <body>
      <center>
 
  <div class="logo" style="font-family:'Oswald',sans-serif;color:white;font-size:100%;">
  <img src="../images/logo.png" style="height:100px;">
  
  <br/><span style="font-size:300%;color:#030100;">Admin Panel</span></div>
       
  <div class="loginform">
      <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
      <p>
      <label style="color:white;font-size:120%;"><i class="far  fa-user" style=""></i></label>
      <input type="text" name="user" required value="" placeholder="Username" style="border-radius:7px;"></input>
    </p>
    <p>
      <label style="color:white;font-size:120%;"><i class="fas  fa-key"></i></label>
      <input type="password" name="password" required placeholder="Password" style="border-radius:7px;"></input>
    </p>
    <input type="submit" value="Login" name="submit" id="btn"  style=""></input>
    </form>
   
 <div class="row">
     <div class="col-md-12" style="padding:10px;">
     <a href="../index.php">Back to Home</a></div>
</div>
  </div>
</center>
 

<?php

if(isset($_POST['submit'])){
  
$username=$_POST['user'];
$password=$_POST['password'];
$errors=array();

$username=stripcslashes($username);// Removes back slashes
$password=stripcslashes($password);

if($username == "NALCO" && $password == "NALCO"){
  $_SESSION['username']=$username;
  $_SESSION['success']='You are now logged in';
  echo '<script type="text/javascript">
				location.replace("adminpanel.php");
			  </script>';


}
else{
  echo '<script language="javascript">';
  echo 'alert("Incorrect Details")';
  echo '</script>';

}
}

?>
</body>
</html>
