
@extends('layouts.master')
@section('content')
<div class="container">
<div class="row justify-content-center" style="margin-top: 30px">
        <div class="col-md-12">
        	<div class="card">
                <div class="card-header d-flex">
                  <h5>
                    @if($status == 1)
                       {{"لطلبات الجديدة"}}
                    @elseif($status == 2)
                       {{"الطلبات جارية التحضير"}}
                    @elseif($status == 3)
                       {{"الطلبات التي تم تحضيرها"}}
                    @else
                       {{" الطلبات التي تم تسليمها"}}
                    @endif
                  </h5>
                </div>
                @if($orders->count() > 0)
                   <div class="table-responsive">
                    <table class="table card-table">
                      <thead>
                        <tr>
                          <th>اسم العميل</th>
                          <th>تاريخ الفاتورة</th>
                          <th>المجموع</th>
                          <th>العمليات</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($orders as $order)
                          <tr>
                            <td><a href="{{route('orders.show' , $order->id)}}">{{$order->user->name}}</a></td>
                            <td>{{$order->created_at}}</td>
                            <td>{{$order->total}}</td>
                            <td>
                                <form action="/orders/{{$order->id}}" method="post">
                                      @method('DELETE')
                                      @csrf
                                           @if($status == 1)
                                           <a href="/changeStatus/{{$order->id}}" class="btn btn-primary btn-sm">
                                            {{" تحضير"}}
                                            </a>
                                          @elseif($status == 2)
                                          <a href="/changeStatus/{{$order->id}}" class="btn btn-primary btn-sm">
                                            {{" ...جاري التحضير"}}
                                          </a>
                                          @elseif($status == 3)
                                          <a href="/changeStatus/{{$order->id}}" class="btn btn-primary btn-sm">
                                            {{"   تسليم"}}
                                          </a>
                                          @endif
                                      @if($status == 4)
                                            {{"   تم التسليم"}}
                                      @endif
                                      <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                    </div>
                  @else
                  <center>
                    <h3>لا توجد طلبات</h3>
                  </center>
                  @endif
            </div>
        </div>
    </div>
</div>
@endsection
