<?php include '../control/reg_control.php' ?>

<!DOCTYPE html>
<html>

<head>
    <title>Veterinarian Registration Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/design.css">

</head>

<body>
    <h1 id="reg-title">Veterinarian Registration Form</h1>
    <form action="" method="post">

        <table class="tb">
            <tr >
                <td class="txt">Name:</td>
                <td><input type="text" class="sp" id="name" name="name"></td>
                <td class="open-sans-new"><?php echo $unanmeError; ?></td>
            </tr>
            <tr>
                <td class="txt">Email:</td>
                <td><input type="email"class="sp" id="email" name="email"></td>
            </tr>
            <tr>
                <td class="txt">Phone Number:</td>
                <td><input type="tel"class="sp" id="phone" name="phone"></td>
                <td><?php echo $phoneError; ?></td>
            </tr>
            <tr>
                <td class="txt">License Number:</td>
                <td><input type="number"class="sp" id="license" name="license"></td>
            </tr>
            <tr>
                <td class="txt">Address:</td>
                <td><textarea id="address" class="sp" name="address"></textarea></td>
            </tr>
            <tr>
                <td class="txt">Specialization Field:</td>
                <td><input type="text"class="sp" id="specialization" name="specialization"></td>
            </tr>
            <tr>
                <td class="txt">Available Time:</td>
                <td><input type="date"class="sp" id="availableTime" name="availableTime"></td>
                <td><?php echo $dateError; ?></td>
            </tr>
            <tr>
                <td class="txt">Password:</td>
                <td><input type="password"class="sp" id="password" name="password"></td>
                <td><?php echo $passError; ?></td>
            </tr>
            <tr>
                <td class="txt">Confirm Password:</td>
                <td><input type="password"class="sp" id="confirmPassword" name="confirmPassword"></td>
            </tr>
            <tr>
                <td><input type="submit"class="btn" value="Register"></td>
            </tr>
        </table>
    </form>
</body>

</html>