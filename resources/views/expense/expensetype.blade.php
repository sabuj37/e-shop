@extends('include') 
@section('backTitle')Expense Type @endsection @section('container')

<div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="Expense type name" aria-label="First name">
     <div class=" p-1 d-md-flex justify-content-md-end">
  <button class="btn btn-primary me-md-2" type="button">add expense type</button>
  
</div>
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder=" Search Expense type " aria-label="Last name">
  </div>
</div>


<table class="table left-text table-success table-bordered table-striped-columns">
  <thead>
    <tr class="fw-5 ">
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td>Mark</td>
      <td><div class="d-flex align-items-center list-action">
                                    
        <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
            href="#"><i class="ri-pencil-line mr-0"></i>Edit</a>
        <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
            href="#"><i class="ri-delete-bin-line mr-0"></i>Delete</a>
    </div></td>
      
</tr>
  </tbody>
</table>

@endsection