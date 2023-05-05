<?php include_once '../core/newsController.php';?>
<?php
$obj = new Yangilik();
if (isset($_POST)) {
    if ($obj->update($_POST)==200) {
        ?>
        <script>
            alert("Yozildi");
            window.location.href = "../yangilik-kurish.php";
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Xatolik yuz berdi");
            window.location.href = "../yangilik-kurish.php";
        </script>
        <?php
    }
}
?>