<?php include_once './main/head.php' ?>

  <body>
    <div class="container-scroller">
      <?php include_once './main/sidebar.php' ?>
      <div class="container-fluid page-body-wrapper">
        <?php include_once './main/navbar.php' ?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Kurslar </h3>
            </div>
            <div class="row">
              
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-primary">Kurslar</h4>
                    <p class="card-description"> Wrap in <code>&lt;u&gt;</code> tag for underline </p>
                    <p>
                      <u>lorem ipsum dolor sit amet, consectetur mod tempor incididunt ut labore et dolore magna aliqua.</u>
                    </p>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title text-danger">Lowercase</h4>
                    <p class="card-description"> Use class <code>.text-lowercase</code>
                    </p>
                    <p class="text-lowercase"> lorem ipsum dolor sit amet, consectetur mod tempor incididunt ut labore et dolore magna aliqua. </p>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title text-warning">Uppercase</h4>
                    <p class="card-description"> Use class <code>.text-uppercase</code>
                    </p>
                    <p class="text-uppercase"> lorem ipsum dolor sit amet, consectetur mod tempor incididunt ut labore et dolore magna aliqua. </p>
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