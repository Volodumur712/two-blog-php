
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/config/bd.php');


if(isset($_GET['p'])) {
        
    switch ($_GET['p']) {
      case 'like.php':
      $page = 'like';
      break;
      
      default:
      $page = 'fashion';
      break;
      }
    }


require($_SERVER['DOCUMENT_ROOT'] . "/api/" . $page . ".php");