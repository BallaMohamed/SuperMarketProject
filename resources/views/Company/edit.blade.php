@extends("layouts.master")
@section("content")
<div class="container" style="margin-top: 30px;">
    <div class="card">
        <div class="card-header d-flex">
            <h5>  <i class="fa fa-edit icon_class"></i>update شركة  </h5>
          </div>
          <div class="card-body">
            <form action="/companies/{{$company->id}}" method="POST">
            @csrf
            @method('PUT')
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>اسم الشركة</label>
                    <input type="text" name="name" class="form-control" value="{{$company->name}}" />
                    <span class="error_color">@error("name") {{$message}} @enderror</span>
                 </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label>عنوان الشركة</label>
                    <input type="text" name="address" class="form-control" value="{{$company->address}}"/>
                    <span class="error_color">@error("address") {{$message}} @enderror</span>
                 </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label> تلفون الشركة</label>
                    <input type="text" name="phone" class="form-control" value="{{$company->phone}}"/>
                    <span class="error_color">@error("phone") {{$message}} @enderror</span>
                 </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label>ملاحظة</label>
                    <input type="text" name="obserive" class="form-control" value="{{$company->obserive}}"/>
                    <span class="error_color">@error("obserive") {{$message}} @enderror</span>
                 </div>
                </div>

                <div class="col-6">
                  <div class="form-group"> 
                      <button type="submit"  class="btn btn-primary" style="margin-top: 32px ; width: 300px ; font-size: 18px;">update</button>
                  </div>
                </div>

              </div>
            </form>
          </div>
    </div>
<div>

@endsection