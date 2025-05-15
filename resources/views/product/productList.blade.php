@extends('include') @section('backTitle') Product List @endsection @section('container')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header ">
                    <div class="row">
                        <div class="col-md-4">
                            <h4 class="">Product List</h4>
                        </div>
                        <div class="col-md-4">
                        <select id="inputState" class="form-control">
                                    <option selected>Brand</option>
                                    <option>...</option>
                                </select>
                        </div>
                    </div>
            </div>
    <div class="card-body">
<table class="table table-bordered border-primary data-tables">
  <thead>
    <tr class="table">
      <th scope="col">Product Name</th>
      <th scope="col">Category</th>
      <th scope="col">Brand</th>
      <th scope="col">Unit</th>
      <th scope="col">Creat-date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>Doe</td>
      <td>@social</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
            </div>
        </div>
    </div>
</div>
@endsection