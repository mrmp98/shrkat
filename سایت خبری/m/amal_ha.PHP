<?php
class connect
{
    public $servername = 'localhost';
    public $username = 'root';
    public $password = '';
    public $conn;

    public function __construct()
    {
        try {

            $this->conn = new PDO("mysql:host=$this->servername;dbname=froshgah", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
class amal_ha extends connect
{
    public function __construct()
    {
        parent::__construct();
    }

    public function chek($table_name, $value, $column_name)
    {

        if (empty($table_name) || empty($value) || empty($column_name)) {
            echo "نام جدول، مقدار یا نام ستون نمی‌تواند خالی باشد.";
            return false;
        }



        try {

            $sql = "SELECT COUNT(*) AS count FROM $table_name WHERE $column_name = :value";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':value', $value);

            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);


            return isset($row['count']) && $row['count'] > 0;
        } catch (PDOException $e) {
            echo "خطا در اجرای پرس و جو: " . $e->getMessage();
            return false;
        }
    }
    public function dell($table_name, $id)
    {
        // لیست سفید برای نام جدول
        
    
        try {
            $sql = "DELETE FROM $table_name WHERE id = :id";
            $stmt =   $this->conn->prepare($sql);
             
            $stmt->bindParam(':id', $id);
            if ($stmt->execute()) {
                echo "رکورد با موفقیت حذف شد.";
                return true; // موفقیت
            } else {
                echo "خطا در حذف رکورد: " . print_r($stmt->errorInfo(), true);
                return false; // خطا
            }
        } catch (PDOException $e) {
            echo "خطا در اتصال: " . $e->getMessage();
            return false; // خطا
        }
    }
    
    public function add_to_abot($table_name, $name, $password, $email, $phon, $semat)
    {
        try {
            $sql = "INSERT INTO $table_name (user , password, semat, email  , phone) VALUES (:user, :password,:semat , :email , :phone)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':user', $name);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phon);
            $stmt->bindParam(':semat', $semat);

            if ($stmt->execute()) {
                echo "اطلاعات با موفقیت وارد شد.";
            } else {
                echo "خطا در وارد کردن اطلاعات: " . $stmt->errorInfo();
            }
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function add_to_post($table_name, $user, $mtn , $edit , $like , $dastebandi , $titel , $seen)
    {
        try {
            $sql = "INSERT INTO $table_name (user, mtn, edit , count_like , daste_bandi , titel , seen ) VALUES (:user, :mtn, :edit, :liike , :dastebandi ,:titel ,:seen)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':user', $user);
            $stmt->bindParam(':mtn', $mtn);
            $stmt->bindParam(':edit', $edit);
            $stmt->bindParam(':liike', $like); 
            $stmt->bindParam(':dastebandi', $dastebandi); 
            $stmt->bindParam(':titel', $titel); 
            $stmt->bindParam(':seen', $seen); 

            if ($stmt->execute()) {
                echo "اطلاعات با موفقیت وارد شد.";
            } else {
                echo "خطا در وارد کردن اطلاعات: " . $stmt->errorInfo();
            }
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function selekt($r = null, $r2 = null)
    {
        if (basename($_SERVER['SCRIPT_FILENAME']) == 'acc.php') {
            $stmt = $this->conn->prepare("SELECT user, password, semat, email, phone FROM abote WHERE user = :user AND password = :password");
$stmt->execute(['user' => $r, 'password' => $r2]);
            
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
            
        }
        if (basename($_SERVER['SCRIPT_FILENAME']) == 'index.php') 
        {
            
            if($r == 1)
            {
                
                $stmt = $this->conn->prepare("SELECT `name` FROM `category` WHERE id = $r2"); 
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                return  ($result['name']);   
            }
            if($r == 2)
            {
                
                $stmt = $this->conn->prepare("SELECT `mtn`, `daste_bandi`, `titel` FROM `post` WHERE id = $r2");
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                return  ($result);
                  
                
            } 
            if($r == 3)
            {
                
                $stmt = $this->conn->prepare("SELECT * FROM `abote` WHERE id = $r2")  ; 
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                return  $result;
                
            } 
            if($r == 4){
                $stmt = $this->conn->prepare("SELECT * FROM `abote` WHERE user = :user");
                $stmt->bindParam(':user', $r2);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                return  $result;
            }
            $stmt = $this->conn->prepare('SELECT * FROM `post` WHERE 1 = 1');
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }

    public  function update($table_name, $id = null ,  $r1 = null, $r2 = null)
    {
        try {
            $sql = "UPDATE $table_name SET mtn = :mtn, titel = :titel WHERE id = $id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':mtn', $r1);
            $stmt->bindParam(':titel', $r2);
        
            if ($stmt->execute()) {
                
                echo "اطلاعات با موفقیت به‌روزرسانی شد.";
            } else {
                echo "خطا در به‌روزرسانی اطلاعات: " . print_r($stmt->errorInfo(), true);
            }
            
        } 
        catch (PDOException $e)
         {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
