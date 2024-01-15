<section>
    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
        <h2 style="font-family: arial;">Tasty Indeed</h2>
    </div>
    <div class="wrapper footer">
        <div class="left">
            <div class="flogo">
                <img src="includes/images/logo.png" alt="логотип" width="110px">
                <h2>Vkuusno</h2>
            </div>
            
            <p>Единственное, чем мы серьезно занимаемся, - это еда.</p>
        </div>
        <div class="center">
            <h2 class="list-title">Ссылки на меню</h2>
            <ul class="list-items">
                <li> <a href="./starters.php">Закуски</a> </li>
                <li> <a href="./soup.php">Супы</a> </li>
                <li> <a href="./drinks.php">Напитки</a> </li>
                <li> <a href="./maincourse.php">Основные блюда</a> </li>
                <li> <a href="./desserts.php">Десерты</a> </li>
            </ul>
        </div>
        <div class="right">
            <div class="links">
                <h2 class="list-title">Важные ссылки</h2>
                <ul class="list-items">
                    <li> <a href="./contactus.php">Свяжитесь с нами</a> </li>
                    <li> <a href="./booktable.php">Забронируйте стол </a> </li>
                    <li> <a href="./aboutus.php">О нас</a> </li>
                </ul>
               
            </div>
        </div>
    </div>
</section>
<script>
    function fadeOutEffect() {
        var fadeTarget = document.querySelector('.loader-wrapper');
        var fadeEffect = setInterval(function () {
            if (!fadeTarget.style.opacity) {
                fadeTarget.style.opacity = 1;
            }
            if (fadeTarget.style.opacity > 0) {
                fadeTarget.style.opacity -= 0.1;
            } else {
                clearInterval(fadeEffect);
                var loader = document.querySelector('.loader-wrapper');
                loader.style.display = "none";
            }
        }, 100);
    }

    window.addEventListener('load', fadeOutEffect);
</script>
<script src="./includes/js/config.js"></script>
<script src="./includes/js/script.js"></script>
</body>
</html>
