@extends("layouts.master")

@section("content")
<dev class="container" style="margin-top: 30;">
 <div class="card">
     <div class="card-body">
        <h4><i class="fa fa-edit icon_class"></i>تعديل بيانات المستخدم</h4><hr />
        <form action="/users/{{$user->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="name">اسم المستخدم</label>
                        <input type="text" class="form-control" name="name" required  value="{{$user->name}}"/>
                        <span class="error_color"> @error("name") {{$message}} @enderror</span>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email">البريد الإلكتروني</label>
                        <input type="email" class="form-control" name="email" required value="{{$user->email}}"/>
                        <span class="error_color"> @error("email") {{$message}} @enderror</span>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="password">كلمة المرور</label>
                        <input id="password" type="password" class="form-control" name="password" required  />
                        <span class="error_color">@error('password') {{$message}} @enderror</span>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="password_confirmation">تأكيد كلمة المرور</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  required/>
                        <span class="error_color">@error('password_confirmation') {{$message}} @enderror</span>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <button class="btn btn-primary form-control but"  type="subimt" style="margin-top: 40px;"><i class="fa fa-save icon_class"></i>تعديل</button>
                    </div>
                </div>

            </div>
        </form> 
     </div>
 </div>
</div>
@endsection