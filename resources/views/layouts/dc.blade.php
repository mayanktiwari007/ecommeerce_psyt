@extends('layouts.main')
@section('main-section')
<style>
 
.mynk {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    gap: 40px;
    margin-left: 30px;
    margin-top: 20px;
    margin-bottom: 20px;
}

</style>

<div class="mynk">
  
    @foreach($dcProducts as $item)
    <!-- Check if the category is 'marvel' -->
    @if($item->category == 'DC')
        <h2 class="{{$item->category}}"></h2>
        <div class="card border-0 rounded-0 shadow" style="width: 18rem;">
            <img src="{{ URL::asset('uploads/products/'.$item->picture) }}" class="card-img-top rounded-0" alt="..." style="width: 100%; height: 200px;"><a href="{{URL::to('single/'.$item->id)}}" class="stretched-link" id="img"></a>
            <div class="card-body mt-3 mb-3">
                <div class="row">
                    <div class="col-10">
                        <h4 class="card-title"> {{$item->title}}</h4>
                        <p class="card-text"> {{$item->description}}</p>
                    </div>
                    <div class="col-2">
                        <i class="bi bi-bookmark-plus fs-2"></i>
                    </div>
                </div>
            </div>
            <div class="row align-items-center text-center g-0">
                <div class="col-4">
                    <h5>₹{{$item->price}}</h5>
                </div>
               
            </div>
        </div>
    @endif
@endforeach


    
</div>

@endsection