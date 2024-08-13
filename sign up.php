<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="My_Order_Icon.jpg-removebg-preview.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Order | Sign up</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <form action="php for signup.php" method="post">
        <h1>Sign Up</h1><br>
    
        <input type="text" name="fname" id="fname" placeholder="First Name" required>
        <input type="text" name="lname" id="lname" placeholder="Last Name" required>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <input type="password" name="password" id="password" placeholder="Password" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{1,}" required>
        <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" required>
        <button type="submit">Sign Up</button>
    </form>
</html>