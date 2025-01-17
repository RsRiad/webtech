<?php session_start();
if(!isset($_SESSION["name"]))
header("Location: ../view/profile.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
</head>
<body>
    <?php echo $_SESSION["name"]."<br>";?>
    <?php echo $_SESSION["email"]."<br>";?>
    <?php echo $_SESSION["phone"]."<br>";?>
    <?php echo $_SESSION["password"]."<br>";?>
    <?php echo $_SESSION["availableTime"]."<br>";?>
    <?php print_r($_SESSION) ?>
    <a href="../control/ssessionout.php">Logout</a>
</body>
</html>