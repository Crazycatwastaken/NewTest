<?php
$dogage = rand(1,20);
$DogInHuman;

// Hello
// Hello!
echo $dogage, "<br>";

if ($dogage <= 2){
    $DogInHuman = $dogage*12;
} elseif  ($dogage > 2 ) {
    $DogInHuman = 24+(($dogage-2)*(6));
} 

echo $DogInHuman, "<br>";
echo "The dog is $DogInHuman year's old.";
?>