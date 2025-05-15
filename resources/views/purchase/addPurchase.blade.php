@extends('include') @section('backTitle') purchase @endsection @section('container')
<div class="row">
    <div class="col-sm-9">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Create New Purchase</h4>
                </div>
            </div>
            <div class="card-body">
                <form action="https://templates.iqonic.design/posdash/html/backend/page-list-customers.html" data-toggle="validator">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="supplierName" class="form-label">Supplier *</label>
                                <select id="supplierName" class="form-control">
                                    <option selected>Supplier *</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 mt-5 p-0">
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#supplier">New Supplier</button>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="date" class="form-label">Date *</label>
                                <input type="date" class="form-control" id="date" name="date" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="reference" class="form-label">Reference *</label>
                                <input type="text" class="form-control" id="reference" name="reference" />
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="product" class="form-label">Product *</label>
                                <select id="product" name="product" class="form-control">
                                    <option selected>select product</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-2 mt-5 p-0">
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#newProduct">New Product</button>
                        </div>
                    </div>
                    <button type="save" class="btn btn-primary mr-2">Add Customer</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-5 col-md-3 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="header-title">
                    <h6 class="card-title">Create Purchase</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9 col-sm-7 col-lg-9">
        <div class="card">
            <div class="card-body">
                <div class="rounded mb-3 table-responsive product-table">
                    <table class="data-tables table mb-0 table-bordered">
                        <thead class="bg-white text-uppercase">
                            <tr>
                                <th>
                                    <div class="checkbox d-inline-block">
                                        <input type="checkbox" class="checkbox-input" id="checkbox1" />
                                        <label for="checkbox1" class="mb-0"></label>
                                    </div>
                                </th>
                                <th>Product</th>
                                <th>Serial</th>
                                <th>Warranty</th>
                                <th>QTY</th>
                                <th>Buying Prize</th>
                                <th>Profit Margin %</th>
                                <th>DP/RP</th>
                                <th>DP profit Margin %</th>
                                <th>Total</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox d-inline-block">
                                        <input type="checkbox" class="checkbox-input" id="checkbox2" />
                                        <label for="checkbox2" class="mb-0"></label>
                                    </div>
                                </td>
                                <td>
                                    Ac
                                </td>
                                <td>
                                    <button type="reset" class="btn btn-success btn-sm">Add</button>
                                </td>
                                <td>1 year</td>
                                <td>12</td>
                                <td>10000</td>
                                <td>10%</td>
                                <td>00</td>
                                <td>000</td>
                                <td>00</td>
                                <td>
                                    <div class="list-action">
                                        <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page end  -->

<!-- new supplier Modal -->
<div class="modal fade" id="supplier" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="supplier" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="supplier">Create Supplier</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="supplier name" />
                    </div>
                    <div class="col-md-4">
                        <label for="maobile" class="form-label">Mobile</label>
                        <input type="text" class="form-control" id="maobile" name="maobile" placeholder="phone number" />
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="contactType" class="form-label">Contact Type</label>
                            <select id="inputState" class="form-control">
                                <option selected>customer type</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="you address" />
                    </div>
                    <div class="col-md-4">
                        <label for="mail" class="form-label">Email</label>
                        <input type="mail" class="form-control" id="mail" name="mail" placeholder="optional" />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancle</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- new product Modal -->
<div class="modal fade" id="newProduct" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="newProduct" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="newProduct">Create Supplier</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="supplier name" />
                    </div>
                    <div class="col-md-4">
                        <label for="maobile" class="form-label">Mobile</label>
                        <input type="text" class="form-control" id="maobile" name="maobile" placeholder="phone number" />
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="contactType" class="form-label">Contact Type</label>
                            <select id="inputState" class="form-control">
                                <option selected>customer type</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="you address" />
                    </div>
                    <div class="col-md-4">
                        <label for="mail" class="form-label">Email</label>
                        <input type="mail" class="form-control" id="mail" name="mail" placeholder="optional" />
                    </div>
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
