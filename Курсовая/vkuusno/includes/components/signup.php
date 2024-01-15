<?php $success = ''; ?>
<div class="signupModel" id="id02">
    <div class="login container">
        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
        <div class="loginModelImg"></div>
        <div class="form-wrapper signup">
            <h2 class="title">Vkuusno</h2>
            <p class="tag-line">Создайте аккаунт</p>
            <form action="./signup.php" method="post" accept-charset="utf-8" _lpchecked="1">
                <div class="form">
                    <div class="wrap-input100 validate-input">
                        <span class="label-input100">Имя</span>
                        <input type="text" name="name" class="input100" id="name" value="" aria-describedby="" placeholder="Введите имя" required="">
                    </div>
                    <br>
                    <div class="wrap-input100 validate-input">
                        <span class="label-input100">Электронная почта</span>
                        <input type="email" name="email" class="input100" id="email" value="" aria-describedby="" placeholder="Введите адрес электронной почты" required="">
                    </div>
                    <br>
                    <div class="wrap-input100 validate-input">
                        <span class="label-input100">Пароль</span>
                        <input type="password" name="password" value="" class="input100" id="password" aria-describedby="" placeholder="Введите пароль" required="">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="login-form-btn" id="loginBtn" data-id="dashboard" value="Зарегистрироваться">
                    </div>
                    <?php echo $success ?>
                    <div class="login-footer">
                        <a href="#">Забыли пароль?</a> | <a style="cursor:pointer;" onclick="return loginModel();">Вход</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
