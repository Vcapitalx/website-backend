<?php
$y = 22;

function myfunction() {
    echo $GLOBALS ['y'];
}


myfunction();

echo "<br>";
echo "<br>";


function myfunctions() {
    $y = 22;
    echo $y;
}

myfunctions ();


echo "<br>";
echo "<br>";


// super globals to be considered
// $GLOBALS
// $_SERVER
// $_POST
// $_GET


echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";

// Difference between Single quotes and double quotes... 

$z= "Mary";
echo "Hello $z";
echo "<br>";
echo 'Hello $z';

?>

<from action="<?php echo $_SERVER['PHP_SELF'] ?>" Method="POST" >
 <br><br>    
<input type="tex" placeholder="First Name" name="fname">
 <br><br> 
<input type="tex" placeholder="Last Name" name="lname">
 <br><br>
<input type="submit">Submit</botton>

</from>


<?php
$first_name = $last_name = ""; 
// initialise variables to empty string 

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // check if form is submitted via POST method
    $first_name = htmlspecialchars ($_POST['fname']);
    // $_POST['fname'] holds form data form that used post method
    // htmlspecialchars helps to prevent malicious codes

    $last_name = $_POST['lname'];

}
echo "<h2> Good Afternoon $first_name $last_name </h2";




?>