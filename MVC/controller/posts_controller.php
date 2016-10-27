<?php
  class PostsController {
    public function index() {
      // we store all the posts in a variable
      $posts = Post::all();
      require_once('view/posts/index.php');
    }

    public function show() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $post = Post::find($_GET['id']);
      require_once('view/posts/show.php');

    }
    
    // this is the function used to submit the data from the form 
    public function submit() {
        $post = Post::submit();
        require_once('view/posts/submit.php');
 
        
    }
    
    
    // this is the function used to delete the data from the table 
    public function delete() {
          // we expect a url of form ?controller=posts&action=delete&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post and delete from the database
      $post = Post::delete($_GET['id']);
      require_once('view/posts/delete.php');
    }
    
    
    public function fillform() {
          // we expect a url of form ?controller=posts&action=delete&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post and delete from the database
      $post = Post::find($_GET['id']);
        require_once('view/posts/update.php');
    }
    
    
    public function update() {
        // we expect a url of form ?controller=posts&action=delete&id=x
        // without an id we just redirect to the error page as we need the post id to find it in the database
        if (!isset($_GET['id']))
            return call('pages', 'error');
    
        // we use the given id to get the right post and delete from the database
        $post = Post::update($_GET['id']);
        require_once('view/posts/submit.php');
    }
    
    
    
    public function checkUser() {
        // we expect a url of form ?controller=posts&action=delete&id=x
        // without an id we just redirect to the error page as we need the post id to find it in the database
        if (!isset($_GET['id']))
            return call('pages', 'error');
    
        // we use the given id to get the right post and delete from the database
        $post = Users::find($_GET['id']);
        require_once('view/pages/home.php');
    }
    
  }
?>