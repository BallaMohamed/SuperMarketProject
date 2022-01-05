@extends('layouts.master')
@section('content') 
<div class="container" style="margin-top: 15px;">
    <div class="card">
        <div class="card-body">
            <div class="Invoice_header">
                <span>Create Invoice</span>
            </div>
            <hr />
            <div class="Invoice_body">
               <div class="row">
                   <div class="col-md-6">
                    <div class="search">
                       <form>
                          <div class="row search_class">
                              <div class="col-sm-8">
                                <input type="text" class="form-control" />
                              </div>
                              <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search icon_class"></i>Search</button>
                              </div>
                          </div>
                       </form>
                    </div>
                    <div class="table-responsive Table_invoice_class">
                        <table class="table">
                            <thead>
                                <th>name</th>
                                <th>Categroy</th>
                                <th>Price</th>
                                <th>Select Product</th>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->categroy->name}}</td>
                                    <td>{{$product->price2}}</td>
                                    <td><input type="checkbox" name="seletedProduct" class="form-control"/></td>
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

                   <div class="col-md-6">
                       <div class="card">
                           <div class="card-body">
                             <form >
                                 <div class="row">
                                    <div class="col-sm-5">
                                        <label for="Customer_name">Customer name</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <select class="form-control" name="customer_name" id="customer_name">
                                               <option>Without</option>
                                             @foreach($clients as $client)
                                               <option>{{$client->customer_name}}</option>
                                               @endforeach
                                            </select>
                                        </div>
                                    </div>
                                 </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <th>name</th>
                                            <th>Price</th>
                                            <th>Select Amount</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                           <tr>
                                               <td><input type="text" class="form-control" readonly value="PEPSI"></td>
                                               <td><input type="text" class="form-control" readonly value="89"></td>
                                               <td><input type="text" class="form-control" value="1"></td>
                                               <td><a href="#" class="btn btn-danger"><i class="fa fa-minus"></i></a></td>
                                           </tr>
                                           <tr>
                                            <td><input type="text" class="form-control" readonly value="PEPSI"></td>
                                            <td><input type="text" class="form-control" readonly value="89"></td>
                                            <td><input type="text" class="form-control" value="1"></td>
                                            <td><a href="#" class="btn btn-danger"><i class="fa fa-minus"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" class="form-control" readonly value="PEPSI"></td>
                                            <td><input type="text" class="form-control" readonly value="89"></td>
                                            <td><input type="text" class="form-control" value="1"></td>
                                            <td><a href="#" class="btn btn-danger"><i class="fa fa-minus"></i></a></td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                            <th> Total</th>
                                              <th>
                                                   <input type="text" class="form-control" readonly value="4523"/>
                                              </th>
                                        </tfoot>
                                    </table>
                                </div>
                                <button type="submit" class="btn btn-primary form-control"><i class="fa fa-print icon_class"></i>print </button>
                             </form>
                           </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
</div> 
@endsection
