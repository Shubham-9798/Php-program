<?php
$a=[7,4,3,2,6];


unset($a[1]);
var_dump($a);


$a=[7,4,3,2,6];
$a=array_slice($a,1,4);//take out value from the array
var_dump($a);

$a=[7,4,3,2,6];
//array_splice($a,2,1);//remove element and add elemnet of array as 4 parameter
echo "<br>";
var_dump($a);
echo "<br>";echo "<br>";

for($i=0;$i<count($a);$i++)
{
	for($j=0;$j<count($a);$j++)
	{
		if($i!=$j)
		{
			if((($a[$i]+$a[$j])%2)==0)
			{array_splice($a,$j,1);	
		     array_splice($a,$i,1);
		     array_push($a,$a[$i]+$a[$j]);

	}	
		}
	}

}

var_dump($a);