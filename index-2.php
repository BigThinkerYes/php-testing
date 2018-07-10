     <?php
      error_reporting(E_ALL);
      ini_set("display_errors", 1);
      
      $pageData = new stdClass();
      $pageData->title = "New, object testing";
      $pageData->content = "<h1>Hello</h1>";
      
      $page = include_once "templates/page-2.php";

      echo $page;

      /**
       * this is the page displayed in browser
       */