@extends('include') @section('backTitle')Add Service @endsection @section('container')

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-12 mb-3">
                <h4>Create Service</h4>
            </div>
        </div>
        <form action="" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="serviceName" class="form-label">Service Name</label>
                        <input type="text" class="form-control" placeholder="Enter the service name" id="serviceName" name="serviceName" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="rate" class="form-label">Service Rate</label>
                        <input type="number" class="form-control" placeholder="Enter the amount" id="rate" name="rate" required />
                    </div>
                </div>
            </div>
            <a href="page-add-product.html" class="btn btn-primary add-list">Add Product</a>
        </form>
    </div>
</div>
<div class="row mt-4">
    <div class="col-lg-12">
        <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h4 class="">Service List</h4>
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
                                <input type="checkbox" class="checkbox-input" id="checkbox1" />
                                <label for="checkbox1" class="mb-0"></label>
                            </div>
                        </th>
                        <th>Service Name</th>
                        <th>Service Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="ligth-body text-center">
                    <tr>
                        <td>
                            <div class="checkbox d-inline-block">
                                <input type="checkbox" class="checkbox-input" id="checkbox2" />
                                <label for="checkbox2" class="mb-0"></label>
                            </div>
                        </td>
                        <td>demon</td>
                        <td>10.0</td>
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
</div>

@endsection
