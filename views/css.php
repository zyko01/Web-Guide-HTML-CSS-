<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Web-Development-Guide</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../resources/css/style.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="../resources/images/favicon-32x32.png">

    </head>
    <body class="body">
        <div class="container">
            <header class="main-header">
                <img src="../resources/images/android-icon-96x96.png" alt="logo">
                <nav>
                    <ul>
                        <li><a href="http://markchristian.000webhostapp.com/">HOME</a></li>
                        <li><a href="http://markchristian.000webhostapp.com/views/html.php">HTML 5</a></li>
                        <li class="active"><a href="http://markchristian.000webhostapp.com/views/css.php">CSS</a></li>
                        <div class="dropdown">
                            <button class="dropbtn">WORDPRESS</button>
                                <div class="dropdown-content">
                                    <a href="http://markchristian.000webhostapp.com/views/wordpress.php">Wordpress Theme</a>
                                    <a href="http://markchristian.000webhostapp.com/views/wordpress-plugins.php">Wordpress Plugins</a>
                                    <a href="http://markchristian.000webhostapp.com/views/wordpress-shortcodes.php">Wordpress Shortcodes</a>
                                </div>
                        </div> 
                        <li><a href="http://markchristian.000webhostapp.com/views/reference.php">REFERENCES</a></li>
                    </ul>
                </nav>
            </header>

            <div class="main-content">
                <section class="css-page">
                    <content>
                        <h1 class="greet" id="page-title">CSS GUIDE</h1>
                        <h4>BODY STYLING</h4>
                        <img src="../resources/images/css/body.png" alt="Body style">
                        <p>You may change your font size into pixel like 12px or any size you want.
                        There are also a lot of css web fonts combination you may use in your website like
                         font-family: Arial, Helvetica, sans-serif; or "Times New Roman", Times, serif or you
                         check this <a href="https://www.w3schools.com/cssref/css_websafe_fonts.asp">site</a> to learn more in css web fonts combination.
                        </p>

                        <h4>CONTAINER STYLING</h4>
                        <img src="../resources/images/css/container.png" alt="container style">
                        <p>By using of these lines of styles it will give your class body or container or 
                            any element that you want to have a equal margin on their both sides.
                        </p>

                        <h4>NAVIGATION STYLING</h4>
                        <img src="../resources/images/css/nav1.png" alt="nav">
                        <p>In this line it give your navigation height of 40px and color of dark gray.</p>

                        <img src="../resources/images/css/nav2.png" alt="nav">
                        <p>In this line it removes the dot on your unorder list. And set the margin into 0.</p>

                        <img src="../resources/images/css/nav3.png" alt="nav">
                        <p>In this line it makes your list into one line.</p>

                        <img src="../resources/images/css/nav4.png" alt="nav">
                        <p>In this line it change the color of your a tag into white and some padding and height.</p>

                        <img src="../resources/images/css/nav4.png" alt="nav">
                        <p>In this line it change the color of your navigation menu when you hover. And
                            it also change the color of your active class. You should add an active class in 
                            your menu list so that it will work. 
                         </p>

                         <h4>FOOTER STYLING</h4>
                         <img src="../resources/images/css/footer.png" alt="footer">
                         <p>This styling I usually use when creating my footer.The a tag there it change the color of the text into  white. And if you want to add an
                             navigation in to your footer you may use the same concept of your header navigation. 
                         </p>

                         <h4>RESPONSIVE STYLING</h4>
                         <img src="../resources/images/css/responsive.png" alt="responsive">
                         <p>This line is used to make your website responsive whether you use a mobile or tablet.
                             The min and max width means that if the screen reaches that size the style below wil run.
                         </p>

                         <h4>CONTAINER RESPONSIVE STYLING</h4>
                         <img src="../resources/images/css/responsive1.png" alt="responsive">
                         <p>This the syle I use to my container class to make it responsive.</p>

                         <h4>NAVIGATION RESPONSIVE STYLING</h4>
                         <img src="../resources/images/css/responsive2.png" alt="responsive">
                         <p>This is the syle I use for my navigation. The height part of the navigation is depends on 
                             how many your menu. (i.e. I have four menu on this styling. I used 160px for the height 
                             that makes every menu has a 40px height). I make 100% the width of my navigation so that makes
                             fit on my screen. 
                         </p>
                         <img src="../resources/images/css/responsive3.png" alt="responsive">
                         <p>I change the display into block so that the next menu will be on the next line.</p>
                    </content>
                </section>
            </div>

            <footer class="main-footer">
                <p>Copyrights &copy: <a href="http://markchris.000webhostapp.com/">Mark Christian Biglang-awa</a> <?php echo date('Y'); ?></p>
            </footer>
        </div>
    </body>
</html>