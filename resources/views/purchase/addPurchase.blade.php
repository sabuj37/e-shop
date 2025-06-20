@extends('include') @section('backTitle') purchase @endsection @section('container')
<form id="savePurchase" class="row">
    @csrf
    <div class="col-12">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Create New Purchase</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="date" class="form-label">Date *</label>
                                    <input type="date" class="form-control" id="date" name="date" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="supplierName" class="form-label">Supplier *</label>
                                    <select id="supplierName" onchange="actProductList()" class="form-control" required>
                                    <option value="">-</option>
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
                                    <label for="invoice" class="form-label">Invoice *</label>
                                    <input type="text" class="form-control" id="invoice" name="invoice" />
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="productName" class="form-label">Product *</label>
                                    <select id="productName" name="productName" onchange="productSelect()" class="form-control" required disabled>
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

                            <div class="col-md-2 mt-4 p-0">
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#newProduct"><i class="las la-plus mr-2"></i>New Product</button>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="reference" class="form-label">Reference *</label>
                                    <input type="text" class="form-control" id="reference" name="reference" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="mb-3 table-responsive product-table">
                    <table class="table mb-0 table-bordered rounded-0">
                        <thead class="bg-white text-uppercase">
                            <tr>
                                <th>Product Name</th>
                                <th>Serial</th>
                                <th>Purchase Qty</th>
                                <th>Current Stock</th>
                                <th>Buy Price</th>
                                <th>Sale Price(Ex. Vat)</th>
                                <th>Vat Include</th>
                                <th>Sale Price(Inc. Vat)</th>
                                <th>Profit %</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody id="productDetails">
                            <tr>
                                <td width="20%">
                                    <input type="text" class="form-control" name="selectProductName" value="" id="selectProductName" readonly />
                                </td>
                                <td width="8%">
                                    -
                                </td>
                                <td width="9%">
                                    <input type="number" class="form-control" id="qty" name="qty" readonly />
                                </td>
                                <td width="9%">
                                    <input type="number" class="form-control" id="currentStock" name="currentStock" readonly />
                                </td>
                                <td width="9%">
                                    <input type="number" class="form-control" id="buyingPrice" name="buyingPrice" readonly />
                                </td>
                                <td width="9%">
                                    <input type="number" class="form-control" id="salingPriceWithoutVat" name="salingPriceWithoutVat" readonly />
                                </td>
                                <td width="9%">
                                    <select name="vatStatus" id="vatStatus" class="form-control" readonly>
                                        <option value="">-</option>
                                    </select>
                                </td>
                                <td width="9%">
                                    <input type="number" class="form-control" id="salingPriceWithVat" name="salingPriceWithVat" readonly />
                                </td>
                                <td width="9%">
                                    <input type="number" class="form-control" id="profitMargin" name="profitMargin" readonly />
                                </td>
                                <td width="9%">
                                    <input type="number" class="form-control" id="totalPrice" name="totalPrice" readonly />
                                </td>
                            </tr>

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
                                        <th>Discount Type</th>
                                        <th>Discount Amount</th>
                                        <th>Discount Parcent</th>
                                        <th>Grand Total</th>
                                        <th>Paid Amount</th>
                                        <th>Due Amount</th>
                                        <th>Special Note</th>
                                    </tr>
                                </thead>
                                <tbody id="discountDetails">
                                    <tr>
                                        <td>
                                            <select name="discountStatus" id="discountStatus" onchange="discountType()" class="form-control" disabled>
                                                <option value="">-</option>
                                                <option value="1">Amount</option>
                                                <option value="2">Parcent</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" id="discountAmount" onkeyup="discountAmountChange()" name="discountAmount" readonly />
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" id="discountPercent" onkeyup="discountPercentChange()" name="discountPercent" readonly />
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" id="grandTotal" name="grandTotal" readonly />
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" id="paidAmount" name="paidAmount" value="0" onkeyup="dueCalculate()" readonly />
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" id="dueAmount" name="dueAmount" readonly />
                                        </td>
                                        <td>
                                            <textarea class="form-control" id="specialNote" name="specialNote" readonly></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="saveButton" class="d-none  mt-2">
                            <button class="btn btn-primary btn-sm" onclick="savePurchase()" type="button">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--  serial number model -->

    <div class="modal fade" id="serialModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="serialModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title fs-5">New Serial</h6>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="resetSerial">
                    <div class="p-0">
                        <label for="serialNumber" class="form-label">Serial Number</label>
                    </div>
                    <div id="serialNumberBox">
                        <div class="row">
                            <div class="col-10 mb-3">
                                <input type="" class="form-control" name="serialNumber[]" placeholder="Enter serial number" />
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-success btn-sm rounded-0" id="add-serial">Add Serial</button>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="resetSerial()" class="btn btn-warning" data-dismiss="modal">Clear</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>


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
                    <form action="#" method="POST" id="supplierForm">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name *</label>
                                    <input type="text" class="form-control" placeholder="Enter Name"  id="fullName" name="fullName"  required />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email *</label>
                                    <input type="email" id="userMail" class="form-control" placeholder="Enter Email" name="mail"    required />
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
                                    <label for="area" class="form-label">Area *</label>
                                
                                    <input type="text" class="form-control" placeholder="Enter The Area" id="area" name="area" required />
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary mr-2" id="add-supplier">Add Supplier</button>
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
                <h5 class="modal-title fs-5">Create Product</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div class="card-body">

                <div class="row">
                    <form action="#" method="POST" id="productForm">
                    @csrf
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Product Name *</label>
                                <input type="text" class="form-control" placeholder="Enter Name" id="productNameModal" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Brand Name *</label>
                                <label for="brandName" class="form-label"></label>
                                <select id="brandName" class="form-control" >
                                  
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
                                <label for="categoryName" class="form-label"></label>
                                <select id="categoryName" class="form-control" >
                                 
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
                                <label for="unit" class="form-label"></label>
                                <select id="unit" class="form-control" >
                                 
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
                                <label for="quantityName" class="form-label">Alert Quantity</label>
                                <input type="text" class="form-control" placeholder="Optional" id="quantityName"  />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="detailsName" class="form-label">Deatils</label>
                                <input type="text" class="form-control" id="detailsName" placeholder="Optional"  />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="barCodeNum" class="form-label">Barcode</label>
                                <input type="text" class="form-control" id="barCodeNum" placeholder="Optional"/>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary mt-4 mr-2" id="add-product"> Add Product</button>
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





@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
function savePurchase(e){
    let token = document.body.querySelector('input[name="_token"]');
    var formData = $('#savePurchase').serialize();
    $.ajax({
        type:'post',
        url:"{{ route('savePurchase') }}",
        data: formData,
        success:function(result)
        {
            console.log(result.purchaseHistory);
        }
    });
}

// other details part
function discountType(){
    let discountSts      = $("#discountStatus").val();
    if(discountSts == 1){
        console.log(discountSts)
        $('#discountAmount').removeAttr('readonly');
        $('#discountPercent').attr('readonly','readonly');
        $('#saveButton').removeClass('d-none');
    }else if(discountSts == 2){
        $('#discountAmount').attr('readonly','readonly');
        $('#discountPercent').removeAttr('readonly');
        $('#saveButton').removeClass('d-none');
    }else{
        console.log(discountSts)
        $('#discountAmount').attr('readonly','readonly');
        $('#discountPercent').attr('readonly','readonly');
        $('#saveButton').addClass('d-none');
    }
}

// discount details
function discountAmountChange(){
    $('#discountPercent').val('');
    let dstAmount   = parseInt($("#discountAmount").val());
    let paidAmt     = parseInt($("#paidAmount").val());
    // let parcent     = parseInt($("#discountPercent").val());
    let gTotal      = parseInt($("#totalPrice").val());
    console.log(paidAmt);

    if(dstAmount >0){
        let finalAmount = parseInt(gTotal-dstAmount);
        let dueAmt = parseInt(finalAmount);
        if(paidAmt>0){
            let dueAmt      = parseInt(finalAmount-paidAmt);
        }

        let dstPercent      = parseInt((100/gTotal)*dstAmount);
        $('#grandTotal').val(finalAmount);
        $('#dueAmount').val(dueAmt);
        $('#discountPercent').val(dstPercent);
    }else{
        $('#grandTotal').val(gTotal);
        $('#dueAmount').val(gTotal);
        $('#discountPercent').val('');
        $('#discountAmount').val('');
    }
}
// dicount parcent calculate
function discountPercentChange(){
    $('#discountAmount').val('');
    // let dstAmount   = parseInt($("#discountAmount").val());
    let paidAmt     = parseInt($("#paidAmount").val());
    let parcent     = parseInt($("#discountPercent").val());
    let gTotal      = parseInt($("#totalPrice").val());
    console.log(paidAmt);

    if(parcent >0){
        let dstAmount   = parseInt((gTotal*parcent)/100);
        let finalAmount = parseInt(gTotal-dstAmount);
        let dueAmt      = parseInt(finalAmount);
        if(paidAmt>0){
            let dueAmt      = parseInt(finalAmount-paidAmt);
        }
        $('#grandTotal').val(finalAmount);
        $('#dueAmount').val(dueAmt);
        $('#discountAmount').val(dstAmount);
    }else{
        $('#grandTotal').val(gTotal);
        $('#dueAmount').val(gTotal);
        $('#discountPercent').val('');
        $('#discountAmount').val('');
    }
}
// due calculate
function dueCalculate(){
    // $('#discountAmount').val('');
    let paidAmount          = parseInt($("#paidAmount").val());
    let gTotal          = parseInt($("#totalPrice").val());
    let dstAmount       = parseInt($("#discountAmount").val());
    let finalAmount     = parseInt(gTotal-dstAmount);  

    if(paidAmount >0){
        let totalAmount     = parseInt(finalAmount-paidAmount);
        $('#dueAmount').val(totalAmount);
    }else{
        $('#dueAmount').val(finalAmount);
        $('#paidAmount').val('');
    }
}


// total price calculation
function totalPriceCalculate(){
    let buyPrice    = parseInt($("#buyingPrice").val());
    let qty         = parseInt($("#qty").val());
    let total       = parseInt(buyPrice*qty);

    $("#totalPrice").val(total);
    $("#grandTotal").val(total);
    $("#dueAmount").val(total);
}

// price calculation
function priceCalculation(){
    let vatSts      = $("#vatStatus").val();
    if(vatSts == 1){
        console.log(vatSts);
        let vat             = 15;
        let salePrice       = parseInt($("#salingPriceWithoutVat").val());
        let buyPrice        = parseInt($("#buyingPrice").val());

        let totalVat        = parseInt((salePrice*15)/100);
        let newPrice        = parseInt(salePrice+totalVat);
        let profitValue     = parseInt((newPrice-buyPrice));
        let profitMargin    = parseInt((profitValue/buyPrice)*100);

        $("#salingPriceWithVat").val(newPrice);
        $("#profitMargin").val(profitMargin);
    }else{
        let salePrice       = parseInt($("#salingPriceWithoutVat").val());
        let buyPrice        = parseInt($("#buyingPrice").val());
        let profitValue     = parseInt((salePrice-buyPrice));
        let profitMargin    = parseInt((profitValue/buyPrice)*100);

        $("#salingPriceWithVat").val('');
        $("#profitMargin").val(profitMargin);
    }
}

// profit calculation

function profitCalculation(){
    let vatSts      = $("#vatStatus").val();
    if(vatSts == 1){
        let vat             = 15;
        let salePrice       = parseInt($("#salingPriceWithoutVat").val());
        let buyPrice        = parseInt($("#buyingPrice").val());
        let profit          = parseInt($("#profitMargin").val());

        let profitAmount    = parseInt((buyPrice/100)*profit);
        let priceValueWOVat = parseInt(buyPrice+profitAmount);

        let totalVat        = parseInt((priceValueWOVat*15)/100);
        let newPrice        = parseInt(priceValueWOVat+totalVat);

        $("#salingPriceWithVat").val(newPrice);
        $("#salingPriceWithoutVat").val(priceValueWOVat);
    }else{
        let salePrice       = parseInt($("#salingPriceWithoutVat").val());
        let buyPrice        = parseInt($("#buyingPrice").val());
        let profit          = parseInt($("#profitMargin").val());

        let profitAmount    = parseInt((buyPrice/100)*profit);
        let priceValueWOVat = parseInt(buyPrice+profitAmount);


        $("#salingPriceWithVat").val('');
        $("#salingPriceWithoutVat").val(priceValueWOVat);
    }
}

function productSelect(){
    var product = $("#productName").val();
    $.ajax({
        method: 'get',
        url: '{{ url('/') }}/product/details/'+product,

        // data: { productId: product },

        contentType: 'html',

        success:function(result) {
            console.log("message: ", result.message);
            var field = '<tr><td width="20%"><input type="text" class="form-control" name="selectProductName" value="'+result.productName+'" id="selectProductName" readonly></td><td width="8%"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#serialModal">Add</button></td><td width="9%"><input type="number" class="form-control" id="qty" name="qty"/></td><td width="9%"><input type="number" class="form-control" id="currentStock" name="currentStock" value="'+result.currentStock+'" readonly/></td><td width="9%"><input type="number" class="form-control" id="buyingPrice" name="buyingPrice" onkeyup="totalPriceCalculate()" /></td><td width="9%"><input type="number" class="form-control" id="salingPriceWithoutVat" name="salingPriceWithoutVat" onkeyup="priceCalculation()"/></td><td width="9%"><select name="vatStatus" id="vatStatus" onchange="priceCalculation()" class="form-control"><option value="">-</option><option value="1">Yes</option><option value="0">No</option></select></td><td width="9%"><input type="number" class="form-control" id="salingPriceWithVat" name="salingPriceWithVat" readonly/></td><td width="9%"><input type="number" class="form-control" id="profitMargin" onkeyup="profitCalculation()" name="profitMargin"/></td><td width="9%"><input type="number" class="form-control" id="totalPrice" name="totalPrice" readonly/></td></tr>';
            // document.getElementById("supplierForm").reset();
            $('#productDetails').html(field); 
            $('#discountStatus').removeAttr('disabled');
            $('#paidAmount').removeAttr('readonly');
            $('#specialNote').removeAttr('readonly');
            $('#discountStatus option:selected').prop("selected", false);
            $('#grandTotal').val('');
            $('#dueAmount').val('');
            $('#specialNote').val('');
            $('#paidAmount').val('');
            $('#discountAmount').val('');
            $('#discountPercent').val('');
        },
        error:function(){
            let field = '<tr><td width="20%"><input type="text" class="form-control" name="selectProductName" value="" id="selectProductName" readonly></td><td width="8%">-</td><td width="9%"><input type="number" class="form-control" id="qty" name="qty" readonly/></td><td width="9%"><input type="number" class="form-control" id="currentStock" name="currentStock" readonly/></td><td width="9%"><input type="number" class="form-control" id="buyingPrice" name="buyingPrice" readonly/></td><td width="9%"><input type="number" class="form-control" id="salingPriceWithoutVat" name="salingPriceWithoutVat" readonly/></td><td width="9%"><select name="vatStatus" id="vatStatus" class="form-control" readonly><option value="">-</option></select></td><td width="9%"><input type="number" class="form-control" id="salingPriceWithVat" name="salingPriceWithVat" readonly/></td><td width="9%"><input type="number" class="form-control" id="profitMargin" name="profitMargin" readonly/></td><td width="9%"><input type="number" class="form-control" id="totalPrice" name="totalPrice" readonly/></td></tr>';
            // disount field decleration
            let discountField = '<tr><td><select name="discountStatus" id="discountStatus" onchange="discountType()" class="form-control" disabled><option value="">-</option><option value="1">Amount</option><option value="2">Parcent</option></select></td><td><input type="number" class="form-control" id="discountAmount" onkeyup="discountAmount()" name="discountAmount" readonly/></td><td><input type="number" class="form-control" id="discountPercent" onkeyup="discountParcent()" name="discountPercent" readonly/></td><td><input type="number" class="form-control" id="grandTotal" name="grandTotal" readonly/></td><td><input type="number" class="form-control" id="paidAmount" name="paidAmount" value="0" onkeyup="dueCalculate()" readonly /></td><td><input type="number" class="form-control" id="dueAmount" name="dueAmount" readonly/></td><td><textarea class="form-control" id="specialNote" name="specialNote" readonly ></textarea></td></tr>';
            // document.getElementById("supplierForm").reset();
            $('#productDetails').html(field); 
            $('#discountDetails').html(discountField); 
        }

    });
    
    // $('#productDetails').html(data); 
}

$(document).on('click','#add-serial', function(){
    var i = 1;
    if(i<=10){
        var serialField = "'#serialField"+i+"'";
        var serial = '<div class="row" id="serialField'+i+'"><div class="col-10 mb-3"><input type="" class="form-control" name="serialNumber[]" placeholder="Enter serial number" /></div><div class="col-1 mt-1  p-0"><a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="delete serial number" onclick="remove('+serialField+')" data-original-title="Delete" href="#"><i class="ri-delete-bin-line mr-0"></i></a></div></div>';
        $('#serialNumberBox').append(serial);
    }else{
        alert('Max number of serial added');
    }
    i++;
});

function remove(e){
    $(e).remove();
};

function resetSerial(){
    var serial = '<div class="row" id="serialField0"><div class="col-10 mb-3"><input type="" class="form-control" name="serialNumber[]" placeholder="Enter serial number" /></div><div class="col-1 mt-1  p-0"></div></div>';
    $('#serialNumberBox').html(serial);
}

function actProductList(){
    var data = $('#supplierName').val();
    if(data == ""){ 
        // reset the product list
        var field = '<tr><td width="20%"><input type="text" class="form-control" name="selectProductName" value="" id="selectProductName" readonly></td><td width="8%">-</td><td width="9%"><input type="number" class="form-control" id="qty" name="qty"/></td><td width="9%"><input type="number" class="form-control" id="currentStock" name="currentStock" readonly/></td><td width="9%"><input type="number" class="form-control" id="buyingPrice" name="buyingPrice"/></td><td width="9%"><input type="number" class="form-control" id="salingPriceWithoutVat" name="salingPriceWithoutVat"/></td><td width="9%"><select name="vatStatus" id="vatStatus" class="form-control"><option value="">-</option><option value="1">Yes</option><option value="0">No</option></select></td><td width="9%"><input type="number" class="form-control" id="salingPriceWithVat" name="salingPriceWithVat" readonly/></td><td width="9%"><input type="number" class="form-control" id="profitMargin" name="profitMargin"/></td><td width="9%"><input type="number" class="form-control" id="totalPrice" name="totalPrice" readonly/></td></tr>';
        $('#productDetails').html(field); 
        // reset the product
        $('#productName option:selected').prop("selected", false);
        // disable the product
        $('#productName').attr('disabled','disabled');
        // disount field decleration
        let discountField = '<tr><td><select name="discountStatus" id="discountStatus" onchange="discountType()" class="form-control" disabled><option value="">-</option><option value="1">Amount</option><option value="2">Parcent</option></select></td><td><input type="number" class="form-control" id="discountAmount" onkeyup="discountAmount()" name="discountAmount" readonly/></td><td><input type="number" class="form-control" id="discountPercent" onkeyup="discountParcent()" name="discountPercent" readonly/></td><td><input type="number" class="form-control" id="grandTotal" name="grandTotal" readonly/></td><td><input type="number" class="form-control" id="paidAmount" name="paidAmount" value="0" onkeyup="dueCalculate()" readonly /></td><td><input type="number" class="form-control" id="dueAmount" name="dueAmount" readonly/></td><td><textarea class="form-control" id="specialNote" name="specialNote" readonly ></textarea></td></tr>';
        $('#discountDetails').html(discountField); 
    }else{
        $('#productName').removeAttr('disabled');
        // $('#discountStatus').removeAttr('disabled');
        // $('#paidAmount').removeAttr('readonly');
        // $('#specialNote').removeAttr('readonly');
    };
}

$(document).on('click','#add-supplier', function(){
    var name = $('#fullName').val();
    var mail = $('#userMail').val();
    var phone = $('#mobile').val();
    var country = $('#country').val();
    var state = $('#state').val();
    var city = $('#city').val();
    var area = $('#area').val();
    $.ajax({
        method: 'get',

        url: '{{ route('createSupplier') }}',

        data: { fullName: name, email: mail, phoneNumber: phone, country: country, state: state, city: city, area: area },

        contentType: 'html',

        success: function(result) {
            console.log("message: ", result.message);
            // console.log("data: ", result.data);
            $('#supplier').modal('hide');
            document.getElementById("supplierForm").reset();
            $('#supplierName').html(result.data); 
        },

    });
})

$(document).on('click','#add-product',function(){
    var fullName = $('#productNameModal').val();
    var brand = $('#brandName').val();
    var category = $('#categoryName').val();
    var unitName = $('#unit').val();
    var quantity = $('#quantityNmae').val();
    var details = $('#detailsName').val();
    var barCode = $('#barCodeNum').val();
    var currentStock = $('#currentStockNum').val();
    var purchasePrice =$('#purchasePriceAmount').val();
    var sellingPrice= $('#sellingPriceAmount').val();
    var wholesale =$('#wholesaleAmount').val();

    $.ajax({
        method: 'get',
        url: '{{route('createProduct')}}',

        data: {
            fullName        :fullName,
            brand           :brand,
            category        :category,
            unitName        :unitName,
            quantity        :quantity,
            details         :details,
            barCode          :barCode,
            currentStock     :currentStock,
            purchasePrice :purchasePrice,
            sellingPrice  :sellingPrice,
            wholesale     :wholesale,
        },

        contentType: 'html',

        success: function(result){
            // console.log("message: ",result.message);

            $('#newProduct').modal('hide');
            document.getElementById("productForm").reset();
            $('#productName').html(result.data);    
        },
    });
})


</script>
