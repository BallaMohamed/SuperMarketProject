@extends("layouts.master")
@section("content")
<div class="container" style="margin-top: 15px;">
 <div class="card">
     <div class="client_header">
         <p class="lead"><i class="fa fa-edit icon_class"></i>Edit  Customer </p>
     </div>
     <hr >
     <div class="client">
         <form action="/clients/{{$client->id}}" method="POST">
             @csrf
             @method('PUT')
             <div class="row">
                 <div  class="col-md-5">
                     <div class="form-group">
                         <label for="customer_name">Customer_name</label>
                         <input type="text" name="customer_name" class="form-control" value="{{$client->customer_name}}" required>
                         <span class="error_color">@error("customer_name") {{$message}}@enderror</span>
                     </div>
                 </div>
                 <div  class="col-md-5">
                    <div class="form-group">
                        <label for="customer_phone">Customer_phone</label>
                        <input type="text" name="customer_phone" class="form-control" value="{{$client->customer_phone}}" required>
                        <span class="error_color">@error("customer_phone") {{$message}}@enderror</span> 
                    </div>
                </div>

                <div class="col-md-5">
                    <button type="submit" class="tn btn-primary form-control"><i class="fa fa-save icon_class"></i>Save</button>
                </div>
             </div>
         </form>
     </div>
 </div>
</div>

@endsection