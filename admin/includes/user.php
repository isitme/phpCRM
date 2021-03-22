<?php
// include("database.php");

class User{

   static public $user_id;
   static public $username;
   static public $user_password;
   static public $user_firstname;
   static public $user_lastname;
   static public $user_data;


   public static function find_all_user(){
       $all_user_data = self::find_this_query("SELECT * FROM users"); 
        $row = mysqli_fetch_array($all_user_data);

        return $row;
    }

   public static function find_user_by_id($id){
        global $database;

        $result_set = $database->query("SELECT * FROM users WHERE id = $id");
        $row = mysqli_fetch_array($result_set);
        return $row;
    }

    public static function find_this_query($sql){
        global $database;
        $result_set = $database->query($sql);
        return $result_set;
    }

    public static function instantation($the_record){
        $the_object = new self;
        $new = array();

        foreach ($the_record as $the_attribute => $value) {
            # code...
            $new[] = $the_attribute;
        }
        return $new; 
    }

}

?>

