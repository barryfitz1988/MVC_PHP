<?php 

class PagesController {
    public function home() {
        
        $post = Users::find();

        if($post == FALSE){?>
        
            <style type = 'text/css'>
          #mainNav { display: none !important; }
            </style>

            
            
            <?php
            return call('pages', 'error');
        }else

            require_once('view/pages/home.php');
    }

    public function error() {
        require_once('view/pages/error.php');
    }


    public function form(){

        require_once('view/pages/form.php');

    }


    public function login(){



        require_once('view/pages/login.php');

    }
    
    
    public function shop(){
    
    
    
        require_once('view/pages/shop.php');
    
    }
}




?>
  