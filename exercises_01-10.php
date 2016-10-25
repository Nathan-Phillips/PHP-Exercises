<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>PHP Exercises 1 to 10</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,600,700" rel="stylesheet">
        <link href="css/normalise.css" rel="stylesheet" media="screen" />
        <link href="css/exercises.css" rel="stylesheet" media="screen" />
    </head>
    <body>

        <section>Exercise 01</section>
        <p>Write a PHP script to get the PHP version and configuration information.</p>
        <div class="answer">
            <?php
                //echo phpinfo();
            echo '(Solution commented out)';
            ?>
        </div>

        <section>Exercise 02</section>
        <p>Write a PHP script to display the following strings:<br>Tomorrow I'll learn PHP global variables.<br>This is a bad command : del c:\*.* </p>
        <div class="answer">
            <?php
                echo 'Tomorrow I\'ll learn PHP global variables.<br>';
                echo 'This is a bad command : del c:\\*.*'
            ?>
        </div>

        <section>Exercise 03</section>
        <p>$var = 'PHP Tutorial'. Put this variable into an h3 tag and as an anchor text within a HTML document.</p>
        <div class="answer">
            <?php
                $var = 'PHP Tutorial';
                echo '<h3>' . $var . '</h3>';
                echo '<p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. Find a <a href="http://www.w3resource.com/php/php-home.php">' . $var . '</a> here.'
            ?>
        </div>

        <section>Exercise 04</section>
        <p>Create a simple HTML form and accept the user name and display the name through PHP echo statement.</p>
        <div class="answer">
            <form action="exercises_01-10.php" method="post">
                <div>
                    <input class="text_field" type="text" id="name" name="name" maxlength="40">
                    <label for="fname">Name</label>
                </div>
                <div>
                    <input class="button" type="submit" name="form_submit" value="Submit Name">
                </div>
            </form>

            <?php
                if($_POST['form_submit'] == "Submit Name"){
                    $name = $_POST['name'];
                    echo '<p>Hello ' . $name . '.</p>';
                }
            ?>
        </div>

        <section>Exercise 05</section>
        <p>Write a PHP script to get the client IP address.</p>
        <div class="answer">
            <?php
                $client_ip = $_SERVER['REMOTE_ADDR'];
                echo 'The client IP Address is ' . $client_ip . '.';
            ?>
        </div>

        <section>Exercise 06</section>
        <p>Write a simple PHP browser detection script.</p>
        <div class="answer">
            <?php
                $browser = $_SERVER['HTTP_USER_AGENT'];
                echo 'The browser being used is ' . $browser . '.';
            ?>
        </div>

        <section>Exercise 07</section>
        <p>Write a PHP script to get the current file name.</p>
        <div class="answer">
            <?php
                $filename = $_SERVER['PHP_SELF'];
                echo 'The current filename is ' . $filename . '.';
            ?>
        </div>

        <section>Exercise 08</section>
        <p>Write a PHP script, which will return components of the url 'http://www.w3resource.com/php-exercises/php-basic-exercises.php'. List of components : Scheme, Host, Path</p>
        <div class="answer">
            <?php
                $url = 'http://www.w3resource.com/php-exercises/php-basic-exercises.php';

                $components = parse_url($url); //returns associative array

                $scheme = $components['scheme'];
                $host = $components['host'];
                $path = $components['path'];

                echo 'Scheme : ' . $scheme . '<br>';
                echo 'Host : ' . $host . '<br>';
                echo 'Path : ' . $path . '<br>';
            ?>
        </div>

        <section>Exercise 09</section>
        <p>Write a PHP script, which changes the color of the first character of a word. PHP Tutorial (Uses Function preg_replace())</p>
        <div class="answer">
            <?php
                $text = 'PHP Tutorial';
                $text = preg_replace('/(\b[a-z])/i', '<span style="color:#966;">\1</span>', $text);

                echo $text;
            ?>
        </div>

        <section>Exercise 10</section>
        <p>Write a PHP script, to check whether the page is called from 'https' or 'http'.</p>
        <div class="answer">
            <?php
                $url = $_SERVER['HTTPS'];

                if(!empty($url)){
                    echo 'This page was called via HTTPS';
                } else {
                    echo 'This page was called via HTTP';
                }
                
                echo $url;
            ?>
        </div>

    </body>
</html>