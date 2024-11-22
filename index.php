<?php 
// echo "my website";

 /* var_dump("my website");

echo "<br>"; */

print "my website";
$my_name = "AJ";
echo "<br>";
echo "my name is $my_name <br>";

var_dump ("$my_name");

$cute = true;
echo "<br>";
var_dump ($cute);

$height = 6.1;
echo "<br>";
var_dump ($height);

$isMale = true;
echo "<br>";
var_dump ($isMale);

$full_name = array ("Aj","Walker");
echo "<br>";
var_dump($full_name);

echo $full_name[0];
echo "<br>";
echo "my first name is $full_name[0]";

$nothing = null;

echo "<br>";
var_dump ($nothing);
echo "<br>";
define("pi", 3.142);
var_dump (pi);

const gravity = 10;
echo "<br>";
var_dump(gravity);
echo "<br>";

//operators
// arithmetic operators
$x = 10;
$y = 5;
echo $x + $y;
echo "<br>";

echo $x - $y;
echo '<br>';

echo $x*$y;
echo "<br>";

echo $x/$y;
echo "<br>";
// modulus
echo $x % $y;
echo "<br>";

echo $x ** $y;
echo "<br>";

$x++;
echo $x;
echo "<br>";

// assignment operators

$a = 100;
$b =50;

// addition assignment

$a += $b;
echo $a;
echo "<br>";

$a -= $b;
echo $a;
echo "<br>";


// logical operators
// examples are: AND(&&), OR(||), XOR, NOT(!)  

if ($a == 100 && $b == 50) {
    echo "confirmation is sure.";
}
echo "<br>";

if ($a == 100 || $b == 50) {
    echo "confirmation is sure.";  
}
echo "<br>";

if ($a == 100 xor $b == 52) {
    echo "confirmation is sure.";  
}
echo "<br>";

if (!($a == 101)) {
    echo "confirmation is sure.";  
}

echo "<br>";

// PHP Conditional statements

if (7>3) {
    echo "<h2> Have a good day </h2><br>";
}

$my_name = "AJ";
$present_time = date (format: "H:i");
echo "present_time = $present_time ";
echo "<br>";


if ($present_time >= 00.00 && $present_time < 12.00) {
    echo "<h3> good morning, $my_name!  </h3>";
}
elseif ($present_time >= 12.00 && $present_time < 16.00) {
    echo "<h3> good afternoon, $my_name! </h3>";
}
    
elseif ($present_time >= 16.00 && $present_time < 23.59) {
    echo "<h3> good night, $my_name! </h3>";
}

else {
    echo "<h3> Hello, $my_name! </h3>";
}


// switch statement
// ________________
$today = date(format: "D");
echo "today is: $today <br>";

switch ($today) {
    case "Mon":
        echo "Hello everyone, It's monday. 
        do have a great week!";
        break;
    case "Tue":
        echo "Hello everyone, It's tuesday. do have a splendid week!";
        break;
    case "Wed":
        echo "Hello everyone, It's wednesday. do have a blessed week!";
        break;
    case "Thurs":
        echo "Hello everyone, It's thursday. do have a miraculous week!";
        break;
    case "Fri":
        echo "Hello everyone, It's friday. do have a freaky week!";
        break;
    case "Sat":
        echo "Hello everyone, It's saturday. do have a Netflix and chill weekend!";
        break;
    case "Sun":
        echo "Hello everyone, It's sunday. do have a Super week!";
        break;
    default:
        echo "sorry this is not a day in the week!";
        break;

}
// php loops
// while loops

// echo "<br>";
// $j = 2;
// while ($j < 10) {
//     echo $j;
//     $j++;
// }
// echo "<br>";
// $j = 2;
// while ($j <= 10) {
//     echo $j;
//     $j++;
// }

//  echo "<br>";
//  $numbers = 1

//  while ($numbers <= 10) {
//     echo $numbers."<br>";
//     $numbers++;
//  }
//  echo "<br>";
 
// // for loop

// $numbers = 11;
// do {
//     echo $numbers. "<br>";
//     $numbers++;
// } while ($numbers <= 10)

// for loop
echo "<br>";
echo "<br>";

for ($numbers = 1; $numbers <= 10; $numbers++) { 
    echo $numbers. "<br>"; 
}
echo "<br>";
for ($numbers = 1; $numbers <=100 ; $numbers++) 
    if($numbers % 15 == 0) {
        echo "fizzbuzz <br>";
    } elseif ($numbers % 5 == 0) {
        echo "buzz <br>";
    } elseif ($numbers % 3 == 0) {
        echo "fizz <br>";
    }
     else {
        echo $numbers."<br>";
    }

// for each loop
echo "<br>";
$cars = array("Benz", "BMW", "Lexus", "Toyota");

echo "i love $cars[0] <br>"; 
echo "i love $cars[1] <br>"; 
echo "i love $cars[2] <br>"; 
echo "i love $cars[3] <br>"; 

echo "<br>";
foreach ($cars as $car) {
    echo "i love $car <br>";
}


// Arrays
$domesticAnimals = array ('dog', 'cat', 'hamster','goat','cow');
$cities = ['warri', 'Ph','Asaba','Kwale','sapele'];

echo "<br> $cities[0]";

// indexed array
// associative array
// multu-dimensional array

// count
echo "<br>";
echo count($domesticAnimals);

echo "<br>";
// array_push
array_push($cities, 'Agbor');

var_dump($cities);

echo "<br>";
// associative array
$phone = ['brand'=> 'Samsung', 'model'=> 'Galaxy', 'Series'=> 'A', 'colour'=> 'Grey',
'ROM'=> '512'];
echo "<br>";
var_dump($phone);

$phone["Series"] = 'S';
echo "<br>";

var_dump($phone);

// www.github.com/elvincedik/backend-project.git

// multi dimensional array
// when u have an array inside another array.

echo "<br>";
// 18/11/2004
// function:
// A function is a block of statements that can be used repeatedly in a program. 
function greet_me() {
    echo "<br> good afternoon";
}

greet_me();
?>

