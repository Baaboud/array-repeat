<?php
$arr = [1,5,2,5,1,3,2,4,5];
echo "Origin array :<br>";
print_r($arr);
echo "<br><br>Updated Array :<br>";
print_r (array_unique($arr)); 
//The problem here is that the new array indexes sometimes are skipped so we solved it below
// $uniqe = array_unique($arr);
// $rra = [];
// foreach ($uniqe as $value) {
//     array_push($rra, $value);
// }
// print_r($rra);