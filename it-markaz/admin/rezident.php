<?php include_once './main/head.php' ?>
<?php include_once 'core/residentController.php' ?>
<?php
$obj = new Resident();
$rezident = $obj->select();
?>

<body>
  <div class="container-scroller">
    <?php include_once './main/sidebar.php' ?>
    <div class="container-fluid page-body-wrapper">

      <?php include_once './main/navbar.php' ?>

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
          </div>
          <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Rezidentlar ro'yxati</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> User </th>
                          <th> F. I. O. </th>
                          <th> Email </th>
                          <th> Tel </th>
                          <th> Xabar </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        foreach ($rezident as $key => $value) {
                          ?>
                          <tr>
                            <td class="py-1">
                              <img src="assets/images/faces-clipart/pic-1.png" alt="image" />
                            </td>
                            <td>
                              <?= $value['nomi'] ?>
                            </td>
                            <td>
                              <?= $value['email'] ?>
                            </td>
                            <td>
                              <?= $value['phone'] ?>
                            </td>
                            <td>
                              <?= $value['maqsad'] ?>
                            </td>
                          </tr>
                          <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <?php include_once './main/footer.php' ?>
      </div>
    </div>
  </div>
  <?php include_once './script/script.php' ?>
</body>

</html>