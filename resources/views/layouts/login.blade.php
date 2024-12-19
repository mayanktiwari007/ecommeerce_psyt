@extends('layouts.main')
@section('main-section')
 <style>
   head{
    margin-bottom: 300px:
   }
   h3{
    text-align: center;
   }
 </style>
   <head>
      <section class="p-3 p-md-4 p-xl-5">
        <div class="container">
          <div class="card border-light-subtle shadow-sm">
            <div class="row g-0">
              <div class="col-12 col-md-6 text-bg-primary">
                <div class="d-flex align-items-center justify-content-center h-100">
                  <div class="col-10 col-xl-8 py-3">
                    <img class="img-fluid rounded mb-4" src="{{ asset('uploads/logo.png')}}"  alt="BootstrapBrain Logo"  height="100px" width="100px" style="border-radius: 50%;">
                    <hr class="border-primary-subtle mb-4">
                    <h2 class="h1 mb-4">Psyt: Trendy, sustainable clothing for the modern fashion-forward individual.</h2>
                    <p class="lead m-0">Elevate your style with Psyt - Where fashion meets quality and sustainability.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="card-body p-3 p-md-4 p-xl-5">
                  <div class="row">
                    <div class="col-12">
                      <div class="mb-5">
                        <h3>Log in</h3>
                      </div>
                    </div>
                  </div>
                </div>
                 @if(session()->has('success'))
                   <div class="alert alert-success">
                    <p>{{session()->get('success')}}</p>
                   </div>
                   @endif  
                   @if(session()->has('error'))
                   <div class="alert alert-danger">
                    <p>{{session()->get('error')}}</p>
                   </div>
                   @endif    
                
                <form action="{{URL::to('loginUser')}}" method="POST" >
                  @csrf
                   <div class="row gy-3 gy-md-4 overflow-hidden">
                     <div class="col-12">
                       <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                       <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                     </div>
                     <div class="col-12">
                       <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                       <input type="password" class="form-control" name="password" id="password" value="" required>
                     </div>
                     <div class="col-12">
                       <div class="form-check">
                         <input class="form-check-input" type="checkbox" value="" name="remember_me" id="remember_me">
                         <label class="form-check-label text-secondary" for="remember_me">
                           Keep me logged in
                         </label>
                       </div>
                     </div>
                     <div class="col-12">
                       <div class="d-grid">
                         <button class="btn bsb-btn-xl btn-primary" type="submit" name="login">Log in now</button>
                       </div>
                     </div>
                   </div>
                 </form>
                 <div class="row">
                   <div class="col-12">
                     <hr class="mt-5 mb-4 border-secondary-subtle">
                     <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                       <a href="{{URL::to('/signup')}}" class="link-secondary text-decoration-none">Create new account</a>
                       <a href="#!" class="link-secondary text-decoration-none">Forgot password?</a>
                     </div>
                   </div>
                 </div>
                 
      </section>
      </head>
@endsection