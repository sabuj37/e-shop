@extends('include') 
@section('backTitle')new products @endsection @section('container')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Creat Product</h4>
                </div>
            </div>
            <div class="card-body">
                <form action="https://templates.iqonic.design/posdash/html/backend/page-list-customers.html" data-toggle="validator">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Prodct Name *</label>
                                <input type="text" class="form-control" placeholder="Enter Name" required />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Brand Name *</label>
                                <label for="inputState" class="form-label"></label>
                                <select id="inputState" class="form-control">
                                    <option selected>Brand</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1 mt-5 p-0">
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#brand">Brand</button>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Product Category</label>
                                <label for="inputState" class="form-label"></label>
                                <select id="inputState" class="form-control">
                                    <option selected>Category</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1 mt-5 p-0">
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Category">Category</button>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Product Unit</label>
                                <label for="inputState" class="form-label"></label>
                                <select id="inputState" class="form-control">
                                    <option selected>Product Unit</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 mt-5 p-0">
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#unit">Product unit</button>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="alert" class="form-label">Alert Quantity</label>
                                 <input type="text" class="form-control" id="alert" placeholder="Optional">
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="deatils" class="form-label">Deatils</label>
                                 <input type="text" class="form-control" id="deatils" placeholder="Optional">
                                
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Save Product</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header ">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="">Product List</h4>
                        </div>
                        
                    </div>
            </div>
    <div class="card-body">
<table class="table table-bordered border-primary">
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

<!-- Page end  -->

<!-- brand modal -->
 <!-- Modal -->
<div class="modal fade " id="brand" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="brand" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title fs-5" id="brand">Creat Brand</h6>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="mb-3">
  <label for="brand" class="form-label">Creat Brand</label>
  <input type="text" class="form-control" id="brand" placeholder="Enter Brand name">
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancle</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<!-- category modal -->
<div class="modal fade " id="Category" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="Category" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title fs-5" id="Category">Creat Category</h6>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Category</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Category name">
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Cancle</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<!-- product unit -->

<div class="modal fade " id="unit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="unit" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title fs-5" id="unit">Preoduct Unit</h6>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
  <label for="unit" class="form-label">Product Unit</label>
  <input type="text" class="form-control" id="unit" placeholder="Enter Product Unit name">
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Cancle</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

@endsection
