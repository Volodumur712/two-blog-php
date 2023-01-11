<?php
require($_SERVER['DOCUMENT_ROOT'] . '/config/bd.php');  // шукає файл по всьому сервері
//var_dump($_SERVER['DOCUMENT_ROOT'] . 'config/bd.php');
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
//require($_SERVER['DOCUMENT_ROOT'] . '/config/helpers.php');
// старт сесії 
// session_start();
?>

	<div id="colorlib-page">

    <?php
      require($_SERVER['DOCUMENT_ROOT'] . '/partials/sidebar.php');
    ?>

    <div id="colorlib-main">

    <?php
      $page = 'home';
      if(isset($_GET['p'])) {
        
      switch ($_GET['p']) {
        case 'home':
        $page = 'home';
        break;
        case 'photography.php':
        $page = 'photography';
        break;

        case 'login.php':
          $page = 'login';
          break;
          
        case 'travel.php':
        $page = 'travel';
        break;
        case 'fashion.php':
        $page = 'fashion';
        break;
        case 'about.php':
        $page = 'about';
        break;
        case 'contact.php':
        $page = 'contact';
        break;
        default:
        $page = 'home';
        break;
        }
      }
      require($_SERVER['DOCUMENT_ROOT'] . "/partials/pages/$page.php"); // обовязково подвійні лапки
    ?>		

    <?php
      require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
    ?>
  </div><!-- END COLORLIB-MAIN -->
</div><!-- END COLORLIB-PAGE -->

<?php
  require($_SERVER['DOCUMENT_ROOT'] . '/partials/scrypts.php');
?>