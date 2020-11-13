<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hallo World</title>

</head>
<body>
<?php
 $radius = 5;

 print "Hallo, the radius is  ".$radius." [m]<br>";

 $diameter = 2 * $radius;

print "this concludes that the diameter is ".$diameter." [m]<br>";

$circumference = pi() * $diameter;

print "so the circumference is ".number_format($circumference, 2, '.', ',')." [m]<br>";

$area = pi() * ($radius**2);

print "and finally the area is ".number_format($area, 2, '.', ',')." [m²]. "


?>
</body>

</html>