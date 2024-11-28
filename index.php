<?php
echo "my website <br>";

$myName ='evans';

var_dump ($myName);

$yearsOfExpirence = 5;

echo "<br>";

var_dump($yearsOfExpirence);

$height = 6.1;

echo "<br>";

var_dump($height);

$isMale = true;
echo "<br>";
var_dump ($isMale);

// array 
$fullName = array ("evans", "edike", "edike");
echo "<br>";
var_dump ($fullName);  
echo "<br>";
echo $fullName [1];

echo "<br>";

echo  "my first name is $fullName[0]
and my surname is $fullName[1]";

// 28/10/2024
// NULL
$nothing = null;

echo "<br>";

var_dump ($nothing);

// constant
define("pi", 3.142);
echo "<br>";
var_dump(pi);

const gravityAcceleration = 10;

echo "<br>";

var_dump (gravityAcceleration);
echo "<br>";
//31/10/2024
//operators
//arithmetic operators
$x = 10;
$y = 5;
echo $x + $y;
echo "<br>";

echo $x - $y;
echo "<br>";

echo $x * $y;
echo "<br>";

echo $x / $y;
echo "<br>";

echo $x % $y;
echo "<br>";

echo $x ** $y;
echo "<br>";

//increment and decrement operators
$x++;

echo $x;

echo "<br>";

$x--;

echo $x;

//Assignment operators

$a = 100;
$b = 50;

// addition Assignment
$a += $b;
echo "<br>";
echo $a;

// subtraction Assignment 
echo "<br>";
echo $a -= $b;


  
// logical operators
// Examples of logical operator are: AND(&&), OR(||), XOR, NOT(!)
echo "<br>";
if ($a== 100 && $b ==50) {
    echo "we are good to go."; 
}
echo "<br>";
if ($a== 100 || $b ==50) {
    echo "we are good to go."; 
}
echo "<br>";
if ($a== 100 xor $b ==50) {
    echo "we are good to go."; 
}
echo "<br>";
if (!($a== 101)) {
    echo "we are good to go."; 
}

// 4/11/2024

// PHP Condition statements 
// There are four notable contionasl statements in PHP viz

// if Statement 

// if... else Statement  

// if... elseif... ELSE Statement 

// Switch statement 


// IF STATEMENT 
//______________________
// The if statement is one of the most important statements in PHP


// Example:
// _____________
// variable declaration
$my_name = "V_capitalx";

$present_time = date (format: "H:i");

echo "<br>";

echo "present_time: $present_time <br>";





if ($present_time >= 00.00 && $present_time < 12.00) { 
echo "<h3> Good morning, $my_name! <h/3>";
}

elseif ($present_time >= 12.00 && $present_time <= 16.00) { 
echo "<h3> Good Afternoon, $my_name! </h3>";
}
elseif ($present_time >= 12.00 && $present_time <= 23.59) { 
echo "<h3> Good Night, $my_name! </h3>";
}

else {
    echo "<h3> Hello, $my_name! </h3>";
}









// Switch Statement 
// ____________________

$today =date (format: "D");
echo "Today is: $today <br>";

//8/11/2024
switch ($today) {
    case 'Mon':;
        echo "Hello everybody, It's Monday. Have a great week!";
        break;
    case 'Tue':;
        echo "Hello everybody, It's Tuesday. Do have a splendid week!";
        break;
    case 'Wednesday':;
        echo "Hello everybody, It's Wednesday. Have a wonderful week!";
        break;
    case 'Thu':;
        echo "Hello everybody, It's Thu. Do have a mirsclous week!";
        break;
    case 'Fri':;
        echo "Hello everybody, It's Fri. Do have a Blessed week!";
        break;
    case 'Sat':;
        echo "Hello everybody, It's Sat. Do have a fabulous week!";
        break;
    case 'Sun':;
        echo "Hello everybody, It's Sun. Do have a glorious week!";
        break;
    default:
        echo "sorry, this is not a day the week!";
        break;
}


echo "<br>";


// php loops

// --while loops



// --do..while loops

// --for -loops

// foreach -loops


// 11/11/2024
// php loops

/* $numbers = 1; 

echo $numbers. "<br>";

$numbers++;

echo $numbers. "<br>";

$numbers++;

echo $numbers. "<br>"; */

//while loops 

/*$numbers = 1;

while ($numbers <= 10){
    echo $numbers. "<br>";
    $numbers++; 
} */ 

// do while loop
/*$numbers = 11;
do {
    echo $numbers. "<br>";
    $numbers++; 
} while ($numbers <= 10) */

// create an app that print number 1 to 100, print fixx for 
//multiples of 3, and buzz for multiple of 5, print fizzbuzz
//for multiple of 15.

// for loop
for ($numbers = 1; $numbers <= 50; $numbers++) {
    if($numbers % 3 == 0) {
        echo "fizz <br>";
    } elseif ($numbers % 5 == 0) {
        echo  "buzz <br>";
    } else {
        echo $numbers. "<br>";
    }
} 



// for each 

/*$car = array ("BMW", "lexus", "ferarri" , "Rangrover");
echo "i love $cars [0] <br>";
echo "i love $cars [1] <br>";
echo "i love $cars [2] <br>";
echo "i love $cars [3] <br>"; */

$cars = array("BMW", "lexus", "ferarri" , "Rangrover");

foreach ($cars as $car) {
    echo "i love $car <br>"; 
}


// 15/11/2024
// Arrays
$domesticAnimals = array( 'Dog', 'Cat'. 'Goat', 'Cow',);
$cities = [ 'Asaba', 'Warri', 'Ughelli', 'Sapele', 'Agbor'];

echo '<br>' . $domesticAnimals[0]. '<br>';

// indexd arrey
// associative arrey
// muti-dimensional arrey

// count
echo count($domesticAnimals) . '<br>';

// arrey_push
array_push($cities, 'Abraka', 'Effurun', 'Patani', 'Ozoro'); 

var_dump($cities);

$cities[2] = 'Ogwashi-uku';

echo '<br>';

var_dump($cities);

// associative arrey
$phone = ['brand'=>'iphone', 'model'=>'14 pro', 'color'=>'white', 'ROM'=>256];

echo '<br>';

var_dump($phone);


$phone['model'] = '15 pro';
echo '<br>';
var_dump($phone);


/* www.github.com/elvincedik/backend-project.git*/


// 18/11/2024

// Funtion
function greetMe () {
    echo "<br> Good afternoon V_capitalx";
}
    
greetMe ();

echo '<br>';
echo '<br>';

function streetName ($sname) {
    echo "$sname Asaba. <br>";
}

streetName ("DLA");
streetName ("Ezenei");

echo '<br>';
echo '<br>';

function HomeAddress ($snumber,$sname) {
    echo "$snumber street $sname Asaba. <br>";
}

HomeAddress ("5th" ,"DLA");
HomeAddress ("8th","Ezenei");

?>



