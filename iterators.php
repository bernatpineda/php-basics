<?php

for ($i = 1; $i <= 10; $i++) {
    echo $i;
    
}
echo "<br>";
$a = array(1, 2, 3, 17);

$i = 0; 

foreach ($a as $v) {
    echo "\$a[$i] => $v.\n";
    $i++;
}

echo "<br>";
$i = 1;
while ($i <= 10) {
    echo $i++; 
}
echo "<br>";
$i = 0;
do {
    echo $i;
} while ($i > 0);

?>