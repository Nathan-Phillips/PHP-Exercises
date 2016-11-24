<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>PHP Exercises with Arrays</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,600,700" rel="stylesheet">
        <link href="css/normalise.css" rel="stylesheet" media="screen" />
        <link href="css/exercises.css" rel="stylesheet" media="screen" />
    </head>
    <body>

        <section>Exercise 01</section>
        <p>$colour = array('white', 'green', 'red', 'blue', 'black');<br>Write a script which will display the sentence below where the words 'red', 'green' and 'white' will come from $colour.</p>
        <div class="answer">
            
        <?php
            $colour = array('white', 'green', 'red', 'blue', 'black');    
            
            echo 'The memory of that scene for me is like a frame of film forever frozen at that moment: the ' . $colour[2] . ' carpet, the ' . $colour[1] . ' lawn, the ' . $colour[0] . ' house, the leaden sky. The new president and his first lady. - Richard M. Nixon.';
        ?>
        </div>

        <section>Exercise 02</section>
        <p>$colour = array('white', 'green', 'red'). Write a PHP script which will display the colors in the following way : 
            <br>white, green, red,
            <br>• green
            <br>• red
            <br>• white
        </p>
        <div class="answer">
            
        <?php       
            $colour = array('white', 'green', 'red');    
            
            foreach($colour as $col){
                echo $col . ', ';
            }

            sort($colour);

            echo '<ul>';
                foreach($colour as $alpha){
                    echo '<li>' . $alpha . '</li>';
                }
            echo '</ul>';

        ?>
        </div>

        <section>Exercise 03</section>
        <p>Create a PHP script which display the capital and country name from the array $ceu. Sort the list by the capital of the country.</p>
        <div class="answer">
            
        <?php       
            $ceu = array( 'Italy'=>'Rome', 'Luxembourg'=>'Luxembourg', 'Belgium'=> 'Brussels', 'Denmark'=>'Copenhagen', 'Finland'=>'Helsinki', 'France' => 'Paris', 'Slovakia'=>'Bratislava', 'Slovenia'=>'Ljubljana', 'Germany' => 'Berlin', 'Greece' => 'Athens', 'Ireland'=>'Dublin', 'Netherlands'=>'Amsterdam', 'Portugal'=>'Lisbon', 'Spain'=>'Madrid', 'Sweden'=>'Stockholm', 'United Kingdom'=>'London', 'Cyprus'=>'Nicosia', 'Lithuania'=>'Vilnius', 'Czech Republic'=>'Prague', 'Estonia'=>'Tallin', 'Hungary'=>'Budapest', 'Latvia'=>'Riga', 'Malta'=>'Valetta', 'Austria' => 'Vienna', 'Poland'=>'Warsaw') ;
        
            asort($ceu);

            foreach($ceu as $key => $value){
                echo 'The capital of ' . $key . ' is ' . $value . '.<br>';
            }

        ?>
        </div>

        <section>Exercise 04</section>
        <p>Delete an element from the PHP array. After deleting the element, integer keys must be normalised.</p>
        <div class="answer">
            
        <?php       
            $x = array(1, 2, 3, 4, 5);
        
            echo '<pre>' . var_dump($x) . '</pre>';

            unset($x[3]);
            array_values($x);

            echo '<pre>' . var_dump($x) . '</pre>';

        ?>
        </div>

    </body>
</html>