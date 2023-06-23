<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles-movies.css') }}">
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


    <div class="first-week-bg"></div>

    <div class="cross-weeks-bg">
        <div class="first-sunday-bg"></div>
        <div class="second-monday-bg"></div>
    </div>
    <div class="blue-curve-filler"></div>
    <div class="white-curve-filler"></div>

    <div class="second-week-bg"></div>


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
        <h1>Розклад сеансів</h1>
        <h2>на поточний та наступний тиждень</h2>
    </div>

    <div class="schedule">

        <div class="first-monday">
            <h1>Понеділок</h1>

            <div class="film-column">
                <button onclick="goToBooking('first-monday', '1')"><h2>Фільм А</h2></button>
                <button onclick="goToBooking('first-monday', '2')"><h2>Фільм Б</h2></button>
                <button onclick="goToBooking('first-monday', '3')"><h2>Фільм В</h2></button>
                <button onclick="goToBooking('first-monday', '4')"><h2>Фільм Г</h2></button>
                <button onclick="goToBooking('first-monday', '5')"><h2>Фільм Д</h2></button>
                <button onclick="goToBooking('first-monday', '6')"><h2>Фільм Е</h2></button>
                <button onclick="goToBooking('first-monday', '7')"><h2>Шрек</h2></button>

                <h3>9:00</h3>
                <h3>11:00</h3>
                <h3>13:00</h3>
                <h3>16:00</h3>
                <h3>18:00</h3>
                <h3>20:00</h3>
                <h3>22:00</h3>

                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
            </div>
        </div>

        <div class="first-tuesday">
            <h1>Вівторок</h1>

            <div class="film-column">
                <button onclick="goToBooking('first-tuesday', '1')"><h2>Фільм Б</h2></button>
                <button onclick="goToBooking('first-tuesday', '2')"><h2>Фільм А</h2></button>
                <button onclick="goToBooking('first-tuesday', '3')"><h2>Фільм В</h2></button>
                <button onclick="goToBooking('first-tuesday', '4')"><h2>Фільм Е</h2></button>
                <button onclick="goToBooking('first-tuesday', '5')"><h2>Фільм Д</h2></button>
                <button onclick="goToBooking('first-tuesday', '6')"><h2>Фільм Г</h2></button>
                <button onclick="goToBooking('first-tuesday', '7')"><h2>Шрек</h2></button>

                <h3>9:00</h3>
                <h3>11:00</h3>
                <h3>13:00</h3>
                <h3>16:00</h3>
                <h3>18:00</h3>
                <h3>20:00</h3>
                <h3>22:00</h3>

                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
            </div>
        </div>

        <div class="first-wednesday">
            <h1>Середа</h1>

            <div class="film-column">
                <button onclick="goToBooking('first-wednesday', '1')"><h2>Фільм Е</h2></button>
                <button onclick="goToBooking('first-wednesday', '2')"><h2>Фільм В</h2></button>
                <button onclick="goToBooking('first-wednesday', '3')"><h2>Фільм Б</h2></button>
                <button onclick="goToBooking('first-wednesday', '4')"><h2>Фільм Г</h2></button>
                <button onclick="goToBooking('first-wednesday', '5')"><h2>Фільм Д</h2></button>
                <button onclick="goToBooking('first-wednesday', '6')"><h2>Фільм А</h2></button>
                <button onclick="goToBooking('first-wednesday', '7')"><h2>Шрек</h2></button>

                <h3>9:00</h3>
                <h3>11:00</h3>
                <h3>14:00</h3>
                <h3>16:00</h3>
                <h3>18:00</h3>
                <h3>20:00</h3>
                <h3>22:00</h3>

                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
            </div>
        </div>

        <div class="first-thursday">
            <h1>Четвер</h1>

            <div class="film-column">
                <button onclick="goToBooking('first-thursday', '1')"><h2>Фільм А</h2></button>
                <button onclick="goToBooking('first-thursday', '2')"><h2>Фільм Д</h2></button>
                <button onclick="goToBooking('first-thursday', '3')"><h2>Фільм Г</h2></button>
                <button onclick="goToBooking('first-thursday', '4')"><h2>Фільм Ж</h2></button>
                <button onclick="goToBooking('first-thursday', '5')"><h2>Фільм Б</h2></button>
                <button onclick="goToBooking('first-thursday', '6')"><h2>Фільм Е</h2></button>
                <button onclick="goToBooking('first-thursday', '7')"><h2>Шрек</h2></button>

                <h3>9:00</h3>
                <h3>11:00</h3>
                <h3>13:00</h3>
                <h3>15:00</h3>
                <h3>18:00</h3>
                <h3>20:00</h3>
                <h3>22:00</h3>

                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
            </div>
        </div>

        <div class="first-friday">
            <h1>П'ятниця</h1>

            <div class="film-column">
                <button onclick="goToBooking('first-friday', '1')"><h2>Фільм Ж</h2></button>
                <button onclick="goToBooking('first-friday', '2')"><h2>Фільм Б</h2></button>
                <button onclick="goToBooking('first-friday', '3')"><h2>Фільм А</h2></button>
                <button onclick="goToBooking('first-friday', '4')"><h2>Фільм Г</h2></button>
                <button onclick="goToBooking('first-friday', '5')"><h2>Фільм Д</h2></button>
                <button onclick="goToBooking('first-friday', '6')"><h2>Фільм Е</h2></button>
                <button onclick="goToBooking('first-friday', '7')"><h2>Шрек</h2></button>

                <h3>9:00</h3>
                <h3>12:00</h3>
                <h3>14:00</h3>
                <h3>16:00</h3>
                <h3>18:00</h3>
                <h3>20:00</h3>
                <h3>22:00</h3>

                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
            </div>
        </div>

        <div class="first-saturday">
            <h1>Субота</h1>

            <div class="film-column">
                <button onclick="goToBooking('first-saturday', '1')"><h2>Шрек</h2></button>
                <button onclick="goToBooking('first-saturday', '2')"><h2>Шрек 2</h2></button>
                <button onclick="goToBooking('first-saturday', '3')"><h2>Шрек 3</h2></button>
                <button onclick="goToBooking('first-saturday', '4')"><h2>Шрек 4</h2></button>
                <button onclick="goToBooking('first-saturday', '5')"><h2>Фільм Д</h2></button>
                <button onclick="goToBooking('first-saturday', '6')"><h2>Фільм В</h2></button>
                <button onclick="goToBooking('first-saturday', '7')"><h2>Фільм Б</h2></button>

                <h3>9:00</h3>
                <h3>11:00</h3>
                <h3>13:00</h3>
                <h3>15:00</h3>
                <h3>17:00</h3>
                <h3>19:00</h3>
                <h3>22:00</h3>

                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
            </div>
        </div>

        <div class="first-sunday">
            <h1>Неділя</h1>

            <div class="film-column">
                <button onclick="goToBooking('first-sunday', '1')"><h2>Фільм А</h2></button>
                <button onclick="goToBooking('first-sunday', '2')"><h2>Фільм Б</h2></button>
                <button onclick="goToBooking('first-sunday', '3')"><h2>Фільм В</h2></button>
                <button onclick="goToBooking('first-sunday', '4')"><h2>Фільм Д</h2></button>
                <button onclick="goToBooking('first-sunday', '5')"><h2>Фільм Е</h2></button>
                <button onclick="goToBooking('first-sunday', '6')"><h2>Фільм Г</h2></button>
                <button onclick="goToBooking('first-sunday', '7')"><h2>Шрек</h2></button>

                <h3>9:00</h3>
                <h3>11:00</h3>
                <h3>13:00</h3>
                <h3>16:00</h3>
                <h3>18:00</h3>
                <h3>20:00</h3>
                <h3>22:00</h3>

                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
            </div>
        </div>

        <div class="second-monday">
            <h1>Понеділок</h1>

            <div class="film-column">
                <button onclick="goToBooking('second-monday', '1')"><h2>Фільм Ж</h2></button>
                <button onclick="goToBooking('second-monday', '2')"><h2>Фільм Д</h2></button>
                <button onclick="goToBooking('second-monday', '3')"><h2>Фільм Д-2</h2></button>
                <button onclick="goToBooking('second-monday', '4')"><h2>Фільм Г</h2></button>
                <button onclick="goToBooking('second-monday', '5')"><h2>Фільм Б</h2></button>
                <button onclick="goToBooking('second-monday', '6')"><h2>Фільм Е</h2></button>
                <button onclick="goToBooking('second-monday', '7')"><h2>Шрек</h2></button>

                <h3>9:00</h3>
                <h3>12:00</h3>
                <h3>14:00</h3>
                <h3>16:00</h3>
                <h3>18:00</h3>
                <h3>20:00</h3>
                <h3>22:00</h3>

                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
            </div>
        </div>

        <div class="second-tuesday">
            <h1>Вівторок</h1>

            <div class="film-column">
                <button onclick="goToBooking('second-tuesday', '1')"><h2>Фільм А</h2></button>
                <button onclick="goToBooking('second-tuesday', '2')"><h2>Фільм Е</h2></button>
                <button onclick="goToBooking('second-tuesday', '3')"><h2>Фільм В</h2></button>
                <button onclick="goToBooking('second-tuesday', '4')"><h2>Фільм Г</h2></button>
                <button onclick="goToBooking('second-tuesday', '5')"><h2>Фільм Д-2</h2></button>
                <button onclick="goToBooking('second-tuesday', '6')"><h2>Фільм Б</h2></button>
                <button onclick="goToBooking('second-tuesday', '7')"><h2>Шрек</h2></button>

                <h3>9:00</h3>
                <h3>11:00</h3>
                <h3>13:00</h3>
                <h3>16:00</h3>
                <h3>18:00</h3>
                <h3>20:00</h3>
                <h3>22:00</h3>

                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
            </div>
        </div>

        <div class="second-wednesday">
            <h1>Середа</h1>

            <div class="film-column">
                <button onclick="goToBooking('second-wednesday', '1')"><h2>Фільм А</h2></button>
                <button onclick="goToBooking('second-wednesday', '2')"><h2>Фільм Г</h2></button>
                <button onclick="goToBooking('second-wednesday', '3')"><h2>Фільм В</h2></button>
                <button onclick="goToBooking('second-wednesday', '4')"><h2>Фільм Б</h2></button>
                <button onclick="goToBooking('second-wednesday', '5')"><h2>Фільм Д</h2></button>
                <button onclick="goToBooking('second-wednesday', '6')"><h2>Фільм Д-2</h2></button>
                <button onclick="goToBooking('second-wednesday', '7')"><h2>Шрек</h2></button>

                <h3>9:00</h3>
                <h3>11:00</h3>
                <h3>13:00</h3>
                <h3>16:00</h3>
                <h3>18:00</h3>
                <h3>20:00</h3>
                <h3>22:00</h3>

                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
            </div>
        </div>

        <div class="second-thursday">
            <h1>Четвер</h1>

            <div class="film-column">
                <button onclick="goToBooking('second-thursday', '1')"><h2>Фільм Ю</h2></button>
                <button onclick="goToBooking('second-thursday', '2')"><h2>Фільм Г</h2></button>
                <button onclick="goToBooking('second-thursday', '3')"><h2>Фільм Ж</h2></button>
                <button onclick="goToBooking('second-thursday', '4')"><h2>Фільм Б</h2></button>
                <button onclick="goToBooking('second-thursday', '5')"><h2>Фільм А</h2></button>
                <button onclick="goToBooking('second-thursday', '6')"><h2>Фільм Е</h2></button>
                <button onclick="goToBooking('second-thursday', '7')"><h2>Шрек</h2></button>

                <h3>9:00</h3>
                <h3>11:00</h3>
                <h3>13:00</h3>
                <h3>16:00</h3>
                <h3>18:00</h3>
                <h3>20:00</h3>
                <h3>22:00</h3>

                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
            </div>
        </div>

        <div class="second-friday">
            <h1>П'ятниця</h1>

            <div class="film-column">
                <button onclick="goToBooking('second-friday', '1')"><h2>Фільм Д-2</h2></button>
                <button onclick="goToBooking('second-friday', '2')"><h2>Фільм Б</h2></button>
                <button onclick="goToBooking('second-friday', '3')"><h2>Фільм Г</h2></button>
                <button onclick="goToBooking('second-friday', '4')"><h2>Фільм Ж</h2></button>
                <button onclick="goToBooking('second-friday', '5')"><h2>Фільм Ю</h2></button>
                <button onclick="goToBooking('second-friday', '6')"><h2>Фільм Е</h2></button>
                <button onclick="goToBooking('second-friday', '7')"><h2>Шрек</h2></button>

                <h3>9:00</h3>
                <h3>11:00</h3>
                <h3>13:00</h3>
                <h3>15:00</h3>
                <h3>18:00</h3>
                <h3>20:00</h3>
                <h3>22:00</h3>

                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
            </div>
        </div>

        <div class="second-saturday">
            <h1>Субота</h1>

            <div class="film-column">
                <button onclick="goToBooking('second-saturday', '1')"><h2>Шрек</h2></button>
                <button onclick="goToBooking('second-saturday', '2')"><h2>Шрек 2</h2></button>
                <button onclick="goToBooking('second-saturday', '3')"><h2>Шрек 3</h2></button>
                <button onclick="goToBooking('second-saturday', '4')"><h2>Шрек 4</h2></button>
                <button onclick="goToBooking('second-saturday', '5')"><h2>Фільм Ю</h2></button>
                <button onclick="goToBooking('second-saturday', '6')"><h2>Фільм Ж</h2></button>
                <button onclick="goToBooking('second-saturday', '7')"><h2>Фільм Б</h2></button>

                <h3>9:00</h3>
                <h3>11:00</h3>
                <h3>13:00</h3>
                <h3>15:00</h3>
                <h3>17:00</h3>
                <h3>19:00</h3>
                <h3>22:00</h3>

                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
            </div>
        </div>

        <div class="second-sunday">
            <h1>Неділя</h1>

            <div class="film-column">
                <button onclick="goToBooking('second-sunday', '1')"><h2>Фільм А</h2></button>
                <button onclick="goToBooking('second-sunday', '2')"><h2>Фільм Е</h2></button>
                <button onclick="goToBooking('second-sunday', '3')"><h2>Фільм В</h2></button>
                <button onclick="goToBooking('second-sunday', '4')"><h2>Фільм Г</h2></button>
                <button onclick="goToBooking('second-sunday', '5')"><h2>Фільм Д</h2></button>
                <button onclick="goToBooking('second-sunday', '6')"><h2>Фільм Д-2</h2></button>
                <button onclick="goToBooking('second-sunday', '7')"><h2>Шрек</h2></button>

                <h3>9:00</h3>
                <h3>11:00</h3>
                <h3>13:00</h3>
                <h3>16:00</h3>
                <h3>18:00</h3>
                <h3>20:00</h3>
                <h3>22:00</h3>

                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
                <h4>Забронювати</h4>
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
