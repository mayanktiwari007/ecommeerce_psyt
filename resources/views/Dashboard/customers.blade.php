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
    <h2>Our Customers</h2>

 
 

    <table class="table table-striped" id="td">
        <thead>
            <tr>
                
                <th scope="col">#.</th>
                <th scope="col">firstname</th>
                <th scope="col">lastname</th>
                <th scope="col">Email</th>
                <th scope="col">Type</th>
                <th scope="col">Registration Date</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            @php
                $i=0;
            @endphp
            @foreach ($customers as $item)
            @php
            $i++;
        @endphp
            <tr>
                <td>{{$i}}</td>
                <td>{{$item->firstname}}</td>
                <td>{{$item->lastname}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->type}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->status}}</td>
                <td>
                    @if($item->status== 'Active')
                <a href="{{URL::to('changeUserStatus/Blocked/'.$item->id)}}" class="btn btn-danger">Block</a>
                    @else
                <a href="{{URL::to('changeUserStatus/Active/'.$item->id)}}" class="btn btn-success">Un-Block</a>
                    @endif
                </td>


                </tr>
            @endforeach
           
        </tbody>
    </table>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@endsection













