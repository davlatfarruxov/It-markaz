<?php
include_once '../core/userController.php';
session_start();

$obj = new User();
if (isset($_POST)) {
    $data = $obj->checking($_POST);
    if ($data['text'] == 200) {
        $_SESSION['login'] = $data['data']['login'];
        $_SESSION['parol'] = $data['data']['parol'];

        ?>
        <script>
            window.location.href = "../index.php";
        </script>
        <?php
    } else {

        ?>
        <script>
            alert("Login yoki Parol xato");
            window.location.href = "../login.php";
        </script>
        <?php
    }
}

?>