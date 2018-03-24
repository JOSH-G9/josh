<?php
if (!empty($_POST['email']) and !empty($_POST['pass'])) {
  $db = new Connection();
  $email = $db->real_escape_string(strtolower($_POST['email']));
  $pass =  $db->real_escape_string($_POST['pass']);

  $sql = $db->query("SELECT id FROM user WHERE email='$email';");
  if ($db->rows($sql) > 0) {
    $sql = $db->query("SELECT id FROM user WHERE email='$email' AND password='$pass';");
    if ($db->rows($sql) > 0) {
      $user_id = $db->browse($sql)[0];
      $_SESSION['app_id'] = $user_id;
      $HTML = 1;
    } else {
      $HTML = '<div class="alert-danger"><h4><strong>Error: </strong></h4><p>The email and password dont match. </p></div>';
    }
  } else {
    $HTML = '<div class="alert-danger"><h4><strong>Error: </strong></h4><p>The email doesnt exist. </p></div>';
  }

  $db->drop($sql);
  $db->close();
}else {
  $HTML = '<div class="alert-danger"><h4><strong>Error: </strong></h4><p>You must fill all the fields. </p></div>';
}

echo $HTML;

?>
