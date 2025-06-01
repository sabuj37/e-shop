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
                    <div class="col-md-2 mt-3 p-0">
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
                    <div class="col-md-1 mt-3 p-0">
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#customer">Profit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <table class="data-tables table mb-0 table-bordered">
            <thead class="bg-white text-uppercase">
                <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Purchase Date</th>
                    <th>Serial</th>
                    <th>Warranty</th>
                    <th>Qty</th>
                    <th>Sale Price</th>
                    <th>Total</th>
                    <th>Remove</th>
                    <th>MRP</th>
                    <th>Profit Margin %</th>
                    <th>DP</th>
                    <th>Purchase</th>
                    <th>Purchase Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="d-flex align-items-center list-action">
                            <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line mr-0"></i></a>
                            <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="row p-3">
    <div class="col-6">
        <label>Select Product*</label>
        <label for="inputState" class="form-label"></label>
        <select id="inputState" class="form-control">
            <option selected>Customer</option>
            <option>...</option>
        </select>

        <label for="note">Note</label>
        <textarea class="form-control" aria-label="With textarea"></textarea>
    </div>
    <div class="col-md-2 mt-4 p-2">
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#customer">Reset Product</button>
    </div>

    <div class="col-md-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="">
                            <div class="row mb-2 align-items-center"></div>
                            <div class="row mb-2 align-items-center">
                                <div class="col-6">
                                    <label for="discountAmount" class="col-form-label">Total:</label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="discountAmount" name="discountAmount" />
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <div class="col-6">
                                    <label for="discountPer" class="col-form-label">Discount %:</label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="discountPer" name="discountPer" />
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <div class="col-6">
                                    <label for="grandTotal" class="col-form-label">Grand Total:</label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="grandTotal" name="grandTotal" />
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <div class="col-6">
                                    <label for="paidAmount" class="col-form-label">Recevied Amount:</label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="paidAmount" name="paidAmount" />
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <div class="col-6">
                                    <label for="dueAmount" class="col-form-label">Due Amount:</label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="dueAmount" name="dueAmount" />
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <div class="col-12">
                                    <label for="note" class="col-form-label">Note:</label>
                                    <textarea class="form-control" aria-label="With textarea"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">@if(isset($profile)) Update @else Add @endif Supplier</button>
                        </form>
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
        </div>
    </div>
</div>
            @endsection
