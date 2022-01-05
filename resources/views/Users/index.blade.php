@extends("layouts.master")
@section('content')
<div class="container" style="margin-top: 30px;">
<div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card">
                <div class="card-header d-flex">
                  <h4>ادارة المستخدمين</h4>
                  <a href="users/create" class="btn btn-primary ml-auto btn-sm"><span class="but"><i class="fa fa-plus icon_class"></i> اضافة مستخدم </span></a>
                </div>
                   <div class="table-responsive">
                    <table class="table card-table">
                      <thead>
                        <tr>
                          <th>##</th>
                          <th>الاسم</th>
                          <th>بريد الالكتروني </th>
                          <th>العمليات</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $user)
                          <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <form action="/users/{{$user->id}}" method="post">
                                      @method('DELETE')
                                      @csrf
                                      <a href="/users/{{$user->id}}/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                      <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                          <tr> 
                            @endforeach   
                      </tbody>
                      <tfoot>
                        <tr>
                          <td colspan="4">
                            <div class="float-right">
                              {{ $users->links('pagination::bootstrap-4') }}
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

