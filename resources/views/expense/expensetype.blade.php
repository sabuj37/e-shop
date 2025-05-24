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


<table class="table table-success table-bordered table-striped-columns">
  <thead>
    <tr>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td>Mark</td>
      <td>Otto</td>
      
</tr>
  </tbody>
</table>

@endsection