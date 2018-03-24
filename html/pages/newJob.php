<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div #createJob {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>

<div id="createJob">
  <?php
  ?>
  <div id="successful-msg">
    <p>New job successfuly created.</p>
  </div>
  <div id="_AJAX_NEWJOB_"></div>
  <form action="" onkeypress="return runScriptNewJob(event)">
    <label for="description">Description</label>
    <input type="text" id="description" name="description" placeholder="Job Description...">

    <label for="category">Category</label>
    <select name="category" id="category">
      <?php
        $db = new Connection();
        $result = $db->query("select id, description from category;");
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<option value=" . $row["id"] . ">" . $row["description"] . "</option>";
          }
        }
        $db->close();
      ?>
    </select>
    <label for="video_url">Video URL</label>
    <input type="text" id="video_url" name="video_url" placeholder="Youtube, Vimeo URL">

    <input type="submit" value="Submit">
  </form>
  <script src="views/javascript/newJob.js" type="text/javascript"></script>
</div>
