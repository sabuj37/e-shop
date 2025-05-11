@extends('include') @section('backTitle') addCoustomer @endsection @section('container')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Create Supplier</h4>
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
                            <h5 class="">Supplier Receivable : 1000000</h4>
                        </div>
                        <div class="col-md-6 text-last">
                            <h5 class=""> Supplier Payable : 50000000</h4>
                        </div>
                    </div>
            </div>
        </div>
    </div>
            <div class="col-lg-12">
                <div class="table-responsive rounded mb-3">
                <table class="data-tables table mb-0 tbl-server-info">
                    <thead class="bg-white text-uppercase">
                        <tr class="ligth ligth-data">
                            <th>
                                <div class="checkbox d-inline-block">
                                    <input type="checkbox" class="checkbox-input" id="checkbox1">
                                    <label for="checkbox1" class="mb-0"></label>
                                </div>
                            </th>
                            <th>Supplier Name</th>
                            <th>Balance</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>Total Credit</th>
                            <th>Last Transaction</th>
                            <th>Balance Sheet</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="ligth-body">
                        <tr>
                            <td>
                                <div class="checkbox d-inline-block">
                                    <input type="checkbox" class="checkbox-input" id="checkbox2">
                                    <label for="checkbox2" class="mb-0"></label>
                                </div>
                            </td>
                            <td>
                                Hasnat Saimun
                            </td>
                            <td>1200</td>
                            <td>01755048017</td>
                            <td>Cumilla</td>
                            <td>10000</td>
                            <td>10.10.2025</td>
                            <td><a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"
                                        href="#"><i class="ri-eye-line mr-0"></i></a></td>
                            <td>
                                <div class="d-flex align-items-center list-action">
                                    
                                    <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                        href="#"><i class="ri-pencil-line mr-0"></i></a>
                                    <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                        href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
    
</div>
<!-- Page end  -->
@endsection
