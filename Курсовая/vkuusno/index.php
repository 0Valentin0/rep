<?php include("includes/components/header.php"); ?>
<style>
    .header{
        position: absolute !important;
        background-color: transparent !important;
    }
    header{
        background-color: transparent;
        width: 100%;
    }
    .navbar{
        width: 100%;
        max-width: 110rem;
        margin: 0px auto;
        display: flex;
        flex-wrap: nowrap;
        height: 100%;
        justify-content: space-between;
        align-items: center;
        position: relative;
        z-index: 1;
    }
</style>
<section>
    <div class="heroSection">
            <div class="blackLayer"></div>
            <img src="includes/images/slide1.jpg" id="slides" class="high-res-image" alt="" role="presentation">
            <!-- <div class="heroImg"></div> -->
            <form action="" method="POST">
            <div class="searchWrapper">
                <div class="searchBox">
                    <div class="searchIcon"><div class="glassIcon"><i class="searchSVG" color="#828282" size="18"><svg xmlns="http://www.w3.org/2000/svg" fill="#828282" width="18" height="18" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" ><title>Search</title>
                    <path d="M19.78 19.12l-3.88-3.9c1.28-1.6 2.080-3.6 2.080-5.8 0-5-3.98-9-8.98-9s-9 4-9 9c0 5 4 9 9 9 2.2 0 4.2-0.8 5.8-2.1l3.88 3.9c0.1 0.1 0.3 0.2 0.5 0.2s0.4-0.1 0.5-0.2c0.4-0.3 0.4-0.8 0.1-1.1zM1.5 9.42c0-4.1 3.4-7.5 7.5-7.5s7.48 3.4 7.48 7.5-3.38 7.5-7.48 7.5c-4.1 0-7.5-3.4-7.5-7.5z"></path>
                    </svg></i></div><input minlength="3" value="" placeholder="Поиск кухни или блюда" class="inputBox"  id="query" name="query" onclick="enterkey(this)">
                </div>
                </div>
            </div>
            </form>
    </div>
</section>


<!-- Our menu  -->
<section>
    <div class="wrapper ">
        <div class="menuItems">
            <h2 class="title">Меню</h2>
        </div>
        <div class="menuCat">
            <div class="card" onclick="itemMenu('starter')">
            <a href="#startersDrop"><div class="cardImg"></div></a> 
                <p>Первое</p>
            </div>
            <div class="card" onclick="itemMenu('soup')">
            <a href="#soupDrop"><div class="cardImg"></div></a> 
                <p>Супы</p>
            </div>
            <div class="card" onclick="itemMenu('drink')">
            <a href="#drinksDrop"><div class="cardImg"></div></a> 
                <p>Напитки</p>
            </div>
            <div class="card" onclick="itemMenu('mainCourse')">
                <a href="#mainCourseDrop"><div class="cardImg"></div></a> 
                <p>Основное блюдо</p>
            </div>

            <div class="card" onclick="itemMenu('dessert')">
            <a href="#dessertsDrop"><div class="cardImg"></div></a> 
                <p>Десерты</p>
            </div>
        </div> 
    </div>
</section>
<!-- drop down menu main course -->
<section id="mainCourseDrop">
    <div class="wrapper">
        <div style="text-align: center;" class="mainCourse itemCat" >
        <h3 class="title"style="padding-top:10px;">Основное блюдо</h3>
        <section class="drop-menu">
        
    <div class="drop-down">
 
    <div class="unit">
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\biriyani.jpg" alt="">
            </div>
            <div class="write">
                <p>Бирияни</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\tandoori-chicken-.jpg" alt="">
            </div>
            <div class="write orange">
                <p >Цыпленок тандури</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\garlic-chicken-recipe-china-town-style.jpg" alt="">
            </div>
            <div class="write">
                <p>Цыпленок чили</p>
            </div>
            
        </div>
        
    </div>
    <div class="unit">
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\kadai-mushroom-recipe-1.jpg" alt="">
            </div>
            <div class="write ">
                <p >Грибы кадаи</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\malai-kofta-recipe.jpg" alt="">
            </div>
            <div class="write orange">
                <p>Малай Кофта Карри</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\butter_nun.jpg" alt="">
            </div>
            <div class="write ">
                <p >Масляная монашка</p>
            </div>
        </div>
    </div>
    </div>
</section>
    </div>
        <!-- drop down desserts -->
<div style="text-align: center;" class="dessert itemCat" >
    <section id="dessertsDrop">
        <h3 class="title"style="padding-top:10px;">Десерты</h3>
        <div class="drop-menu">
            
            <div class="drop-down">
                <div class="unit">
                    <div class="one">
                        <div class="suby-1">
                            <img  src="includes\image2\rainbow-cake-featured-scaled.jpg" alt="">
                        </div>
                        <div class="write">
                            <p>Радужный торт с единорогом</p>
                        </div>
                    </div>
                    <div class="one">
                        <div class="suby-1">
                            <img  src="includes\image2\red.webp" alt="">
                        </div>
                        <div class="write orange">
                            <p >Красный бархатный торт</p>
                        </div>
                    </div>
                    <div class="one">
                        <div class="suby-1">
                            <img  src="includes\image2\Vanilla-Swiss-Roll-2929-2.jpg" alt="">
                        </div>
                        <div class="write">
                            <p>Ванильно-швейцарский рулет</p>
                        </div>
                        
                    </div>

                    
                </div>
                <div class="unit">
                    <div class="one">
                        <div class="suby-1">
                            <img  src="includes\image2\rose-kulfi-crumble-chocolat.jpg" alt="">
                        </div>
                        <div class="write ">
                            <p >Розовый кулфи</p>
                        </div>
                    </div>
                    <div class="one">
                        <div class="suby-1">
                            <img  src="includes\image2\Dove-Chocolate-Ice-Cream-6-scaled.jpg" alt="">
                        </div>
                        <div class="write orange">
                            <p>Мороженое Dove</p>
                        </div>
                    </div>
                    <div class="one">
                        <div class="suby-1">
                            <img  src="includes\image2\blue.png" alt="">
                        </div>
                        <div class="write ">
                            <p >Черничный коктейль</p>
                        </div>
                    </div>

                  
                </div>
                <div class="unit">
                    <div class="one">
                        <div class="suby-1">
                            <img  src="includes\image2\rajbhog.jpg" alt="">
                        </div>
                        <div class="write ">
                            <p >Раджбхог</p>
                        </div>
                    </div>
                    <div class="one">
                        <div class="suby-1">
                            <img  src="includes\image2\milk-cake-462_1_1024x1024.png" alt="">
                        </div>
                        <div class="write orange">
                            <p>Молочный торт</p>
                        </div>
                    </div>
                    <div class="one">
                        <div class="suby-1">
                            <img  src="includes\image2\patisapta.recipe.jpg" alt="">
                        </div>
                        <div class="write ">
                            <p >Патишапта</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Drop down Drinks -->
        <div style="text-align: center;" class="drink itemCat" >
        <section id="drinksDrop">
        <h3 class="title"style="padding-top:10px;">Напитки</h3>
        <div class="drop-menu">
<div class="drop-down">
    <div class="unit">
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\coffee.webp" alt="">
            </div>
            <div class="write">
                <p>Кофе</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\mango-juice-2.jpg" alt="">
            </div>
            <div class="write orange">
                <p >Сок манго</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\Watermelon-Smoothie.jpg" alt="">
            </div>
            <div class="write">
                <p>Арбузный коктейль</p>
            </div>
            
        </div>
    </div>
    <div class="unit">
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\Blue-Lagoon-Mocktail-Tasty.jpg" alt="">
            </div>
            <div class="write ">
                <p >Коктейль "Голубая лагуна"</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\wine.jpg" alt="">
            </div>
            <div class="write orange">
                <p>Красное вино</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\Mimosa-with-Strawberry.jpg" alt="">
            </div>
            <div class="write ">
                <p >Мимоза </p>
            </div>
        </div>

    </div>
    </div>
</div>
</section>
        </div>



<!-- Drop down Soup -->

        <div style="text-align: center;" class="soup itemCat" >
        <section id="soupDrop">
        <h3 class="title"style="padding-top:10px;">Супы</h3>
        <div class="drop-menu">
        <div class="drop-down">
    <div class="unit">
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\avacado.jpg" alt="">
            </div>
            <div class="write">
                <p>Крем-суп из спаржи</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\beet.jpg" alt="">
            </div>
            <div class="write orange">
                <p >Борщ</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\tomato.jpg" alt="">
            </div>
            <div class="write">
                <p>Томатный суп</p>
            </div>
            
        </div>

    </div>
    <div class="unit">
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\Boondi-Raita-1-of-4-500x500.jpg" alt="">
            </div>
            <div class="write ">
                <p >Раита из бунды</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\greek-salad-2.jpg" alt="">
            </div>
            <div class="write orange">
                <p>Греческий салат</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\larb.jpg" alt="">
            </div>
            <div class="write ">
                <p >Салат "Ларб">
            </div>
        </div>

    </div>
    </div>
</div>
</section>
        </div>
<!-- Drop down Starter -->
        <div style="text-align: center;" class="starter itemCat" >
        <section id="startersDrop">
        <h3 class="title"style="padding-top:10px;">Первое</h3>
        <div class="drop-menu">
<div class="drop-down">
    <div class="unit">
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\veg-paneer-momos.jpg" alt="">
            </div>
            <div class="write">
                <p>Вег-момосы</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\Spring-Rolls-1.jpg" alt="">
            </div>
            <div class="write orange">
                <p >Спринг-роллы с овощами</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\dahivalle.jpg" alt="">
            </div>
            <div class="write">
                <p>Дахи Валле</p>
            </div>
            
        </div>

    </div>
    <div class="unit">
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\sushi.jpg" alt="">
            </div>
            <div class="write ">
                <p >Суши</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\muttonkebab.jpg" alt="">
            </div>
            <div class="write orange">
                <p>Кебаб из баранины</p>
            </div>
        </div>
        <div class="one">
            <div class="suby-1">
                <img  src="includes\image2\Murgh-Malai-tikka-2.jpg" alt="">
            </div>
            <div class="write ">
                <p >Мург-Малай-Тикка</p>
            </div>
        </div>

    </div>
</div>
</div>
</section>
        </div>
    </div>
</section>


<!-- Our Speciality -->
    <section>
        <div class="wrapper section2">
            <div class="speciality">
                <h2 class="title">Наша специализация</h2>
                <p>Один ингредиент, смешанный с другими специальными иностранными ингредиентами; наше фирменное блюдо - подлинное
                    тяжелое тело с богатыми компонентами и тонким ароматом, который оставит у вас незабываемые впечатления на всю жизнь.
                    опыт. Подается с любовью и заботой.
                </p>
            </div>
            <div class="cardAlign">
                <div class="cardWrapper">
                    <div class="sCard">
                        <div class="frontCard siCard1">
                        </div>
                        <div class="backCard siCard1">
                            <h2>Полезно от каждого глотка (суп со спаржей)</h2>
                            <h3>Цена: 500 руб.</h3>
                            <button class="btn btn-view">Попробовать</button>
                        </div>
                    </div>
                </div>
                <div class="cardWrapper">
                    <div class="sCard">
                        <div class="frontCard siCard2"></div>
                        <div class="backCard siCard2">
                            <h2>Бирияни, в который вы влюбитесь (Калькуттский цыпленок) (Бирияни)</h2>
                            <h3>Цена: 1.500 руб.</h3>
                            <button class="btn btn-view">Попробовать</button>
                        </div>
                    </div>
                </div>
                <div class="cardWrapper">
                    <div class="sCard">
                        <div class="frontCard siCard3"></div>
                        <div class="backCard siCard3">
                            <h2>Как ни один ролл на земле (вегетарианские спринг-роллы)</h2>
                            <h3>Цена: 900 руб.</h3>
                            <button class="btn btn-view">Попробовать</button>
                        </div>
                    </div>
                </div>
                <div class="cardWrapper">
                    <div class="sCard">
                        <div class="frontCard siCard4"></div>
                        <div class="backCard siCard4">
                            <h2>Прокатите свои сладкие чувства (Розовый кулфи)</h2>
                            <h3>Цена: 550 руб.</h3>
                            <button class="btn btn-view">Попробовать</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

<script>
        //Slider
    var Image_slide = new Array("includes/images/slide1.jpg", "includes/images/slide2.jpg");
    var Img_Length  = Image_slide.length; 
    var Img_current = 0
    function slide() {
        if(Img_current >= Img_Length) {
            Img_current = 0;
        }
        document.getElementById('slides').src = Image_slide[Img_current];
        Img_current++;
    }
    function auto(){
        setInterval(slide,  8000);
    }

    window.onload = auto;
</script>
     

<script src="./includes/js/map.js"></script>
<!-- Footer  -->
<?php include("includes/components/footer.php"); ?>