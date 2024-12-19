<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/3b161c540c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
       

.bg-footer {
    background-color: #33383c;
    padding: 50px 0 30px;
}
.footer-heading {
    letter-spacing: 2px;
}

.footer-link a {
    color: #acacac;
    line-height: 40px;
    font-size: 14px;
    transition: all 0.5s;
}

.footer-link a:hover {
    color: #1bbc9b;
}

.contact-info {
    color: #acacac;
    font-size: 14px;
}

.footer-social-icon {
    font-size: 15px;
    height: 34px;
    width: 34px;
    line-height: 34px;
    border-radius: 3px;
    text-align: center;
    display: inline-block;
}

.facebook {
    background-color: #4e71a8;
    color: #ffffff;
}

.twitter {
    background-color: #55acee;
    color: #ffffff;
}

.google {
    background-color: #d6492f;
    color: #ffffff;
}

.apple {
    background-color: #424041;
    color: #ffffff;
}

.footer-alt {
    color: #acacac;
}

.footer-heading {
    position: relative;
    padding-bottom: 12px;
}

.footer-heading:after {
    content: '';
    width: 25px;
    border-bottom: 1px solid #FFF;
    position: absolute;
    left: 0;
    bottom: 0;
    display: block;
    border-bottom: 1px solid #1bbc9b;
}


.whatsapp_float {
      position: fixed;
      width: 60px;
      height: 60px;
      bottom: 40px;
      right: 40px;
      background-color: #25d366;
      color: #fff;
      border-radius: 50px;
      text-align: center;
      font-size: 30px;
      box-shadow: 2px 2px 3px #999;
      z-index: 100;
    }
    .whatsapp-icon {
      margin-top: 16px;
    }

    /* for mobile */
    @media screen and (max-width: 767px){
      .whatsapp-icon {
        margin-top: 10px;
      }
      .whatsapp_float {
        width: 40px;
        height: 40px;
        bottom: 20px;
        right: 10px;
        font-size: 22px;
      }
    }
    </style>
</head>
<body>
   
    
    <footer class="section bg-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="">
                        <h6 class="footer-heading text-uppercase text-white">Pages</h6>
                        <ul class="list-unstyled footer-link mt-4">
                            <li><a href="{{URL::to('/')}}">Home</a></li>
                            <li><a href="{{URL::to('/marvel')}}">Anime Products</a></li>
                            <li><a href="{{URL::to('/anime')}}">Marvel Tees</a></li>
                            <li><a href="{{URL::to('/dc')}}">Dc Tees</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="">
                        <h6 class="footer-heading text-uppercase text-white">Ressources</h6>
                        <ul class="list-unstyled footer-link mt-4">
                            <li><a href="">Monitoring Grader </a></li>
                            <li><a href="">Video Tutorial</a></li>
                            <li><a href="">Term &amp; Service</a></li>
                            <li><a href="">Zeeko API</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="">
                        <h6 class="footer-heading text-uppercase text-white">Help</h6>
                        <ul class="list-unstyled footer-link mt-4">
                            <li><a href="{{URL::to('/signup')}}">Sign Up </a></li>
                            <li><a href="{{URL::to('/login')}}">Login</a></li>
                           
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="">
                        <h6 class="footer-heading text-uppercase text-white">Contact Us</h6>
                        <p class="contact-info mt-4">Contact For Any Queries</p>
                        <p class="contact-info">+91 93036 28510</p>
                        <div class="mt-5">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa-brands fa-facebook"></i></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa-brands fa-whatsapp"></i></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa-brands fa-instagram"></i></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa-solid fa-xmark"></i></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="text-center mt-5">
            <p class="footer-alt mb-0 f-14">2024 © All Rights Reserved To PSYT</p>
        </div>
    </footer>
        
       
    
    
</body>
<a href="https:/wa.me/919303628510"  target="_blank" class="whatsapp_float"><i class="fa-brands fa-whatsapp whatsapp-icon"></i></a>
</html>