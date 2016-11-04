<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Temperature Conversion</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,600,700" rel="stylesheet">
        <link href="css/normalise.css" rel="stylesheet" media="screen" />
        <link href="css/exercises.css" rel="stylesheet" media="screen" />
    </head>
    <body>

        <section class="heading">Temperature Conversion</section>
        <p>Create a table of Fahrenheit and Celcius equivalents from a range of input temparatures.</p>
        <div class="answer">

        <?php
        function convert_FtoC($value){
            $value = round((($value - 32) * 5 / 9), 1);
            return $value;
        }

        function convert_CtoF($value){
            $value = round(($value * 9 / 5 + 32), 1);
            return $value;
        }
        function odd_or_even($num){
            if($num % 2 === 0){
                return 'even';
            } else {
                return 'odd';
            }
        }

        $start_temp = -30;
        $end_temp = 40;
        $increments = 5;

        ?>

        <table class="temps">
            <thead>
                <tr>
                    <td>Fahrenheit</td>
                    <td>Celcius</td>
                </tr>
            </thead>     
                <?php
                for($f = $start_temp; $f <= $end_temp; $f += $increments){
                    $c = convert_FtoC($f); //Perform the temperature conversion
                    if(odd_or_even($f) == 'even'){ // Alternate table row colours
                        echo '<tr class="even"><td>' . $f . '</td><td>' . $c . '</td></tr>';
                    } else {
                        echo '<tr class="odd"><td>' . $f . '</td><td>' . $c . '</td></tr>';
                    }
                }
                ?>
        </table>

        <table class="temps">
            <thead>
                <tr>
                    <td>Celcius</td>
                    <td>Fahrenheit</td>
                </tr>
            </thead>
                <?php
                for($c = $start_temp; $c <= $end_temp; $c += $increments){
                    $f = convert_CtoF($c); //Perform the temperature conversion
                    if(odd_or_even($c) == 'even'){ // Alternate table row colours
                        echo '<tr class="even"><td>' . $c . '</td><td>' . $f . '</td></tr>';
                    } else {
                        echo '<tr class="odd"><td>' . $c . '</td><td>' . $f . '</td></tr>';
                    }
                }
                ?>
        </table>

        </div>
        
    </body>
</html>