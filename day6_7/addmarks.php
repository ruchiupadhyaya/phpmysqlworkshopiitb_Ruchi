

<html>
<head>
  <title>Add Marks</title>
  <style>
Body {
  font-family: Calibri, Helvetica, sans-serif;
  background-color: papayawhip;
}
h1{
         text-align: center;}

  </style>
</head>
<body>
    <h1> Add Marks</h1>
    <form method="POST">
      Divison : <input type="varchar" name="division" required><br>
      <br>
      Roll no : <input type="number" name="rollno" required><br>
      <br>
      Subject 1:<input type="number" name="sub1"><br>
      <br>
      Subject 2:<input type="number" name="sub2"><br>
      <br>
      Subject 3:<input type="number" name="sub3"><br>


      <input type="submit" name="submit" value="submit"><br>
      <br>
      <br>Done Here?<input type="button" onclick="window.location='marksheetadmin.php'" class="Redirect" value="Back to Admin Home"/>


  </form>
  </body>
  </html>


  <?php
  $servername = "localhost";
  $username = "root";
  $password= "";
  $dbname= "marksheet";
  $conn = mysqli_connect($servername, $username, $password,$dbname);
  if(!$conn)
  {
    die("Connection failed: " . mysqli_connect_error());
  }
  if(isset($_POST['submit']))
  {

     $rollno = $_POST['rollno'];
     $division = $_POST['division'];
     $s1 = $_POST['sub1'];
     $s2 = $_POST['sub2'];
     $s3 = $_POST['sub3'];
     $total = 300;
     $mark= $s1+$s2+$s3;
     $percent= ($mark*100)/$total;


       $sql="UPDATE marks SET sub1=$s1, sub2=$s2, sub3=$s3, percentage=$percent,total=$mark WHERE rollno='$rollno' AND division='$division'";
    if (mysqli_query($conn, $sql))
    {
        echo "Marks Entered Successfully<br>";

    }
    else
    {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }


  }




  mysqli_close($conn);
  ?>
