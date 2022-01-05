@extends('layouts.master')
@section('content')
<div class="container" style="margin-top: 30px;">
<div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">
                <div class="card-header but"><i class="fa fa-edit icon_class"></i> Update Categroy</div>
                <div class="card-body">
                    <form  action="/categroies/{{$categroy->id}}" method="post">
                     {{csrf_field()}}
                      @method('PUT')
                      <div class="row">
                          <div class="col-5">
                            <div class="form-group">
                                <label for="cat_name">اسم الصنف</label>
                                <input type="text" name="name" class="form-control" value="{{$categroy->name}}" required>
                                <span class="error_color">@error("name"){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                              <label for="cat_short">Select Company name</label>
                              <select class="form-control" name="company_id"  required>
                                  <option value="{{$categroy->company->id}}">{{$categroy->company->name}}</option>
                                  @foreach($companies as $company)
                                  <option value="{{$company->id}}">{{$company->name}}</option>
                                  @endforeach
                              </select>
                              <span class="error_color">@error("company_id"){{$message}}@enderror</span>
                          </div>
                          </div>
                          <div class="col-5">
                            <div class="form-group"> 
                                <label for="cat_des">وصف الصنف</label>
                                <textarea class="form-control" name="description" style="height: 125px;" required>{{$categroy->description}}</textarea>
                                <span class="error_color">@error("description"){{$message}} @enderror</span>
                            </div>
                          </div>
                           <div class="col-5">
                            <div class="form-group"> 
                                <button type="submit" name="save" class="btn btn-primary but" style="margin-top: 32px ; width: 300px">Update</button>
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
