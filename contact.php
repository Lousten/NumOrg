<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "inc/header.php"?>

    <!-- page wrapper -->

<body>

    <div class="boxed_wrapper">

        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>        
            <div class="layer layer-three"><span class="overlay"></span></div>        
        </div>

        <?php include "inc/menu.php"?>
        <?php $title="Contact Us"; $way=null; ?>
        <?php include "inc/other/bread.php"?>


        <!-- contact-section -->
        <section class="contact-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                        <figure class="image-box wow slideInLeft animated animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="assets/images/resource/contact-1.jpg" alt=""></figure>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                        <div id="content_block_seven">
                            <div class="content-box">
                                <div class="sec-title">
                                    <h6>Get in Touch</h6>
                                    <h2>Any Question? <br /><span>Write down and send us</span></h2>
                                </div>
                                <form method="post" action="assets/inc/sendemail.php" id="contact-form" class="default-form"> 
                                    <div class="form-group">
                                        <p><i class="far fa-user"></i>Name</p>
                                        <input type="text" name="username" required="">
                                    </div>
                                    <div class="form-group">
                                        <p><i class="far fa-envelope"></i>Email</p>
                                        <input type="email" name="email" required="">
                                    </div>
                                    <div class="form-group">
                                        <p><i class="far fa-star"></i>Subject</p>
                                        <input type="text" name="subject" required="">
                                    </div>
                                    <div class="form-group">
                                        <p><i class="far fa-comment-dots"></i>Message</p>
                                        <textarea name="message"></textarea>
                                    </div>
                                    <div class="form-group message-btn">
                                        <button class="theme-btn style-one" type="submit" name="submit-form">Send a Message<i class="flaticon-login"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->


        <!-- contactinfo-section -->
        <section class="contactinfo-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 column">
                        <div class="single-item">
                            <h3>Main Office</h3>
                            <div class="inner">
                                <div class="icon-box"><i class="flaticon-pin"></i></div>
                                <p><strong>İstanbul, Turkey <br /></strong>Molla Gürani Mah. <br>Turgut Özal Millet Cad.No:84 Fatih - İstanbul - Turkey</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 column">
                        <div class="single-item">
                            <h3>Make a Call</h3>
                            <div class="inner">
                                <div class="icon-box"><i class="flaticon-clock"></i></div>
                                <p><strong><a href="tel:+905349632505">+905349632505</a> <br><a href="tel:+905349632502">+905349632502</a> <br /></strong>Mon - Sat: 09am to 07pm</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 column">
                        <div class="single-item">
                            <h3>Send a Mail</h3>
                            <div class="inner">
                                <div class="icon-box"><i class="flaticon-mail"></i></div>
                                <p><strong><a href="mailto:info@namorganikkimya.com">info@namorganikkimya.com</a> <br /></strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contactinfo-section end -->


        <!-- google-map-section -->
        <section class="google-map-section style-two">
            <div class="auto-container">
                <div class="map-inner">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48117.82421305561!2d28.94376436402105!3d41.08289259887319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab6ea321836e1%3A0xbf71b4bd7c23d138!2zS8OixJ_EsXRoYW5lL8Swc3RhbmJ1bA!5e0!3m2!1str!2str!4v1603191740694!5m2!1str!2str" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
               
            </div>
        </section>
        <!-- google-map-section end -->


        <?php include "inc/footer.php"?>


    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="flaticon-up-arrow"></span>
    </button>
    </div>

    <?php include "inc/js.php"?>
</body><!-- End of .page_wrapper -->
</html>
