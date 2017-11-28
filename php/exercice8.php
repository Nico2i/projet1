<?php
//Iterations

//while
$i=0;
while($i++ < 10)
{
    echo "je suis à $i <br />";
}

// do while
$i=0;
do 
{
    echo "je suis à $i <br />";
}
while($i++ < 10);

$apprenants = [
    "Fred",
    "Jeje",
    "Nico",
    "Patoch",
    "Xav"
];
$i=0;
echo "<ul>";
while($i < count($apprenants))
{
    echo "<li> $apprenants[$i]</li>";
    $i++;
}
echo "</ul>";