<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>PHP Exercises 11 to 20</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,600,700" rel="stylesheet">
        <link href="css/normalise.css" rel="stylesheet" media="screen" />
        <link href="css/exercises.css" rel="stylesheet" media="screen" />
    </head>
    <body>

        <section>Exercise 11</section>
        <p>Write a PHP script to redirect a user to a different page. Redirect the user to http://www.w3resource.com/</p>
        <div class="answer">
            <p>Note: The code won't actually work within this page as header() must be called before any actual output is sent,
either by normal HTML tags, blank lines in a file, or from PHP.</p>
        <?php
            header('Location: http:\/\/www.w3resource.com\/');
        ?>
        </div>

        <section>Exercise 12</section>
        <p>Write a simple PHP program to check that emails are valid. Hint: Use FILTER_VALIDATE_EMAIL filter that validates value as an e-mail address.</p>
        <div class="answer">
            <form action="exercises_11-20.php" method="post">
                <div>
                    <input class="text_field" type="text" id="email" name="email" maxlength="40">
                    <label for="email">Enter Your Email</label>
                </div>
                <div>
                    <input class="button" type="submit" name="form_submit" value="Submit Email">
                </div>
            </form>
        <?php 

            if($_POST['form_submit'] == "Submit Email"){
                    $email = $_POST['email'];
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ 
                            echo '<p>Email checks out!</p>';
                        } else {
                            echo '<p>That\'s not a valid email address.</p>';
                        }
                }
            
        ?>
        </div>

        <section>Exercise 13</section>
        <p>Write a PHP script to display string values within a table.</p>
        <div class="answer">
            
        <?php 

            $salaries = array('Mr A'=>'$1,000', 'Mr B'=>'$1,200', 'Mr C' =>'$1,400');

            echo '<table class="salaries">';
                foreach($salaries as $name => $amount){
                    echo '<tr><td>The salary of ' . $name . ' is:</td><td>' . $amount . '</td></tr>';
                }
            echo '</table>';
            
        ?>
        </div>

        <section>Exercise 14</section>
        <p>Write a PHP script to display source code of a webpage (e.g. "http://www.example.com/").</p>
        <div class="answer">
            
        <?php 

            $source = file('http://www.example.com');

            foreach($source as $line_num => $line){
                echo 'Line no. – ' . $line_num . ' :  ' . htmlspecialchars($line) . '<br>';
            }
            
        ?>
        </div>

        <section>Exercise 15</section>
        <p>Write a PHP script to get last modified information of a file.</p>
        <div class="answer">
            
        <?php 

            $filename = basename($_SERVER['PHP_SELF']);

            if(file_exists($filename)){
                echo 'This file (' .$filename . ') was last modified on ' . date('l, jS F, Y', filemtime($filename));
            }
            
        ?>
        </div>

        <section>Exercise 16</section>
        <p>Write a PHP script to count lines in a file. Note : Store a text file name into a variable and count the number of lines of text it has.</p>
        <div class="answer">

        <?php
        
            $filename = basename($_SERVER['PHP_SELF']);
            $lines = count(file($filename));

            echo 'There are currently ' . $lines . ' lines in this file (' . $filename . ').';    

        ?>
        </div>

        <section>Exercise 17</section>
        <p>Write a PHP script to print current PHP version. Note : Do not use phpinfo() function.</p>
        <div class="answer">

        <?php
        
            echo 'The current PHP version is ' . phpversion();   

        ?>
        </div>

        <section>Exercise 18</section>
        <p>Write a PHP script to delay the program execution for the given number of seconds.</p>
        <div class="answer">

        <?php
            
            $delay = 2; //Delay time in seconds

            echo 'This script started at ' . date('h:i:s a') . '<br>';
                sleep($delay);
            echo 'And after a delay of ' . $delay . ' seconds, it ended at ' . date('h:i:s a');

        ?>
        </div>

        <section>Exercise 19</section>
        <p>Arithmetic operations on character variables : $d = 'A00'. Using this variable print the numbers A01 through A05.</p>
        <div class="answer">

        <?php
            
            $d = 'A00';

            for($i = 0; $i < 5; $i++){
                echo ++$d . '<br>';
            }

        ?>
        </div>

        <section>Exercise 20</section>
        <p>Write a PHP script to get the last occurred error.</p>
        <div class="answer">

        <?php
            
            echo '<pre>'; print_r(error_get_last()); '</pre>';

        ?>
        </div>


    </body>
</html>