
<div id="main_search">
    <div id="contents">
        <?php
            if (!empty($_GET['term'])) {
                $term = $_GET['term'];
                $db = new Connection();

                $sql = "SELECT j.*, c.description cat_desc FROM jobs j " .
                    "inner join category c on (c.id = j.category_id) ".
                    "WHERE j.description like '%$term%'";

                $result = $db->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div id='content01' class='content'>".
                            "<a href='?page=results'>".
                            "<div id='contents_title'>".
                                "<h2>".$row["cat_desc"]."</h2>".
                            "</div>".
                            "<div id='contents_description'>".
                                "<p>".$row["description"]."</p>".
                            "</div>".
                            "</a>".
                            "</div>"; 
                    }
                } else {
                    echo "<div id='content01' class='content'>".
                    "Nothing found".
                    "<div>";
                    }
                $db->close();

            } else {
                echo "<div id='content01' class='content'>".
                "Nothing found".
                "<div>";
            }
        ?>
    </div>
</div>

<script>
function setup() {
    var search_inp = document.getElementById('search_inp');
    search_inp.value = window.location.search.substring(1).split('=')[2];;
}

if (window.addEventListener) {
  window.addEventListener("load", setup, false);
} else if (window.attachEvent) {
  window.attachEvent("onload", setup);
}
</script>
