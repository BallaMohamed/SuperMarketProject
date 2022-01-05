<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  @include('layouts.style')
<body>
  <div class="container login_form">
    <center><img src="{{asset('image\avatar.png')}}" alt="Girl in a jacket"></center>
    <form action="/check" method="POST"> 
      @csrf
      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 input_class">
            <input type="text" name="name"  class="form-control"  placeholder="ادخل اسم المستخدم" value="{{old('name')}}" autocomplete="off" />
          </div>
          <div class="col-md-4"></div>
          <div class="col-md-4"></div>
          <div class="col-md-4 input_class">
            <input type="password" name="password"  class="form-control"  placeholder="ادخل كلمة السر" autocomplete="off"/>
          </div>
          <div class="col-md-4"></div>

        
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <button class="btn btn-primary btn_class" type="submit"><h4> تسجيل الدخول </h4></button>
          </div>
          <div class="col-md-4"></div>

          <div class="col-md-4"></div>
          <div class="col-md-4" style="margin-top: 30px;">
            <h4><a href="#">  هل نسيت كلمة السر  ؟</a></h4>
          </div>
          <div class="col-md-4"></div>
      </div>
    </form>
  </div>
  @include('layouts.script')
</body>
</html>
