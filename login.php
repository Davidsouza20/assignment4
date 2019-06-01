<?php
    // Include db conection file
    include("dbconection.php");

    $checkMail = trim($_POST["email"]);
    $statement = $db->query("SELECT * FROM users_table WHERE email = '$checkMail'");
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter an email.";     
    } elseif (!filter_var($checkMail, FILTER_VALIDATE_EMAIL)) {
        $email_err = "Invalid email format"; 
    } elseif($results >= 1) {
        $email_err = "This email already exists.";
    } else{
        $email = trim($_POST["email"]);
    }

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
        $param_password = password_hash($password, PASSWORD_DEFAULT);
    }

?>
 
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign in </title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>  


            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            
            <div class="form-group col-md-4 text-center">
                <input type="submit" class="btn btn-primary" value="Sign in">
            </div>
            <p>Do not have an account? <a href="signup.php">Create account</a>.</p>
        </form>
    </div>    
    </body>
</html>