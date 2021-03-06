<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Asgardian Nursery School</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
        <link rel="stylesheet" media="all" href="../css/admissions.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!--[if lt IE 9]>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>

        <?php
        require_once('../layout/menu.php');
        ?>

        Your Application Form has been successfully submitted.

        <br><br>

        Click <a href = "<?php echo BASE_URL; ?>index.php"> here </a>
        to go back to the homepage.

        <br><br>


        <!--footer: from template -->
        <footer id="footer">
            <div class="container">
                <section>
                    <article class="col-1">
                        <h3>Contact</h3>
                        <ul>
                            <li class="address"><a href="#">CT 3433<br>Cantonments, Accra</a></li>
                            <li class="mail"><a href="https://asgardnursery.wordpress.com/">sentinels@gmail.com</a></li>
                            <li class="phone last"><a href="#">(971) 536 845 924</a></li>
                        </ul>
                    </article>
                    <article class="col-3">
                        <h3>Social media</h3>
                        <p>You can follow us on social media.</p>
                        <ul>
                            <li class="facebook"><a href="#">Facebook</a></li>
                            <li class="google-plus"><a href="#">Google+</a></li>
                            <li class="twitter"><a href="#">Twitter</a></li>
                            <li class="pinterest"><a href="#">Pinterest</a></li>
                        </ul>
                    </article>
                </section>
                <p class="copy">Copyright 2017 Asgardian Nursery School. Created by <a href="https://asgardnursery.wordpress.com/" title="Designed by The Sentinels" target="_blank">The Sentinels</a>. All rights reserved.</p>
            </div>
            <!-- / container -->
        </footer>
        <!-- / footer -->

        <div id="fancy">
            <h2>Request information</h2>
            <form action="#">
                <div class="left">
                    <fieldset class="mail"><input placeholder="Email address..." type="text"></fieldset>
                    <fieldset class="name"><input placeholder="Name..." type="text"></fieldset>
                    <fieldset class="subject"><select><option>Choose subject...</option><option>Choose subject...</option><option>Choose subject...</option></select></fieldset>
                </div>
                <div class="right">
                    <fieldset class="question"><textarea placeholder="Question..."></textarea></fieldset>
                </div>
                <div class="btn-holder">
                    <button class="btn blue" type="submit">Send request</button>
                </div>
            </form>
        </div>


        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script>window.jQuery || document.write("<script src='../js/jquery-1.11.1.min.js'>\x3C/script>")</script>
        <script src="../js/plugins.js"></script>
        <script src="../js/main.js"></script>
    </body>
</html>
