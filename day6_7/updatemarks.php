<html>
<head>
  <title>Update Marks</title>
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
    <h1> Update Marks</h1>
    <form method="POST">
      Divison : <input type="varchar" name="division" required><br>
      <br>
      Roll no : <input type="number" name="rollno" required><br>
      <br>
      Subject 1:<input type="number" name="sub1" value='sub1'><br>
      <br>
      Subject 2:<input type="number" name="sub2" value='sub2'><br>
      <br>
      Subject 3:<input type="number" name="sub3" value='sub3'><br>
      <br>

      <input type="submit" name="submit" value="Submit"><br>
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
     $sub1 = $_POST['sub1'];
     $sub2 = $_POST['sub2'];
     $sub3 = $_POST['sub3'];
     $total = 300;
     $mark= $sub1+$sub2+$sub3;
     $percent= ($mark*100)/$total;



          $sql="UPDATE marks SET sub1=$sub1,sub2=$sub2,sub3=$sub3, percentage=$percent,total=$mark WHERE rollno='$rollno' AND division='$division'";
          if (mysqli_query($conn, $sql))
          {
              echo "Marks Upadted Successfully<br>";

          }
          else
          {
               echo "Error: " . $sql . "<br>" . mysqli_error($conn);
           }

     }




    mysqli_close($conn);
  ?>
