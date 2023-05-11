<?php
include_once './main/head.php';
?>
<?php
include_once './main/header.php';
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

    <!--Preloader area start here-->
    <div id="loader" class="loader">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="assets/images/pre-logo.png" alt="">
                </div>
            </div>
        </div>
    <div class="main-content">
        <div class="contact-page-section pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="rs-quick-contact mt-80">
                    <div class="inner-part text-center mb-50">
                        <h2 class="title mb-15">Rezident bo'lish uchun ariza topshiring.</h2>
                    </div>
                    <div id="form-messages"></div>
                    <form id="contact-form " method="POST" action="admin/send/residentSend.php">
                        <div class="row">
                            <div class="col-lg-6 mb-35 col-md-12">
                                <input class="from-control" type="text" id="name" name="nomi" placeholder="F. I. O."
                                    required="">
                            </div>
                            <div class="col-lg-6 mb-35 col-md-12">
                                <input class="from-control" type="email" id="email" name="email" placeholder="Email"
                                    required="">
                            </div>
                            <div class="col-lg-12 mb-35 col-md-12">
                                <input name="phone" class="from-control" type="phone" id="phone" name="phone"
                                    placeholder="Tel:" required="">
                            </div>

                            <div class="col-lg-12 mb-50">
                                <textarea class="from-control" id="message" name="maqsad" placeholder="Xabar"
                                    required=""></textarea>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <input class="btn-send" type="submit" value="Yuborish">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->
    </div>
    <?php
    include_once './main/footer.php';
    ?>