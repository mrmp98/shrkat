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
        try {
            $sql = "DELETE FROM $table_name WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            if ($stmt->execute()) {
                echo "رکورد با موفقیت حذف شد.";
            } else {
                echo "خطا در حذف رکورد: " . $stmt->errorInfo();
            }
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
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
    public function add_to_post($table_name, $user, $seen, $mtn, $edit)
    {
        try {
            $sql = "INSERT INTO $table_name (user, seen, mtn, edit) VALUES (:user, :seen, :mtn, :edit)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':user', $user);
            $stmt->bindParam(':seen', $seen);
            $stmt->bindParam(':mtn', $mtn);
            $stmt->bindParam(':edit', $edit);
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
        if (basename($_SERVER['SCRIPT_FILENAME']) == 'index.php') {
            $stmt = $this->conn->prepare('SELECT * FROM `post` WHERE 1 = 1');
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }

    public  function update($table_name, $user = null, $seen = null, $mtn = null, $edit = null)
    {
        try {
            $sql = "INSERT INTO $table_name (user, seen, mtn, edit) VALUES (:user, :seen, :mtn, :edit)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':user', $user);
            $stmt->bindParam(':seen', $seen);
            $stmt->bindParam(':mtn', $mtn);
            $stmt->bindParam(':edit', $edit);
            if ($stmt->execute()) {
                echo "اطلاعات با موفقیت وارد شد.";
            } else {
                echo "خطا در وارد کردن اطلاعات: " . $stmt->errorInfo();
            }
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
