<?php
    /*
        This file contains the login stuff.
        Do *not* change unless you know what you're doing!
    */
    include "config.php";
?>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        include "templates/login.php";
    } else {
        if ($_POST["user"] == $admin_user && $_POST["password"] == $admin_password) {
            include "templates/dashboard.php";
        } else {
            header("Location: /index.php?alert=1");
        }
    }
?>