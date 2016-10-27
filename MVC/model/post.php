<?php

include("encryption.php");
  class Post {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $id;
    public $name;
    public $email;
    public $date;

    public function __construct($id, $name, $email , $date) {
      $this->id  = $id;
      $this->name  = $name;
      $this->email = $email;
      $this->date = $date;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM artist');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $post) {
        $list[] = new Post($post['person_id'], $post['person_name'], $post['person_url'], $post['person_date']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM artist WHERE person_id = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $post = $req->fetch();

      return new Post($post['person_id'], $post['person_name'], $post['person_url'], $post['person_date']);
    }
    
    
    
    public static function submit() {
        $db = Db::getInstance();
        
        
        $personName  = $_POST['name'];
        $personEmail  = $_POST['email'];
        $personDate  = $_POST['datepicker'];
        $userName = $_POST['username'];
        $passWord = $_POST['password'];

        
        $req = $db->prepare('INSERT INTO artist(person_name,person_url,person_date)
                VALUES(?,?,?)');
        $req->execute(array($personName,$personEmail,$personDate));
        
        
        
        $personId = $db->lastInsertId();
        $encodeUser = simple_encrypt($userName , "Name secured");
        $encodePass = simple_encrypt($passWord , "Pass secured");
        

        
        $req2 = $db->prepare('INSERT INTO users(username,password,person_id)
                VALUES(?,?,?)');
        $req2->execute(array($encodeUser,$encodePass,$personId  ));
  
   
    }
  

    public static function delete($id) {
        $db = Db::getInstance();
        // we make sure $id is an integer
        $id = intval($id);
        $req = $db->prepare('DELETE FROM artist WHERE person_id = :id');
              // the query was prepared, now we replace :id with our actual $id value
        $req->execute(array('id' => $id));
    
         
    }
                
     public static function update($id) {
        $db = Db::getInstance();
        // we make sure $id is an integer
        $id = intval($id);
        $personName  = $_POST['name'];
        $personEmail  = $_POST['email'];
        $personDate  = $_POST['datepicker'];
        

        
        $SQLString = ("UPDATE artist SET
                    person_name=:personName, 
                    person_date=:personDate,
                    person_url=:personEmail
                    WHERE person_id= :id");

        	   
        $req = $db->prepare($SQLString);


        
       $req->execute(array(':id'=>$id,
                            ':personName'=>$personName,
                            ':personDate'=>$personDate,
                            ':personEmail'=>$personEmail));

         
    }        

    
  }
?>