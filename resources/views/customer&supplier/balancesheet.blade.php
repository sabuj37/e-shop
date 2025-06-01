@extends('include') @section('backTitle')Expense Type @endsection @section('container')
<div class="row">
    <div class="col-12">
        <h3>Creat Transection</h3>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="payment">Payment *</label>
                            <input type="text" id="payment" class="form-control" placeholder="0" required />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="Received">Received*</label>
                            <input type="text" id="Received" class="form-control" placeholder="0" required />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" class="form-control" placeholder="" required />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="note">Note</label>
                        <textarea class="form-control" id="note" placeholder="text" aria-label="With textarea"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class=" mx-3 mt-3">
                       <button type="submit" class="btn btn-success mr-2">Add Transection</button>
                    <button type="reset" class="btn btn-primary">Add Transection & Send SMS</button>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <h5 class="">Add Discount</h5>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="payment">Discount Received *</label>
                                    <input type="text" id="payment" class="form-control" placeholder="0" required />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="Received">Discount*</label>
                                    <input type="text" id="Received" class="form-control" placeholder="0" required />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" class="form-control" placeholder="" required />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="note">Note</label>
                                <textarea class="form-control" id="note" placeholder="text" aria-label="With textarea"></textarea>
                            </div>

                            <div class="col-md-4 mt-3 p-2">
                                <button type="submit" class="btn btn-success mr-2">Add Discount</button>
                            </div>
                        </div>
                    </div>
                   
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
