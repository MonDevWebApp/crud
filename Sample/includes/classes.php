<?php
Class MyCrud {
    private $server = "mysql:host=localhost; dbname=crud";
    private $user = "root";
    private $pass = "MNTBN@25oio";
    private $options = array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC);
    protected $con;
  
    public function openConnection()
    {
      try
      {
        $this->con = new PDO($this->server,$this->user,$this->pass,$this->options);
        return $this->con;
      }catch(PDOException $e)
      {
        echo "There is a problem in connection: ". $e->getMessage();
      }
    }
    public function closeConnection()
    {
      $this->con = null;
    }

    public function check_user_exist($username){
        $connection=$this->openConnection();
        $stmt = $connection->prepare("Select * from users where username = ?");
        $stmt -> execute([$username]);
        $total= $stmt->rowCount();
    
        return $total;
      }
      public function add_user(){
        if (isset($_POST['adduser'])){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $address = $_POST['address'];
    
          if ($this-> check_user_exist($username)==0) {
            $connection=$this->openConnection();
            $stmt = $connection->prepare("Insert into users(`name`,`username`,`address`)values(?,?,?)");
            $stmt -> execute([$name,$username,$address]);
          }else {
            echo "User already exist";
          }
        }
      }
      public function get_users(){
        $connection=$this->openConnection();
        $stmt = $connection->prepare("Select * from users");
        $stmt -> execute();
        $users = $stmt->fetchAll();
        $total = $stmt->rowCount();
    
        if ($total > 0) {
          return $users;
        }else {
          return FALSE;
        }
      }

}

$crud =new MyCrud();