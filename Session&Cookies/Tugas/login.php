<?php
session_start();
$username = array("Ali", "Bona", "Charlie", "Dede", "Emon");
$password = array("password1", "password2", "password3", "password4", "password5");

if(isset($_POST['login'])){
    $inputUsername = $_POST['nama'];
    $inputPassword = $_POST['pass'];

    if($_POST['nama'] == "" || $_POST['pass'] == ""){
        echo "Username dan Password masih kosong"; 
        session_destroy();
    } else {
        $isValid = false;
        // Memeriksa apakah input username dan password cocok dengan nilai dalam array
        for ($i = 0; $i < count($username); $i++) {
            if($_POST['nama'] == $username[$i] && $_POST['pass'] == $password[$i]){
                $isValid = true;
                break;
            }
        }
        if ($isValid) {
            $_SESSION['login'] = 1;
            $_SESSION['username'] = $_POST['nama'];
            header('Location: berhasil.php');
            exit();
        } else if(!in_array($_POST['nama'], $username)){
            echo "<script>alert('Username tidak terdaftar');</script>";
        }else{
            echo "<script>alert('Password Salah');</script>";
        }
    }
}
?>


<html>
<head>
    <title>Login</title>
    <style>
        *{
            padding : 0;
            margin : 0;
            box-sizing : border-box;
        }
        body{
            background-color : #f4f4f4;
        }
        .h2-pos{
            bottom: 20px;
        }
        .container{
            width : 100%;
            padding-right : 15px;
            padding-left : 15px;
            margin-right : auto;
            margin-left : auto;
            padding: 20px;
            margin-bottom: 219px;
        }
        .wrap{
            display : flex;
            justify-content : center;
        }

        .box{
            width : 350px; 
            margin-top : 100px;
            position : relative;
            display : flex;
            flex-direction : column;
            min-width : 0;
            word-wrap : break-word;
            background-color: #fff;
            background-clip : border-box;
            border : 1px solid rgba(0, 0, 0, .125);
            border-radius : 0.25rem;
        }
        .box-body{
            flex : 1 1 auto;
            min-height: 1px;
            padding : 1.25rem;
        }
        h2{
            font-size : 2rem;
            text-align: center;
        }
        label{
            display : inline-block;
            margin-bottom : 0.5rem;
        }
        .form-c{
            display : block;
            width : 100%;
            padding : 5px 5px ;
            font-size : 1rem;
            font-weight : 400;
            line-height : 1.5;
            color : #495057;
            background-color : #fff;
            background-clip : padding-box;
            border : 1px solid #ced4da;
            border-radius : 0.25rem;
        }
        .btn{
            display : inline-block;
            font-weight : 400;
            text-align : center;
            vertical-align : middle;
            user-select : none;
            border : 1px solid transparent;
            padding : 0.375rem 0.75rem;
            font-size : 1rem;
            border-radius : 0.25rem;
            line-heigh t: 1.5;
        }
        .btn-warna{
            width : 100%;
            color : #fff;
            background-color : #007bff;
            border-color : #007bff;
        }
    </style>
</head>
<body>
    <?php include "header.php"; ?>
    <div class="container">
        <div class="wrap">
            <div class="box">
                <div class="box-body">
                    <form action = "" method = "post">
                        <h2>Login</h2><br>
                        <label for = "username">Username</label>
                        <input type = "text" name = "nama" class = "form-c" required> <br>
                        <label for = "password">Password</label>
                        <input type = "password" class = "form-c" name = "pass" required> <br>
                        <input type = "submit" name = "login" value = "Log In" class = "btn btn-warna">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>