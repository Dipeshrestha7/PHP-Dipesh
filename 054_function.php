<?php
echo "Welcome to php tutorial on function<br>";

function processMarks($marksArr){
        $sum=0;
        foreach ($marksArr as $value) {
               
                $sum = $sum+ $value;
               
        }
        return $sum;
      
}

$dipesh = [93,66];
$sumMarks = processMarks($dipesh);
$total= $sumMarks*100/200;
echo "The marks scored by Dipesh is $sumMarks and percentage is $total";
?>
