@extends('Dashboard.main')
@section('main-section')
<style>

#td{

}

h2 {
    margin-top: 20px;
    margin-left: 30px;
    margin-bottom: 10px;
     }  
</style>

<div class="content-section">
    <h2>Our Orders</h2>

 

    <table class="table table-striped" id="td">
        <thead>
            <tr>
                
                <th scope="col">Fname</th>
                <th scope="col">Lname</th>
                {{-- <th scope="col">Email</th>
                <th scope="col">Customer Status</th> --}}
                <th scope="col">Bill</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Order Status</th>
                <th scope="col">Order date</th>
                <th scope="col">Action</th>
                <th scope="col">products</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=0;
            @endphp
            @foreach ($orders as $item)
            @php
            $i++;
            @endphp

            <tr>
              
                <td>{{$item->firstname}}</td>
                <td>{{$item->lastname}}</td>
                {{-- <td>{{$item->email}}</td>
                <td class="text-info">{{$item->userStatus}}</td> --}}
                <td>{{$item->bill}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->address}}</td>
                <td>{{$item->status}}</td>

                <td>{{$item->created_at}}</td>

                {{-- <td>
                    <a href="{{URL::to('deleteProduct/'.$item->id)}}" class="btn btn-success">Delete</a>
                </td> --}}

                 <td>
                    @if($item->status=='paid')
                     <a href="{{URL::to('changeOrderStatus/Accepted/'.$item->id)}}" class="btn btn-success">Accept</a>
                     <a href="{{URL::to('changeOrderStatus/Rejected/'.$item->id)}}" class="btn btn-danger">Reject</a>
                     @elseif($item->status=='Accepted')
                     <a href="{{URL::to('changeOrderStatus/Delivered/'.$item->id)}}" class="btn btn-success">Completed</a>
                     @elseif($item->status=='Delivered')
                        Already Completed
                     @else
                     
                     <a href="{{URL::to('changeOrderStatus/Accepted/'.$item->id)}}" class="btn btn-success">Accepted</a>

                     @endif
                
                 </td>
                 <td>
                       <!-- Button to trigger modal -->
           <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#updateModel{{ $i }}">
            Products
       </button>

          <!-- Modal -->
       <div class="modal fade" id="updateModel{{ $i }}" tabindex="-1" aria-labelledby="updateModelLabel{{ $i }}" aria-hidden="true">
         <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
           <h5 class="modal-title" id="updateModelLabel{{ $i }}">Order Products</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>

        <div class="modal-body">

           <table class="table table-striped">
               <thead>
                   <tr>
                    <th>Product</th>
                    <th>Picture</th>
                    <th>Price/Item</th>
                    <th>Quantity</th>
                    <th>Sub-Total</th>
                   </tr>
               </thead>
               <tbody>
                   @foreach ($orderItems as $oItem)
                   @if( $oItem->orderId==$item->id)
                   <tr>
                       <td>
                           {{$oItem->tittle}}
                       </td>
                       <td>
                          <img src="{{URL::asset('uploads/products/'.$oItem->picture)}}" width="100px" alt="">
                       </td>
                       <td>
                          ₹ {{$oItem->price}}
                       </td>
                       <td>
                           {{$oItem->quantity}}
                       </td>
                       <td>
                          ₹ {{$oItem->quantity * $oItem->price }}
                       </td>
                   </tr>
                   @endif
                   @endforeach
               </tbody>
               </table>

   
             </div>
            </div>
           </div>
           </div>

                 @endforeach
                </tbody>
            </table>
        </div>

         
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@endsection













