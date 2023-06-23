<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles-booking.css') }}">
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
        <h1>Забронювати місце</h1>
    </div>


    <div class="big-white-square">
        <h1>12</h1>
        <h1>11</h1>
        <h1>10</h1>
        <h1>9</h1>
        <h1>8</h1>
        <h1>7</h1>
        <h1>6</h1>
        <h1>5</h1>
        <h1>4</h1>
        <h1>3</h1>
        <h1>2</h1>
        <h1>1</h1>

        <h2>12</h2>
        <h2>11</h2>
        <h2>10</h2>
        <h2>9</h2>
        <h2>8</h2>
        <h2>7</h2>
        <h2>6</h2>
        <h2>5</h2>
        <h2>4</h2>
        <h2>3</h2>
        <h2>2</h2>
        <h2>1</h2>

    </div>

    <div class="rows-big">
        <div class="row">
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
        </div>

        <div class="row">
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
        </div>

        <div class="row">
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
        </div>
    </div>


    <div class="rows-mid">
        <div class="row">
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
        </div>

        <div class="row">
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
        </div>

        <div class="row">
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
        </div>

        <div class="row">
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
        </div>

        <div class="row">
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
        </div>

        <div class="row">
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
        </div>

        <div class="row">
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
        </div>
    </div>


    <div class="rows-small">
        <div class="row">
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
        </div>

        <div class="row">
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
            <div class="row-seat"></div>
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
