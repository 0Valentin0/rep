<?php include("session.php")?>

<?php 
if(!isset($_SESSION['login_user']))
{
    header('Location: index.php');
    exit; 
}

$errors = array('name' => '', 'email' => '');

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $success = '' ;
    $dbmail = $_SESSION['login_user'];

    // Проверка наличия ошибок ввода
    // ...

    $profilepassword = $_POST['profilepassword'];
    if(empty($_POST['profilename'])){
        // $errors['profilename'] = 'Имя обязательно';
    } else{
        $profilename = $_POST['profilename'];
    }

    if(empty($_POST['profileemail'])){
        $profileemail = $_SESSION['login_user'];
    } else{
        $profileemail = $_POST['profileemail'];
    }

    if(empty($_POST['profilepassword'])){
        $sql = "UPDATE `user` SET `name`='$profilename',`email`='$profileemail' WHERE email='$dbmail'";
    }else{
        $sql = "UPDATE `user` SET `name`='$profilename',`email`='$profileemail', `password`='$profilepassword' WHERE email='$dbmail'";
    }

    if(array_filter($errors)){
        echo 'Ошибки в форме';
    } else {
        $profilename = mysqli_real_escape_string($conn, $_POST['profilename']);
        $profileemail = mysqli_real_escape_string($conn, $_POST['profileemail']);

        // Обновление записи в базе данных
        if(mysqli_query($conn, $sql)){
            $_SESSION['success'] = "Данные успешно изменены";
            $_SESSION['login_user'] = $login_session= $profileemail;
            $login_session_name = $profilename;
        } else {
            echo 'Ошибка запроса: '. mysqli_error($conn);
        }
    }
} 
?>

<?php include("includes/components/header.php"); ?>
<style>
        body {
            background-image: url('includes/images/profileBG.jpeg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        
        .login-box {
            margin-top: 90px;
            height: auto;
            background: #000000d0;
            text-align: center;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        }
        
        .login-title {
            text-align: center;
            font-size: 4rem;
            letter-spacing: 2px;
            margin-top: 30px;
            font-weight: bold;
            color: #ffffff;
            opacity: 1;
        }
        h3{
            font-size: 2rem;
            margin-bottom: 20px;
            color:white;
        }
        
        .login-form {
            margin-top: 25px;
            text-align: center;
            width: 70%;
            margin: auto;
        }
        
       
        
        .form-group {
            margin-bottom: 40px;
            outline: 0px;
        }
   
    
        
        label {
            margin-bottom: 0px;
        }
        
        .form-control-label {
            font-size: 20px;
            opacity: 1;
            color: #fffbfb;
            font-weight: bold;
            letter-spacing: 1px;
        }
        
        .login-btm {
            float: center;
        }
        
        .login-button {
            padding-right: 0px;
            text-align: center;
            margin-bottom: 25px;
        }
        
        .login-text {
            text-align: center;
            padding-left: 0px;
            color: #A2A4A4;
        }
        
        .loginbttm {
            padding: 0px;
        }
        .container{
            width: 80%;
            margin: auto;
        }
        input, textarea {
    padding: 1em;
    border: 0;
    width: 100%;
    font-size: 1.6rem;
    background-color: #f8f8f8;
    color: rgb(0, 0, 0);
    border-radius: 4px;
    }
</style>
<div class="wrapper profile">
    <div class="col-lg-12 login-title">
        <b>МОЙ ПРОФИЛЬ</b>
    </div>
    <div class="container">
        <div class="row">
            <div class="login-box">
                <h3>Просмотр / Изменение профиля</h3>
                <?php if (isset($_SESSION['success']) && !empty($_SESSION['success'])) { ?>
                    <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success']; ?></div>
                    <?php unset($_SESSION['success']); ?>
                <?php } ?>
                <div class="col-lg-12 login-form">
                    <form action="profile.php" method="POST">
                        <div class="form-group">
                            <label class="form-control-label">Имя:</label>
                            <input name="profilename" type="text" class="form-control" value="<?php echo htmlspecialchars($login_session_name) ?>">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Email:</label>
                            <input name="profileemail" type="text" class="form-control" value="<?php echo htmlspecialchars($login_session) ?>">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Изменить пароль:</label>
                            <input placeholder="введите новый пароль для изменения или оставьте пустым" type="password" name="profilepassword" class="form-control">
                        </div>
                        <div class="col-lg-12 loginbttm">
                            <div class="col-lg-6 login-btm login-text"></div>
                            <div class="col-lg-6 login-btm login-button">
                                <button type="submit" class="btn btn-primary">СОХРАНИТЬ ИЗМЕНЕНИЯ</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
    </div>
</div>



    <!-- Footer  -->
<?php include("includes/components/footer.php"); ?>