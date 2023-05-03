<?php include_once '../core/courseController.php';
$obj = new Kurs();
if (isset($_POST)) {
    if ($obj->insert($_POST)==200) {
        ?>
        <script>
            alert("Yozildi");
            window.location.href = "../kurs-kiritish.php";
        </script>
        <?php
    }else {
        ?>
        <script>
            alert("Xatolik yuz berdi");
            window.location.href = "../kurs-kiritish.php";
        </script>
        <?
    }
}
?>