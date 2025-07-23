<!DOCTYPE html>
<html lang="en">
<head>
<?php include "inc/header.php"?>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper">
        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">Preloader Close</div>
            </div>
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>
            <div class="layer layer-three"><span class="overlay"></span></div>
        </div>



        <?php include "inc/menu.php"?>

        <?php include "inc/index/slider.php"?>

        <?php include "inc/index/index-3box.php"?>
        
        <?php include "inc/index/index-about.php"?>
        <?php include "inc/index/index-servicies.php"?>
        <?php include "inc/index/index-why-us.php"?>
        
        <?php include "inc/index/index-form.php"?>
        
        <?php include "inc/footer.php"?>
        


        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="flaticon-up-arrow"></span>
        </button>
    </div>

    <?php include "inc/js.php"?>
    

</body><!-- End of .page_wrapper -->

</html>