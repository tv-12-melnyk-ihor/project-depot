<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles-landing.css') }}">
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


    <div class="welcome-frame">

        <div class="dletter-welcome">
            <h1>D</h1>
        </div>
        <div class="eletter-welcome">
            <h1>E</h1>
        </div>
        <div class="pletter-welcome">
            <h1>P</h1>
        </div>
        <div class="oletter-welcome">
            <h1>O</h1>
        </div>
        <div class="tletter-welcome">
            <h2>T</h2>
        </div>
        <div class="yellowcircle-welcome"></div>

        <h3>Розважальний центр</h3>
        <h4>Найкращий у вашому місті</h4>
        <h5>Відчинено щодня з 9:00 по 0:00</h5>

        <a class="locbutton" href="https://www.google.com/maps?q=50.02095734430434, 32.98388930194761" target="_blank">
            <img src="{{ asset('images/free-icon-map-location-4302844 1.svg') }}" alt="location" class="location-icon">
            <h6>Локація</h6>
        </a>

        <img src="{{ asset('images/Bowling-hollywood-bowl 1.png') }}" alt="bowling photo" class="bowling-photo">
        <img src="{{ asset('images/92424265-cineville-1024x576 1.png') }}" alt="cinema photo" class="cinema-photo">

    </div>


    <div class="landing">

        <div class="white-landing">
            <div class="blue-circle">
                <img src="{{ asset('images/free-icon-camera-10479204 1.svg') }}" alt="cinema icon" class="cinema-icon">
            </div>

            <h1>Кінотеатр</h1>
            <div class="landing-description">
                <h2>Переглянути розклад сеансів</h2>
                <h2>та забронювати місця</h2>
            </div>

            <a href="{{ url('/movies') }}" class="landing-blue-button">
                <h3>Перейти</h3>
            </a>
        </div>

        <div class="blue-landing">
            <div class="white-circle">
                <img src="{{ asset('images/pizza 1.svg') }}" alt="pizza icon" class="pizza-icon">
            </div>

            <h1>Піцерія</h1>
            <div class="landing-description">
                <h2>Переглянути меню</h2>
            </div>

            <a href="{{ url('/pizza') }}" class="landing-white-button">
                <h3>Перейти</h3>
            </a>
        </div>

        <div class="white-landing">
            <div class="blue-circle">
                <img src="{{ asset('images/free-icon-bowling-2263249 1.svg') }}" alt="bowling icon" class="bowling-icon">
            </div>

            <h1>Розважальний центр</h1>
            <div class="landing-description">
                <h2>Включає в себе ~50 ігрових автоматів,</h2>
                <h2>4 доріжки для боулінга</h2>
                <h2>та дитячий куточок “Лабіринт”</h2>
            </div>
        </div>

        <div class="blue-landing">
            <div class="white-circle">
                <img src="{{ asset('images/map 1.svg') }}" alt="map icon" class="map-icon">
            </div>

            <h1>Мапа</h1>
            <div class="landing-description">
                <h2>Переглянути мапу</h2>
                <h2>розважального центра</h2>
            </div>

            <a href="{{ url('/map') }}" class="landing-white-button">
                <h3>Перейти</h3>
            </a>
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
