<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="{{asset('/css/stylesAbout.css')}}"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1&display=swap" rel="stylesheet">
    <style>
       .dropdown-menu-dropdown-menu-right > option > a{
            color: #B429CB;
            text-decoration: none;
        }

        .l-header{
            display: flex;
            justify-content: space-between;
        }

        .dropdown-menu-dropdown-menu-right > a{
            display: inline-block;
            padding: 10px;
        }
    </style>
</head>
<body>
    <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">ZHadyra</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="http://127.0.0.1:8000/main" class="nav__link active">{{__('lang.home')}}</a></li>
                        <li class="nav__item"><a href="http://127.0.0.1:8000/about" class="nav__link">{{__('lang.about')}}</a></li>
                        <li class="nav__item"><a href="http://127.0.0.1:8000/contact" class="nav__link">{{__('lang.contact')}}</a></li>
                    </ul>
                </div>

                <div class="dropdown-menu-dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="en"> <img src="https://cdn.britannica.com/33/4833-004-828A9A84/Flag-United-States-of-America.jpg" width="20" alt=""> English</a>
                            <a class="dropdown-item" href="kz"><img src="https://www.akorda.kz/assets/media/flag.jpg" width="20" alt="">Қазақ тілі</a>
                            <a class="dropdown-item" href="ru"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/1200px-Flag_of_Russia.svg.png" width="20" alt="">Русский язык</a>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
    </header>
    <div class="about-section">
        <div class="inner-container">
            <h1>{{__('lang.abm')}}</h1>
            <p class="text">{{__('lang.text')}}</p>
            <div class="skills">
                <span>{{__('lang.webs')}}</span>
                <span>{{__('lang.pi')}}</span>
                <span>{{__('lang.code')}}</span>
            </div>
        </div>
    </div>

</body>
</html>