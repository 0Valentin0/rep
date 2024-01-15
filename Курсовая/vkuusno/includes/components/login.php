<div class="model" id="id01">
    <div class="login container">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <div class="loginModelImg"></div>
        <div class="form-wrapper">
            <h2 class="title">Vkuusno</h2>
            <p class="tag-line">Добро пожаловать! Пожалуйста, войдите в свою учетную запись.</p>
            <form action="./login.php" method="post" accept-charset="utf-8" _lpchecked="1">
                <div class="form">
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
                        <div class="remember-check">
                            <input type="checkbox" name="remember" class="form-check-input" id="remember-me">
                            <label class="form-check-label" for="remember-me">Запомнить меня</label>
                        </div>

                        <input type="submit" class="login-form-btn" id="loginBtn" data-id="dashboard" value="Вход">
                    </div>
                    <div class="login-footer">
                        <a href="#">Забыли пароль?</a> | <a style="cursor:pointer;" onclick="return signupModel();">Регистрация</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
