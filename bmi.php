<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hallo World</title>

</head>
<body>
<?php

$firstname = 'Matthias';
$lastname = 'Gabel';
$height = 1.88;
$weight = 90;

$person =
    [
        'Name' => [$firstname, $lastname],
        'Height' => $height,
        'Weight' => $weight
    ];

print "Hello my Name is ".$person['Name'][0].".<br>";
print "My weight is ".$person['Weight']."<br>";
print "My height is ".$person['Height']."<br>";

$bmi = $weight / $height**2;

print "My BMI is ".number_format($bmi, 2,'.',',');

?>
</body>

</html>