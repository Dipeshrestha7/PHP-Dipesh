<?php
//php datatypes

/*
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. Null
*/

//String

$name ="Dipesh";
$friend= "Shrestha";

echo "$name friend is $friend ";

//2.Integer - Non decimal numbers
echo "<br>";
$income = 444;
$debts= 555;

echo "$income <br>";
echo $debts;
echo "<br>";
//3.Float - decimal numbers

$income = 444.44;
$debts= 555.55;

echo"$income <br>";
echo "$debts <br>";

//4.Booleans - Can be either True or False

$x = true;
$is_friends = false;

echo "$x <br>";
echo var_dump("$is_friends <br>");

//5.Object - Instance of classes
//Employee is a class --> Dipesh can be one object

//6.Array - used to store multiple values in a single variables

$friends =array("ram","hari","shyam");
echo var_dump($friends);
echo"<br>";
echo $friends[0];
echo"<br>";
echo $friends[1];
echo"<br>";
echo $friends[2];
echo"<br>";
//echo $friends[3]; // Will throw an error as the size is 4

//7ull

$name =Null;
echo var_dump($name);


?>