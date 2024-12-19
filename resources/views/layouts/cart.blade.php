@extends('layouts.main')
@section('main-section')
<style>
 .shop{
     text-align: center;
     margin-top: 20px;
     margin-bottom: 20px;
     text-decoration: underline;
 }
 .check{
    text-align: center;
    margin-top: 20px;
 }
 .total{
    border: solid 2px gray;
    background-color:#EEEDEB;
    margin-left: 560px;
    margin-right: 560px;
    border-radius: 10px;
    text-align: center;
    margin-top: 30px;
    margin-bottom: 30px;
 }
 .sub{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    gap: 10px;
    margin-left: 60px;

 }
 .pr{
   margin-left: 120px;
   margin-top: 20px;
   color: red;
 }
 .sb{
    margin-top: 20px;
 }
 .p{
    margin-left: 80px;
    color: red;
 }
 #ss{
    margin-bottom: 20px; 
    background-color: black;
    color: rgb(246, 243, 238);
    height: 50px;
    border-radius: 10px;
 }
 
</style>

@if (session()->has('success'))
<div class="alert alert-success">
   {{ session()->get('success')}}
</div>
    
@endif

  <h5 class="shop"> <b>Shopping Cart</b></h5>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Product</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Size</th>
        <th scope="col">Total</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    @php
        $total=0;
    @endphp
    @foreach ($cartItems as $item)
    <tbody>
       
            
       
      <tr>
        <th scope="row"><img src="{{URL::asset('uploads/products/'.$item->picture)}}" alt="" height="150px"></th>
        <td>₹{{$item->price}}</td>
        <form action="{{URL::to('updateCart')}}" method="POST">
            @csrf
        <td>
            <input type="number" min="1" max="5" name="quantity" value="{{$item->quantity}}"><br>
         <input type="hidden" name="id" value="{{$item->id}}">
         <input type="submit" name="update" value="Update" class="btn btn-primary btn-block"></button>
        </form>
        </td>
        <td><b>{{$item->size}}</b> </td> <!-- Display the size here -->
        <td><b>₹{{$item->price * $item->quantity}}</b></td>
        <td><a href="{{URL::to('deleteCartItem/'.$item->id)}}"><i class="fa-solid fa-trash"></i></a>   </td>

      </tr>
      @php
       $total+=($item->price * $item->quantity);
      @endphp
      @endforeach
    </tbody>
  </table>

   <h5 class="check"><b>Bill Total</b></h5>

   <div class="total">
  <h6> <b>Cart Total</b></h6>
  <div class="sub">
    <p class="sb"><b>SUB-TOTAL:</b> </p>
    <p class="pr"><b>₹ {{$total}}</b></p>
    <p class="ta"><b>TOTAL AMOUNT:</b> </p>
    <p class="p"><b>₹ {{$total}}</b></p>
  </div>
  <form action="{{URL::to('stripe')}}">
  <input type="text" name="fullname" value="" class="form-control mt-2" placeholder="Enter your full name" required><br>
  <input type="text" name="phone" value="" class="form-control mt-2" placeholder="Enter Phone number" required><br>
  <input type="text" name="address" value="" class="form-control mt-2" placeholder="Enter your address" required><br>
  <input type="hidden" name="bill" value="{{$total}}" class="form-control mt-2" placeholder="Enter your address" required>
  <input type="submit" name="checkout" class="primary-btn mt-2 btn-block" value="Proceed to checkout" id="ss">
</form>
   </div>




@endsection