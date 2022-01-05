@extends('layouts.master')
@section('content')
  <div class="container">
    
        <div class="row">
            <div class="col-md-6">
              <div class="total_product">
                <p class="lead TEXT">Total Products</p>
                <h1>{{$product}}</h1>
              </div>
            </div>

            <div class="col-md-6">
              <div class="total_categories">
                <p class="lead TEXT">Total Categroies</p>
                <h1>{{$categroy}}</h1>
              </div>
            </div>

            <div class="col-md-6">
              <div class="total_Campanies">
                <p class="lead TEXT">Total Campanies</p>
                <h1>{{$company}}</h1>
              </div>
            </div>

            <div class="col-md-6">
              <div class="total_Clients">
                <p class="lead TEXT">Total Clients</p>
                <h1>{{$client}}</h1>
              </div>
            </div>

        <div>
   <hr />
          
            <div class="report">
              <a href="#" class="btn btn-primary form-control">genrate Report</a>
            </div>
        
  </div>
@endsection