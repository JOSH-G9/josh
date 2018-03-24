<?php
if (!empty($_POST['description']) and !empty($_POST['category'])) {
  $db = new Connection();

  $description = $db->real_escape_string(strtolower($_POST['description']));
  $category =  $db->real_escape_string($_POST['category']);
  $user_id =  $_SESSION['app_id'];
  if (isset($_POST['video_url'])) {
    $video_url =  $db->real_escape_string($_POST['video_url']);
  }

  $sql = $db->query("SELECT id FROM user WHERE id='$user_id';");
  if ($db->rows($sql) > 0) {
    $db->query("INSERT INTO jobs(description,video_url,poster_id,category_id) VALUES('$description','$video_url','$user_id','$category');");
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
