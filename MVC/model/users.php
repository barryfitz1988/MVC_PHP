<?php
include("encryption.php");
  class Users {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $id;
    public $userName;
    public $passWord;
    public $person_id;
    public $person_name;

    public function __construct($id, $userName, $passWord , $person_id ,$person_name) {
      $this->id  = $id;
      $this->userName  = $userName;
      $this->passWord = $passWord;
      $this->person_id = $person_id;
      $this->person_name = $person_name;
    }
    
    
    public static function all() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM users');
    
        // we create a list of Post objects from the database results
        foreach($req->fetchAll() as $post) {
            $list[] = new Users($post['usersid'], $post['username'], $post['password'], $post['person_id']);
        }
    
        return $list;
    }
    
    

    public static function find() {
      $db = Db::getInstance();


      $userName = isset($_POST['username']) ? $_POST['username'] : '';
      $passWord = isset($_POST['password']) ? $_POST['password'] : '';
   
      $encodeUser = simple_encrypt($userName , "Name secured");
      $encodePass = simple_encrypt($passWord , "Pass secured");
        
 
      
      $req = $db->prepare('SELECT * 
                            FROM users u ,artist a  
                            WHERE username = :encodeUser
                            AND password = :encodePass 
                            AND u.person_id = a.person_id;');
      
      
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('encodeUser' => $encodeUser, 'encodePass' => $encodePass));
      $post = $req->fetch();
      
      $personName = $post['person_name'];

      
   
      

      
      if($encodeUser == $post['username'] || $encodePass == $post['password']){
     
          return new Users($post['usersid'], $post['username'], $post['password'], $post['person_id'],
                  $post['person_name']);

  
          
      }elseif ($userName == $post['username'] || $passWord == $post['password']){

          return new Users($post['usersid'], $post['username'], $post['password'], $post['person_id'],
                  $post['person_name']);
          ?>

      <?php     
      } else {
          ?>
          <p><?php echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
          ?></p>
<?php 
    }
    }
  }
?>


