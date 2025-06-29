@extends('include') @section('backTitle')Add Service @endsection @section('container')

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-12 mb-3">
                <h4>Provide Service</h4>
            </div>
        </div>
        <form action="" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="customerName" class="form-label">Customer Name</label>
                        <input type="text" class="form-control" placeholder="Enter the customer name" id="customerName" name="customerName" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="note" class="form-label">Note</label>
                        <input type="number" class="form-control" placeholder="" id="note" name="note" required />
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Select A Service </label>
                        <select id="service" class="form-control" name="service">
                            <option value=""></option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 table-responsive product-table">
                        <table class="table mb-0 table-bordered rounded-0">
                            <thead class="bg-white text-uppercase">
                                <tr>
                                    <th>Service Type</th>
                                    <th>Service Amount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="number" class="form-control" id="discountAmount" name="discountAmount" readonly />
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="discountPercent" name="discountPercent" readonly />
                                    </td>
                                    <td>
                                        <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="saveButton" class="d-none mt-2">
                        <button class="btn btn-primary btn-sm" type="submit">Save</button>
                    </div>
                </div>
            </div>

            <a href="page-add-product.html" class="btn btn-primary add-list">Create Service</a>
        </form>
    </div>
</div>

@endsection
