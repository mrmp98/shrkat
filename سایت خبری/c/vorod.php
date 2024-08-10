
<?php 
 session_start() ; 
 require_once __DIR__ . '/../m/amal_ha.PHP';
class qw extends amal_ha
{
  public function __construct()
  {
    parent::__construct() ; 
     echo (basename($_SERVER['SCRIPT_FILENAME']) == 'index.php') ? $this->vorod() : $this->sbtnam() ;
  
  }
  public function  vorod()
  {
    
    if (isset($_POST['submit'])) {
      if (!empty($_POST['username'])) { 
          if ($this->chek('abote', $_POST['password'], 'passsword') == true && $this->chek('abote', $_POST['username'], 'user') == true) {
            // $_SESSION['filename'] = 'vorod' ; 
            // $_SESSION['username'] = $_POST['username'] ; 
            // $_SESSION['passsword'] = $_POST['passsword'] ; 
            // $_SESSION['semat'] = 'کاربر عادی ' ; 
            // $_SESSION['emil'] = 'وارد نکردید ' ; 
            
            echo '<script>alert("اطلاعات شما ثبت شده است")</script>';
              
              sleep(2); 
              header('Location: ../acc/acc.php');
              exit(); 
          } else {
              
                
                echo "<script>alert('اطلعات شما ثبت نشده است ')</script>";
              sleep(2);
              header('Location: ../sign up/singup.php');
              exit(); 
          }
      } else {
          echo '<script>alert("لطفاً نام کاربری را وارد کنید")</script>';
      }
  } else {
      echo '<script>alert("فرم ارسال نشده است")</script>';
  }
  
  }
  public function sbtnam()
  {
    if (isset($_POST['submit'])) {  
      if(!empty($_POST['name'])){

        $this->add_to_abot('abote', $_POST['name'],$_POST['password'], $_POST['email'],  $_POST['phone'] , '1')  ; 
        // $_SESSION['filename'] = 'sbtnam' ; 
        // $_SESSION['name'] = $_POST['name'] ; 
        // $_SESSION['password'] = $_POST['password'] ; 
        // $_SESSION['bracday']= $_POST['date'] ; 
        // $_SESSION['semat'] = 'کاربر عادی ' ; 
        // $_SESSION['emil'] = 'وارد نکردید ' ; 
        echo '<script>alert("اطلعات شما ذخیره شد ")'; 
        sleep(2);
        header('Location: ../sign up/singup.php');
        exit(); 
      }
      
    }
  }
}
$qw = new qw();

// xss
// test
// sql