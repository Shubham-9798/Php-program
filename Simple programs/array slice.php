<?php 
//arrary_slice($a,$start,$term);
$a=[0,1,2,3,4,5,6,7,8];
function array_slic($a,$s,$t){
	for($i=0;$i<count($a);$i++)
	{
		if(($i>=$s)&&($i<$s+$t))
			continue;
		else
			$b[$i]=$a[$i];
	}
	return $b;
}
print_r($a);
$a=array_slice($a,3,3);
echo"<br>";
print_r($a);
