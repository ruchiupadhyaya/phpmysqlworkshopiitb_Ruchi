<html>
<head>
<title>Marksheet</title>
</head>
<body>
<form method="POST">
Name of Student:<input type="text" name="name"><br>
<p>Marks In Each Subject</p>
Subject 1:<input type="number" name="sub1"><br>
Subject 2:<input type="number" name="sub2"><br>
Subject 3:<input type="number" name="sub3"><br>
Subject 4:<input type="number" name="sub4"><br>
Subject 5:<input type="number" name="sub5"><br>
<input type="submit" name="submit" value="SUBMIT"><br>

</form>
</body>
</html>

<?php

if(isset($_POST['submit']))
{

   $s1 = $_POST['sub1'];
   $s2 = $_POST['sub2'];
   $s3 = $_POST['sub3'];
   $s4 = $_POST['sub4'];
   $s5 = $_POST['sub5'];
   $total = 500;
   $marks= $s1+$s2+$s3+$s4+$s5;
   $percent= ($marks*100)/$total;
   echo "Total Marks Obtained: $marks<br>";
   echo "Total Marks: $total<br>";
   echo "Percentage: $percent<br>";
}

?>















