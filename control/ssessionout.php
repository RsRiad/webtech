<!DOCTYPE html>
<body>
<?php
    session_start();
    //session_unset();
    if(session_destroy())
    header("Location: ../view/Veterinarian.php");
?>
</body>
</html>