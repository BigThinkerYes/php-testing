     <?php
      error_reporting(E_ALL);
      ini_set("display_errors", 1);
      
      $pageData = new stdClass();
      $pageData->title = "New, object testing";
      $pageData->content = include_once "views/navigation.php";

      //include navigation function
      $navigationIsClicked = isset($_GET['page']);
      if($navigationIsClicked){
        $fileToLoad = $_GET['page'];
        //$pageData->content .="<p>Will soon load $fileToLoad.php</p>";
        $pageData->content .=include_once "views/$fileToLoad.php";
      }
      
      $page = include_once "templates/page-2.php";

      echo $page;

      /**
       * this is the page displayed in browser
       */