<?php

$age = 20;
$majeur = 18;
if($age<$majeur) 
{
    echo "Mineur";
}
elseif($age == $majeur)
{
    echo "majeur tout pile";
} 
else 
{
    echo "majeur";
}