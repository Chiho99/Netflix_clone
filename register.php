<!-- register page -->
<?php
    require_once("includes/config.php");
    require_once("includes/classes/FormSanitizer.php");
    require_once("includes/classes/Account.php");
    require_once("includes/classes/Constants.php");
    $account = new Account($con);

    if(isset($_POST["submitButton"])){
        // sanitization
       $firstName = FormSanitizer::sanitizeFormString($_POST["firstName"]);
       $lastName = FormSanitizer::sanitizeFormString($_POST["lastName"]);
       $username = FormSanitizer::sanitizeFormUsername($_POST["username"]);
       $email = FormSanitizer::sanitizeFormEmail($_POST["email"]);
       $email2 = FormSanitizer::sanitizeFormEmail($_POST["email2"]);
       $password = FormSanitizer::sanitizeFormPassword($_POST["password"]);
       $password2 = FormSanitizer::sanitizeFormPassword($_POST["password2"]);
        
        $success = $account->register($firstName, $lastName, $username, $email, $email2, $password, $password2);
        
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
                <h3>Sign Up</h3>
                <span>to continue to Chilix</span>
            </div>
            <form method= "post" action="">
                <?php echo $account->getError(Constants::$firstNameCharacters); ?>
                <input type="text" name="firstName" id="firstName" placeholder="First Name" value="<?php getInputValue("firstName")?>"required>
                
                <?php echo $account->getError(Constants::$lastNameCharacters); ?>
                <input type="text" name="lastName" id="lastName" placeholder="Last Name" value="<?php getInputValue("lastName")?>"required>
                
                <?php echo $account->getError(Constants::$usernameCharacters); ?>
                <?php echo $account->getError(Constants::$usernameTaken); ?>
                <input type="text" name="username" id="username" placeholder="User Name" value="<?php getInputValue("username")?>"required>
                
                <?php echo $account->getError(Constants::$emailsDontMatch); ?>
                <?php echo $account->getError(Constants::$emailInvalid); ?>
                <?php echo $account->getError(Constants::$emailTaken); ?>
                <input type="email" name="email" id="email" placeholder="Email" value="<?php getInputValue("email")?>"required>
                <input type="email" name="email2" id="email2" placeholder="Confirm Email" required>
                
                <?php echo $account->getError(Constants::$passwordsDontMatch); ?>
                <?php echo $account->getError(Constants::$passwordLength); ?>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <input type="password" name="password2" id="password2" placeholder="Confirm Password" required>
                
                <input type="submit" name="submitButton" id="submitButton" value="SUBMIT">
          
            </form>
            <a href="login.php" class="signInMessage">Already have an account? Sign in here!</a>
        </div>
    </div>
</body>
</html>