@extends("layouts.master")
@section('content')
<div class="container" style="margin-top: 30px;">
<div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card">
                <div class="card-header d-flex">
                  <h5>ادارة Suppliers</h5>
                  <a href="suppliers/create" class="btn btn-primary ml-auto btn-sm"><h5><i class="fa fa-plus icon_class"></i>اضافة supplier جديدة</h5></a>
                </div>
                   <div class="table-responsive">
                    <table class="table card-table">
                      <thead>
                        <tr>
                          <th>##</th>
                          <th>اسم supplier</th>
                          <th> Campany BelongsTO </th>
                          <th>phone number</th>
                          <th>العمليات</th>
                        </tr>
                      </thead>
                      <tbody>
                          
                       @foreach($suppliers as $supplier)
                          <tr>
                            <td>{{$supplier->id}}</td>
                            <td>{{$supplier->name}}</td>
                            <td>{{$supplier->company->name}}</td>
                            <td>{{$supplier->phone}}</td>
                            <td>
                                <form action="/suppliers/{{$supplier->id}}" method="post">
                                      @method('DELETE')
                                      @csrf
                                      <a href="/suppliers/{{$supplier->id}}/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
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
                            {{ $suppliers->links('pagination::bootstrap-4') }}
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

