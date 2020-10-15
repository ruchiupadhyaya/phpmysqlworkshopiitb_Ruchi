<html>
<head>
  <title>Email</title>
</head>
<style>
Body {
  font-family: Calibri, Helvetica, sans-serif;
  background-color: papayawhip;}
</style>
<body>
    <form action = 'sendemail.php'  method = 'POST'>
      Email Address: <input type = "email"  name = "email"  ></br>
    </br>

      <input type = 'submit' name='submit' value = 'Submit'></br>
  </form>
</body>
</html>
<?php
session_start();
if(isset($_POST['submit']))
{
  $email = $_POST['email'];
  $subject="Result";
  $body = "<br>Subject 1  :".$_SESSION['sub1']."<br> Subject 2  :".$_SESSION['sub2']."<br> Subject 3  :".$_SESSION['sub3']."<br> Total  :".$_SESSION['total']."<br> Percentage  :".$_SESSION['percent'];
  $header="From: ruchirupadhyaya@gmail.com";
  mail($email,$subject,$body,$header);

    if(!$email)
    {
      echo "Kindly Provide Valid email address<br>";
    }
    else {
    echo "Mail Sent Successfully<br>";
    }



  echo "<br><br><a href='studentlogout.php'>click here </a>to Log Out";

}
 ?>
