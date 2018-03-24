<?php
if (!empty($_POST['description']) and !empty($_POST['category'])) {
  $db = new Connection();

  $description = $db->real_escape_string(strtolower($_POST['description']));
  $pass =  $db->real_escape_string($_POST['category']);
  $user_id =  $_SESSION['app_id'];
  if (isset($_POST['video_url'])) {
    $pass =  $db->real_escape_string($_POST['video_url']);
  }

  $sql = $db->query("SELECT id FROM user WHERE id='$user_id';");
  if ($db->rows($sql) > 0) {
    $db->query("In ")
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
