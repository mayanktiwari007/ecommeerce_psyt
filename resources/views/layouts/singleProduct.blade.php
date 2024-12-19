@extends('layouts.main')
@section('main-section')
<style>
    .single{
       height: 300px;
       margin-left: 40px;
       margin-top: 40px;
       margin-bottom: 20px;
       border: 1px solid black;
       transition: transform .2s; 
       box-shadow: 2px 2px 2px rosybrown;
    }
    .single:hover{
        transform: scale(1.2);
        margin-right: 30px;
        cursor: zoom-out;

    }
    .pro{
       display: flex;
       flex-direction: row;
    }
    .tittle{
       margin-top: 40px;
       margin-left: 45px;
    }
    .des{
       margin-left:  45px;
    }
    .price{
       margin-left:  45px;
    }
    .quan{
       margin-left:  45px;
    }
    .cate{
       margin-left:  45px;
    }
   
       /* button */
   
       button {
     position: relative;
     display: flex;
     justify-content: center;
     align-items: center;
     border-radius: 5px;
     background: #183153;
     font-family: "Montserrat", sans-serif;
     box-shadow: 0px 6px 24px 0px rgba(0, 0, 0, 0.2);
     overflow: hidden;
     cursor: pointer;
     border: none;
     margin-left: 15px;
     height: 30px;
     width: 300px;
   }
   
   button:after {
     content: " ";
     width: 0%;
     height: 100%;
     background: #ffd401;
     position: absolute;
     transition: all 0.4s ease-in-out;
     right: 0;
   }
   
   button:hover::after {
     right: auto;
     left: 0;
     width: 100%;
   }
   
   button span {
     text-align: center;
     text-decoration: none;
     width: 100%;
     padding: 18px 25px;
     color: #fff;
     font-size: 1.125em;
     font-weight: 700;
     letter-spacing: 0.3em;
     z-index: 20;
     transition: all 0.3s ease-in-out;
   }
   
   button:hover span {
     color: #183153;
     animation: scaleUp 0.3s ease-in-out;
   }
   
   @keyframes scaleUp {
     0% {
       transform: scale(1);
     }
   
     50% {
       transform: scale(0.95);
     }
   
     100% {
       transform: scale(1);
     }
   }
   .in{
       margin-left: 45px;
   }
   .size{
    margin-left: 45px;
    margin-bottom: 15px;
   }
   
    </style>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="pro">
       <div>
           <img src="{{URL:: asset('uploads/products/'.$product->picture) }}" alt="" class="single">
     
        </div>
         <div>
             <h5 class="tittle">{{$product->tittle}}</h5>
         
             <p class="des"> <b>ABOUT THE PRODUCT:</b> <br>{{$product->description}}</p>
   
             <p class="price"><b>PRICE :  ₹{{$product->price}}</b></p>
   
             <p class="cate"><b>CATEGORY :</b> {{$product->category}}</p>
              
              <form action="{{URL::to('addToCart')}}" method="POST">
               @csrf
               <div class="in">
                   <label for=""><b>Select Quantity :</b></label>
                   <input type="number" min="1" max="5" name="quantity">
               </div>
               <br>
               <div class="size">
                <label for=""><b>Select Size:</b></label>
                <select name="size">
                    <option value="S">Small</option>
                    <option value="M">Medium</option>
                    <option value="L">Large</option>
                    <option value="XL">Xtra-Large</option>
                </select>
            </div>
               <input type="hidden" name="id" value="{{$product->id}}"/>
             <button type="submit" name="addToCart" >
              <span>ADD TO CART</span>
             </button>
           </form> 
            
         </div>   
    </div>

@endsection   
