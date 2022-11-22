<?php
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

function randomPlanets($planets, $num){

    $newPlanets=array_filter($planets);     
    $randomPlanet=array_rand($newPlanets,$num);
    $createdPlanets=array_map(function($randomPlanet) use ($newPlanets){
        return $newPlanets[$randomPlanet];
    },$randomPlanet);
  
    return $createdPlanets;
}
echo"<pre>";
print_r(randomPlanets($planets, 2));
print_r(randomPlanets($planets, 3));
print_r(randomPlanets($planets, 2));
print_r(randomPlanets($planets, 4));
print_r(randomPlanets($planets, 5));



?>

