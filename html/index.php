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
            include('html/general/header.php');
            include('core/controllers/searchPageController.php');
            break;
          case 'newJob':
            include('html/general/header.php');
            include('core/controllers/newJobController.php');
            break;
          case 'login':
            include('html/general/header.php');
            include('core/controllers/loginController.php');
            break;
          case 'register':
            include('html/general/header.php');
            include('core/controllers/registerController.php');
            break;
          case 'results':
          include('html/general/header.php');
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
  <script src="views/javascript/myScript.js" type="text/javascript"></script>
</html>
