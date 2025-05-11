@extends('include') 
@section('backTitle') addCoustomer @endsection @section('container')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Add Customer</h4>
                </div>
            </div>
            <div class="card-body">
                <form action="https://templates.iqonic.design/posdash/html/backend/page-list-customers.html" data-toggle="validator">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Name *</label>
                                <input type="text" class="form-control" placeholder="Enter Name" required />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="text" class="form-control" placeholder="Enter Email" required />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Phone Number *</label>
                                <input type="text" class="form-control" placeholder="Enter Phone Number" required />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputState" class="form-label">Country *</label>
                                <select id="inputState" class="form-control">
                                    <option selected>customer type *</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputState" class="form-label">State *</label>
                                <select id="inputState" class="form-control">
                                    <option selected>customer type</option>
                                    <option>...</option>
                                </select>
                            </div>
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
@endsection
