<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <div class="contact-title">
        <h1> REGISTRATION</h1>
        <h2>Sign Up to Get Started</h2>
    </div>
    <?php 
       include "control.php";

     $formObject = new Validation();

       if (isset($_POST["submit"])) {
        $formObject->getInput();
       }
       echo $formObject->fullname . "<br>";
       echo $formObject->username . "<br>";
       echo $formObject->email . "<br>";
       echo $formObject->phone . "<br>";
       echo $formObject->fullname . "<br>";
    ?>
    <div class="contact-form" >
        <form id="contact-form" method="post" action="index.php">
       NAME: <input type="text" name="fullname" class="form-control" >
        <p class = "error"><?php echo $formObject->fullnameErr; ?></p>
        
        USERNAME: <input type="text" name="username" class="form-control" >
        <p class = "error"><?php echo $formObject->usernameErr; ?></p>
        EMAIL: <input type="text" name="email" class="form-control" >
        <p class = "error"><?php echo $formObject->emailErr; ?></p>
        PHONE: <input type="text" name="phone" class="form-control">
        <p class = "error"><?php echo $formObject->phoneErr; ?></p>
        PASSWORD: <input type="password" name="pass" class="form-control">
        <p class = "error"><?php echo $formObject->passErr; ?></p>
        picture: <input type="file" name="pic" class="form-control">
        <p class = "error"><?php echo $formObject->fileErr; ?></p>

       
        <input type="submit" id="submit" name="submit" class="form-control-submit" value="SUBMIT" >
    </form>
    </div>

    
</body>
</html>