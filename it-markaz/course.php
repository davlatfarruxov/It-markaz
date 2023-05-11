<?php include_once './main/head.php'?>
<?php include_once './main/header.php'?>
<?php include_once "admin/core/courseController.php"?>
<?php
    $obj = new Kurs();
    if (isset($_GET['id'])) {
        $id = intval($obj->filtr($_GET['id']));
        $course = $obj->selectOne($id);
    }
?>
<?php
  $obj = new Kurs();
  $kurs = $obj->select();
?>
<style>
    .full-width-header.header-style2.modify1 .rs-header .menu-area.sticky {
        background: #fff !important;
    }

    .full-width-header.header-style2.modify1 .rs-header .menu-area.sticky .main-menu .rs-menu ul.nav-menu>li>a {
        color: #111111;

    }

    .full-width-header.header-style2.modify1 .rs-header .menu-area .rs-menu-area .main-menu .rs-menu ul.nav-menu li a {
        color: #111111;
    }

    .menu-area {
        box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.2);
    }

    .btn-send {
        background-color: #21a7d0 !important;
    }

    #contact-form {
        margin-top: 180px;
    }

        .full-width-header.header-style2.modify1 .rs-header .menu-area{
            background-color: #fff !important;
        }
   
</style>
    <body class="home-style3">
        
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="assets/images/pre-logo.png" alt="">
                </div>
            </div>
        </div>

        <div class="main-content">
            
            <div class="rs-popular-courses style2 bg3 pt-94 pb-200 md-pt-64 md-pb-90" id="kurslar">
                <div class="container">
                    <div class="sec-title mb-60 text-center md-mb-30">
                        <div class="sub-title primary">Kurslar</div>
                        <h2 class="title mb-0">Bizning kurslar</h2>
                    </div>
                    <?php
                        require_once "admin/core/courseController.php";
                        $obj = new Kurs();
                        $course = $obj->select();
                    ?>
                    <div class="row">
                        <?php
                            foreach($course as $key => $val){
                        ?>
                            <div class="col-lg-4 col-md-6 mb-30">
                                <div class="course-wrap">
                                    <div class="front-part">
                                        <div class="img-part">
                                        <a href="course.php?id=<?=$val['id']?>"><img src="assets/images/courses/style2/1.png" alt=""></a>
                                        </div>
                                        <div class="content-part">
                                            <h4 class="title"><a href="course.php?id=<?=$val['id']?>"><?=$val['nomi']?></a></h4>
                                            <a class="categorie" href="course.php?id=<?=$val['id']?>"><?=$val['malumot']?></a>
                                        </div>
                                    </div>
                                    <div class="inner-part">
                                        <div class="content-part">
                                            <a class="categorie" href="course.php?id=<?=$val['id']?>"><?=$val['nomi']?></a>
                                            <h4 class="title"><a class="categorie" href="course.php?id=<?=$val['id']?>"><?=$val['malumot']?></a></h4>
                                            <ul class="course-meta">
                                            <li class="course-user"><i class="fa fa-user"></i> 29</li>
                                            <li class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div> 
        <?php
            include_once './main/footer.php';
        ?>
    </body>
        