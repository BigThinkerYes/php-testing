<?php 
error_reporting( E_ALL);
ini_set("display_errors", 1);

$title = "Test title";
$content = "<h1>hello world</h1>";
$page ="
    <!DOCTYPE html>
    <html>
    <head>
      <title>$title</title>
      <meta charset='UTF-8'/>
    </head>
    <body>
    $content
    </body>
    </html>";
    echo $page;
