<?php

// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

  // put your email address here
  $youremail = 'bukinoshita@gmail.com';  

  // prepare message 
  $body = "Message - Portfolio - Bu Kinoshita:
  
  Name:  $_POST[name]
  E-mail:  $_POST[email]
  Phone:  $_POST[tel]
  Message:  $_POST[message]";

  if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
    $headers = "From: $_POST[email]";
  } else {
    $headers = "From: $youremail";
  }

  mail($youremail, 'Message - Portfolio - Bu Kinoshita', $body, $headers );

}

header("Location: index.html");

?>