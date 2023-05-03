<?php include_once '../core/newsController.php';
$obj = new Yangilik();
if (isset($_POST)) {
    if ($obj->insert($_POST)==200) {
        ?>
        <script>
            alert("Yozildi");
            window.location.href = "../yangilik-kiritish.php";
        </script>
        <?php
    }else {
        ?>
        <script>
            alert("Xatlik yuz berdi");
            window.location.href = "../yangilik-kiritish.php";
        </script>
        <?
    }
}
?>