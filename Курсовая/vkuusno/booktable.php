<?php include('session.php');

if(!isset($_SESSION['login_user']))
{
    header('Location: index.php');
    exit; 
}
$bookingName = $seating = $occasion = $additionalnotes = '';
$errors = array('bookingName' => '', 'seating' => '', 'occasion' => '', 'additionalnotes' => '');


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $success = '' ;
    $occasion = $_POST['occasion'];
    $additionalnotes = $_POST['additionalnotes'];
        // проверка имени
        if(empty($_POST['bookingName'])){
            $errors['bookingName'] = 'Имя обязательно для заполнения';
        } else{
            $bookingName = $_POST['bookingName'];
            if(!preg_match('/^[а-яА-ЯёЁ\s]+$/u', $bookingName)){
                $errors['bookingName'] = 'Ошибка ввода. Используйте только буквы и пробелы';
            }
        }
        // проверка места
        if(empty($_POST['seating'])){
            $errors['seating'] = 'Выбор места обязателен';
        } else{
            $seating = $_POST['seating'];
            if(!preg_match('/^[а-яА-ЯёЁ\s]+$/u', $seating)){
                $errors['seating'] = 'Недоступно';
            }
        }

        if(array_filter($errors)){
            // echo 'Ошибки в форме';
            
        } else {
            $bookingName = mysqli_real_escape_string($conn, $_POST['bookingName']);
            $seating = mysqli_real_escape_string($conn, $_POST['seating']);
            $occasion = mysqli_real_escape_string($conn, $_POST['occasion']);
            $additionalnotes = mysqli_real_escape_string($conn, $_POST['additionalnotes']);
    
            // создание SQL-запроса
            $sql = "INSERT INTO tablebook(name,seatingcapacity,specialoccasion, additionalnotes) VALUES('$bookingName','$seating', '$occasion' ,'$additionalnotes')";
    //         // сохранение в базе данных и проверка
            if(mysqli_query($conn, $sql)){
                // успех
                // echo "Сообщение успешно отправлено";
                mysqli_close($conn);
                // $bookingName = $seating = $occasion = $additionalnotes = '';
                $_SESSION['success'] = "Стол успешно забронирован";
                $bookingName = $seating = $occasion = $additionalnotes = '';
                // header('location:booktable.php');   
            } else {
                echo 'Ошибка запроса: '. mysqli_error($conn);
            }
        }
    } 
    ?>


<?php include('includes/components/header.php');?>
<section>
<div class="wrapper">
<div class="bookTableModel" id="bookTableModel">
<div class="booktable container">

<!-- <span onclick="document.getElementById('bookTableModel').style.display='none'" class="close" title="Close Modal">&times;</span> -->
    <!-- <div class="bookTableModelImg"></div> -->
    <div class="wrapper booktable">
        <?php if (isset($_SESSION['success']) && !empty($_SESSION['success'])) { ?>
            <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success']; ?></div>
            <?php
            unset($_SESSION['success']);
        }
        ?>
        <h2 class="title">Vkuusno</h2>
        <p class="tag-line"> Забронировать стол</p>

    <form action="booktable.php" method="post" accept-charset="utf-8">
        <h2>Забронировать стол для:</h2>
            <div class="wrap-input100 validate-input">
                <!-- <span class="label-input100">Book Table For:</span> -->
                <input required type="text" name="bookingName" class="input100" id="bookingName" aria-describedby="" placeholder="Введите имя*"  value="<?php echo htmlspecialchars($bookingName) ?>">
            </div>
            <!-- document.querySelector('input[type="checkbox"]:checked').value; -->
            <div class="form-group">
                <div class="seating">
                    <h2>Вместимость:</h2>
                    <article class="feature">
                        <input type="checkbox" value="Один" id="feature1" name="seating" onclick="checkBox(this)" />
                        <div>
                            <!-- <img src="includes/images/bookTable/solo.svg" class="seatingCheckbox" alt="" srcset="" height="100%" width="100%" > -->
                            <span style="text-align: center; " >
                            Один<br/>
                            - Для 1 человека
                        </span>
                        </div>
                    
                    </article>
                    
                    <article class="feature">
                        <input type="checkbox" value="Двое" id="feature2" name="seating" onclick="checkBox(this)" />
                        <div>
                        <span style="text-align: center; " >
                        Пара<br/>
                            - Для 2 человек
                        </span>
                        </div>
                    </article>
                    
                    <article class="feature">
                        <input type="checkbox" value="Семья" id="feature3" name="seating" onclick="checkBox(this)" />
                        <div>
                        <span style="text-align: center;">
                        Семья<br/>
                            - Для 5 человек
                        </span>
                        </div>
                    </article>
                    
                    <article class="feature">
                        <input type="checkbox" value="Вечеринка" id="feature4"  name="seating" onclick="checkBox(this)" />
                        <div>
                        <span style="text-align: center; " >
                            Вечеринка<br/>
                            - Более 5 человек
                        </span>
                        </div>
                    </article>
                </div>

                <div class="specialOccasion">
                    <h2>Особый случай:</h2>
                    <article class="feature">
                        <input type="checkbox" value="Годовщина" id="aniversary" name="occasion" onclick="bookingOccasion(this)" />
                        <div>
                            <!-- <img src="includes/images/bookTable/solo.svg" class="seatingCheckbox" alt="" srcset="" height="100%" width="100%" > -->
                            <span style="text-align: center; " >
                            Годовщина
                        </span>
                        </div>
                    
                    </article>
                    
                    <article class="feature">
                        <input type="checkbox" value="День рождение" id="birthday" name="occasion" onclick="bookingOccasion(this)" />
                        <div>
                        <span style="text-align: center; " >
                        День рождения
                        </span>
                        </div>
                    </article>
                    
                    <article class="feature">
                        <input type="checkbox" value="Свидание" id="date" name="occasion" onclick="bookingOccasion(this)" />
                        <div>
                        <span style="text-align: center;">
                            Свидание
                        </span>
                        </div>
                    </article>
                    
                    <article class="feature">
                        <input type="checkbox" value="Встреча" id="meeting"  name="occasion" onclick="bookingOccasion(this)" />
                        <div>
                        <span style="text-align: center; " >
                           Встреча
                        </span>
                        </div>
                    </article>
                </div>
                <div class="additionalNotes">
                    <h2>Дополнительные заметки:</h2>
                    <textarea id="" cols="30" rows="10" class="styled-input wide" name="additionalnotes"  value="<?php echo htmlspecialchars($additionalnotes) ?>"></textarea>
                </div>
            </div>
                <input onclick="tableValid()" type="submit" class="login-form-btn" id="bookTablebtn"  value="Забронировать стол" >
         
    </form>
    </div>
</div>
</div>
</div>
</section>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<!-- Footer  -->
<?php include("includes/components/footer.php"); ?>
