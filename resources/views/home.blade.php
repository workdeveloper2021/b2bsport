@extends('layouts.main')

@section('content')
<main>


  <div class="whole-wrap" style="background-color: #f8f8f8;">
    <div class="container box_1170">
      
      <div class="section-top-border">
        <div class="text-center">
        <h3 class="mb-30" >Services</h3>
       
        </div>
        <div class="row">
          <div class="col-md-6 " >
            <div class="single-defination shadow-sm p-3 mb-5 bg-white rounded">
            <div class="text-center">
               <h4 class="mb-20">Download Product Catalogs</h4>
             
            </div>
              <p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
              <div class="text-center">
         
              <a href="#" class="genric-btn success radius">Continue</a>
              </div>
            
            </div>
          </div>
          <div class="col-md-6 ">
            <div class="single-defination shadow-sm p-3 mb-5 bg-white rounded">
            <div class="text-center">
         
            <h4 class="mb-20">Vendor Place Orders</h4>
            </div>
            
            <p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
            <div class="text-center">
         
              <a href="{{route('warehouse')}}" class="genric-btn success radius">Continue</a>
              </div>
            
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
