<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="My_Order_Icon.jpg-removebg-preview.png">
    <link rel="shortcut icon" type="x-icon" href="My Order Icon.jpg.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Order | Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="login.css" class="css">
</head>
<body>
    
   <div class="wrapper">
      
      <form action="" method="post">
            <h2>Login Here</h2>
           <div class="input-box">
              <input type="text" name="name" id="name" required placeholder="Username">
              <i class='bx bxs-user'></i>
           </div>
           <div class="input-box">
              <input type="password" name="pwd" id="pwd" required placeholder="Password">
              <i class='bx bxs-lock-alt'></i>
           </div>

           <div class="remember-forget">
               <label><input type="checkbox" name="checkbox" id="checkbox"> Remember me</label>
               <a href="#">Forget Password?</a>
           </div>

            <button type="submit" class="btn">Login</button>

           <div class="register-link">
              <p>Don't have an account? <a href="sign up.php">Register</a></p>
           </div>
        </form>
   </div>
</body>
</html>