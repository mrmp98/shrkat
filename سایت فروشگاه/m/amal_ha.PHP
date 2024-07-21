<?php
class connect 
{
    public $servername = 'localhost';
    public $password = '';
    public $username = 'root';
    public $conn; 
    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=froshgah", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
class amal_ha extends connect
{ 

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
    public function add_to_abot($table_name, $name, $email, $phon, $semat, $count, $tavalod, $edit)
    {
        try {
            $sql = "INSERT INTO $table_name (user, password, phone, semat, count_post, brac_daye, count_edit) VALUES (:user, :password, :phone, :semat, :count, :tavalod, :edit)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':user', $name);
            $stmt->bindParam(':password', $email);
            $stmt->bindParam(':phone', $phon);
            $stmt->bindParam(':semat', $semat);
            $stmt->bindParam(':count', $count);
            $stmt->bindParam(':tavalod', $tavalod);
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
    public function add_to_post($table_name , $user , $seen , $mtn , $edit)
    {
        try {
            $sql = "INSERT INTO $table_name (user, seen, mtn, edit) VALUES (:user, :seen, :mtn, :edit)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':user', $user);
            $stmt->bindParam(':seen', $seen); // اینجا تغییر داده شده
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
    public function selekt($name)
    {
        try {
            $sql = "SELECT * FROM $table_name WHERE user = :user";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':user', $user);
            $stmt->execute();
            
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            if (count($result) > 0) {
                foreach ($result as $row) {
                    echo "نام کاربری: " . $row['user'] . ", مشاهده شده: " . $row['seen'] . ", متن: " . $row['mtn'] . ", ویرایش: " . $row['edit'] . "<br>";
                }
            } else {
                echo "رکوردی یافت نشد.";
            }
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
           // not ok 

    } 
    public  function update()
    {
        try {
            $sql = "INSERT INTO $table_name (user, seen, mtn, edit) VALUES (:user, :seen, :mtn, :edit)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':user', $user);
            $stmt->bindParam(':seen', $seen); // اینجا تغییر داده شده
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
        // not ok 
    }
}
$qw = new connect();
$amal_ha = new amal_ha();
echo '<br>' ; 

$amal_ha->add_to_abot('abote', 'vrwhvw', 'fhewfuiuhef', 1456464351564, 'admin', 5, '45/7/4', 5);
echo '<br>' ; 
// user
$amal_ha->dell('abote' , 1) ; 
echo '<br>' ; 
$amal_ha->add_to_post('post',1,1,'ejoewjewoivjewvoijoiewjoiejewvjqevujewvjoivwohjbroih',1) ; 