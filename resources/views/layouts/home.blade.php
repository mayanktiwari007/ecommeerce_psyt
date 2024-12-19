@extends('layouts.main')
@section('main-section')
<section>
  <script>
    window.onload=function(){
      document.getElementById('loader').style.display="none";
      document.getElementById('content').style.display="block";

    }
  </script>
    <style>

       .brand{
        margin-top: 30px;
        background-color: #FAF6E3;
        margin-right: 20px;
        margin-left: 20px;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        
       }
       .safe{
        margin-left: 250px; 
       }
       .del{
        margin-left: 300px; 
       }
       .gift{
        margin-left: 300px; 
       }
       .cust{
        margin-left: 250px; 
       }
       .trust{
        margin-left: 300px; 
       }
       .make{
        margin-left: 340px; 
       }
       h1{
        margin-top: 20px;
        text-align: center;
       }
       .first{
        margin-left: 100px;
       }
       .container {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 40px;
  flex-wrap: wrap;
  padding: 3.25em 0 3em;

  .box {
    position: relative;
    width: 18.75rem;
    height: 18.75rem;
    border-radius: 0.625rem;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 0.5s;

    .imgBox {
      position: absolute;
      inset: 0;
      border-radius: 0.75rem;
      border: 0.25rem solid rgba(0, 0, 0, 0.2);

      img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: 0.5s;
        border-radius: 0.625rem;
      }
    }

    .glass {
      position: absolute;
      inset: 0;
      background: linear-gradient(#fff2, transparent);
      border: 0.063rem solid rgba(255, 255, 255, 0.1);
      box-shadow: 0 0.938rem 0.938rem rgba(0, 0, 0, 0.25);
      backdrop-filter: blur(0.938rem);
      border-radius: 0.625rem;
      overflow: hidden;
      scale: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      transition: 0.5s;
      opacity: 0;

      &:before {
        position: absolute;
        content: "";
        bottom: 0;
        width: 100%;
        height: 2.5rem;
        background: rgba(255, 255, 255, 0.05);
      }

      h3 {
        font-size: 1.25rem;
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        text-align: center;
        line-height: 0.8em;
        font-weight: 500;
      }

      span {
        font-size: 0.5em;
        font-weight: 400;
      }

      ul {
        position: absolute;
        bottom: 0;
        width: 100%;
        display: flex;
        justify-content: center;
        gap: 1rem;

        a {
          color: #fff8;
          font-size: 1.25rem;
          scale: 0;
          transition: 0.25s;
          transition-delay: scale calc(0.2s * var(--i));

          &:hover {
            color: #fff;
          }
        }
      }
    }
    &:hover .imgBox img {
      opacity: 0.5;
    }

    &:hover {
      transform: rotate(-15deg);
    }

    &:hover .glass {
      transform: rotate(20deg);
      scale: 1;
      opacity: 1;
    }

    &:hover ul a {
      scale: 1;
    }
  }
}
.ps{
    margin-left: 100px;
    margin-right: 100px;
    margin-bottom: 100px;
}

.text-wrapper{
  display: flex;
  justify-content: flex-start;
  background: #FBF4DB;
  margin-bottom: 20px;
}
h2{
  text-transform: uppercase;
  font-size: 25px;
  letter-spacing: 1px;
  animation: move-rt1 6000ms linear infinite;
}
@keyframes move-rt1{
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-100%);
  }
}
 .class{
  margin-left: 60px;
  margin-right: 60px;
  margin-top: 30px;
  margin-bottom: 30px;
 }



    </style> 

    
     <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('uploads/car6.png')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('uploads/car5.png')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('uploads/car7.png')}}" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="brand">
    <div class="safe">
     <img src="{{ asset('uploads/safe.png')}}" alt="" height="80px">
     <p> Safe & secure <br> shipping</p>
    </div>
    
    <div class="del">
    <img src="{{ asset('uploads/del.png')}}" alt="" height="80px">
    <p> Free delivery on <br> order above Rs.999</p>
     </div>

     <div class="gift">
      <img src="{{ asset('uploads/gift.png')}}" alt="" height="80px">
      <p> Free gift <br> Wrapping</p>
    </div>

    <div class="cust">
      <img src="{{ asset('uploads/cust.png')}}" alt="" height="80px">
      <p> Fast customer <br> Support</p>
    </div>

    <div class="trust">
      <img src="{{ asset('uploads/trust.png')}}" alt="" height="80px">
      <p> Serving over <br> 5000+ Cities</p>
    </div>

    <div class="make">
      <img src="{{ asset('uploads/make.png')}}" alt="" height="80px">
      <p> Made in india <br> Products</p>
    </div>
    </div>
        <h1>Shop from our Wide Range of Products</h1>

        <main>
    
          <div class="container">
            <div class="box" data-color="clr1">
              <div class="imgBox">
                <img src="{{ asset('uploads/marvel.png')}}" alt="Headless Horseman"><a href="{{URL::to('/marvel')}}" class="stretched-link"></a>
              </div>
              <div class="glass">
                <h3>Marvel universe<br /><span>Tees</span></h3>
              
              </div>
            </div>
            <div class="box" data-color="clr2">
              <div class="imgBox">
                <img src="{{ asset('uploads/dc1.png')}}" alt="The Mummy"> <a href="{{URL::to('/dc')}}" class="stretched-link"></a>
              </div>
              <div class="glass">
                <h3>Dc universe<br /><span>Tees</span></h3>
              </div>
            </div>
            <div class="box" data-color="clr3">
              <div class="imgBox">
                <img src="{{ asset('uploads/anime.png')}}" alt="Werewolf"><a href="{{URL::to('/anime')}}" class="stretched-link"></a>
              </div>
              <div class="glass">
                <h3>Anime printed<br /><span>Tees</span></h3>
              </div>
            </div>

            <div class="box" data-color="clr1">
              <div class="imgBox">
                <img src="{{ asset('uploads/breaking.png')}}" alt="Headless Horseman"><a href="{{URL::to('/series')}}" class="stretched-link"></a>
              </div>
              <div class="glass">
                <h3>Series printed<br /><span>Tees</span></h3>
              
              </div>
            </div>
          
            <div class="box" data-color="clr1">
              <div class="imgBox">
                <img src="{{ asset('uploads/game.png')}}" alt="Headless Horseman"><a href="{{URL::to('/gaming')}}" class="stretched-link"></a>
              </div>
              <div class="glass">
                <h3>Gaming <br /><span>Tees</span></h3>
              
              </div>
            </div>

            <div class="box" data-color="clr1">
              <div class="imgBox">
                <img src="{{ asset('uploads/zero.png')}}" alt="Headless Horseman"><a href="#" class="stretched-link"></a>
              </div>
              <div class="glass">
                <h3>Customize <br /><span>Tees</span></h3>
              
              </div>
            </div>

          </div>
          </main>
          
         <div class="text-wrapper">
          <h2>opening discount 30% off &nbsp; &nbsp; &nbsp; &nbsp;</h2>
          <h2>opening discount 30% off &nbsp; &nbsp; &nbsp; &nbsp;</h2>
          <h2>opening discount 30% off &nbsp; &nbsp; &nbsp; &nbsp;</h2>
          <h2>opening discount 30% off &nbsp; &nbsp; &nbsp; &nbsp;</h2>
         </div>
           
         <div class="class">
         <div id="carouselExampleFade" class="carousel slide carousel-fade">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('uploads/anime1.png')}}" class="d-block w-100" alt="..."><a href="{{URL::to('/signup')}}" class="stretched-link"></a>
            </div>
            <div class="carousel-item">
              <img src="{{ asset('uploads/marvel1.png')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('uploads/dc2.png')}}" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  
    @endsection