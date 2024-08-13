<?php
            include("config.php");

            if(isset($_POST['submit'])){
                $firstname=$_POST['fname'];
                $lastname=$_POST['lname'];
                $email=$_POST['email'];
                $password=$_POST['password'];
                $confirm= $_POST['cpassword'];
                $passwordErr="";
               
               if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\W).+$/", $password)) {
                   $passwordErr = "Password must include at least one uppercase letter, one lowercase letter, and one special character.";
                   echo $passwordErr;
               }
               elseif($password!==$confirm){
                   echo "Password is not match. Enter it again.";
               }
            


                
            $verify_query=mysqli_query($conn,"SELECT Email FROM myorder WHERE email='$email'");

            if(mysqli_num_rows($verify_query)>0){
               echo "<div class='massage'>
                   <p>This Email is used, Please try another one!</p>
               </div> <br>";

              echo "<a href='javascript:self.history.back()'><button class='btn'>Go back</button></a>";

            }

            else{
                mysqli_query($conn,"INSERT INTO myorder(firstname,lastname,email,password)
                VALUES('$username','$lastname','$email','$password')");

                echo "<div class='massage'>
                <p>Registration Successful!</p>
                </div><br>";
                echo "<a href='index.php'><button class='btn'>Login Now</button></a>";
            }
            }
?>
