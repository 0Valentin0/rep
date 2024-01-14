<?php
   include("config_db.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // данные из формы
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
      
      // запрос к базе данных
      $sql = "SELECT id, is_admin FROM user WHERE email = '$email' AND password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      // Если найдена 1 строка совпадения по $myusername и $mypassword,
      // тогда строка в таблице должна быть 1 строкой.
      if($count == 1) {
         $_SESSION['is_login'] = true;
         $_SESSION['login_user'] = $email;
         
         header('Location: '.$_SERVER['HTTP_REFERER']);  
      }else {
         header('Location: index.php');  
         $error = "Ваш логин или пароль неверны";
      }
   }
?>
<?php include("includes/components/login.php"); ?>
