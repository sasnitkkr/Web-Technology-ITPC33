<?php
//Create Session 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<!-- set session variables  -->

    <form action="6-sessionLogin1.php" method="post">
        Username :<input type="text" name="uName" id=""> <br>
        Password :<input type="password" name="uPassword" id=""><br>
        <button type="submit" name="submitform">Login</button>
    </form>

<?php
    // set session variables
    // https://stackoverflow.com/questions/4871942/how-to-redirect-to-another-page-using-php/35655411
    $_SESSION["username"] = $_POST["uName"];
    $_SESSION["password"] = $_POST["uPassword"];
    if (isset($_POST['submitform']))
    {   
    ?>
        <script type="text/javascript">
        window.location = "http://localhost:5000/6-sessionLogin2.php";
        </script>      
    <?php
    }
?>



<!-- Destroy Session -->
<?php
    //remove all session variables
    // session_unset();
    // destroy the session
    // session_destroy();
?>
</body>
</html>