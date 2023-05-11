<?php include_once './main/head.php' ?>
<?php include_once './ximoya.php'; ?>
  <body>
    <div class="container-scroller">
      <?php include_once './main/sidebar.php' ?>
      <div class="container-fluid page-body-wrapper">
        <?php include_once './main/navbar.php' ?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Form elements </h3>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Kurslar bilan tanishish</h4>
                    <p class="card-description"> Kurslar ro'yxati </p>
                    <form class="forms-sample" action="./send/courseSend.php" method="POST">
                      <div class="form-group">
                        <label for="exampleInputName1">Kurs nomi</label>
                        <input name="nomi" type="text" class="form-control" id="exampleInputName1" placeholder="Nomi">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Kurs matni</label>
                        <input name="malumot" type="text" class="form-control" id="exampleInputName1" placeholder="Matni">
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Yuborish</button>
                    </form>
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