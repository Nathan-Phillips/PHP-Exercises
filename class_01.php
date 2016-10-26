<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Dog Class</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,600,700" rel="stylesheet">
        <link href="css/normalise.css" rel="stylesheet" media="screen" />
        <link href="css/exercises.css" rel="stylesheet" media="screen" />
    </head>
    <body>

        <section>Dog Class</section>
        <p>A PHP script to create a Dog Class with a constructor method and two other methods.</p>
        <div class="answer">
            
        <?php 

        class Dog {
            public $numLegs = 4;
            public $name;
            
            public function __construct($name){
                $this -> name = $name;
            }
                
            public function bark(){
                return 'Woof!';
            }
            
            public function greet(){
                echo 'This dog is called ' . $this -> name . ' and he\'s a Flatcoat.';
            }
        }
        
        $dog1 = new Dog('Barker');
        $dog2 = new Dog('Amigo');
        
        echo $dog1 -> bark() . '<br>';
        $dog2 -> greet();
        
        ?>
      
        </div>
        
    </body>
</html>