<!DOCTYPE html PUBLIC>
<html>
<head>
<title>Log in</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>

  <div id="content-body">


        <div id="head-banner">
            <img src="images/banner.jpg" alt="#" border="0" width="100%">
        </div>


<br /> <a href="contact_me.html" style="font-family: cursive, Helvetica, sans-serif; font-size: 30px; margin-left: 10px;">Back to Contact Me</a><br /><br />

<p><?php print('Email Address:' . $_POST["email"]); ?> </p>
<p><?php print ('Confirm Email Address:' . $_POST["email2"]); ?> </p>
<p><?php print ('Name: ' . $_POST["first_name"]); ?> </p>
<p><?php print('Last Name: ' . $_POST["last_name"]); ?> </p>
<p><?php print ('Message: ' . $_POST["message"]); ?> </p>


<?php
// the message
$msg = ('Email Address:' . $_POST["email"] . 'Confirm Email Address:' . $_POST["email2"] . 'Name: ' . $_POST["first_name"] . 'Last Name: ' . $_POST["last_name"] . 'Message: ' . $_POST["message"]);

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg, 70);

// send email
mail("sirpauley@gmail.com", "contact form on sirpauley", $msg, "From: contact-me@sirpauley.co.za");
?>

</body>

</html>



