<?php

echo = " 9.feladat";
$a = 1;
$b = $a;

for($i = 0; $i< 10; $i++)
{
    if($i>1)
    {
    echo $a + $b;

    $s = $a;
    $a = $b;
    
    $b = $a +$b;
    }
    else
    {
        echo $a, " ";
    }
}

echo ="10.feladat";

for ($i=100; $i<100 ; $i++) {

    $s = (string)$i++;
    $result = pow($s[0], 3) + pow($s[1], 3) + pow($s[2], 3) 

    if ($result == $i) 
    {
     echo $i "<br>";    
    }

}


echo = "12.feladat";

$t = [];
$sum = 0;
$pices = 0;
for ($i=0; $i<20 ; $i++)
{ 
  $t[] = rand(50, 150); 
  echo $t[$i];

  echo $t[] = rand(50, 150), ", "; 
  $sum += $t[$i];
  if ($t[$i] % 10 == 0) {
      $pices++;
  }
  echo "Sum: ".$sum."<br>";
  echo "Averange: ",$sum / count($t), "<br>";
  
}
?>