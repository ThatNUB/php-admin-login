<?php
    /*
        This file is the login form.
        You can change it as much as you want.
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        
        .form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50%;
            height: fit-content;
        }
        .form input[type=submit] {
            display: block;
            width: 100%;
            margin: 0;
        }
        
        .form input {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <form method="POST" action="/" class="form">
        <?php
            // Please do not delete this if because it is what makes the error message. 
            if (isset($_GET["alert"]) && $_GET["alert"] == "1") {
                echo '<p class="alert alert-danger">' . $login_failed . '</p>';
            }
        ?>
        <div class="form-group">
            <input class="form-control" type="text" name="user" placeholder="Username">
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <input class="btn btn-success" type="submit" value="Login">
        </div>
    </form>
</body>
</html>