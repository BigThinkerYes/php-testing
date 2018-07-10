     <?php
      error_reporting(E_ALL);
      ini_set("display_errors", 1);
      
      $title = "Test title";
      $content = "<h1>Hello</h1>";
      $page = include_once "templates/page.php";

      echo $page;

      /**
       * this is the page displayed in browser
       */