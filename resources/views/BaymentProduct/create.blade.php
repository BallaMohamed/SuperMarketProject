@extends("layouts.master")
@section("content")
<div class="container" style="margin-top: 30px;">
 <div class="card">
     <div class="Invoice_header" style="margin-top: 10px;">
        <i class="fa fa-plus icon_class"></i> Create Bayment Operation 
     </div>
     <hr />
     <div class="bayment_body">
       <div class="row">
            <div class="col-sm-6 company_class">
                <select id="company" class="form-control">
                    <option></option>
                    @foreach($companies as $company)
                      <option value="{{$company->id}}">{{$company->name}}</option>
                    @endforeach
                </select>
            </div>
       </div>
      </div>
     </div>
 </div>
</div>

@endsection