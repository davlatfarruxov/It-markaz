<?php include_once '../core/courseController.php';?>
<?php
$obj = new Kurs();
if (isset($_POST)) {
    if ($obj->update($_POST)==200) {
        ?>
        <script>
            alert("Yozildi");
            window.location.href = "../kurs.php";
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Xatolik yuz berdi");
            window.location.href = "../kurs.php";
        </script>
        <?php
    }
}
?>