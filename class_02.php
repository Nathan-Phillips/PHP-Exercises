<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Person Class</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,600,700" rel="stylesheet">
        <link href="css/normalise.css" rel="stylesheet" media="screen" />
        <link href="css/exercises.css" rel="stylesheet" media="screen" />
    </head>
    <body>

        <section>Dog Class</section>
        <p>A PHP script to create a Person Class with properties and methods.</p>
        <div class="answer">
            
        <?php
        
        class Person {
            public $isAlive = true;
            public $firstname;
            public $lastname;
            public $age;
            
            public function __construct($firstname, $lastname, $age){
                $this -> firstname = $firstname;
                $this -> lastname = $lastname;
                $this -> age = $age;
            }
            
            public function greet(){
                echo 'Hello, my name is ' . $this -> firstname . ' ' . $this -> lastname . '. Nice to meet you! :-)';
            }
        }
        
        $teacher = new Person('boring', '12345', 12345);
        $student = new Person('Nathan', 'Phillips', 52);
        
        echo $teacher -> isAlive . '<br>';
        echo $student -> age . '<br>';
        
        echo $teacher -> greet() . '<br>';
        echo $student -> greet();
        
        ?>
      
        </div>
        
    </body>
</html>