<html>
<head>
  <title>Feedback</title>
</head>
<body>
    <form action = 'q2_send_email.php'  method = 'POST'>
      Name: <input type = "text"  name = "name"></br>
    </br>
      Email: <input type = "text"  name = "email"></br>
    </br>
    Feedback: <textarea name='feedback' maxlength="500"></textarea><p>
      <input type = 'submit' name='submit' value = 'Submit'></br>
  </form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $bodya= $_POST['feedback'];
  $admin = "upadhyayaruraj19ce@student.mes.ac.in";
  $bodyf= "Feedback Recorded.Thank You for your valuable Feedback.";

  if($name and $email and $bodya)
  {
    $subf = "Feedback Received";
    $suba= "Feedback received from ".$name;
    $header="From: upadhyayaruraj19ce@student.mes.ac.in";


    mail($email, $subf, $bodyf,$header);
    mail($admin,$suba,$bodya,$header);
    echo "Mail sent Successfully!";
  }

}
 ?>
