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
                <section class="wordpress-page">
                    <content>
                        <h1 class="greet">Wordpress cheat sheet on creating your own theme</h1>
                        
                        <h2>WORDPRESS FUNCTIONS</h2>
                        <p>Wordpress functions that will be useful in creating your own wordpress theme.</p>

                        <strong><p>FUNCTIONS USES FOR HEAD</p></strong>
                        <p><strong>- bloginfo('charset');</strong> (i.e. <?php echo "bloginfo('charset');" ?>).</p>
                        <p><strong>- bloginfo('name');</strong> use to display the title of your site.</p>
                        <p> <strong><?php echo "- wp_head();" ?></strong> it is use when you add plugins or widgets to your wordpress website.</p>

                        <p><strong>- <?php echo"get_header();" ?></strong> the function is use to get the header element.</p>
                        <strong><p>FUNCTIONS USES FOR FOOTER</p></strong>
                        <p><strong><?php echo"- wp_footer();" ?></strong> the function also works same as the wp_header();.</p>
                   
                        <strong><picture>FUNCTIONS USES FOR POST</picture></strong>
                        <p>These function should be inside of php tag.</p>
                        <p><strong>- the_title();</strong> a function use to display the title of the post.</p>
                        <p><strong>- the_content();</strong> a function use to display the content of the post.</p>
                        <p><strong>- the_permalink();</strong> a function use to direct to a specific post.</p>
                        <strong><p>OTHER FUNCTIONS</p></strong>
                        <p><strong><?php echo"language_attributes" ?></strong> Displays the language attributes for the html tag. The possible language attributes are dir (text direction), lang and xml:lang. The choice of lang and xml:lang depends on the $doctype argument.</p>

                        <p><strong><?php echo"-body_class" ?></strong> use to allows to target different pages with their css easily. It is place inside of the body tag.</p>


                        <strong><p>- FILES THAT MUST BE INCLUDED WHEN BUILDING YOUR OWN THEME on WORDPRESS.
	                    </p></strong>

                        <h3>Template files list</h3>
                        <p>Here is the list of the Theme files recognized by WordPress. Of course, your Theme can contain any other stylesheets, images, 
                        or files. Just keep in mind that the following have special meaning to WordPress -- see 
                        <a href="https://codex.wordpress.org/Template_Hierarchy">Template Hierarchy</a> for more information.</p>
                        <img src="../resources/images/wordpress/file1.png" alt="file">
                        <img src="../resources/images/wordpress/file2.png" alt="file">
                        <img src="../resources/images/wordpress/file3.png" alt="file">
                        <img src="../resources/images/wordpress/file5.png" alt="file">

                        <h3>-index.php</h3>
                        <img src="../resources/images/wordpress/index1.png" alt="index">
                        <img src="../resources/images/wordpress/index2.png" alt="index">

                        <h3>-header.php</h3>
                        <p>it contains the header part of the page.</p>
                        <img src="../resources/images/wordpress/header1.png" alt="header">
                        <p>You can also include your navigation of your websites.</p>
                        <img src="../resources/images/wordpress/header2.png" alt="header">
                        <p>You can use the header by using get_header(); from every pages.</p>

                        <h3>-footer.php</h3>
                        <p>it contains th footer of your websites</p>
                        <img src="../resources/images/wordpress/footer1.png" alt="footer">
                        <p>You can also add navigation on your footer by adding the theme location.</p>
                        <p>You can use the footer by using get_footer(); from every pages.</p>

                        <h3>-function.php</h3>
                        <p>contains the functions you created / and you can also include your css here.</p>
                        <p>You can call your css.style here by creating these function.</p>
                        <img src="../resources/images/wordpress/function1.png" alt="function">
                        <p>You can also register your created navigation on these functions.</p>
                        <img src="../resources/images/wordpress/function2.png" alt="function">

                        <h3>-style.css</h3>
                        <p>When creating your style sheet you must include these lines</p>
                        <img src="../resources/images/wordpress/function3.png" alt="function">

                        <h3>-special-template.php</h3>
                        <p>You can also create a special template for your a specific pages.</p>
                        <p>samplem of special template</p>
                        <img src="../resources/images/wordpress/function4.png" alt="function">


                    </content>
                </section>
            </div>

            <footer class="main-footer">
                <p>Copyrights &copy: <a href="http://markchris.000webhostapp.com/">Mark Christian Biglang-awa</a> <?php echo date('Y'); ?></p>
            </footer>
        </div>
    </body>
</html>