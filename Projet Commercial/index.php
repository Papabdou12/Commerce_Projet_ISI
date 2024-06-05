<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    
    
    
    
        <link rel="stylesheet" href="css/style_login.css">


    
    
    
  </head>

  <?php
  
//include('menu/menu.php');
if(isset($_POST['v']) && $_POST['pseudo']=='admin' && $_POST['password']=='admin'){
  session_start ();
     $_SESSION['login'] = $_POST['pseudo'];
     $_SESSION['pwd'] = $_POST['password'];



header("location:clients.php");
}

  ?>

  <body>
    <div class="titre"><h1> Bienvenu au Gestion Commercial</h1></div>
    

    <div class="login">
  <div class="heading">
    <h2>Sign in</h2>
    <form method="POST" action="#">

      <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" name="pseudo" class="form-control" placeholder="Username or email" required>
          </div>

        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>

        <button type="submit" name="v" class="float">Login</button>
       </form>
 		</div>
 </div>
    
    
    
    
    
  </body>
</html>
