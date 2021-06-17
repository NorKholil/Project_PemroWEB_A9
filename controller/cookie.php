<?php 
    $cookie_username = "username";
    $cookie_password = "password";
    setcookie($cookie_username, $cookie_password, time() + (86400 * 30), "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    if(!isset($_COOKIE[$cookie_username])) {
        echo "Cookie Username '".$cookie_username."' is not set! ";
    } else {
        echo "Cookie '" .$cookie_username. "' is set!<br>";
        echo "Password is : " .$_COOKIE[$cookie_username];
    }
?>
</body>
</html>