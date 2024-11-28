<?php
$y = 22;

function myfunction() {
    echo $GLOBALS ['y'];
}

myfunction();

echo "<br>";
echo "<br>";


// function myfunctions() {
//     // $y = 22;
//     echo $y;
// }

// myfunctions();

/*$GLOBALS
$_SERVER
$_POST
$_GET */

echo "<br>";
echo "<br>";

echo $_SERVER ['PHP_SELF'];
echo "<br>";
echo $_SERVER ['SERVER_NAME'];
echo "<br>";


// SINGLE QUOTES AND DOUBLE QUOTES DIFFERNCE
$z = "Mary";
echo " Hello $z";
echo "<br>";
echo 'Hello $z';

echo "<br>";
echo "<br>";

?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>"method="POST" >

<input type="text" placeholder="First Name" Name= "fname">
<br><br>
<input type="text" placeholder="Last Name" Name= "lname">
<br><br>
<button type="submit">Submit</button>

</form>
<br><br>
<?php 
$first_name = $last_name = "Aj Walker";
// initialise variable to empty string

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // checking if form is submitted via POST method
    $first_name = htmlspecialchars ($_POST['fname']);
    // $_POST['fname'] holdsform data of form that used post method
    // htmlspecialchars helps to prevent malicious codes
    $last_name = $_POST['lname'];

    echo "<h2> Good Afternoon $first_name $last_name </h2>";


    // <script>malicious code displayed as plain text
    // </script>
}

?>
