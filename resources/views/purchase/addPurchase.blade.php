@extends('include') @section('backTitle') purchase @endsection @section('container')
<div class="row">
    <div class="col-md-8">
    
<div class="row">
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Create New Purchase</h4>
                </div>
            </div>
            <div class="card-body">
                <form action="https://templates.iqonic.design/posdash/html/backend/page-list-customers.html" data-toggle="validator">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="supplierName" class="form-label">Supplier *</label>
                                <select id="supplierName" class="form-control">
                                  <!--  form option show proccessing -->
                                  @if(!empty($supplierList) && count($supplierList)>0)
                                  @foreach($supplierList as $supplierData)
                                    <option value="{{$supplierData->id}}">{{$supplierData->name}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 mt-4 p-0">
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#supplier"><i class="las la-plus mr-2"></i>New Supplier</button>
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
                                   <!--  form option show proccessing -->
                                  @if(!empty($productList) && count($productList)>0)
                                  @foreach($productList as $productData)
                                    <option value="{{$productData->id}}">{{$productData->name}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="col-md-2 mt-4 p-0">
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#newProduct"><i class="las la-plus mr-2"></i>New Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="https://templates.iqonic.design/posdash/html/backend/page-list-customers.html" data-toggle="validator">
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
                                    <button type="reset" class="btn btn-success btn-sm" data-toggle="modal" data-target="#serialModal">Add</button>
                                </td>
                                <td>
                                <input type="text" class="form-control" id="reference" name="reference" /></td>
                                <td>
                                <input type="text" class="form-control" id="reference" name="reference" /></td>
                                <td>
                                <input type="text" class="form-control" id="reference" name="reference" /></td>
                                <td>
                                <input type="text" class="form-control" id="reference" name="reference" /></td>
                                <td>00</td>
                                <td>
                                <input type="text" class="form-control" id="reference" name="reference" /></td>
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
            </form>
            </div>
        </div>
    </div>
</div>
    </div>
    <div class="col-md-4">
        <div class="row">
<div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="header-title">
                        <h6 class="card-title">Create Purchase</h6>
                    </div>
                    <form action="">
                        <div class="row mb-2 align-items-center">
                            <div class="col-4">
                                <label for="totalAmount" class="col-form-label">Total:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="totalAmount" name="totalAmount">
                            </div>
                        </div>
                        <div class="row mb-2  text-center">
                            <div class="col-6">
                                <input class="form-check-input" type="radio" name="gridRadios" id="discountRadio"  checked>
                                <label class="form-check-label" for="discountRadio" name="discountRadio">
                                Discount
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <input class="form-check-input" type="radio" name="gridRadios" id="discountPerRadio" checked>
                                <label class="form-check-label" for="discountPerRadio" naame="discountPerRadio">
                                Discount %
                                </label>
                            </div>
                        </div>
                        <div class="row mb-2 align-items-center">
                            <div class="col-6">
                                <label for="discountAmount" class="col-form-label">Discount Amount:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="discountAmount" name="discountAmount">
                            </div>
                        </div>
                        <div class="row mb-2 align-items-center">
                            <div class="col-6">
                                <label for="discountPer" class="col-form-label">Discount %:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="discountPer" name="discountPer">
                            </div>
                        </div>
                        <div class="row mb-2 align-items-center">
                            <div class="col-6">
                                <label for="grandTotal" class="col-form-label">Grand Total:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="grandTotal" name="grandTotal">
                            </div>
                        </div>
                        <div class="row mb-2 align-items-center">
                            <div class="col-6">
                                <label for="paidAmount" class="col-form-label">Paid Amount:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="paidAmount" name="paidAmount">
                            </div>
                        </div>
                        <div class="row mb-2 align-items-center">
                            <div class="col-6">
                                <label for="dueAmount" class="col-form-label">Due Amount:</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="dueAmount" name="dueAmount">
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
                    <div class="card-body">
                <div class="row">
                    <form action="{{route('saveSupplier')}}" method="POST" >
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name *</label>
                                    <input type="text" class="form-control" placeholder="Enter Name"  id="fullName" name="fullName"   required />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email *</label>
                                    <input type="email" class="form-control" placeholder="Enter Email" id="mail" name="mail"    required />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Phone Number *</label>
                                    <input type="text" class="form-control" placeholder="Enter Phone Number" id="mobile" name="mobile"   required />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputState" class="form-label">Country *</label>
                                    
                                    <input type="text" class="form-control" placeholder="Enter The Country" id="country" name="country"   required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputState" class="form-label">State *</label>
                                    
                                    <input type="text" class="form-control" placeholder="Enter The State" id="state" name="state"   required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputState" class="form-label">City *</label>
                                
                                    <input type="text" class="form-control" placeholder="Enter The City" id="city" name="city"   required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputState" class="form-label">Aria *</label>
                                
                                    <input type="text" class="form-control" placeholder="Enter The Aria" id="aria" name="aria"   required />
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Add Supplier</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </form>
                </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancle</button>
            </div>
        </div>
    </div>
</div>
<!-- new product Modal -->
<div class="modal fade" id="newProduct" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="newProduct" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="newProduct">Create Supplier</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div class="card-body">

                <div class="row">
                    <form action="{{route('saveProduct')}}" method="POST">
                    @csrf
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Prodct Name *</label>
                                <input type="text" class="form-control" placeholder="Enter Name" id="name" name="name"  required />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Brand Name *</label>
                                <label for="brand" class="form-label"></label>
                                <select id="brand" class="form-control" name="brand">
                                  
                                  <!--  form option show proccessing -->
                                  @if(!empty($brandList) && count($brandList)>0)
                                  @foreach($brandList as $brandData)
                                    <option value="{{$brandData->id}}">{{$brandData->name}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Product Category</label>
                                <label for="category" class="form-label"></label>
                                <select id="category" class="form-control" name="category" >
                                 
                                  <!--  form option show proccessing -->
                                  @if(!empty($categoryList) && count($categoryList)>0)
                                  @foreach($categoryList as $categoryData)
                                    <option value="{{$categoryData->id}}">{{$categoryData->name}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Product Unit</label>
                                <label for="unitName" class="form-label"></label>
                                <select id="unitName" class="form-control" name="unitName" >
                                 
                                  <!--  form option show proccessing -->
                                  @if(!empty($productUnitList) && count($productUnitList)>0)
                                  @foreach($productUnitList as $productUnitData)
                                    <option value="{{$productUnitData->id}}">{{$productUnitData->name}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="quantity" class="form-label">Alert Quantity</label>
                                <input type="text" class="form-control" placeholder="Optional" id="quantity" name="quantity"  />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="details" class="form-label">Deatils</label>
                                <input type="text" class="form-control" id="details" placeholder="Optional" name="details" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="barCode" class="form-label">Barcode</label>
                                <input type="text" class="form-control" id="barCode" placeholder="Optional" name="barCode"  />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label>Current Stock *</label>
                                <input type="text" class="form-control" placeholder="current stock" id="currentStock" name="currentStock"  required />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>Purchase Price *</label>
                                <input type="number" class="form-control" placeholder="purchase amount" id="purchasePrice" name="purchasePrice"  required />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>Selling Price *</label>
                                <input type="number" class="form-control" placeholder="selling amount" id="sellingPrice" name="sellingPrice"  required />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>Wholesale *</label>
                                <input type="number" class="form-control" placeholder="wholesale amount" id="wholesale" name="wholesale" required />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4 mr-2"> Add Product</button>
                    <button type="reset" class="btn btn-danger mt-4 mr-2">Reset</button>
                </form>
                </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancle</button>
        </div>
    </div>
</div>

<!-- seral madal -->
 <div class="modal fade" id="serialModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="serialModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="serialModal">Manage Serial Numbers</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="serialNmuber" name="serialNmuber" placeholder="" />
                    </div>
                    <div class="col-4 p-0 ">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Removed</button>
                    </div>
                    <div class="mt-2">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Add Serial Number</button>
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
