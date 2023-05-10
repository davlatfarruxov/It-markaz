<?php include_once "main/head.php";?>
<?php include_once "main/header.php";?>
<?php include_once "admin/core/newsController.php"?>
<?php
    $obj = new Yangilik();
    if (isset($_GET['id'])) {
        $id = intval($obj->filtr($_GET['id']));
        $news = $obj->selectOne($id);
    }
?>
<?php
  $obj = new Yangilik();
  $yangilik = $obj->select();
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
    .full-width-header.header-style2.modify1 .rs-header .menu-area {
    background: #ffffff !important;
    }
    .rs-inner-blog.orange-color .blog-deatails .blog-full .single-post-meta li .p-date i {
        color: #21a7d0;
    }
</style>
<body class="defult-home">
        
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
            <!-- Breadcrumbs Start -->
           
            <!-- Breadcrumbs End -->            

	       <!-- Blog Section Start -->
            <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70 mt-57">
                <div class="container">
                   <div class="blog-deatails">
                        
                       <div class="blog-full">
                          
                           
                           
                           <h2 class="title mb-40"><?=$news['sarlavha']?></h2>
                           <div class="blog-desc mb-40">
                               <p><?=$news['matn']?></p>
                           </div>
                          
                       </div>
                   </div>
                </div>
            </div>
            <!-- Blog Section End -->  

           

         
    <?php include_once 'main/footer.php';?>