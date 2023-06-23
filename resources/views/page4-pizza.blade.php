<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pizza</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles-pizza.css') }}">
</head>
<body>

    <div class="header">

        <div class="header-title-depo">
            <div class="header-letter-block">
                <h1>D</h1>
            </div>
            <div class="header-letter-block">
                <h1>E</h1>
            </div>
            <div class="header-letter-block">
                <h1>P</h1>
            </div>
            <div class="header-letter-block">
                <h1>O</h1>
            </div>
        </div>

        <div class="header-t-circle"></div>
        <div class="header-letter-t-block">
            <h2>T</h2>
        </div>

        <h3>+380 (***) **-**-***</h3>
        <img src="{{ asset('images/free-icon-phone-call-6677692 1.svg') }}" alt="phone" class="phone-icon">

    </div>


    <div class="background"></div>


    <button class="arrow-button" onclick="goBack()">
        <div class="arrow-button-square"></div>
        <div class="arrow-mainline"></div>
        <div class="arrow-topline"></div>
        <div class="arrow-bottomline"></div>
    </button>

    <a href="{{ url('/') }}" class="home-button-square">
        <img src="{{ asset('images/free-icon-home-page-3388815 1.svg') }}" alt="home" class="home-icon">
    </a>
    <div class="title-square">
        <h1>Піцерія - меню</h1>
    </div>


    <div class="menu">
        <div class="pizza-menu-bg">
            <h1>Піца (50 см)</h1>
            <div class="big-line"></div>

            <div class="menu-options">
                <h2>Піца "Пепероні"</h2>
                <h2>Піца "Карбонара"</h2>
                <h2>Піца "Барбекю"</h2>
                <h2>Піца "4 сири"</h2>
                <h2>Піца "Діаболо"</h2>
                <h2>Піца "Гавайська"</h2>
                <h2>Піца "Каліфорнія"</h2>
            </div>

            <div class="descriptions">
                <h3>томатний соус, моцарела, салямі-пепероні, пармезан</h3>
                <h3>соус “Бешамель”, моцарела, бекон, яєчний омлет зі спеціями</h3>
                <h3>томатний соус, моцарела, бекон, мисливські ковбаски, помідор,</h3>
                <h3>соус “Бешамель”, моцарела, швейцарський, пармезан, дорблю</h3>
                <h3>томатний соус, моцарела, перець чілі, салямі-пепероні</h3>
                <h3>томатний соус, моцарела, куряче філе, ананаси</h3>
                <h3>соус “Бешамель”, моцарела, бекон, салямі-пепероні,</h3>
            </div>

            <div class="descriptions-rowtwo">
                <h3>.</h3>
                <h3>.</h3>
                <h3>цибуля маринована, соус Барбекю</h3>
                <h3>.</h3>
                <h3>.</h3>
                <h3>.</h3>
                <h3>карамелізована цибуля</h3>
            </div>

            <div class="small-lines">
                <div class="small-line"></div>
                <div class="small-line"></div>
                <div class="small-line"></div>
                <div class="small-line"></div>
                <div class="small-line"></div>
                <div class="small-line"></div>
            </div>

            <div class="prices">
                <h2>265 грн</h2>
                <h2>265 грн</h2>
                <h2>275 грн</h2>
                <h2>290 грн</h2>
                <h2>250 грн</h2>
                <h2>245 грн</h2>
                <h2>270 грн</h2>
            </div>

        </div>

        <div class="salad-menu-bg">
            <h1>Салати</h1>
            <div class="big-line"></div>

            <div class="menu-options">
                <h2>Салат "Грецький"</h2>
                <h2>Теплий салат з куркою</h2>
                <h2>Салат "Прімавера"</h2>
                <h2>Салат "Цезар з куркою"</h2>
            </div>

            <div class="descriptions">
                <h3>огірок, помідор, перець болгарський, фета, лист салату, оливки,</h3>
                <h3>куряче філе, перець болгарський, цибуля, лист салату</h3>
                <h3>свинина-гриль, огірок, помідор, мариновані гриби, сир</h3>
                <h3>курка гриль, помідор, листя салату, пармезан, соус “Цезар”</h3>
            </div>

            <div class="descriptions-rowtwo">
                <h3>маслини, цибуля, оливкова олія</h3>
                <h3>.</h3>
                <h3>.</h3>
                <h3>.</h3>
            </div>

            <div class="small-lines">
                <div class="small-line"></div>
                <div class="small-line"></div>
                <div class="small-line"></div>
            </div>

            <div class="prices">
                <h2>120 грн</h2>
                <h2>140 грн</h2>
                <h2>120 грн</h2>
                <h2>140 грн</h2>
            </div>

        </div>

        <div class="drink-menu-bg">
            <h1>Напої (прохолодні)</h1>
            <div class="big-line"></div>

            <div class="menu-options">
                <h2>Borjomi (0,5л)</h2>
                <h2>Сік (0,5л)</h2>
                <h2>Сік дитячий (0,2л)</h2>
                <h2>Coca-Cola/Fanta/Sprite (0,5л)</h2>
            </div>

            <div class="small-lines">
                <div class="small-line"></div>
                <div class="small-line"></div>
                <div class="small-line"></div>
            </div>

            <div class="prices">
                <h2>45 грн</h2>
                <h2>45 грн</h2>
                <h2>20 грн</h2>
                <h2>45 грн</h2>
            </div>

        </div>
    </div>






    <div class="footer">

        <div class="footer-title-depo">
            <div class="header-letter-block">
                <h1>D</h1>
            </div>
            <div class="header-letter-block">
                <h1>E</h1>
            </div>
            <div class="header-letter-block">
                <h1>P</h1>
            </div>
            <div class="header-letter-block">
                <h1>O</h1>
            </div>
        </div>

        <div class="footer-t-circle"></div>
        <div class="footer-letter-t-block">
            <h2>T</h2>
        </div>

        <div class="contactus-text">
            <h4>Зв'язатись з нами:</h4>
        </div>

        <div class="phonenumber-text">
            <h5>+380 (***) **-**-***</h5>
        </div>

        <div class="email-text">
            <h5>depotmelnyk@gmail.com</h5>
        </div>

        <div class="address-text">
            <h6>проспект Володимирський, 98, Лубни, Полтавська область, 37500</h6>
        </div>

        <div class="footermenu">
            <a href="{{ url('/') }}" class="footermenuoption">
                <h3>Головна</h3>
            </a>
            <a href="{{ url('/movies') }}" class="footermenuoption">
                <h3>Кінотеатр</h3>
            </a>
            <a href="{{ url('/pizza') }}" class="footermenuoption">
                <h3>Піцерія</h3>
            </a>
            <a href="{{ url('/map') }}" class="footermenuoption">
                <h3>Мапа</h3>
            </a>
        </div>



    </div>




    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
