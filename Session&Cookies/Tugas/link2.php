<style>
    *{
        box-sizing : border-box;
    }
</style>

<?php include "header.php"; ?>

<?php
session_start();
if((isset($_GET['aksi'])) and ($_GET['aksi'] == "logout")){
    session_destroy();
    header("refresh;3;proses_radio.php");
}
if(isset($_SESSION['login'])){
    $nama = $_SESSION['username'];
    echo "<center>";
    echo "<p>Username : <b>".$nama."</b></p>";
    echo "<p><a href = 'link1.php'>Link 1&nbsp</a>
    <a href = 'link2.php'>Link 2&nbsp</a>
    <a href = 'link3.php'>Link 3&nbsp</a></p>";
    echo "<p>Ini adalah isi dari halaman Link 2</p>";
    ?>
    <a href = "?aksi=logout">Logout</a></body>
</center>
<?php
}else{
    header("location:login.php");
}
?>
<?php include "footer.php"; ?>