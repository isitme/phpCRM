<?php
// include("database.php");

class User{

    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;
//    static public $user_data;


   public static function find_all_user(){
       return self::find_this_query("SELECT * FROM users"); 
        // $row = mysqli_fetch_array($all_user_data);

        // return $all_user_data;
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

        $the_object_array = [];

        while($row = mysqli_fetch_array($result_set)){
            $the_object_array[] = self::instantation($row);
        }

        return $the_object_array;
    }

    public static function instantation($the_record){
        $the_object = new self;
        // $new = array();

        foreach ($the_record as $the_attribute => $value) {
            # code...
            if($the_object->has_the_attribute($the_attribute)){
                $the_object->$the_attribute = $value;
            }
        }
        return $the_object; 
    }

    private function has_the_attribute($the_attribute){
        $object_properties = get_object_vars($this);
        return array_key_exists($the_attribute, $object_properties); 
    }

}

?>

