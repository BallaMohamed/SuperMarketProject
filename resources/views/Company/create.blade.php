@extends("layouts.master")
@section("content")
<div class="container" style="margin-top: 30px;">
    <div class="card">
        <div class="card-header d-flex">
            <h5>  <i class="fa fa-plus icon_class"></i>اضافة شركة  </h5>
          </div>
          <div class="card-body">
            <form action="/companies" method="POST">
            @csrf
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>اسم الشركة</label>
                    <input type="text" name="name" class="form-control" value="{{old('name')}}" required />
                    <span class="error_color">@error("name") {{$message}} @enderror</span>
                 </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label>عنوان الشركة</label>
                    <input type="text" name="address" class="form-control" value="{{old('address')}}" required/>
                    <span class="error_color">@error("address") {{$message}} @enderror</span>
                 </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label> تلفون الشركة</label>
                    <input type="text" name="phone" class="form-control" value="{{old('phone')}}" required/>
                    <span class="error_color">@error("phone") {{$message}} @enderror</span>
                 </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label>ملاحظة</label>
                    <input type="text" name="obserive" class="form-control" value="{{old('obserive')}}"/>
                    <span class="error_color">@error("obserive") {{$message}} @enderror</span>
                 </div>
                </div>

                <div class="col-6">
                  <div class="form-group"> 
                      <button type="submit" name="save" class="btn btn-primary" style="margin-top: 32px ; width: 300px ; font-size: 18px;">حفظ</button>
                  </div>
                </div>

              </div>
            </form>
          </div>
    </div>
<div>

@endsection