<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  @include('layouts.style')
<body>
  <div class="">
      <div class="row">
          <div class="col-sm-2 right_nav">
              <ul>
                <li><a href="/home"><i class="fa fa-home icon_class"></i>الريسية</i></a></li>
                <hr />
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-dolly icon_class"></i>المنتجات
                        </a>
                        <div class="dropdown-menu inner_class" aria-labelledby="dropdownMenuLink">
                          <ul class="inner_ul">
                            <li><a class="dropdown-item" href="/products"> <i class="fa fa-voicemail icon_class"></i>ادارة المنتجات</a></li>
                            <li><a class="dropdown-item" href="/categroies"><i class="fa fa-sitemap icon_class"></i>ادارة الاصناف</a></li>
                          </ul>
                         
                        </div>
                      </div>
                </li>           
                  <hr />
                  <li>
                       <a href="/invoices"><i class="fa fa-universal-access icon_class"></i>المبيعات</a>   
                  </li>


                  <hr />
                  <li><a href="/bayment"><i class="fa fa-people-carry icon_class"></i>المشتريات</a></li>
                  <hr />
                  <li><a href="/clients"><i class="fa fa-user icon_class"></i>العملاء</a></li>
                  <hr />
                  <li>
                      <div class="dropdown">
                          <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user-tie icon_class"></i>الموردين
                          </a>
                          <div class="dropdown-menu inner_class" aria-labelledby="dropdownMenuLink">
                            <ul class="inner_ul">
                              <li><a class="dropdown-item" href="/companies"><i class="fa fa-building icon_class"></i>ادارة الشركات</a></li>
                              <li><a class="dropdown-item" href="/suppliers"><i class="fa fa-user-tie icon_class"></i>ادارة الموردين</a></li><hr>
                            </ul>
                          </div>
                        </div>        
                  </li>
                  <hr />
                  <li><a href="/users"><i class="fa fa-users icon_class"></i>المستخدمين </a></li>
                  <hr />
                  <li>
                      <div class="dropdown">
                          <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ambulance icon_class"></i>الطلبات
                          </a>
                          <div class="dropdown-menu inner_class" aria-labelledby="dropdownMenuLink">
                            <ul class="inner_ul">
                              <li><a class="dropdown-item" href="/orders?status=1"><i class="fa fa-cart-plus icon_class"></i></i><span class="order_request">{{$conut}}</span>لطلبات الجديدة </a></li>
                              <li><a class="dropdown-item" href="/orders?status=2"><i class="fa fa-arrow-alt-circle-down icon_class"></i>الطلبات جارية التحضير </a></li>
                              <li><a class="dropdown-item" href="/orders?status=3"><i class="fa fa-clipboard-list icon_class"></i></i>الطلبات التي تم تحضيرها  </a></li>
                              <li><a class="dropdown-item" href="/orders?status=4"><i class="fa fa-people-carry icon_class"></i> الطلبات التي تم تسليمها  </a></li><hr>
                            </ul>
                          </div>
                        </div>        
                  </li>
                   
              <ul>
          </div>

          <div class="col-sm-10">
            <div class="top_nav">
                    <div class="dropdown nav_img">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <img class="nav_img" src="{{asset('image/avatar.png')}}" />
                        </a>
                        <div class="dropdown-menu inner_class" aria-labelledby="dropdownMenuLink">
                          <ul class="inner_ul_profile nav_img">
                            <li><a class="dropdown-item" href="">
                              الملف الشخصي</a></li><hr>
                            <li><a class="dropdown-item" href="/logout">
                              تسجيل خروج</a></li>
                          </ul>    
                        </div>
                      </div>  
            </div>


          
            @yield('content')
          </div>
      </div>
  </div>
  @include('layouts.script')
</body>
</html>
