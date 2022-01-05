@extends('layouts.master')
@section('content')
      <div class="row justify-content-center"  style="margin-top: 30px;">
        <div class="col-md-12">
        	<div class="card">
                <div class="card-header d-flex">
                  <h5>Invoices Management</h5>
                  <a href="/invoices/create" class="btn btn-primary ml-auto btn-sm"><i class="fa fa-plus icon_class"></i>Create Invoice</a>
                </div>
                   <div class="table-responsive">
                    <table class="table card-table">
                      <thead>
                        <tr>
                          <th>Customer Name</th>
                          <th>Invoice Data</th>
                          <th>Total Due</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                       
                          <tr>
                            <td><a href="">Balla</a></td>
                            <td>2020/2/2</td>
                            <td>3434</td>
                            <td>
                                <form action="" method="post">
                                      @method('DELETE')
                                      @csrf
                                      <a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                      <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                          </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td colspan="4">
                            <div class="float-right">
                            
                            </div>
                          </td>
                        </tr>
                      </tfoot>
                    </table>
                    </div>
            </div>
        </div>
    </div>
 
@endsection