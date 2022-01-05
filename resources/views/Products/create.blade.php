@extends('layouts.master')
@section('content')
<div class="container" style="margin-top: 30px;">
<div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">
                <div class="card-header but"><i class="fa fa-plus icon_class"></i>انشاء منتج جديد</div>
                <div class="card-body">
                    <form  action="/products" method="post" enctype="multipart/form-data">

                     {{csrf_field()}}

                      <div class="row">
                          <div class="col-6">
                            <div class="form-group">
                                <label for="product_name">اسم المنتج</label>
                                <input type="text" name="name" class="form-control" value="{{old('name')}}" required>
                                <span class="error_color">@error("name"){{$message}}@enderror</span>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="form-group">
                                <label for="cat_des">اختر اسم الصنف</label>
                                <select name="categroy_id" class="form-control" required>
                                  <option></option>
                                  @foreach($categroies as $categroy)
                                  <option value="{{$categroy->id}}">{{$categroy->name}}</option>
                                  @endforeach
                                </select>
                                <span class="error_color">@error("categroy_id") {{$message}} @enderror</span>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="form-group">
                                <label for="buy_price">سعر الشراء</label>
                                <input type="text" name="price1" class="form-control" value="{{old('price1')}}" required>
                                <span class="error_color">@error("price1"){{$message}}@enderror</span>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="form-group">
                                <label for="buy_price">سعر البيع</label>
                                <input type="text" name="price2" class="form-control" value="{{old('price2')}}" required>
                                <span class="error_color">@error("price2"){{$message}}@enderror</span>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"> 
                                <label for="cat_des">وصف المنتج</label>
                                <textarea class="form-control" name="description" style="height: 125px;" required>{{old('description')}}</textarea>
                                <span class="error_color">@error("description"){{$message}} @enderror</span>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="form-group">
                                <label for="cat_amount">الكمية</label>
                                <input type="text" name="amount" class="form-control" value="{{old('amount')}}" required>
                                <span class="error_color">@error("amount"){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                              <label for="product_image">صورة المنتج</label>
                              <input type="file" name="file" class="form-control" value="{{old('image')}}">
                          </div>
                          </div>
                           <div class="col-6">
                            <div class="form-group"> 
                                <button type="submit" name="save" class="btn btn-primary  but" style="margin-top: 32px ; width: 300px">حفظ</button>
                            </div>
                          </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
