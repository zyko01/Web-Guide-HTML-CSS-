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
                        <li class="active"><a href="http://markchristian.000webhostapp.com/views/html.php">HTML 5</a></li>
                        <li><a href="http://markchristian.000webhostapp.com/views/css.php">CSS</a></li>
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
                <section class="html-page">
                    <content>
                        <h1 class="greet" id="page-title">HTML 5 GUIDE</h1>
                        <h4>HEAD PART</h4>
                        <img src="../resources/images/html/head.png" alt="header">
                        <p>The - meta charset="UTF-8"meta name="viewport" 
                        content="width=device-width, initial-scale=1" - part is use to make your website responsive. If 
                        you are using html 5 it automatically adds this tags especially if you use sublime text or vs-code
                        as your text editor that supports an html extension.  
                        </p>
                        
                        <h4>HTML5 Semantic Elements</h4>
                        <p>HTML5 offers new semantic elements to define different parts of a web page:</p>
                        <img src="../resources/images/html/web-parts.png" alt="web-page-parts">
                        <p>To learn more about html 5 semantic elements just click <a href="https://www.w3schools.com/html/html5_semantic_elements.asp">here</a>!</p>
                        
                        <h4>Change HTTP into HTTPS</h4>
                        <p>To make secure your website you must add .httaccess to your file directory and add this code.</p>
                        <img src="../resources/images/html/secure.png" alt="secure">
                    </content>
                </section>
            </div>

            <footer class="main-footer">
                <p>Copyrights &copy: <a href="http://markchris.000webhostapp.com/">Mark Christian Biglang-awa</a> <?php echo date('Y'); ?></p>
            </footer>
        </div>
    </body>
</html>