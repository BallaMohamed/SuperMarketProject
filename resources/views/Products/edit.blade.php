@extends('layouts.master')
@section('content')
<div class="container" style="margin-top: 30px;">
<div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">
                <div class="card-header but"><i class="fa fa-plus icon_class"></i> update product</div>
                <div class="card-body">
                    <form  action="/products/{{$product->id}}" method="post" enctype="multipart/form-data">

                     {{csrf_field()}}
                     @method('PUT')
                      <div class="row">
                          <div class="col-6">
                            <div class="form-group">
                                <label for="product_name">اسم المنتج</label>
                                <input type="text" name="name" class="form-control" value="{{$product->name}}" required>
                                <span class="error_color">@error("name"){{$message}}@enderror</span>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="form-group">
                                <label for="categroy_name">اختر اسم الصنف</label>
                                <select name="categroy_id" class="form-control" required>
                                  <option value="{{$product->categroy->id}}">{{$product->categroy->name}}</option>
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
                                <input type="text" name="price1" class="form-control" value="{{$product->price1}}" required>
                                <span class="error_color">@error("price1"){{$message}}@enderror</span>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="form-group">
                                <label for="buy_price">سعر البيع</label>
                                <input type="text" name="price2" class="form-control" value="{{$product->price2}}" required>
                                <span class="error_color">@error("price2"){{$message}}@enderror</span>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"> 
                                <label for="cat_des">وصف المنتج</label>
                                <textarea class="form-control" name="description" style="height: 125px;" required>{{$product->description}}</textarea>
                                <span class="error_color">@error("description"){{$message}} @enderror</span>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="form-group">
                                <label for="cat_amount">الكمية</label>
                                <input type="text" name="amount" class="form-control" value="{{$product->amount}}" required>
                                <span class="error_color">@error("amount"){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                              <label for="product_image">صورة المنتج</label>
                              <input type="file" name="file" class="form-control" value="{{$product->image}}">
                          </div>
                          </div>
                           <div class="col-6">
                            <div class="form-group"> 
                                <button type="submit" name="save" class="btn btn-primary  but" style="margin-top: 32px ; width: 300px">update</button>
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
