@extends('include') @section('backTitle')new sale @endsection @section('container')
<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" class="form-control" placeholder="" required />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Select Customer *</label>
                                    <label for="customerName" class="form-label"></label>
                                <select id="customerName" class="form-control" onchange="actProductList()" required>
                                        <option value="">-</option>
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
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="invoice" class="form-label">Invoice *</label>
                                    <input type="text" class="form-control" id="invoice" name="invoice" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Reference *</label>
                                    <input type="text" class="form-control" placeholder="Enter Name" required />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                <label>Select Product*</label>
                                <select id="productName" name="productName" onchange="productSelect()" class="form-control" required disabled >
                                   <!--  form option show proccessing -->
                                            <option value="">Select</option>
                                  @if(!empty($productList) && count($productList)>0)
                                  @foreach($productList as $productData)
                                    <option value="{{$productData->id}}">{{$productData->name}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                            </div>
                            <div class="col-md-2  mt-3">
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#">Reset Product</button>
                            </div>
                            <div class="col-md-1 mt-3 p-0">
                                <button type="button" class="btn btn-success btn-sm w-100" data-toggle="modal" data-target="#customer">Profit</button>
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
            <div class="card-body  product-table">
                <div class="header-title">
                    <h6 class="card-title">Product Details</h6>
                </div>
                <div class="table-responsive">
                    <table class="table mb-0 table-bordered rounded-0">
                        <thead class="bg-white text-uppercase">
                            <tr>
                                <th>Remove</th>
                                <th>Product Name</th>
                                <th>Purchase Date</th>
                                <th>Qty</th>
                                <th>Sale Price</th>
                                <th>Total</th>
                                <th>Purchase</th>
                                <th>Purchase Total</th>
                                <th>Profit Margin</th>
                                <th>Profit Total</th>
                            </tr>
                        </thead>
                        <tbody id="productDetails">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="header-title">
                            <h6 class="card-title">Other Details</h6>
                        </div>
                        <div class="mb-3 table-responsive product-table">
                            <table class="table mb-0 table-bordered rounded-0">
                                <thead class="bg-white text-uppercase">
                                    <tr>
                                        <th>Total</th>
                                        <th>Discount Type</th>
                                        <th>Discount Amount</th>
                                        <th>Discount Parcent</th>
                                        <th>Grand Total</th>
                                        <th>Paid Amount</th>
                                        <th>Due Amount</th>
                                        <th>Special Note</th>
                                    </tr>
                                </thead>
                                <tbody id="otherDetails">
                                    <tr>
                                        <td>
                                            <input type="number" class="form-control" id="totalSalePrice" name="totalSalePrice"   />
                                        </td>
                                        <td>
                                            <select name="discountStatus" id="discountStatus"  class="form-control" >
                                                <option value="">-</option>
                                                <option value="1">Amount</option>
                                                <option value="2">Parcent</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" id="discountAmount"  name="discountAmount"  />
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" id="discountPercent"  name="discountPercent"  />
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" id="grandTotal" name="grandTotal"  />
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" id="paidAmount" name="paidAmount" value="0"  />
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" id="dueAmount" name="dueAmount"  />
                                        </td>
                                        <td>
                                            <textarea class="form-control" id="specialNote" name="specialNote" ></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                <div class=" d-md-flex  mt-2">
                    <button class="btn btn-primary btn-sm" type="submit">Save</button>
                </div>
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

//add customer----------

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

        data: 
        { 
            fullName: name,
            mail    : gmail,  
            mobile  : phone, 
            country : country, 
            city    : city, 
            state   : state ,
            area    : area ,
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

// actProductList

function actProductList(){
    var data = $('#customerName').val();
    
    if(data == ""){
        //reset the product list
        var productField = '';


        var otherField = '<tr><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>';
        $('#productDetails').html(productField);
        $('#otherDetails').html(otherField);

        $('#productName option:selected').prop("selected", false);
        //reset the product
        $('#productName').attr('disabled','disabled');

    }else{
        $('#productName').removeAttr('disabled');
    };

}


function remove(e){
    $(e).remove();
};

function productSelect(){
    var product = $("#productName").val();
    var i = 1;
    $.ajax({
        method: 'get',

        url: '{{ url('/') }}/product/details/'+product,

        contentType: 'html',

        success:function(result){
            var productField = "productField"+result.id;
            var field = '<tr id="productField'+result.id+'"><td><i onclick="remove('+productField+')" class="ri-delete-bin-line mr-0"></i></td><td>'+result.productName+'</td><td>-</td><td><input type="number" class="form-control" id="qty" name="qty"/></td><td><input type="number" class="form-control" id="salingPriceWithoutVat" name="salingPriceWithoutVat" onkeyup="priceCalculation()"/></td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>';
            $('#productDetails').append(field);
        },
        error: function(){
            $('#productDetails').html('');
        }
    });

}
</script>
