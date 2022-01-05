@extends("layouts.master")
@section("content")
<div class="container" style="margin-top: 30px;">
    <div class="card">
        <div class="card-header d-flex">
            <h5>  <i class="fa fa-edit icon_class"></i>Update Supplier  </h5>
          </div>
          <div class="card-body">
            <form action="/suppliers/{{$supplier->id}}" method="POST">
            @csrf
            @method('PUT')
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Supplier Name </label>
                    <input type="text" name="name" class="form-control"  value="{{$supplier->name}}" required/>
                    <span class="error_color">@error("name") {{$message}} @enderror</span>
                 </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label> Campany BelongsTo</label>
                    <select name="company_id" class="form-control"  required>
                        <option  value="{{$supplier->company->id}}">{{$supplier->company->name}}</option>
                        @foreach($companies as $company)
                        <option value="{{$company->id}}">{{$company->name}}</option>   
                        @endforeach
                    </select>
                    <span class="error_color">@error("company_id") {{$message}} @enderror</span>
                 </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label>phone Number</label>
                    <input type="text" name="phone" class="form-control" value="{{$supplier->phone}}" required/>
                    <span class="error_color">@error("phone") {{$message}} @enderror</span>
                 </div>
                </div>

                <div class="col-6">
                  <div class="form-group"> 
                      <button type="submit" name="save" class="btn btn-primary but" style="margin-top: 32px ; width: 300px ; font-size: 18px;">Update</button>
                  </div>
                </div>

              </div>
            </form>
          </div>
    </div>
<div>

@endsection