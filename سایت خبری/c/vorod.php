
<?php 
 session_start() ; 
 require_once __DIR__ . '/../m/amal_ha.PHP';
 require_once __DIR__ . '/amniyat.php';
class qw extends amal_ha   
{ 
  use  amniyat ; 
  public function __construct()
  {
    parent::__construct() ; 
      (basename($_SERVER['SCRIPT_FILENAME']) == 'index.php') ? $this->vorod() : $this->sbtnam() ;
      $this->conn = null ; 
  }
  public function  vorod()
  {
    
    if (isset($_POST['submit'])) 
    {
      if (!empty($_POST['username'])) 
      {
      
          if ($this->chek('abote ', $this->xss($_POST['password'] ,FILTER_SANITIZE_STRING) , 'password') == true && $this->chek('abote', $this->xss($_POST['username'],FILTER_SANITIZE_STRING), 'user') == true) 
          {
              $_SESSION['username'] = $_POST['username'];
              $_SESSION['password'] = $_POST['password'];    
              header('Location: ../acc/acc.php');
              exit(); 
          } else 
          {
              
  
                echo "<script>alert('اطلعات شما ثبت نشده است ')</script>";
              
              header('Location: ../sign up/singup.php');
              exit(); 
          }
      } else 
      {
          echo '<script>alert("لطفاً نام کاربری را وارد کنید")</script>';
      }
  } else {
      echo '<script>alert("فرم ارسال نشده است")</script>';
  }
  
  }
  public function sbtnam()
  {
    if (isset($_POST['submit']))
     {  
      if(!empty($_POST['name']))
      {

        $this->add_to_abot('abote', $this->xss($_POST['name'],FILTER_SANITIZE_SPECIAL_CHARS)  , $this->xss($_POST['password'] , FILTER_SANITIZE_SPECIAL_CHARS) , $this->xss($_POST['email'] , FILTER_VALIDATE_EMAIL )  , $this->xss($_POST['phone']  , FILTER_SANITIZE_NUMBER_INT ), '1')  ;

        $_SESSION['filename'] = 'sbtnam' ; 
        $_SESSION['name'] = $_POST['name'] ; 
        $_SESSION['password'] = $_POST['password'] ; 
        $_SESSION['phone']  = $_POST['phone']; 
        $_SESSION['semat'] = 'کاربر عادی ' ; 
        $_SESSION['emil'] = $_POST['email'] ; 
        echo '<script>alert("اطلعات شما ذخیره شد ")'; 
        
        header('Location: ../acc/acc.php');
        exit(); 
      }
      
    }
  }
}
$qw = new qw();
