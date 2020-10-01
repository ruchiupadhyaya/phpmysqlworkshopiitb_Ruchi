<?php
$matrix1 = array
(
"row1"=>array(3,4),
"row2"=>array(5,6)
);
$matrix2 = array
(
"ro1"=>array(10,4),
"ro2"=>array(5,32)
);
$res = array
(
"res1"=>array($matrix1['row1'][0] + $matrix2['ro1'][0] ,$matrix1['row1'][1] + $matrix2['ro1'][1]),
"res2"=>array($matrix1['row2'][0] + $matrix2['ro2'][0] ,$matrix1['row2'][1] + $matrix2['ro2'][1])
);

echo $res['res1'][0]." ";
echo $res['res1'][1]."<br>";
echo $res['res2'][0]." ";
echo $res['res2'][1];




?>