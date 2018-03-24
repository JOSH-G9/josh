<header>
    <div class="container">
        <div id="branding">
            <h1>
                <a href="?page=home">Job <span class="highlight">Shadowing</span></a>
            </h1>
        </div>
        <form id="search-form" action = "" method="post">
            <input type="text" id="search_inp" name="search" placeholder="Search job shadowing"/>
            <a><i class="fa fa-search" aria-hidden="true"></i></a>
        </form>
        <nav>
<<<<<<< HEAD
          <a href="?page=home">|  Home</a>
          <a href="?page=searchPage">|  News</a>
          <a href="?page=newJob">|  New job</a>
          <?php

          if (isset($_SESSION['app_id'])) {
            echo '<a href="?view=logout">|  Logout</a>';
          } else {
            echo '<a href="?page=register">|  Register</a><a href="?page=login">|  Login</a>';
          }


           ?>
=======
            <a href="?page=home">|  Home</a>
            <a href="?page=searchPage">|  logan</a>
            <a href="?page=results">|  Andy</a>
            <a href="?page=newJob">|  New job</a>
            <a href="?page=register">|  Register</a>
            <a href="?page=login">|  Login</a>
>>>>>>> f8746e609932057ca29917e56983ac2dbfade940
        </nav>
    </div>
</header>
<script src="views/javascript/search.js" type="text/javascript"></script>