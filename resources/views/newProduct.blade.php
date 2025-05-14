@extends('include') 
@section('backTitle') addCoustomer @endsection @section('container')
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
                                    <option selected>Category *</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1 mt-5 p-0">
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Category">Category</button>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputState" class="form-label">City *</label>
                                <select id="inputState" class="form-control">
                                    <option selected>customer type</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputState" class="form-label">Aria *</label>
                                <select id="inputState" class="form-control">
                                    <option selected>customer type</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputState" class="form-label">Contact Type *</label>
                                <select id="inputState" class="form-control">
                                    <option selected>customer type</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Add Customer</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
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
                        <div class="col-md-6">
                            <h4 class="">Customer Receivable : </h4>
                        </div>
                        <div class="col-md-6 text-last">
                            <h4 class="">Add Customer Payable : </h4>
                        </div>
                    </div>
            </div>
            <div class="card-body">
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
        <h1 class="modal-title fs-5" id="brand">Modal title</h1>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

<!-- category modal -->
<div class="modal fade " id="Category" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="Category" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="Category">Modal title</h1>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>


@endsection
