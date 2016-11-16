<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>PHP Exercises 21 to 31</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,600,700" rel="stylesheet">
        <link href="css/normalise.css" rel="stylesheet" media="screen" />
        <link href="css/exercises.css" rel="stylesheet" media="screen" />
    </head>
    <body>

        <section>Exercise 21</section>
        <p>Write a PHP function to test whether a number is greater than 30, 20 or 10 using the ternary operator. </p>
        <div class="answer">
            
        <?php
            function trinary_Test($n){  
                $r = $n > 30  
                    ? 'is greater than 30'  
                    : ($n > 20  
                    ? 'is greater than 20'  
                    : ($n >10  
                    ? 'is greater than 10'  
                    : 'You need to input a number at least greater than 10!'));   
                echo $n . ' : ' . $r . '<br>';  
            } 

            trinary_Test(32);  
            trinary_Test(21);  
            trinary_Test(12);  
            trinary_Test(4);
        ?>

        </div>

        <section>Exercise 22</section>
        <p>Write a PHP script to get the full URL. </p>
        <div class="answer">
        
        <?php
            echo 'http://'.$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI];
        ?>

        </div>


    </body>
</html>