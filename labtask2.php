<!DOCTYPE html>
<html> 
<head> 
 <title> My circle </title>
 </head>
 <body>
        <?php
        class MyCircle 
        {
            public $radius= 10 ;
            

            public function __construct ($radius) {
                $this->radius = $radius ;
                echo 'Constructor <br> '
            }
            public function __destruct () {
                echo ' Destructed <br> ' ;
            }
            public function setRadius($radius)
            {
                $this->radius = $radius;
            }
            public function getRadius()
            {
                return $this->radius ;
            }

            public function getArea()
            {
                return $this->radius*$this->radius*pi();
            }
            public function __toString()
            {
                return 'Area IS: ' .this->getArea(). '<br>';
            }

        }
        ?>
    <?php>
    
    $circle1 = new MyCircle();
    echo 'first Area Is : '.$circle1->getArea();
    $circle2 = new MyCircle(); 

    $circle2->setRadius(10);

    echo "<br>";
    ?>
    </body>
    </html>
