<?php
include '../model/db.php';
session_start();

$unanmeError = "";
$passError = "";
$dateError = "";
$phoneError = "";
$ec = 0;
//../control/reg_control.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $mydb = new mydb();
    // $conobj = $mydb->createConObj();
    // $result = $mydb->insertData($conobj, "veterinariandata", $_POST["name"], $_POST["email"]);
    // if ($result == true) {
    //     echo "inserted";
    // } else {
    //     echo "not inserted" . $conobj->error;
    // }
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $license = $_POST["license"];
    $confirmPassword = $_POST["confirmPassword"];
    $address = $_POST["address"];
    $field = $_POST["specialization"];
    $availableTime = $_POST["availableTime"];

    $_SESSION["name"] = $_POST["name"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["phone"] = $_POST["phone"];
    $_SESSION["password"] = $_POST["password"];
    $_SESSION["availableTime"] = $_POST["availableTime"];


    if (preg_match("/\d/", $name)) {
        $unanmeError =  "Name should not contain any numbers.<br>";
        $ec++;
    } else echo $name . "<br>";

    if (!preg_match("/[@#$&]/", $password) || $password != $confirmPassword) {
        $passError = "Password must contain at least one special character (@, #, $, or &) or Passwords do not match. <br>";
        $ec++;
    } else echo $password . "<br>";


    if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $availableTime) || !strtotime($availableTime)) {
        $dateError = "Available time must be a valid date.<br>";
        $ec++;
    } else echo $_REQUEST["availableTime"] . "<br>";

    if (strlen($phone) > 11) {
        $phoneError = "Phone number must not be longer than 11 digits.<br>";
        $ec++;
    } else echo $phone . "<br>";


    if ($ec > 0) {
        echo "Please insert correct data to save in json file";
    } else {
        // $data = ["username" => $name, "password" => $password, "phone" => $phone, "email" => $email, "time" => $availableTime];
        // $json = json_encode($data, JSON_PRETTY_PRINT);

        // file_put_contents("../data/userdata.json", $json);

        // // DB
        // $servername = "localhost";
        // $username = "root";
        // $password = "";
        // $dbname = "myDB";

        // $conn = new mysqli($servername, $username, $password, $dbname);

        // if ($conn->connect_error) {
        //     die("Connection failed: " . $conn->connect_error);
        // }
        // $sql = "INSERT INTO VeterinarianData (vname, email, phoneNumber,licenceNumber,address,fild,availableTime,password) VALUES ('$name',       '$email', '$phone','$license','$address','$field','$availableTime','$confirmPassword')";

        // if ($conn->query($sql) === TRUE) {
        //     echo "New record created successfully";
        // } else {
        //     echo "Error: " . $sql . "<br>" . $conn->error;
        // }


        // // Close connection
        // $conn->close();
        //header("Location: ../view/profile.php");
    }
}



?>
<?php

?>
</body>

</html>