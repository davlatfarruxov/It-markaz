<?php include_once './main/head.php' ?>
  <body>
    <div class="container-scroller">
      <?php include_once './main/sidebar.php' ?>
      <div class="container-fluid page-body-wrapper">
        <?php include_once './main/navbar.php' ?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <nav aria-label="breadcrumb">
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Yangilik kiritish</h4>
                    <form class="forms-sample" action="./send/newsSend.php" method="POST">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Yangilik sarlavhasi</label>
                        <input name="sarlavha" type="text" class="form-control" id="exampleInputUsername1" placeholder="Sarlavha">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Yangilik matni</label>
                        <input name="matn" type="text" class="form-control" id="exampleInputEmail1" placeholder="Matn">
                      </div>
                      <button  type="submit" class="btn btn-primary mr-2">Yuborish</button>
                    </form>
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