<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 /*echo"hello<br>";
 
 echo"haswcececreccecdcd";
 echo"<br>";

$cokkie = "india";
$php = "pakistan";

echo $cokkie ;
echo"<br>";

$jegan = "wssdsaa";
echo "$jegan";
echo "<br>";

$a = 4;
$b = 4;
$c = $a + $b;
echo $c;
echo"<br>";

$a = "it is";
echo "you know $a php";
echo "<br>";
   

$x = 5; 
 
function myTest() {
  
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";*/

//explicit
/*$a=5;
$b=5;
$c=$a/$b;
settype($c,"float");
echo var_dump($c);

//implicit
$a=5;
$b=3;
$c=$a/$b;
echo $c;*/
//


$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;



?>