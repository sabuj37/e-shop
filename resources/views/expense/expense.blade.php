@extends('include') @section('backTitle')Expense Type @endsection @section('container')
<div class="row">
    <div class="col-12">
        <h3>Creat Expense</h3>
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Expense type*</label>
                                    <label for="inputState" class="form-label"></label>
                                    <select id="inputState" class="form-control">
                                        <option selected>expense type</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 mt-3 p-0">
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#customer"><i class="las la-plus mr-2"></i>Expense type</button>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="amount">Amount*</label>
                                    <input type="text" class="form-control" id="amount" placeholder="Enter Name" required />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" class="form-control" placeholder="" required />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-10">
                                <label for="note">Note</label>
                                <textarea class="form-control" id="note" aria-label="With textarea"></textarea>
                            </div>
                            <div class="col-md-2 mt-5 p-0">
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#customer"><i class="las la-plus mr-2"></i>add expnse</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 p-2">
                        <div class="form-group">
                            <lavel for="startDate">Start Date</lavel>
                            <input type="date" class="form-control" id="startDate" placeholder="Start Date" required />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-3 p-2">
                        <div class="form-group">
                            <lavel for="startDate">Start Date</lavel>
                            <input type="date" class="form-control" id="startDate" placeholder="Start Date" required />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-1 padding-left mt-4 pt-2">
                        <label for="discountAmount" class="col-form-label">Period:</label>
                    </div>
                    <div class="col-md-3 p-0 mt-2">
                                <div class="form-group">
                                    <label for="inputState" class="form-label"></label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Select Period</option>
                                        <option>...</option>
                                    </select>
                                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<table class="table table-success text-start table-bordered">
    <thead class="">
        <tr class="">
            <th scope="">Expense</th>
            <th scope="">Amount</th>
            <th scope="">Note</th>
            <th scope="">Date</th>
            <th scope="">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>

</div>



@endsection
