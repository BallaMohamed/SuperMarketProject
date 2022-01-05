@extends("layouts.master")
@section("content")
<div class="container" style="margin-top: 30px;">
 <div class="card">
     <div class="pull-right">
         <a href="/bayment/create" class="btn btn-primary btn-sm but"> <i class="fa fa-plus icon_class"></i>Create Bayment Operation</a>
     </div>
     <hr />
     <div class="bayment_body">
      <div class="table-responsive">
          <table class="table">
              <thead>
                  <th>#ID</th>
                  <th>name</th>
                  <th>Date</th>
                  <th>Price</th>
                  <th>Amount</th>
              </thead>
              <tbody></tbody>
              <tfoot></tfoot>
          </table>
      </div>
     </div>
 </div>
</div>

@endsection