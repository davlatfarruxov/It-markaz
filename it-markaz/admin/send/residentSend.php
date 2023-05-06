<?php include_once '../core/residentController.php'; ?>
<?php
$obj = new Resident();
if (isset($_POST)) {
    if ($obj->insert($_POST) == 200) {
        ?>
        <script>
            alert("Ro'yxatdan o'tish muvaffaqqiyatli yakunlandi!");
            window.location.href = "../index.php";
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Xatolik yuz berdi!");
            window.location.href = "../../contact.php";
        </script>
        <?php
    }
}
?>