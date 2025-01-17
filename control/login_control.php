<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Validation</title>
</head>

<body>
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";


    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];


        $sql = "SELECT password FROM VeterinarianData WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $dbPassword = $row['password'];
            if (($password == $dbPassword)) {
                echo "Login successful!";
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "No user found with this email.";
        }
    }

    // Close connection
    $conn->close();
    ?>

</body>

</html>