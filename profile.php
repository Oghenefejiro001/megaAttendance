<?php session_start(); ?>

<<<<<<< HEAD
<?php if (!$_SESSION['authenticated']) {
    header("location:register.php");
    return;
}
    ?>
=======
<?php
if (!$_SESSION['authenticated']) {
    echo "Access denied, please register";
    echo "<a href='register.php'><button>Register here</button></a>";
    exit;
}


?>
>>>>>>> 428b91999bafc9deeedcc25eaae0d87e6df6d360
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<<<<<<< HEAD

<body>
    <h1>Profile</h1>
    <p> <?php echo $_SESSION['name']; ?>, welcome to our app! </p>
    <p> Your Email is <?php echo $_SESSION['email']; ?> </p>
    <button><a href="logout.php">Logout</a></button>
=======
<body>
    <h1>Profile</h1>
    <p><?=  $_SESSION['name']; ?>, Welcome to our app</p>
    <p>Your email is <?= $_SESSION['email'] ?></p>
   <a href="logout.php"> <button>Logout</button></a>
>>>>>>> 428b91999bafc9deeedcc25eaae0d87e6df6d360
</body>
</html>