<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  @include('layouts.style')
<body>
<div class="container" style="margin-top: 20px;">
<div class="row justify-content-center">
        <div class="col-md-12">
        	<div class="card">
                <div class="card-header d-flex">
                    <h5> الطلب <span> # {{$order->id}}</span></h5>

                </div>

                <div class="card-body">
                   <div class="table-responsive">
                       <table class="table">
                        <tr>
                            <th>اسم العميل</th>
                            <td>{{$order->user->name}}</td>
                            <th>رقم الفاتورة</th>
                            <td>{{$order->id}}</td>
                        </tr>
                       </table>

                       <h2> تفاصيل الفاتورة</h2>
                       <table class="table">
                           <thead>
                               <tr>
                                   <th></th>
                                   <th>اسم المنتج</th>
                                   <th>الكمية</th>
                                   <th>سعر الوحدة</th>
                                   <th>المجموع الفرعي</th>
                               </tr>
                           </thead>
                           <tbody>
                                @foreach($order->orderDetails as $item)
                                 <tr>
                                     <td>{{$loop->iteration}}</td>
                                     <td>{{$item->product_name}}</td>
                                     <td>{{$item->quantity}}</td>
                                     <td>{{$item->unit_price}}</td>
                                     <td>{{$item->row_sub_total}}</td>
                                 </tr>
                                @endforeach
                           </tbody>
                           <tfoot>
                               <tr>
                                   <td colspan="2"></td>
                                   <th colspan="2">المجموع الكلي</th>
                                   <td>{{$order->total}}</td>
                               </tr>
                           </tfoot>
                       </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.print();
 </script>
</body>
</html>
