<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>fictivemakeovers</title>
        <?php wp_head();?>
    </head>
    <body>
        <div class="container">

            <!-- header -->
            <header class="header" id="header">
                <div class="brand">
                    <a href="index.php"><img src="<?php echo get_theme_file_uri('/img/brand-logo.jpg');?>" alt="Fictivemakeovers" width="150px" height="150px" style="border-radius: 50%;"></a>
                </div>
                <nav class="header-nav">
                    <div class="brand-name">fictive makeovers<i id="active" style="text-decoration-line: underline; color:#EBBA4D;">.</i></div>
                    <ul class="nav-items">
                        <li><a href="#" id="active">HOME</a></li>
                        <li><a href="#section2">ABOUT</a></li>
                        <li><a href="#">SERVICES</a></li>
                        <li><a href="#">PORTFOLIO</a></li>
                        <li><a href="#">BOOK US</a></li>
                        <li><a href="#">CONTACT US</a></li>   
                    </ul>
                </nav>
            </header>
            <!-- header -->

            <!-- section1 -->
            <section class="section1">
                <h1 style="font-size:90px; font-weight:100; color:#38393b;">fictive makeovers<span style="color:#EBBA4D;">.</span></h1>
                <br><br><br><br><br><br><br><br><br>
                <p>MAKEUP RE-DEFINED</p>
            </section>
            <!-- section1 -->

            <!-- section2 -->
            <section class="section2" id="section2">
                    <h1>ABOUT US</h1>
                    <p>
                        We believe in crafting unique looks that unapologetically exude the brides’ passions and personality. From regal radiance to sober elegance, customised bridal looks can be planned and perfected to match your wedding
                        theme, venue and/or trousseau. Consultation is the key – share your ideas with us and let our expertise in bridal trends and high-end products guide  you through a magical experience. Our bridal services make sure that you enjoy the wedding celebrations with no regrets.
                    </p>
                    <img src="<?php echo get_theme_file_uri('/img/section2(1).jpg');?>" alt="Section Image" height="100%" width="98%">
            </section>
            <!-- section2 -->

            <!-- footer -->
            <footer class="footer">
                <a href="#header"><i class="fa fa-chevron-up fa-3x" style="color:#EBBA4D; padding-bottom:1rem;"></i></a>
                <div class="footer-content">
                    <p style="color:white;"><i>@ 2020 by Fictive Makeovers. Site by <a href="https://www.thedelhidigital.com" style="color:white;">Delhi Digital Co.</a></i></p>
                </div>
                <div class="footer-links">
                    <a href="https://www.facebook.com/Fictive-Makeovers-2248832671821728/"><i class="fa fa-facebook-official fa-2x" style="color:white;"></i></a>
                    <a href="https://www.instagram.com/fictivemakeovers/"><i class="fa fa-instagram fa-2x" style="color:white; padding-left:1rem;"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=917838568324&text=Hey!%20I%20loved%20your%20website,%20let%27s%20talk?" style="color:white; padding-left:1rem;"><i class="fa fa-whatsapp fa-2x"></i></a>
                </div>
            </footer>
            <!-- footer -->

        </div>

        <?php wp_footer();?>

    </body>
</html>

        
