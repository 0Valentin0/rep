<?php include_once("config_db.php"); 

$name = $email = $subject =  $desc =  '';
$errors = array('name' => '', 'email' => '', 'subject' => '', 'description' => '', 'done' => '');
$success = '';

if(isset($_POST['submit'])){
    
    // проверка имени
    if(empty($_POST['name'])){
        $errors['name'] = 'Имя обязательно для заполнения';
    } else{
        $name = $_POST['name'];
        if(!preg_match('/^[а-яА-ЯёЁ\s]+$/u', $name)){
            $errors['name'] = 'Ошибка ввода. Используйте только буквы и пробелы';
        }
    }

    // проверка email
    if(empty($_POST['email'])){
        $errors['email'] = 'Email обязателен для заполнения';
    } else{
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'Email должен быть действительным адресом электронной почты';
        }
    }

    // проверка темы
    if(empty($_POST['subject'])){
        $errors['subject'] = 'Тема обязательна для заполнения';
    } else{
        $subject = $_POST['subject'];
        if(!preg_match('/^[а-яА-ЯёЁ\s]+$/u', $subject)){
            $errors['subject'] = 'Тема должна содержать только буквы и пробелы';
        }
    }

    // проверка описания
    if(empty($_POST['description'])){
        $errors['description'] = 'Описание обязательно для заполнения';
    } else{
        $description = $_POST['description'];
        if(!preg_match('/^([а-яА-ЯёЁ\s]+)(,\s*[а-яА-ЯёЁ\s]*)*$/u', $description)){
            $errors['description'] = 'Описание должно содержать только буквы и пробелы';
        }
    }

    if(array_filter($errors)){
        // echo 'Ошибки в форме';
        
    } else {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $subject = mysqli_real_escape_string($conn, $_POST['subject']);
        $desc = mysqli_real_escape_string($conn, $_POST['description']);

        // создание SQL-запроса
        $sql = "INSERT INTO contact(name,email,subject,description) VALUES('$name','$email','$subject', '$desc')";

        // сохранение в базе данных и проверка
        if(mysqli_query($conn, $sql)){
            mysqli_close($conn);
            // успех
            $_SESSION['success'] = "Сообщение успешно отправлено";
            $name = $email = $subject =  $desc =  '';
        } else {
            echo 'Ошибка запроса: '. mysqli_error($conn);
        }
    }
} 
           
?>
<style>
.red-text{
    font-size: 10px;
    color: red;
    font-style: italic;
}
</style>

<?php include("includes/components/header.php"); ?>

<section class="contactSection">
    <div class="wrapper contactus">

        <form action="contactus.php" method="post" accept-charset="UTF-8">

            <div class="backgg">
                <h1 class="title" style="margin:0;">Свяжитесь с нами</h1>
            </div>
            <!-- Имя -->
            <div class="col col1">
                <input required oninvalid="this.setCustomValidity('Введите ваше имя')" oninput="this.setCustomValidity('')" type="text" name="name" placeholder="Имя"  class="form-control form-control-lg thick" value="<?php echo htmlspecialchars($name) ?>">
                <div class="red-text"><?php echo $errors['name']; ?></div>
            </div>

            <!-- Email -->
            <div class="col col2" >
                <input required oninvalid="this.setCustomValidity('Введите ваш email')" oninput="this.setCustomValidity('')" type="email" name="email" placeholder="E-mail" class="form-control form-control-lg thick" value="<?php echo htmlspecialchars($email) ?>">
                <div class="red-text"><?php echo $errors['email']; ?></div>
            </div>

            <!-- Тема -->
            <div class="col col3">
                <input required oninvalid="this.setCustomValidity('Введите тему вашего вопроса')" oninput="this.setCustomValidity('')" type="text" name="subject" placeholder="Тема" class="form-control form-control-lg thick" value="<?php echo htmlspecialchars($subject) ?>">
                <div class="red-text"><?php echo $errors['subject']; ?></div>
            </div>

            <!-- Описание -->
            <div class="col col4">
                <textarea required oninvalid="this.setCustomValidity('Пожалуйста, введите ваше сообщение')" oninput="this.setCustomValidity('')" name="description" placeholder="Описание" class="styled-input wide" rows="10" cols="30"><?php echo htmlspecialchars($desc) ?></textarea>
                <div class="red-text"><?php echo $errors['description']; ?></div>
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Отправить" >

        </form>
        <div class="successMsg">
            <?php if (isset($_SESSION['success']) && !empty($_SESSION['success'])) { ?>
                <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success']; ?></div>
                <?php
                unset($_SESSION['success']);
            }
            ?>
        </div>
    </div>
</section>

<!-- Footer  -->
<script src="./includes/js/map.js"></script>
<?php include("includes/components/footer.php"); ?>
