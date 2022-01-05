@extends('layouts.master')

@section('content')
<div class="container" style="margin-top: 30px;">
<div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card">
                <div class="card-header d-flex">
                  <h5>ادارة الاصناف</h5>
                  <a href="categroies/create" class="btn btn-primary ml-auto btn-sm but"><i class="fa fa-plus icon_class"></i>انشاء نوع جديد</a>
                </div>
                   <div class="table-responsive">
                    <table class="table card-table">
                      <thead>
                        <tr>
                          <th>##</th>
                          <th>اسم الصنف</th>
                          <th> company name</th>
                          <th> Description</th>
                          <th>العمليات</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($categroies as $cat)
                          <tr>
                            <td>{{$cat->id}}</td>
                            <td>{{$cat->name}}</td>
                            <td>{{$cat->company->name}}</td>
                            <td>{{$cat->description}}</td>
                            <td>
                                <form action="/categroies/{{$cat->id}}" method="post">
                                      @method('DELETE')
                                      @csrf
                                      <a href="/categroies/{{$cat->id}}/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
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
                             {{$categroies->links('pagination::bootstrap-4')}}
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
