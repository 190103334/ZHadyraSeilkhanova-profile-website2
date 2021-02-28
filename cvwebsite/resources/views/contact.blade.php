<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{asset('/css/stylesContact.css')}}"/>
<<<<<<< HEAD
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
=======
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
>>>>>>> ed19337c3612a5e4af01ac249160dd9cf6c43ebb
  </head>
  
  <body>

     <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">ZHadyra</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="http://127.0.0.1:8000/main" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="http://127.0.0.1:8000/about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="http://127.0.0.1:8000/contact" class="nav__link">Contact</a></li>
                    </ul>
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
          <h3 class="title">Let's get in touch!</h3>
          <p class="text">
               Getting in touch is easy!
               Thank you for finding the time to visit my website. Your feedback is important to me, 
               as I learn much from what you have to say. It is great to hear what I am doing right,
               and it is constructive to hear what I can do to improve. I’d love to hear your thoughts 
               and answer any questions you may have!
          </p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>Al-Farabi 98-45, Kentau</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>190103334@stu.sdu.edu.kz</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>87086920916</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with me :</p>
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
            <h3 class="title">Contact me</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
