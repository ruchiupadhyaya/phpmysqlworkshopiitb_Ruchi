

<html>
<head>
  <title>Register</title>
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
    <h1> Registration Form</h1>
    <form method="POST">
      First Name : <input type="text" name="firstname" required><br>
      <br>
      Last Name : <input type="text" name="lastname" required><br>
      <br>

      Email : <input type="varchar" name="email" required><br>
      <br>
      Password : <input type="password" name="password" required><br>
      <br>
      Roll no : <input type="number" name="rollno" required><br>
      <br>
      Divison : <input type="varchar" name="division" required><br>
      <br>
      <input type="submit" name="register" value="SUBMIT"><br>
      <br>

        <input type="button" onclick="window.location='login.php'" class="Redirect" value="Go To Login Page"/>
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
    echo "Connection failed: " . mysqli_error($conn);
  }
  if(isset($_POST['register']))
  {
     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $password = $_POST['password'];
     $email = $_POST['email'];
     $rollno = $_POST['rollno'];
     $division = $_POST['division'];

     $encpass = md5($password);

       $sql="INSERT INTO `student`(`firstname`, `lastname`, `password`,`email`,`division`,`rollno`)
             VALUES ('$firstname','$lastname','$encpass','$email','$division','$rollno')";
    if (mysqli_query($conn, $sql))
    {
        echo "Registered Successfully<br>";

    }
    else
    {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }


  }




  mysqli_close($conn);
  ?>
