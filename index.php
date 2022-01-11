<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>

<?php

//1. generate paragraph

$colors1=["red","green","white"];
$paragraph1="The memory of that scene for me is like a frame of film forever frozen at that moment: the ".$colors1[0]." carpet, the ".$colors1[1]." lawn, the ".$colors1[2]." house, the leaden sky. The new president and his first lady.";
echo $paragraph1;
echo "<br>";
echo "<br>";

//2 disaply the colors as unordered list
$colors=["red","green","white"];
echo "<ul>
    <li>$colors[0]</li>
    <li>$colors[1]</li>
    <li>$colors[2]</li>
    </ul>";
echo "<br>";
echo "<br>";
 
//3 display the capital and country
$cities = array("Italy" => "Rome","France" => "Paris", "Germany" => "Berlin", "Greece" => "Athens");
echo "The capital of Italy is $cities[Italy]";
echo "<br>";
echo "The capital of France is $cities[France]";
echo "<br>";
echo "The capital of Germany is $cities[Germany]";
echo "<br>";
echo "The capital of Greece is $cities[Greece]";
echo "<br>";
echo "<br>";

//4 the first element of array

$colors=["green","red","white"];
echo $colors[0];
echo "<br>";
echo "<br>";

//5 insert a specific new item in an array in any position

$numbers = [1,2,3,4,5];
$val = "$";
array_splice($numbers,3,0,$val);
Print_r($numbers); 
echo "<br>";
echo "<br>";

//6 sort depending on the key value

$fruits = ["d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"];
asort($fruits);
foreach($fruits as $x => $x_value) {
  echo  $x . " = " . $x_value;
  echo "<br>";
  echo "<br>";
}
//7 calculate

$temperatures = [78,60,62,68,71,68,73,85,66,64,76,63,75,76,73,68,62,73,72,65,74,62,62,65,64,68,73,75,79,73];
echo array_sum($temperatures)/count($temperatures);
echo "<br>";
rsort($temperatures);
echo Print_r(array_slice($temperatures,0,7));
echo "<br>";
sort($temperatures);
echo Print_r(array_slice($temperatures,0,7));
echo "<br>";
echo "<br>";

//8 merge two arrays

$array1 = ["color" => "red", 2,4];
$array2 = ["a","b","color" => "green", "shape"=>"trapezoied",4];
print_r(array_merge($array1,$array2));
echo "<br>";
echo "<br>";

//1 convert all the strings to upper case

$colors = ["red", "green", "blue", "yellow"];
foreach($colors as $col){
    echo strtoupper($col);
    echo "<br>";
}
echo "<br>";

//2 convert all the strings to lower case

$colors = ["RED", "GREEN", "BLUE", "YELLOW"];
foreach($colors as $col){
    echo strtolower($col);
    echo "<br>";
}
echo "<br>";

//9 numbers divisible by 4
$numbers = range(200,250);
    foreach($numbers as $num){
        if($num % 4 === 0){
            echo $num ;
            echo",";
            
        }
    }
    echo "<br>";
    echo "<br>";

    //10 get the shortest/longest string from an array

    $words = ["abcd","abc","de","hjjj","g","wer"];
    $length_string = array_map('strlen', $words);
    echo "The shortest array length is ".min($length_string). " and the longest array length is ".max($length_string);
    echo "<br>";
    echo "<br>";

    //11 generate unique 10 numbers within a specific range

    for($i=0;$i<=10;$i++){
        echo rand(11,20);
        echo",";
    }
    echo "<br>";
    echo "<br>";

    //12 returns the lowest integer 
    $array1 = [2,0,10,12,6];
    echo min(array_filter($array1));

?>
</body>
</html>