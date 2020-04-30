<?php
session_start();
require_once 'Classes/Token.php';

$display_messsge = "";

if(isset($_POST['username'], $_POST['csrf_token'], $_POST['password'])){

  $username = $_POST['username'];
  $csrf_token = $_POST['csrf_token'];
  $password = $_POST['password'];
			

  if(!empty($username) && !empty($password) && !empty($csrf_token))
  {
    if(Token::check($csrf_token))
    {
        echo "<script>alert('Password changed successfully ');</script>";
    }
    else if(!Token::check($csrf_token))
        echo "<script>alert('Cannot be Change');</script>";
    }
  }
 if(!isset($_SESSION['username']))
{
    echo "<h2 align='center'>Indexes cannot be found<br>
 
    <a href='index.php'>Login </a></h2>";

    echo "<div align='center'>
    
</div>";

    
}

else{
$now = time();


   if($now > $_SESSION['expire'])

   {

       session_destroy();

       echo "<h2 align='center'>Session has been expired!!!<br>

       <a href='index.php'>Login Here</h2>";

       echo "<div align='center'>
    
    </div>";

    

   }

    
else
{

?> 

<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/testlogin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">


<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <title> Change Password </title>

</head>

<body class="welcome_home img-responsive">
    
    
<br>
<br>
<br>
  <section class="container-fluid" id = "scale">
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-3">
                <form method="POST" class="welcome-form">
                    <div class="form-group">
                       <h2>Change Password</h2>
                        <label for="uname">Username</label>
                        <input type="text" placeholder="Enter Username" name="username" type="username" class="form-control" aria-describedby="Username Help">
                       
                    </div>
                    <div class="form-group">
                        <label for="changePassword">Password</label>
                       
                        <input type="password" placeholder="Change Password" name="password"  type="password" class="form-control" id="changePassword"></br>
                       
                       
                        <input type="hidden" name="csrf_token" value="<?php echo Token::generate();?>">
                       
                        
                        <button type="submit" name="submit"  class="btn btn-primary btn-block">Submit</button>
                    </div> 
                </form>

    </form>
            </section>
        </section>
    </section>
  </div>
</div>

    <div class="footer">
        <p>WEB SECURITY - IT18214208 | Anne Deshani</p>
    </div>

    <?php
    }
    
}   
    ?>

</body>

</html>