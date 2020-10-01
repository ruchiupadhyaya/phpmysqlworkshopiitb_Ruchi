<html>
<head>
    <title>Triangles</title>
</head>
<body>
<form method="get">
Length of Side 1:<input type="number" name="side1"><br>
Length of Side 2:<input type="number" name="side2"><br>
Length of Side 3:<input type="number" name="side3"><br>
<input type = "submit" name="submit" value="Submit Values">
</form>
</body>
</html>

<?php

if(isset($_GET['submit']))
{
$side1 = $_GET['side1'];
$side2 = $_GET['side2'];
$side3 = $_GET['side3'];
   if($side1==$side2 && $side2==$side3)
   { 
    echo "The Triangle is Equilateral";
   }
   else if($side1==$side2 ||$side2==$side3 || $side3==$side1 )
   {
     echo "The Triangle is Isosceles";
   }
   else if(($side1*$side1 + $side2*$side2==$side3*$side3) || ($side1*$side1 + $side3*$side3==$side2*   $side2) || ($side2*$side2 + $side3*$side3==$side1*$side1)) 
   {
     echo "The Triangle is Right Angled";
   }
   else
   {
   echo "The Triangle is Scalene";
   }
}

  
?>

