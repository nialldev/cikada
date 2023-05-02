<?php 
require_once("validation.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Contact - Cikada Circus</title>
        <meta name="description" content="Contact Cikada Circus.">
        <meta property="og:title" content="Contact - Cikada Circus">
        <meta property="og:description" content="Contact Cikada Circus.">
        <meta property="og:image" content="http://www.cikadacircus.com/CikadaLogolandscape1.jpg">
        <meta property="og:url" content="http://cikadacircus.com/contact.php">
         <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="http://cikadacircus.com/contact.php">
        <meta name="twitter:title" content="Contact - Cikada Circus">
        <meta name="twitter:description" content="Contact Cikada Circus.">
        <meta name="twitter:image" content="http://www.cikadacircus.com/CikadaLogolandscape1.jpg">
        <link href="css/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
    </head>
    <body>
        
           <header>
               <nav class="clearfix">
                   <p>
                       <a href="index.php" class="nav-title-link">
                           <img src="img/CikadaLogoSmall.png" class="nav-title">
                       </a>
                   </p>
                   <a href="javascript:void(0)" onclick="toggleNav()">
                       <div class="nav-icon">
                           <img src="img/burger-icon.png">
                       </div>
                   </a>
                    <ul class="navbar" id="navbar">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="shows.php">Shows</a></li>
                        <li><a href="about.php">About</a></li>
                        <li class="active"><a href="contact.php">Contact</a></li>
                    </ul>
                    <div class="nav-social-icons">
                        <a href="https://www.facebook.com/alihenrik" target="_blank"><img src="img/fb-icon-white.png" alt="facebook icon" class="nav-social-btns"> </a>
                        <a href="https://www.instagram.com/cikadacircus/" target="_blank"><img src="img/insta-icon-white.png" alt="instagram icon" class="nav-social-btns"></a>
                        <a href="https://www.youtube.com/channel/UCagYhyMQtUzw6PxWoEsbLTQ" target="_blank"><img src="img/yt-icon-white.png" alt="youtube icon" class="nav-social-btns"></a>
                    </div>
                </nav>
                
            </header>
            <div class="main-container">
               <img src="img/Cikada078-alt.jpg" class="contact-img" alt="henrik_and_ali_performing">
                <div class="form-block">
                    <div class="form-container">
                        <p class="contact-text" id="error">To get in contact with Cikada Circus please fill out the form below or you can email directly at hello@cikadacircus.com.</p>
                        <?php

                            if ( isset($_SESSION['error']) ) {
                                echo('<p style="color: red; background-color: #242424; padding: 10px; border-radius: 5px;">'.$_SESSION['error']."</p>\n");
                                unset($_SESSION['error']);
                                }
                        
                        if ( isset($_SESSION['success']) ) {
                                echo('<p style="color: #00E209; background-color: #242424; padding: 10px; border-radius: 5px;">'.$_SESSION['success']."</p>\n");
                                unset($_SESSION['success']);
                                }
                            ?>
                        <form action="contact.php" method="POST" id="contact-form">
                            <label for="name">Name: </label><br>
                            <input type="text" name="name" value="<?php if (isset($_POST['name'])) { echo $_POST['name'];} ?>" ><br>
                            <label for="email">Email: </label><br>
                            <input type="email" name="email"  value="<?php if (isset($_POST['email'])) { echo $_POST['email'];} ?>"><br>
                            <label for="subject">Subject line: </label><br>
                            <input type="text" name="subject" value="<?php if(isset($_POST['subject'])) { echo $_POST['subject'];} ?>"><br>
                            <label for="message">Message: </label><br>                                      
                            <textarea name="message" cols="75" rows="10" ><?php if (isset($_POST['message'])) {echo $_POST['message'];} ?></textarea><br>
                            <input type="submit" value="Submit">

                        </form>
                     </div><!-- .form-container -->
                </div><!-- .form-block -->
            
            <?php
                include("footer.php");
                
            ?>
        </div>
        <script src="functions.js">
        </script>
        
    </body>
</html>