<?php
$datetime = new DateTime();
if ($datetime->format('l') == "Monday"){
echo "We are on Monday";
}
if ($datetime->format('F') == "October"){
    echo "We are in October";}

if ($datetime->format('i') < 10){
    echo "the current minute is less than 10"; 
}

elseif ($datetime->format('i') > 15){
    echo "the current minute is more than 15"; 
}

else {echo "does not meet any conditions";}
echo "<br>";
switch($datetime->format('l')){

case "Monday";
echo "We are on Monday";
break;
case "Tuesday";
echo "We are on Tuesday";
break;
case "Wednesday";
echo "We are on Wednesday";
break;
case "Thursday";
echo "We are on Thursday";
break;
case "Friday";
echo "We are on Friday";
break;
case "Saturday";
echo "We are on Saturday";
break;
case "Sunday";
echo "We are on Sunday";
break;

}
?>