@extends('include') @section('backTitle')new products @endsection @section('container')
<div class="row">
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Select Customer *</label>
                            <label for="inputState" class="form-label"></label>
                            <select id="inputState" class="form-control">
                                <option selected>Customer</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-1 mt-3 p-0 ">
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#customer"><i class="las la-plus mr-2"></i>customer</button>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" class="form-control" placeholder="" required />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Reference *</label>
                            <input type="text" class="form-control" placeholder="Enter Name" required />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-1 mt-3 p-0 ">
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#customer">Profit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- start_model -->
 <div class="modal fade" id="customer" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="customer" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title fs-5" id="customer">Creat Customer</h6>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <label for="formGroupExampleInput" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Category name" />
                                    </div>

                                    <div class="col-4">
                                        <label for="mobile" class="form-label">Mobile</label>
                                        <input type="text" class="form-control" id="mobile" placeholder="Enter Category name" />
                                    </div>

                                    <div class="col-4">
                                        <label for="formGroupExampleInput" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Category name" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8 mt-2">
                                        <label for="addres" class="form-label">Addrass</label>
                                        <input type="Address" class="form-control" id="Address" placeholder="Give Address" />
                                    </div>

                                    <div class="col-4 mt-2">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter your Email" />
                                    </div>
                                </div>
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
    </div>
</div>

<!-- end_model -->
@endsection
