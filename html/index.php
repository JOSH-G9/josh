<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="views/css/styles.css">
  </head>
  <body>
    <div id="body">
      <header>
 <p id="titleName">Job Shadowing</p>
      </header>
      <div id="main">
        <div id="search">
            <form action = "http://www.example.com/search.php" method = "post">
                <input class="search_input" maxlength="50" autocomplete="off" name="SearchHome" type = "text" placeholder = "Search job shadowing"/>
                <input class="search_button" type = "submit" value = "Search"/>
            </form>
        </div>
      </div>
      <footer>
        <?php
        $db = new Connection();
        
        ?>
      </footer>
    </div>
  </body>
</html>
