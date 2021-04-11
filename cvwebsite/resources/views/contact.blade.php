<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{asset('/css/stylesContact.css')}}"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
  @extends('layout')
  @section('content')
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

    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title"> {{__('lang.lets')}}</h3>
          <p class="text">
             {{__('lang.get')}}
          </p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p> {{__('lang.address')}}</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p> {{__('lang.email')}}</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p> {{__('lang.tel')}}</p>
            </div>
          </div>

          <div class="social-media">
            <p> {{__('lang.connect')}}</p>
            <div class="social-icons" >
              <a href="https://www.instagram.com/_zh.s.s/">
                 <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="https://vk.com/id314335228">
                 <i class="fa fa-vk" aria-hidden="true"></i>
              </a>
              <a href="https://api.whatsapp.com/send?phone=+77086920916">
                 <i class="fa fa-whatsapp" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="index.html" autocomplete="off">
            <h3 class="title">{{__('lang.cm')}}</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">{{__('lang.username')}}</label>
              <span>{{__('lang.username')}}</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">{{__('lang.e')}}</label>
              <span>{{__('lang.e')}}</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">{{__('lang.phone')}}</label>
              <span>{{__('lang.phone')}}</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">{{__('lang.message')}}</label>
              <span>{{__('lang.message')}}</span>
            </div>
            <input type="submit" placeholder="{{__('lang.send')}}" class="btn" />
          </form>
        </div>
      </div>
    </div>
    @endsection
  </body>
</html>
