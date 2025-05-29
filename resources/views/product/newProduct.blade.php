@extends('include') @section('backTitle')new products @endsection @section('container')
<div class="row">
    <div class="col-12">
        @if(session()->has('success'))
        <div class="alert alert-success w-100">
            {{ session()->get('success') }}
        </div>
        @endif @if(session()->has('error'))
        <div class="alert alert-danger w-100">
            {{ session()->get('error') }}
        </div>
        @endif
    </div>
    @php if(isset($profile)): $name = $profile->name; $brand = $profile->brand; $category = $profile->category; $unitName = $profile->unitName; $quantity = $profile->quantity; $details = $profile->details; $barCode = $profile->barCode;
    $currentStock = $profile->currentStock; $purchasePrice = $profile->purchasePrice; $sellingPrice = $profile->sellingPrice; $wholesale = $profile->wholesale; $profileId = $profile->id; else: $name = ''; $brand = ''; $category = '';
    $unitName = ''; $quantity = ''; $details = ''; $barCode = ''; $currentStock = ''; $purchasePrice = ''; $sellingPrice = ''; $wholesale = ''; $profileId = ''; endif; @endphp
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">@if(isset($profile)) Update @else Creat @endif Product</h4>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('saveProduct')}}" method="POST">
                    @csrf
                    <div class="row align-items-center">
                        <input type="hidden" name="profileId" value="{{ $profileId }}" />
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Prodct Name *</label>
                                <input type="text" class="form-control" placeholder="Enter Name" id="name" name="name" value="{{ $name }}" required />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Brand Name *</label>
                                <label for="brand" class="form-label"></label>
                                <select id="brand" class="form-control" name="brand">
                                  <!-- update from single data  show proccess -->
                                  @php
                                  $updateBrand = \App\Models\Brand::find($brand);
                                  @endphp
                                  @if(!empty($updateBrand))
                                  <option value="{{$updateBrand->id}}">{{$updateBrand->name}}</option>
                                  @endif
                                  <!--  form option show proccessing -->
                                  @if(!empty($brandList) && count($brandList)>0)
                                  @foreach($brandList as $brandData)
                                    <option value="{{$brandData->id}}">{{$brandData->name}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1 mt-4 p-0">
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#brandCreate">Brand</button>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Product Category</label>
                                <label for="category" class="form-label"></label>
                                <select id="category" class="form-control" name="category" >
                                    <!-- update from single data  show proccess -->
                                  @php
                                  $updateCategory = \App\Models\Category::find($category);
                                  @endphp
                                  @if(!empty($updateCategory))
                                  <option value="{{$updateCategory->id}}">{{$updateCategory->name}}</option>
                                  @endif
                                  <!--  form option show proccessing -->
                                  @if(!empty($categoryList) && count($categoryList)>0)
                                  @foreach($categoryList as $categoryData)
                                    <option value="{{$categoryData->id}}">{{$categoryData->name}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1 mt-4 p-0">
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Category">Category</button>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Product Unit</label>
                                <label for="unitName" class="form-label"></label>
                                <select id="unitName" class="form-control" name="unitName" ">
                                    <!-- update from single data  show proccess -->
                                  @php
                                  $updateProductUnit = \App\Models\ProductUnit::find($unitName);
                                  @endphp
                                  @if(!empty($updateProductUnit))
                                  <option value="{{$updateProductUnit->id}}">{{$updateProductUnit->name}}</option>
                                  @endif
                                  <!--  form option show proccessing -->
                                  @if(!empty($productUnitList) && count($productUnitList)>0)
                                  @foreach($productUnitList as $productUnitData)
                                    <option value="{{$productUnitData->id}}">{{$productUnitData->name}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 mt-4 p-0">
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#unit">Product unit</button>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="quantity" class="form-label">Alert Quantity</label>
                                <input type="text" class="form-control" placeholder="Optional" id="quantity" name="quantity" value="{{ $quantity }}" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="details" class="form-label">Deatils</label>
                                <input type="text" class="form-control" id="details" placeholder="Optional" name="details" value="{{ $details }}" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="barCode" class="form-label">Barcode</label>
                                <input type="text" class="form-control" id="barCode" placeholder="Optional" name="barCode" value="{{ $barCode }}" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label>Current Stock *</label>
                                <input type="text" class="form-control" placeholder="current stock" id="currentStock" name="currentStock" value="{{ $currentStock }}" required />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>Purchase Price *</label>
                                <input type="number" class="form-control" placeholder="purchase amount" id="purchasePrice" name="purchasePrice" value="{{ $purchasePrice }}" required />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>Selling Price *</label>
                                <input type="number" class="form-control" placeholder="selling amount" id="sellingPrice" name="sellingPrice" value="{{ $sellingPrice }}" required />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>Wholesale *</label>
                                <input type="number" class="form-control" placeholder="wholesale amount" id="wholesale" name="wholesale" value="{{ $wholesale }}" required />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4 mr-2">@if(isset($profile)) Update @else Add @endif Product</button>
                    <button type="reset" class="btn btn-danger mt-4 mr-2">Reset</button>
                    @if(isset($profile))
                    <a href="{{route('addProduct')}}" class="btn btn-light mt-4 mr-2">
                        Back</a>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
@if(!isset($profile))
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="">Product List</h4>
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive rounded mb-3">
                <table class="data-tables table mb-0 tbl-server-info">
                    <thead class="bg-white text-uppercase">
                        <tr class="table">
                            <th scope="col">Product Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Unit</th>
                            <th scope="col">Creat-date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($listItem) && $listItem->count()>0 ) @foreach($listItem as $productList)
                        @php                         
                          $categorySingleData  = \App\Models\Category::find($productList->category);           
                          $productUnitSingleData  = \App\Models\ProductUnit::find($productList->unitName);
                          $brandSingleData  = \App\Models\Brand::find($productList->brand);
                        @endphp
                        <tr>
                            <td>{{$productList->name}}</td>
                            @if(!empty($categorySingleData))
                                  <td>{{$categorySingleData->name}}</td>
                            @else
                                  <td>-</td>
                            @endif
                            @if(!empty($brandSingleData))
                                  <td>{{$brandSingleData->name}}</td>
                            @else
                                  <td>-</td>
                            @endif
                            @if(!empty($productUnitSingleData))
                                  <td>{{$productUnitSingleData->name}}</td>
                            @else
                                  <td>-</td>
                            @endif
                            <td>{{$productList->created_at->format('d-m-Y')}}</td>
                            <td>
                                <div class="d-flex align-items-center list-action">
                                    <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" href="#"><i class="ri-eye-line mr-0"></i></a>

                                    <a href="{{route('editProduct',['id'=>$productList->id])}}" class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                        <i class="ri-pencil-line mr-0"></i>
                                    </a>

                                    <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="{{route('delProduct',['id'=>$productList->id])}}">
                                        <i class="ri-delete-bin-line mr-0"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach 
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endif

<!-- Page end  -->

<!-- brand modal -->
<!-- Modal -->
<div class="modal fade" id="brandCreate" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="brandCreate" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title fs-5" id="brandCreate">Creat Brand</h6>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('saveBrand')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Brand Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter brand name" />
                    </div>
                  
                <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancle</button>
            </div>
        </div>
    </div>
</div>

<!-- category modal -->
<div class="modal fade" id="Category" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="Category" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title fs-5" id="Category">Creat Category</h6>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('saveCategory')}}" method="POST">
                    @csrf
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Category</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="Enter Category name" />
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancle</button>
            </div>
        </div>
    </div>
</div>

<!-- product unit -->

<div class="modal fade" id="unit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="unit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title fs-5" id="unit">Preoduct Unit</h6>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('saveProductUnit')}}" method="POST">
                    @csrf
                <div class="mb-3">
                    <label for="unit" class="form-label">Product Unit</label>
                    <input type="text" class="form-control" id="unit" name="name" placeholder="Enter Product Unit name" />
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancle</button>
            </div>
        </div>
    </div>
</div>

@endsection
