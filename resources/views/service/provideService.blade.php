@extends('include') @section('backTitle')provide service @endsection @section('container')
<div class="col-12">
    @include('sweetalert::alert')
</div>
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
                        <select id="customerName" class="form-control" required>
                                    <option value="">Select Customer Name</option>
                                    <!--  form option show proccessing -->
                                  @if(!empty($customerList) && count($customerList)>0)
                                  @foreach($customerList as $customerData)
                                    <option value="{{$customerData->id}}">{{$customerData->name}}</option>
                                    @endforeach
                                    @endif
                                </select>
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
                        <select id="service" class="form-control" name="service" onchange="serviceSelect()" >
                              <option value="">Select Service</option>
                                    <!--  form option show proccessing -->
                                  @if(!empty($serviceList) && count($serviceList)>0)
                                  @foreach($serviceList as $serviceData)
                                    <option value="{{$serviceData->id}}">{{$serviceData->serviceName}}</option>
                                    @endforeach
                                    @endif
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
                                        <input type="text" class="form-control" name="serviceName" value="" id="serviceName" readonly />
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" value="" id="rent" name="rent" readonly />
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



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>

function serviceSelect(){
    var data = $('#service') .val();

    $.ajax({
        method: 'get',
        url: '{{url('/')}}/service/details/'+data,

        contentType: 'html',

        success:function(result){
            console.log("message:",result.message);
            var field ='<tr><td><input type="text" class="form-control" name="serviceName" value="'+result.servicename'" id="serviceName" readonly/></td><td><input type="number" class="form-control" value="'+result.rent'" id="rent" name="rent" readonly/></td><td><a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line mr-0"></i></a></td></tr>';
            
            $('#serviceName').removeAttr('readonly');
            $('#rent').removeAttr('readonly');
        },
        error:function(){
            var field ='<tr><td><input type="text" class="form-control" name="serviceName" value="" id="serviceName" readonly/></td><td><input type="number" class="form-control" value="" id="rent" name="rent" readonly/></td><td><a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line mr-0"></i></a></td></tr>';
        }
    });
}

</script>
@endsection
