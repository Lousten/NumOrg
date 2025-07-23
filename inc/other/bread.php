<!--Page Title-->
<section class="page-title centred" style="background: -webkit-linear-gradient(10deg, #27ae60, #3498db 50%);">
            <div class="auto-container">
                <div class="content-box">
                    <div class="title">
                        <h1><?php echo $title; ?></h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <?php 
                        if($way!=null) {
                            echo "<li>$way</li>"; 
                        }
                        ?>
                        <li><?php echo $title; ?></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->