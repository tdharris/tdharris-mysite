<?php 
  
if(!isset($_SESSION)){
  session_start();
};

    // Include all the database models to be used by this main Controller
    include 'controllers/navbar.php';
    include 'controllers/handleUrl.php';
    include 'controllers/project.php';
    include 'controllers/handleAdminUrl.php';

/* ***************************************
 * Bring the model into scope
 * **************************************/
  require('models/db.php');

/* ***************************************
 * Build the navigation menu
 * **************************************/
  $navbar = buildNav();
  $_SESSION['navbar'] = $navbar;

/* ***************************************
 * Capture the value of 'action' from get or post
 * **************************************/
  $action = ''; 
  if (isset($_POST['action'])) {
    $action = $_POST['action'];
  } elseif (isset($_GET['action'])) {
    $action = $_GET['action'];
  }

/* ***************************************
 * Determine type of request (url or project)
 * **************************************/
  switch($action) {
    case 'q':
      if(isset($_GET['url'])) {
        $url = $_GET['url'];
        $content = handleURL($url);
      } elseif (isset($_GET['project'])) {
        $project = $_GET['project'];
        $content = getProject($project);
      }
      break;

    case 'a':
      if ($_SESSION['loggedIn'] != 'yes') {
        $content = '<section class="title animated fadeIn"><h1>Admin</h1>
              <p>You don\'t have access to this section!</p>';

      } else {
          if(isset($_GET['url'])) {
          $url = $_GET['url'];
          $content = handleAdmin($url);
        }
      }
      
      // TODO: Admin section (only authenticated admins can administer content)
      // Below cases work to add/remove projects to my portfolio!
        // $db->deleteProject($db->getProject('test')->projectID);
        // $db->addProject('test', 'bash', 'http://test', 'this is only a test of addProject()', 'long description here....', ['qninja-logo.png', 'qninja.png', 'qninja-2.png']);
      
      break;
  }

  include 'views/view.php';

?>