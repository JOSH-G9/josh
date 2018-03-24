rodrigo
<?php
if (!empty($_POST['search'])) {
  $db = new Connection();

  $search = $db->real_escape_string(strtolower($_POST['search']));
  
  $sql = $db->query("SELECT * FROM jobs WHERE description like '%$search%'");
  $HTML = 1;
  
  $db->drop($sql);
  $db->close();
}else {
  $HTML = '<div class="alert-danger"><h4><strong>Error: </strong></h4><p>You must fill the search field. </p></div>';
}

echo $HTML;

?>
