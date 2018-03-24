<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="views/css/styles.css">
  </head>
  <body>
    <div id="body">
      <?php
      include('html/general/header.php');
      ?>
      <div id="main">
        <div id="search">
            <form action = "http://www.example.com/search.php" method = "post">
                <input class="search_input" maxlength="30" autocomplete="off" name="SearchHome" type = "text" placeholder = "Search job shadowing"/>
                <input class="search_button" type = "submit" value = "Search"/>
            </form>
            <div id="links">
            <div id="website1">
              <link class="link" ahref="/css/master.css">
            </div>
            <div id="website2">
               <link class="link" ahref="/css/master.css">
            </div>
            <div id="website3">
              <link class="link" ahref="/css/master.css">
            </div>
             <div id="website4">
               <link class="link" ahref="/css/master.css">
             </div>

            </div>
        </div>
            <div id="menu">
                <div id="website1">
                    <link id="link1" ahref="/css/master.css">
                </div>
                <div id="website2">
                    <link id="website2" ahref="/css/master.css">
                </div>
                <div id="website3">
                    <link id="website3" ahref="/css/master.css">
                </div>
                <div id="website4">
                    <link id="website4" ahref="/css/master.css">
                </div>
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
