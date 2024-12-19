@extends('Dashboard.main')
@section('main-section')
<style>

#td{

}

h2 {
    margin-top: 20px;
    margin-bottom: 10px;
     }  
</style>
<div id="main-content">
<div class="content-section">
    <h2>Top Products</h2>

  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewModel">
   Add new product
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="addNewModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Product</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="{{URL::to('AddNewProduct')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Tittle</label>
        <input type="text" name="tittle" placeholder="Enter Tittle" class="form-control mb-2">
        <label for="">Price</label>
        <input type="text" name="price" placeholder="Enter Price" class="form-control mb-2">
        <label for="">Picture</label>
        <input type="file" name="file" class="form-control mb-2">
        <label for="">Description</label>
        <input type="text" name="description" placeholder="Enter Description" class="form-control mb-2">
        <label for="">Category</label>
        <select name="category" class="form-control mb-2">
            <option value="select category">select category</option>
            <option value="Marvel">Marvel</option>
            <option value="DC">DC</option>
            <option value="Anime">Anime</option>
            <option value="Gaming">Gaming</option>
            <option value="Series">Series</option>
        </select>
       
        </div>
        <div class="modal-footer">
          <input type="submit" name="save" class="btn btn-primary" value="Save Now">
        </div>
      </form>
      </div>
    </div>
  </div>

  </div>
</div>

    <table class="table table-striped" id="td">
        <thead>
            <tr>
                
                <th scope="col">Title</th>
                <th scope="col">Picture</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=0;
            @endphp
            @foreach ($products as $item)
            @php
            $i++;
        @endphp
            <tr>
              
                <td>{{$item->tittle}}</td>
                <td><img src="{{URL::asset('uploads/products/'.$item->picture)}}" width="100px" alt=""></td>
                <td>{{$item->price}}</td>
                <td>{{$item->category}}</td>

                <td>
                
             <!-- Button trigger modal -->
             <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#updateModel{{$i}}">
                Update
            </button>
            
   
   <!-- Modal -->
   <div class="modal fade" id="updateModel{{$i}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <h1 class="modal-title fs-5" id="exampleModalLabel"> Update Product</h1>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
         <form action="{{URL::to('UpdateProduct')}}" method="POST" enctype="multipart/form-data">
         @csrf
         <label for="">Tittle</label>
         <input type="text" name="tittle" value="{{$item->tittle}}"  placeholder="Enter Tittle" class="form-control mb-2">
         <label for="">Price</label>
         <input type="text" name="price" value="{{$item->price}}" placeholder="Enter Price" class="form-control mb-2">
         <label for="">Picture</label>
         <input type="file" name="file" class="form-control mb-2">
         <label for="">Description</label>
         <input type="text" name="description" value="{{$item->description}}" placeholder="Enter Description" class="form-control mb-2">
         <label for="">Category</label>
         <select name="category" class="form-control mb-2">
             <option value="{{$item->category}}">{{$item->category}}</option>
             <option value="Marvel">Marvel</option>
             <option value="DC">DC</option>
             <option value="Anime">Anime</option>
             <option value="Gaming">Gaming</option>
             <option value="Series">Series</option>
            </select>
       
         </div>
         <div class="modal-footer">
            <input type="hidden" name="id" value="{{$item->id}}">
           <input type="submit" name="save" class="btn btn-primary" value="Save Changes">
         </div>
       </div>
     </div>
   </div>
</form>
</div>
</div>

    </td>

   <td>
    <a href="{{URL::to('deleteProduct/'.$item->id)}}" class="btn btn-danger">Delete</a>
   </td>


    </tr>
            @endforeach
           
        </tbody>
    </table>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@endsection













