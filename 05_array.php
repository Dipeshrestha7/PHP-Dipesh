<?php
//Associate aray
$favColor = array(
    'dipesh'=> 'red',
    "shrestha" => 'blue'
);
//echo $favColor['dipesh'];

foreach ($favColor as $key => $value) {
    echo "The favorite color of $key is $value <br>";
}

?>