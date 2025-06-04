@extends('include') @section('backTitle')new products @endsection @section('container')
<div class="row">
    <div class="col-8">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Select Customer *</label>
                                    <label for="inputState" class="form-label"></label>
                                <select id="customerName" class="form-control">
                                    <!--  form option show proccessing -->
                                  @if(!empty($customerList) && count($customerList)>0)
                                  @foreach($customerList as $customerData)
                                    <option value="{{$customerData->id}}">{{$customerData->name}}</option>
                                    @endforeach
                                    @endif
                                </select>
                                </div>
                            </div>
                            <div class="col-md-2 mt-3 p-0">
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#customerModal"><i class="las la-plus mr-2"></i>customer</button>
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
                            <div class="col-6">
                                <label>Select Product*</label>
                                <select id="productName"  class="form-control">
                                   <!--  form option show proccessing -->
                                  @if(!empty($productList) && count($productList)>0)
                                  @foreach($productList as $productData)
                                    <option value="{{$productData->id}}">{{$productData->name}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-md-3 mt-4   ">
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#">Reset Product</button>
                            </div>
                            <div class="col-8">
                                <label for="note">Note</label>
                                <textarea class="form-control" aria-label="With textarea"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="card ">
            <div class="card-body table-responsive">
                <table class=" data-tables table mb-0 table-bordered ">
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
                            <td>
                                <input type="text" class="form-control" placeholder="Enter Name" required />
                            </td>
                            <td>
                                <select id="inputState" class="form-control">
                                    <option selected>Customer</option>
                                    <option>...</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control" placeholder="Enter Name" required />
                            </td>
                            <td>
                                <input type="text" class="form-control" placeholder="Enter Name" required />
                            </td>
                            <td>
                                <input type="text" class="form-control" placeholder="Enter Name" required />
                            </td>
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
    </div>
    <div class="col-4">
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
        </div>
    </div>
</div>

<!-- start_model -->
 <div class="modal fade" id="customerModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="customerModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title fs-5" id="customerModal">Creat Customer</h6>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST" id="customerForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name *</label>
                                        <input type="text" class="form-control" placeholder="Enter Name" id="fullName" name="fullName" required />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email *</label>
                                        <input type="email" class="form-control" placeholder="Enter Email" id="mail" name="mail" required />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Phone Number *</label>
                                        <input type="text" class="form-control" placeholder="Enter Phone Number" id="mobile" name="mobile" required />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="inputState" class="form-label">Country *</label>

                                        <input type="text" class="form-control" placeholder="Enter The Country" id="country" name="country" required />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="inputState" class="form-label">State *</label>

                                        <input type="text" class="form-control" placeholder="Enter The State" id="state" name="state" required />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="inputState" class="form-label">City *</label>

                                        <input type="text" class="form-control" placeholder="Enter The City" id="city" name="city" required />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="inputState" class="form-label">Area *</label>

                                        <input type="text" class="form-control" placeholder="Enter The area" id="area" name="area" required />
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary mr-2 "  id="add-customer">Add Customer</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancle</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end_model -->
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).on('click','#add-customer', function(){
    
    var name = $('#fullName').val();
    var gmail = $('#mail').val();
    var phone = $('#mobile').val();
    var country = $('#country').val();
    var city = $('#city').val();
    var state = $('#state').val();
    var area = $('#area').val();
    $.ajax({
        method: 'get',

        url: '{{ route('createCustomer') }}',

        data: { fullName:       name,
                mail:           gmail,  
                mobile:         phone, 
                country:        country, 
                city:           city, 
                state:          state ,
                area:           area ,
              },

        contentType: 'html',

        success: function(result) {
            console.log("message: ", result.message);
            // console.log("data: ", result.data);
            $('#customerModal').modal('hide');
            document.getElementById("customerForm").reset();
            $('#customerName').html(result.data); 
        },

    });
})
</script>
