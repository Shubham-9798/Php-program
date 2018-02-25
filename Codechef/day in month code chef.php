<?php
$a=['mon','tue','wed','thu','fri','sat','sun'];
print_r($a);

$month=28;
$day='mon';
$k=1;

for($i=0;$i<count($a);$i++){
	if($a[$i]==$day)
		$day=$i;
}
echo $day."f";

for($i=$day;(($i<=7)&&($k<$month+1));$k++,$i++)
{
	if($i==7)
		$i=0;
	
	echo "<br>";
	echo $i;//use switch case for rach case for getting days
}

?>