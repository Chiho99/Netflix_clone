<!-- login page -->
<?php
     require_once("includes/config.php");
     require_once("includes/classes/FormSanitizer.php");
     require_once("includes/classes/Account.php");
     require_once("includes/classes/Constants.php");
     $account = new Account($con);

    if(isset($_POST["submitButton"])) {
        $username = FormSanitizer::sanitizeFormUsername($_POST["username"]);
        $password = FormSanitizer::sanitizeFormPassword($_POST["password"]);
         
         $success = $account->login($username, $password);
         
         if($success) {
             $_SESSION["userLoggedIn"] = $username;
             header("Location: index.php"); 
             exit;
         }
    }

    function getInputValue($name) {
        if(isset($_POST[$name])) {
            echo $_POST[$name];
        }
    }
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
                <h3>Sign In</h3>
                <span>to continue to Chilix</span>
            </div>
            <form method="post" action="">

                <?php echo $account->getError(Constants::$loginFailed); ?>
                <input type="text" name="username" id="username" placeholder="User Name" value="<?php getInputValue("username")?>" required>
                
                <input type="password" name="password" id="password" placeholder="Password" required>
                
                <input type="submit" name="submitButton" id="submitButton" value="SUBMIT">
          
            </form>
            <a href="register.php" class="signInMessage">Need an account? Sign up here!</a>
        </div>
    </div>
</body>
</html>