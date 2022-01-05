@extends("layouts.master")
@section('content')
<div class="container" style="margin-top: 15px;">
<div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card">
                <div class="card-header d-flex">
                  <h4>Client Management</h4>
                  <a href="clients/create" class="btn btn-primary ml-auto btn-sm"><span class="but"><i class="fa fa-plus icon_class"></i> Add client </span></a>
                </div>
                   <div class="table-responsive">
                    <table class="table card-table">
                      <thead>
                        <tr>
                          <th>##</th>
                          <th>الاسم</th>
                          <th>phone</th>
                          <th>Show Invoices</th>
                          <th>العمليات</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($clients as $client)
                          <tr>
                            <td>{{$client->id}}</td>
                            <td>{{$client->customer_name}}</td>
                            <td>{{$client->customer_phone}}</td>
                            <td>Show</td>
                            <td>
                                <form action="/clients/{{$client->id}}" method="post">
                                      @method('DELETE')
                                      @csrf
                                      <a href="/clients/{{$client->id}}/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
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
                              {{$clients->links('pagination::bootstrap-4') }}
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

