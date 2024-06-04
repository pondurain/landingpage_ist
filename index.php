<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>IST</title>
<?php
session_start();
error_reporting(0);
?>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- meta -->
    <meta name="name" content="IST" />

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <script src="plugins/jQuery/jquery.min.js"></script>
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css"> 
    <link rel="stylesheet" href="plugins/toast/dist/jquery.toast.min.css"> 
    <!-- <link rel="stylesheet" href="plugins/toast/jquery.toast.min.css"> --> 
    

    <!-- Main Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="preload" href="fonts/NotoSans-Regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/NotoSans-Bold.woff2" as="font" type="font/woff2" crossorigin>

</head>

<body>
    <!-- hero area -->
    <section class="hero-section hero" data-background=""
        style="background-image: url(images/hero-area/banner-bg.png);">
        <div class="container">
            <div class="row">
                <div class="navbar-brand col-lg-3"><a href="index.php"><img src="images/logo.png" alt="logo"></a></div>
                <div class=" col-lg-8 social_link zindex-1">

                    <a href="https://www.facebook.com/istglobalapp" target="_blank" class=""> <img src="images/facebook.png" alt="">
                    </a>
                    <a href="https://www.instagram.com/ist.global" target="_blank" class=""> <img src="images/instagram.png" alt="">
                    </a>
                    <a href="https://www.linkedin.com/company/istglobal" target="_blank" class=""> <img src="images/linkedin.png"
                            alt=""> </a>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="hero_content">
                    <div class="col-lg-6 hero_content_txt " style= "z-index:9999;">
                        <h1 class="mb-12 white hero-text">Connecting
                            <br>
                            Dreams
                        </h1>
                        <p class="white">Step into a world where dreams are not
                            just dreams, but the seeds of possibility.</p>

                        <p class="white hero-sec-text">Are you ready to connect?</p>

                        <div class="app-store-icon" style= "cursor:pointer;">
                            <a href="https://play.google.com/store/apps/details?id=com.app.istapp" target="_blank" class=""> <img src="images/playstore.png" alt=""> </a>
                            <a href="https://apps.apple.com/us/app/ist/id6448634165" class="" target="_blank"> <img src="images/app-store.png" alt=""> </a>
                        </div>
                    </div>

                    <div class="hand_mockup zindex-1">

                        <img src="images/hand_mockup.png" alt="hand_mockup">

                    </div>

                </div>



            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="as_seen_on">
                    <img src="images/as_seen_on.png" alt="">

                </div>


            </div>
        </div>


    </section>
    <!-- /hero-area -->

    <section class="col-lg-12 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 category">

                    <div class="category-img">
                        <img src="images/category_icons.png" alt="">

                    </div>

                    <p class="white category-txt">
                        ist – Don't just dream it, ignite it.<br>
                        Get started, the investors are waiting
                    </p>


                </div>

            </div>
        </div>

    </section>


    <section class="col-lg-12 visualisation-section ">
        <div class="container">
            <div class="row">
                <div class="visualisation">

                    <div class="visualisation-img">
                        <img src="images/visualisation.png" alt="">

                    </div>

                    <h2 class="h2 white visualisation-txt1">
                        Ignite Your Imagination
                    </h2>
                    <p class="white">
                        Step into territories where dreams know no limits.<br>
                        Are you in? With innovation as our compass and a<br>
                        vision to elevate every dream, we embark on a<br>
                        journey to create success stories together.++

                    </p>
                    <div class="visualisation1">
                        <h2 class="h2 white visualisation-txt1">
                            Your Path, Our Purpose
                        </h2>
                        <p class="white">
                            We're in the business of dreams; throughout every<br>
                            win, every setback - we're here for it all. Cheering<br>
                            you on and pushing your boundaries of brilliance.

                        </p>

                    </div>


                </div>

            </div>
        </div>

    </section>


    <section class="col-lg-12 contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 Connect">
                    <h3 class="white">Let’s Connect</h3>
                    <div class="Connect-form">
                        <form action="mail.php" method="post">
                            <input type="text" id="name" name="Name" placeholder="Name" required>
                            <input type="email" id="email" name="Email" placeholder="Email" required>
                            <textarea id="subject" name="message" placeholder="Message" required></textarea>
                            <input type="submit" value="Submit" style=" cursor: pointer;">
                        </form>
                    </div>
                    <p class="white">© <?php echo date('Y'); ?> ist</p>
                </div>


                <div class="col-lg-8 HL_Yin">
                    <p class="white">
                        Powered by
                    </p>

                    <img src="images/HL_Yin.png" alt="">
                </div>
                <div class="Connect-bg" style="z-index: -1 !important;">
                    <img src="images/mockups.png" alt="">
                </div>
            </div>
        </div>

    </section>


<?php 

?>
    <!-- jQuery -->
    <script src="plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/toast/dist/jquery.min.js"></script> 
    <script src="plugins/toast/dist/jquery.toast.min.js"></script>
    <?php if(isset($_SESSION['message']) && $_SESSION['message'] == "success"): ?>
    <script>
        $(document).ready(function() {
            $.toast({
                text: "Thanks for dropping us a line! We'll circle back with you in 48 hours tops. Stay awesome! Grey color background", 
                showHideTransition: 'fade',
                allowToastClose: true,
                hideAfter: 5000,
                stack: 5,
                position: 'top-right',
                bgColor: '#444444',
                textColor: '#eeeeee',
                textAlign: 'left',
                loader: false,
                loaderBg: '#9EC600',
                beforeShow: function () {},
                afterShown: function () {},
                beforeHide: function () {},
                afterHidden: function () {
                    // After the toast is hidden, unset the session after 7 seconds (7000 ms)
                    setTimeout(function() {
                        <?php unset($_SESSION['message']); ?>
                    }, 5000);
                }
            });
        });
    </script>
<?php 

endif; ?>

</body>

</html>