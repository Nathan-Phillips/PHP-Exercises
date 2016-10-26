<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Dynamic Table Generation</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,600,700" rel="stylesheet">
        <link href="css/normalise.css" rel="stylesheet" media="screen" />
        <link href="css/exercises.css" rel="stylesheet" media="screen" />
    </head>
    <body>

        <section>Table Gen.</section>
        <p>A PHP script to display values within a table, with alternating table row colours.</p>
        <div class="answer">
            
        <?php 

            $salaries = array('Mr A'=>'$1,000', 'Mr B'=>'$1,200', 'Mr C'=>'$1,400', 'Mr D'=>'$1,600', 'Mr E'=>'$800' );
            $num = 1;

            function check_num($num){
                return $num % 2 == 0 ? TRUE : FALSE;
            }

            echo '<table class="salaries">';
                foreach($salaries as $name => $amount){
                    if(check_num($num) === false){
                        echo '<tr class="odd"><td>The salary of ' . $name . ' is:</td><td>' . $amount . '</td></tr>';
                        $num++;
                    } else {
                        echo '<tr class="even"><td>The salary of ' . $name . ' is:</td><td>' . $amount . '</td></tr>';
                        $num++;
                    }
                }
            echo '</table>';
            
        ?>
        </div>
        
    </body>
</html>