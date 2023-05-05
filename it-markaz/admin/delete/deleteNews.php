<?php include_once '../core/newsController.php';?>
<?php
$obj = new Yangilik();
if (isset($_GET['id'])) {
    $id = intval($obj->filtr($_GET['id']));

    if ($obj->delete($id)) {
        ?>
        <script>
            alert("O'chirildi");
            window.location.href="../yangilik-kurish.php";
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Xato");
            window.location.href="../yangilik-kurish.php";
        </script>
        <?php
    }
}
?>