@extends("layouts.master")
@section('content')
<div class="container" style="margin-top: 30px;">
<div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card">
                <div class="card-header d-flex">
                  <b class="lead but"> ادارة الشركات</b>
                  <a href="companies/create" class="btn btn-primary ml-auto btn-sm but"><i class="fa fa-plus icon_class"></i>اضافة شركة جديدة</a>
                </div>
                   <div class="table-responsive">
                    <table class="table card-table">
                      <thead>
                        <tr>
                          <th>##</th>
                          <th>اسم الشركة</th>
                          <th> عنوان الشركة</th>
                          <th> تلفون الشركة</th>
                          <th>ملاحظة</th>
                          <th>العمليات</th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach($companies as $company)
                          <tr>
                            <td>{{$company->id}}</td>
                            <td>{{$company->name}}</td>
                            <td>{{$company->address}}</td>
                            <td>{{$company->phone}}</td>
                            <td>{{$company->obserive}}</td>
                            <td>
                                <form action="/companies/{{$company->id}}" method="post">
                                      @method('DELETE')
                                      @csrf
                                      <a href="/companies/{{$company->id}}/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
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
                            {{ $companies->links('pagination::bootstrap-4') }}
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

