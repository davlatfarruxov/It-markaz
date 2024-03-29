<?php
    include_once './main/head.php';
   
?>
<?php
    include_once './main/header.php';
?>
    <body class="home-style3">
        
        <!--Preloader area start here-->
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="assets/images/pre-logo.png" alt="">
                </div>
            </div>
        </div>
        <!--Preloader area End here-->

		<!-- Main content Start -->
        <div class="main-content">
            <!-- Banner Section Start -->
            <div id="rs-banner" class="rs-banner style3">
                <div class="container pt-90 md-pt-50">
                    <div class="banner-content pb-13">
                        <div class="row">
                            <div class="col-lg-7">
                                <h1 class="banner-title white-color wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="3000ms">Samarqand Davlat Universiteti </br> IT Markazi</h1>
                                <div class="banner-desc white-color wow fadeInRight" data-wow-delay="500ms" data-wow-duration="4000ms"></div>
                                <ul class="banner-btn wow fadeInUp" data-wow-delay="700ms" data-wow-duration="2000ms">
                                    <li><a class="readon3 active" href="contact.php">Rezidentlikga ariza</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="banner-image hidden-md">
                            <div id="stuff">
                                <div data-depth="0.3">
                                    <img src="assets/images/banner/bnr3-top.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner Section End -->

            <!-- About Section Start -->
            <div id="rs-about" class="rs-about style3 pt-100 md-pt-70">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-4 lg-pr-0 md-mb-30">
                            <div class="about-intro">
                                <div class="sec-title">
                                    <div class="sub-title primary">Biz haqimizda</div>
                                    <h2 class="title mb-21">SamDU IT Markazi</h2>
                                    <div class="desc big">Samarqand Davlat Universiteti tomonidan tashkil etilgan, zamonaviy kasblarni o'rganishga ixtisoslashtirilgan markaz</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 pl-83 md-pl-15">
                            <div class="row rs-counter couter-area">
                                <div class="col-md-4 sm-mb-30">
                                    <div class="counter-item one">
                                        <img class="count-img" src="assets/images/about/style3/icons/1.png" alt="">
                                        <h2 class="number rs-count kplus">1</h2>
                                        <h4 class="title mb-0">O'quvchilar</h4>
                                    </div>
                                </div>
                                <div class="col-md-4 sm-mb-30">
                                    <div class="counter-item two">
                                        <img class="count-img" src="assets/images/about/style3/icons/2.png" alt="">
                                        <h2 class="number rs-count">3.50</h2>
                                        <h4 class="title mb-0">O'rtacha natija</h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="counter-item three">
                                        <img class="count-img" src="assets/images/about/style3/icons/3.png" alt="">
                                        <h2 class="number rs-count percent">90</h2>
                                        <h4 class="title mb-0">Bitiruvchilar</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End --> 

            <!-- Subject Categories Section Start -->
            <div id="rs-subject" class="rs-subject style1 pt-94 pb-70 md-pt-64 md-pb-40">
                <div class="container">
                    <div class="sec-title mb-60 text-center md-mb-30">
                        <div class="sub-title primary">Yo'nalishlar</div>
                        <h2 class="title mb-0">Bizning Yo'nalishlar</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="subject-wrap bgc1">
                                <img src="assets/images/subject/icons/1.png" alt="">
                                <h4 class="title"><a href="#">Loyihalar ishlab chiqish</a></h4>
                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="subject-wrap bgc2 text-light">
                                <img src="assets/images/subject/icons/2.png" alt="">
                                <h4 class="title"><a href="#">Sun'iy Intellekt</a></h4>
                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="subject-wrap bgc3">
                                <img src="assets/images/subject/icons/3.png" alt="">
                                <h4 class="title"><a href="#">Grafik Dizayn</a></h4>
                                
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 mb-30">
                            <div class="subject-wrap bgc4">
                                <img src="assets/images/subject/icons/7.png" alt="">
                                <h4 class="title"><a href="#">Robototexnika</a></h4>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Subject Categories Section End -->

            <!-- Popular Course Section Start -->
            <div class="rs-popular-courses style2 bg3 pt-94 pb-200 md-pt-64 md-pb-90" id="kurslar">
                <div class="container">
                    <div class="sec-title mb-60 text-center md-mb-30">
                        <div class="sub-title primary">Kurslar</div>
                        <h2 class="title mb-0">Bizning kurslar</h2>
                    </div>
                    <?php
                        require_once "admin/core/courseController.php";
                        $obj = new Kurs();
                        $sql = "SELECT * FROM kurs ORDER BY id DESC LIMIT 3";

                        $back = mysqli_query($obj->db, $sql);

                        $course = mysqli_fetch_all($back, MYSQLI_ASSOC);
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
                                            <div class="btn-part">
                                                <a class="readon-arrow" href="course.php?id=<?=$val['id']?>">Ko'proq</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- Popular Course Section End -->


            <!-- Blog Section Start -->
            <div id="rs-blog" class="rs-blog style1 modify1 pt-85 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="sec-title mb-60 md-mb-30 text-center">
                        <div class="sub-title primary">Yangiliklar </div>
                        <h2 class="title mb-0">So'nggi yangiliklar</h2>
                    </div>
                    <?php
                        require_once "admin/core/newsController.php";
                        $obj = new Yangilik();
                        $news = $obj->select();
                    ?>
                    <div class="row">
                        <div class="col-lg-11 pr-60 md-pr-15 md-mb-30">
                            <?php
                                foreach($news as $key => $val){
                            ?>
                                <div class="row no-gutter white-bg blog-item">                                
                                    <div class="col-md-4 order-last">
                                        <div class="image-part">
                                            <a href="yangilik.php?id=<?=$val['id']?>"><img src="assets/images/blog/style3/2.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="blog-content">
                                            <ul class="blog-meta">
                                                <li><i class="fa fa-user-o"></i> Admin</li>
                                                <li><i class="fa fa-calendar"></i><?=$val['sana']?></li>
                                            </ul>
                                            
                                            <h3 class="title"><a href="yangilik.php?id=<?=$val['id']?>"><?=$val['sarlavha']?></a></h3>
                                            <div class="btn-part">
                                                <a class="readon-arrow" href="yangilik.php?id=<?=$val['id']?>">Ko'proq</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Section End -->

           
        </div> 
        <!-- Main content End --> 
        <?php
            include_once './main/footer.php';
        ?>
        