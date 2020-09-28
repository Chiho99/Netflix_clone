<!-- register page -->
<?php
    // if(isset($_POST["submitButton"])){
    //     echo "Form was submitted";
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Chilix</title>
    <link rel="stylesheet" type="text/css" href="assets/style/style.css">
</head>
<body>
    <div class="signInContainer">

        <div class="column">
            <div class="header">
                <img src="assets/images/chilix.png" title="logo" alt="Site logo">
                <h3>Sign Up</h3>
                <span>to continue to Chilix</span>
            </div>
            <form method= "post" action="">
                <input type="text" name="firstName" id="firstName" placeholder="First Name" required>
                
                <input type="text" name="lastName" id="lastName" placeholder="Last Name" required>
                
                <input type="text" name="username" id="username" placeholder="User Name" required>
                
                <input type="email" name="email" id="email" placeholder="Email" required>
                
                <input type="email" name="email2" id="email2" placeholder="Confirm Email" required>
                
                <input type="password" name="password" id="password" placeholder="Password" required>
                
                <input type="password" name="password2" id="password2" placeholder="Confirm Password" required>
                
                <input type="submit" name="submitButton" id="submitButton" value="SUBMIT">
          
            </form>
            <a href="login.php" class="signInMessage">Already have an account? Sign in here!</a>
        </div>
    </div>
</body>
</html>