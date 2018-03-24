<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php
  include('html/general/head.php');
  ?>
  <body>
    <div id="body">
        <?php
        if (isset($_GET['page'])) {
          $view = $_GET['page'];
        } else {
          $view = 'home';
        }
        switch ($view) {
          case 'home':
            include('core/controllers/homeController.php');
            break;
          case 'searchPage':
            include('core/controllers/searchPageController.php');
            break;
          case 'results':
            include('core/controllers/resultsController.php');
            break;
          default:
            include('core/controllers/homeController.php');
            break;
        }
        ?>
      <footer>
        <?php
        $db = new Connection();

        ?>
        <div id="copyRight">
          Copyright (c) 2017-Job Shadowing-All Rights Reserved.
        </div>
      </footer>
    </div>
  </body>
</html>
