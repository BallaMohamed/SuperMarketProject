
@extends('layouts.master')
@section('content')
<div class="container" style="margin-top: 30px;">
<div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card">
                <div class="card-header d-flex">
                  <h5>ادارة المنتجات</h5>
                  <a href="products/create" class="btn btn-primary ml-auto btn-sm but"><i class="fa fa-plus icon_class"></i>انشاء منتج جديد</a>
                </div>
                   <div class="table-responsive">
                    <table class="table card-table">
                      <thead>
                        <tr>
                          <th>##</th>
                          <th>اسم المنتج</th>
                          <th>اسم الصنف</th>
                          <th>سعر الشراء</th>
                          <th>سعر البيع</th>
                          <th>الكمية</th>
                          <th>العمليات</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($products as $product)
                          <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->categroy->name}}</td>
                            <td>{{$product->price1}}</td>
                            <td> {{$product->price2}}</td>
                            <td>{{$product->amount}}</td>
                            <td>
                                <form action="/products/{{$product->id}}" method="post">
                                      @method('DELETE')
                                      @csrf
                                      <a href="/products/{{$product->id}}/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                      <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                          </tr>
                          @endforeach
                      </tbody>
                      <tfoot>
                        <tr>
                          <td colspan="4">
                            <div class="float-right">
                             {{$products->links('pagination::bootstrap-4')}}
                            </div>
                          </td>
                        </tr>
                      </tfoot>
                    </table>
                    </div>
            </div>
        </div>
    </div>

  </div>
@endsection
