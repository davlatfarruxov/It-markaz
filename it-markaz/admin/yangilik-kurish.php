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
                    <div class="table-responsive">
                      <table class="table table-dark">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> Sarlavha </th>
                            <th> Matn </th>
                            <th> Amallar </th>
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
                                <?php echo implode(' ', array_slice(explode(' ', $value['sarlavha']), 0, 7))."..."?>
                              </td>
                              <td style="width: 150px;">
                                <?php echo implode(' ', array_slice(explode(' ', $value['matn']), 0, 5))."...";?>
                              </td>
                              <td>
                                <button onclick="deleted(<?=$value['id']?>)" class="btn btn-danger btn-fw">O'chirish</button>
                                <a href="newsUpdate.php?id=<?=$value['id']?>">
                                  <button class="ml-3 btn btn-success btn-fw">Tahrirlash</button>
                                </a>
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
            
            
            <?php include_once 'main/footer.php'?>
        </div>
      </div>
    </div>
    <?php include_once 'script/script.php' ?>
    <script>
              function deleted(id) {
                if (confirm("O'chirishni tasdiqlang!")==true) {
                  window.location.href = "delete/deleteNews.php?id="+id;
                }
              }
      </script>
  </body>
</html>