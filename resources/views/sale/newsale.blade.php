@extends('include') @section('backTitle')new products @endsection @section('container')
<div class="row">
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
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
                    <div class="col-md-1 mt-5 p-0">
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#brand">customer</button>
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
                         <div class="col-md-1 mt-5 p-0">
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#brand">Profit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
