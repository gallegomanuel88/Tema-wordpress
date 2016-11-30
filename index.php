<!DOCTYPE html>
<html>
    <body>
        <h1>Hola Mugremita, gano Trump.</h1>
        <img src="wp-content/themes/temaCreadoCero/imagen.gif"></img>
        <?php
        if (have_posts ()) {
            while (have_posts ()){
                the_post();
                echo"<h1>";the_title();echo"</h1>";
                the_content();
            }
        }
        ?>
        <h1 href="https://ide.c9.io/gallegomanuel88/wordpressmanu/jojo">JOJOJOJO</h1>
    </body>
</html>