<?php
include('connection.php');
class model{
    public $values;
    public $excute;
        public function all(){
            global $conn;
            $table=get_class($this);
            $stmt = $conn->prepare("SELECT * FROM $table");
            $stmt->execute();
            $data=$stmt->fetchAll();
            return $data;
        }

        public function findbyid($id){
            global $conn;
            $table=get_class($this);
            $stmt = $conn->prepare("SELECT * FROM $table WHERE id='$id'");
            $stmt->execute();
            $data=$stmt->fetch();
            return $data;
        }

        public function findby($coloumnName , $value){
            global $conn;
            $table=get_class($this);
            $stmt = $conn->prepare("SELECT * FROM $table WHERE $coloumnName = $value");
            $stmt->execute();
            $data=$stmt->fetch();
            return $data;
        }
        public function findAllby($coloumnName , $value){
            global $conn;
            $table=get_class($this);
            $stmt = $conn->prepare("SELECT * FROM $table WHERE $coloumnName = $value");
            $stmt->execute();
            $data=$stmt->fetchAll();
            return $data;
        }


        public function findbyemail($email){
            global $conn;
            $table=get_class($this);
            $stmt = $conn->prepare("SELECT * FROM $table WHERE email = '$email'");
            $stmt->execute();
            $data=$stmt->fetch();
            return $data;
        }

        public function findbypassword($password){
            global $conn;
            $table=get_class($this);
            $stmt = $conn->prepare("SELECT * FROM $table WHERE password=$password");
            $stmt->execute();
            $data=$stmt->fetch();
            return $data;
        }

        public function checkid($id){
            global $conn;
            $table=get_class($this);
            $stmt = $conn->prepare("SELECT * FROM $table WHERE id=$id");
            $stmt->execute();
            $count=$stmt->rowCount();
            return $count;
        }   

        public function checkemail($email){
            global $conn;
            $table=get_class($this);
            $stmt = $conn->prepare("SELECT * FROM $table WHERE email='$email'");
            $stmt->execute();
            $count=$stmt->rowCount();
            return $count;
        }
        
        
        public function checkFav($prop_id , $user_id){
            global $conn;
            $table=get_class($this);
            $stmt = $conn->prepare("SELECT * FROM $table WHERE property_id='$prop_id' AND interester_id = '$user_id'");
            $stmt->execute();
            return $stmt->rowCount();
        } 
        public function deleteFav($prop_id , $user_id){
            global $conn;
            $table=get_class($this);
            $stmt = $conn->prepare("DELETE FROM $table WHERE property_id='$prop_id' AND interester_id = '$user_id'");
            $stmt->execute();
        }
        public function enterFav($prop_id , $user_id){
            global $conn;
            $table=get_class($this);
            $stmt = $conn->prepare("INSERT INTO $table(property_id,interester_id)  VALUES($prop_id ,  $user_id)");
            $stmt->execute();
        }
// ===================================================================== property filter
public function find_prop($text ,$prop_type ,$delivery_type , $price , $approve){
    global $conn;
    $table=get_class($this);
        $stmt = $conn->prepare("SELECT * FROM $table WHERE ($text AND $prop_type AND $delivery_type AND $price AND $approve)");
        $stmt->execute();
        $data=$stmt->fetchAll();
        return $data;
}   

        

// =======================================================================================


        public function checkpassword($password){
            global $conn;
            $table=get_class($this);
            $stmt = $conn->prepare("SELECT * FROM $table WHERE password=$password");
            $stmt->execute();
            $count=$stmt->rowCount();
            return $count;
        }   

        public function insert(){
            global $conn;
            $table=get_class($this);
            $stmt = $conn->prepare("INSERT INTO $table $this->value");
            $stmt->execute($this->excute);
            echo 'new user add successfully';
            header( "refresh:5;url=admins.php" );
        }
        
        public function update($col_name , $value){
            global $conn;
            $table = get_class($this);
            $stmt = $conn->prepare("UPDATE $table SET $col_name = $value");
            $stmt->execute();
        }
        

        public function logout(){
            if(isset($_SESSION) && !empty($_SESSION['email'])){
                //remove all sessions
                session_unset();
                //destroy all sessions
                session_destroy();
                echo "Loged Out";
                header('refresh:1;url=../../index.php');
            }elseif( empty($_SESSION['email']) ){
                header('refresh:1;url=../../index.php');
                echo "Already Out";
            }
        }
        // 
        // SET ContactName = 'Alfred Schmidt', City= 'Frankfurt'
        // WHERE CustomerID = 1;
}
class users extends model{
    public $id;
    public $name;
    public $email;
    public $password;
    public $phone;
}


class properties extends model{
    public $title;
    public $prop_type;
    public $bedrooms;
    public $bathrooms;
    public $kitchen;
    public $livingrooms;
    public $area;
    public $price;
    public $location;
    public $prop_links;
    public $description;
    public $ClassT;
    public $availbilty;
    public $delivery_type;
    public $utilty;
    public $payment_type;
} 

class interests extends model{
    public $id;
    public $property_id;
    public $interester_id;
}

class side_ads extends model{
    public $id;
    public $user_id;
    public $package;
    public $duration;
    public $credits;
    public $start_date;
    public $url;
    public $approved;
    public $isPaid;
    public $status;

}

class prop_imgs extends model{
    public $id;
    public $property_image;
    public $property_id;

}