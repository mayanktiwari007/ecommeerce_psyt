@extends('layouts.main')
@section('main-section')
<style>
   .his {
       text-align: center;
       margin-top: 20px;
       margin-bottom: 20px;
   }
</style>

<section>
    <h5 class="his">Order History</h5>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Fullname</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">Status</th>
                <th scope="col">Total bill</th>
                <th scope="col">Created_at</th>
                <th scope="col">View Products</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach ($orders as $item)
                @php
                    $i++;
                @endphp
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $item->fullname }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->bill }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                        <!-- Trigger the modal with a button -->
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal{{$item->id}}">
                            Products
                        </button>

                        <!-- Modal -->
                        <div id="modal{{$item->id}}" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">All Products for Order #{{ $item->id }}</h4>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th>Sub Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $productsFound = false;
                                                @endphp
                                                @foreach ($items as $product)
                                                    @if($product->orderId == $item->id)
                                                        @php
                                                            $productsFound = true;
                                                        @endphp
                                                        <tr>
                                                            <td>
                                                                <img src="{{ URL::asset('uploads/products/'.$product->picture) }}" alt="" width="100px">
                                                                {{ $product->tittle }}
                                                            </td>
                                                            <td>{{ $product->quantity }}</td>
                                                            <td>{{ $product->price }}</td>
                                                            <td>{{ $product->price * $product->quantity }}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach

                                                @if(!$productsFound)
                                                    <tr>
                                                        <td colspan="4">No products found for this order.</td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

@endsection
