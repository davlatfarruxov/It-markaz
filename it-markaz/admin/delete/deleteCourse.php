<?php include_once '../core/courseController.php';?>
<?php
$obj = new Kurs();
if (isset($_GET['id'])) {
    $id = intval($obj->filtr($_GET['id']));

    if ($obj->delete($id)) {
        ?>
        <script>
            alert("O'chirildi");
            window.location.href="../kurs.php";
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Xato");
            window.location.href="../kurs.php";
        </script>
        <?php
    }
}
?>