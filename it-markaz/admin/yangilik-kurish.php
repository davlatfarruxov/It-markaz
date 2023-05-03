<?php include_once './main/head.php' ?>
<?php include_once './core/newsController.php'?>
<?php
  $obj = new Yangilik();
  $yangilik = $obj->select();
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
                    <h4 class="card-title">Yangiliklarni ko'rish</h4>
                    <p class="card-description"> Kiritilgan yangiliklar...
                    </p>
                    <div class="table-responsive">
                      <table class="table table-dark">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> Sarlavha </th>
                            <th> Matn </th>
                            <th> Qo'shilgan vaqti </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?
                          foreach($yangilik as $key=>$value){
                            ?>
                            <tr>
                              <td>
                                <?=$value['id']?>
                              </td>
                              <td>
                                <?=$value['sarlavha']?>
                              </td>
                              <td>
                                <?=$value['matn']?>
                              </td>
                              <td>
                                <?=$value['sana']?>
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
            <?php include_once './main/footer.php'?>
        </div>
      </div>
    </div>
    <?php include_once './script/script.php' ?>
  </body>
</html>