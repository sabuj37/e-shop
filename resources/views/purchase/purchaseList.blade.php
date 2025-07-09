@extends('include') @section('backTitle') purchase list @endsection @section('container')
<div class="row">
    
    <div class="col-md-12 col-sm-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="col-12 p-0 mt-0 mb-4">
                    <h4>Purchase List</h4>
                </div>
                <div class="rounded mb-2 table-responsive product-table">
                    <table class="data-tables table mb-0 table-bordered ">
                        <thead class="bg-white text-uppercase">
                            <tr>
                                <th>
                                    <div class="checkbox d-inline-block">
                                        <input type="checkbox" class="checkbox-input" id="checkbox1" />
                                        <label for="checkbox1" class="mb-0"></label>
                                    </div>
                                </th>
                                <th>Reference</th>
                                <th>Name</th>
                                <th>Grand Total</th>
                                <th>Paid Amount</th>
                                <th>Due</th>
                                <th>Created By</th>
                                <th>Supplier</th>
                                <th>Delete</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($purchaseList) && $purchaseList->count()>0)
                            @forelse($purchaseList as $purchase)
                            @php
                                $customer = \App\Models\Customer::find($sl->customerId);
                                if($customer):
                                    $customerName = $customer->name;
                                else:
                                    $customerName = '-';
                                endif;
                            @endphp
                            <tr>
                                <td>
                                    <div class="checkbox d-inline-block">
                                        <input type="checkbox" class="checkbox-input" id="saleBox{{ $sl->id }}" />
                                        <label for="saleBox{{ $sl->id }}" class="mb-0"></label>
                                    </div>
                                </td>
                                <td>{{ $sl->invoice }}</td>
                                <td>{{ $customerName }}</td>
                                <td>{{ $sl->grandTotal }}</td>
                                <td>{{ $sl->paidAmount }}</td>
                                <td>{{ $sl->curDue }}</td>
                                <td>-</td>
                                <td>{{ $sl->date }}</td>
                                <td>
                                    <a href="{{ route('invoiceGenerate',['id'=>$sl->id]) }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-print"></i></a>
                                </td>
                                <td>-</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8">No data found</td>
                            </tr>
                            @endforelse
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection