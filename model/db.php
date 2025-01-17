<?php

class mydb
{
    function createConObj()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";

        $conn = new mysqli($servername, $username, $password);

        $dbname = "myDB";


        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    function insertData($conn, $table, $vname, $email)
    {
        $sql = "INSERT INTO $table (vname, email) VALUES ('$vname', '$$email')";
        return $conn->query($sql);
    }
    function closeCon($conn)
    {
        $conn->close();
    }
}
