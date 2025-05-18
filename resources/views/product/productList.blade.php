@extends('include') @section('backTitle') Product List @endsection @section('container')

 <div class="card">
            <div class="card-body">
               
                <div class="rounded mb-3 table-responsive product-table">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <h4>Product List</h4>

                        </div>
                    </div>
                    <table class="data-tables table mb-0 table-bordered">
                        <thead class="bg-white text-uppercase">
                            <tr>
                                <th>
                                    <div class="checkbox d-inline-block">
                                        <input type="checkbox" class="checkbox-input" id="checkbox1" />
                                        <label for="checkbox1" class="mb-0"></label>
                                    </div>
                                </th>
                                <th>Name</th>
                                <th>Unit</th>
                                <th>Barcode</th>
                                <th>Category Name</th>
                                <th>Brand</th>
                                <th>Total stock</th>
                                <th>Last Purchase</th>
                                <th>Last MRP</th>
                                <th>Last DP/RP</th>
                                <th>Highest Purchase</th>
                                <th>Highest MRP</th>
                                <th>Last DP</th>
                                <th>Action</th>
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
                                <td>Sabuj</td>
                                <td>Psc</td>
                                <td>646556</td>
                                <td>Best</td>
                                <td>emotional</td>
                                <td>1231</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td><div class="d-flex align-items-center list-action">
                                    
                                    <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                        href="#"><i class="ri-pencil-line mr-0"></i></a>
                                    <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                        href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                </div></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
            </div>
        </div>
@endsection