<?php
    session_start();
    if(isset($_POST['login'])){
        if(($_POST['nama'] == "") && ($_POST['pass'] == "")){
            echo "Username dan Password masih kosong"; 
            session_destroy();
        }else{
            // user = "roihan" & password = "bangbang123"
            if(($_POST['nama'] == "roihan" ) && ($_POST['pass'] == "bangbang123")){
                $_SESSION['login'] = 1;
                $_SESSION['username'] = $_POST['nama'];
            }
            if((isset($_POST['login'])) && ($_SESSION['login'] == 1)){
                header('Location: submit_formlogin.php');
                exit();
            }
        }
    }
?>
<html>
<head>
    <title>Session</title>
</head>
<body>
    <form name="session" method = "POST" action = "">
        <p>Form Login</p>
        <p>User Name <input type="text" name="nama"></p>
        <p>Password <input type="password" name="pass"></p>
        <input type="submit" value="Log In" name = "login">
    </form>
</body>
</html>
