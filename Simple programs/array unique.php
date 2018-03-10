<?php 

//program for array to be unique

$a=["a","b","d","e","f","b","h","a","p","a"];
$b=[];

print_r($a);
echo "<br>";
echo count($a);

for($i=0;$i<count($a);$i++)
{echo "<br>";
  for($j=0;($j<count($a));$j++)
      {
        if(($j!=$i))
        	{
        		if($a[$j]==$a[$i])
        	{		
        		     //unset($a[$j]);
        		     array_splice($a,$j,1);
        	         
        	        // echo "<br>";
        	}
        }
        // if($j==count($a))
         	
}

echo "removed element that repeat in array--".$a[$i];
}
echo "<br>";
print_r($a);echo "//this is the unque array";