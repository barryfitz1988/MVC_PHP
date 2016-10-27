<?php
  function call($controller, $action) {
    require_once('controller/' . $controller . '_controller.php');

    switch($controller) {
      case 'pages':
         require_once('model/users.php');
        $controller = new PagesController();
      break;
      case 'posts':
        // we need the model to query the database later in the controller
        require_once('model/post.php');
        $controller = new PostsController();
      break;
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages' => ['home', 'error','form','login','shop'],
                       'posts' => ['index', 'show', 'submit','delete','fillform','update']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>