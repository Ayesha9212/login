<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration Form</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="style.css">
   <!-- PHP CONNECTION FILE -->
	 <?php include 'connect.php' ?>
</head>
<body>
<?php
      
      if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($conn,$_POST['nemail']);
        $password = mysqli_real_escape_string($conn,$_POST['npassword']);
        $cpassword = mysqli_real_escape_string($conn,$_POST['cpassword']);
        
        $pass = md5($password);
        $cpass = md5($cpassword);
        // $pass = password_hash($password,PASSWORD_BCRYPT);
        // $cpass = password_hash($cpassword,PASSWORD_BCRYPT);

        $emailquery = " select * from signup where mail = '$email'";
        $query = mysqli_query($conn,$emailquery);
        $emailcount = mysqli_num_rows($query);

        if($emailcount>0){
        ?>
         <script>
                    alert("Email ID already exits")
         </script>
        
        <!-- <script>
           function popup(){
            swal("Error!", "EmailID already exists!", "error");
           }
        </script> -->
        <?php
        }else {
        if ($password === $cpassword){
            $insertquery = "insert into signup(mail, password, cpasword) values('$email','$pass','$cpass')";
            $iquery = mysqli_query($conn,$insertquery);
            
            if($iquery)
            {
                ?>
                <script>
                    alert("inserted Successful")
                </script>
                <?php
                header("Location: successful.php");
            }
            else {
                ?>
                <script>
                    alert(" Failed")
                </script>
                <?php
            }

          }
          else{
            ?>
             <script>
                    alert("Password not matching")
                </script>
            <!-- <script>
               function popup(){
                swal("Gpassword", "You clicked the button!", "success");
               }
            </script>  -->
            <?php
          }
         
        }
        
      }
     
      ?>
<?php
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search="select * from signup where mail = '$email'";
    $query = mysqli_query($conn,$email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
        $pass = mysqli_fetch_assoc($query);

        // $db_pass = $pass['Password'];

        // $pass_decode = password_verify($password,$db_pass);
        if (md5($password) === $pass["password"]) {
        // if($pass_decode){
            ?>
            <script>
                alert("Successful")
            </script>
            <?php
             header("Location: home.php");
        }
        else{
            ?>
    <script>
        alert("invalid password")
    </script>
    <?php
        }
      }
        else{
            ?>
            <script>
                alert("Invalid Email")
            </script>
            <?php
        }
    }

?>

  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input id="text"  type="email" name="email" placeholder="Enter your email" required/>
        <input id="epass" type="password" name="password" placeholder="Enter your password"  required/>
        <a href="forgotpassword.php">Forgot password?</a>
        <input type="submit" class="button" name="login" value="Login">
      </form>
     <div class="signup">
        <span class="signup">Don't have an account?
         <label for="check">Signup</label>
        </span>
      </div>
    </div>
    <div class="registration form">
      <header>Signup</header>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input id="text" type="email"  name="nemail" placeholder="Enter your email" required/>
        <input id="epass"  type="password" name="npassword" placeholder="Create a password" required/>
        <input id="epass"  type="password" name="cpassword" placeholder="Confirm your password" required/>
        <a href="change.php">Change Password</a>
        <input type="submit" class="button"  name="submit" value="submit">
      </form>
      <div class="signup">
        <span class="signup">Already have an account?
         <label for="check">Login</label>
        </span>
      </div>
    </div>
  </div>
</body>
</html>