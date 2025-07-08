@extends('include') @section('backTitle') invoice @endsection @section('container')

  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f6f8;
      padding: 30px;
      color: #333;
    }
    .invoice-box {
      background-color: #fff;
      padding: 25px;
      border-radius: 12px;
      max-width: 800px;
      margin: auto;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    .header {
      border-bottom: 2px solid #4CAF50;
      padding-bottom: 10px;
      margin-bottom: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      
    }
    .header .store-info {
      font-size: 14px;
    }
    .header .invoice-title {
      font-size: 28px;
      color: #4CAF50;
      font-weight: bold;
    }
    .info-table, .product-table, .summary-table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }
    .info-table td {
      padding: 5px 10px;
    }
    .product-table th {
      background-color: #4CAF50;
      color: white;
      padding: 10px;
    }
    .product-table td {
      border: 1px solid #ddd;
      padding: 8px;
    }
    .summary-table td {
      padding: 8px 10px;
    }
    .text-right {
      text-align: right;
    }
    .total {
      font-weight: bold;
      background-color: #f2f2f2;
    }
    .footer {
      text-align: center;
      font-size: 14px;
      color: #888;
      margin-top: 30px;
    }
    .qr-code {
      margin-top: 20px;
      text-align: right;
    }
    .qr-code img {
      width: 100px;
    }
  </style>

  <div class="invoice-box">
    <div class="header">
      <div class="invoice-title">INVOICE</div>
      <div class="store-info">
        <strong>Computer Care</strong><br>
        Office Road, Burichong Bazar, Cumilla<br>
        Phone: 0123456789<br>
        Email: info@computercare.com
      </div>
    </div>

    <table class="info-table">
      <tr>
        <td><strong>Invoice #:</strong> {{ $invoice->invoice }}</td>
        <td class="text-right"><strong>Date:</strong> {{ \Carbon\Carbon::parse($invoice->date)->format('d-m-Y') }}</td>
      </tr>
      <tr>
        <td ><strong>Customer:</strong> {{ $customer->name }}</td>
        <td class="text-right"><strong>Phone:</strong> {{ $customer->mobile }}</td>
      </tr>
    </table>

    <table class="product-table">
      <thead>
        <tr>
          <th>#</th>
          <th>Item</th>
          <th>Qty</th>
          <th>Unit Price</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody class="text-right">
        @if($items)
        @php
        $sl = 1;
        @endphp
        @foreach($items as $item)
        <tr>
          <td>{{ $sl }}</td>
          <td>{{ $item->productName }}</td>
          <td>{{ $item->qty }}</td>
          <td>{{ $item->salePrice }}</td>
          <td>{{ number_format($item->totalSale ?? 0, 2, '.', ',') }}</td>
        </tr>
        @php
        $sl++;
        @endphp
        @endforeach
        @else
        <tr>
          <td colspan="5">No items found</td>
        </tr>
        @endif
      </tbody>
    </table>

    <table class="summary-table">
      <tr>
        <td class="text-right">Subtotal:</td>
        <td class="text-right">{{ number_format($invoice->totalSale ?? 0, 2, '.', ',') }} ৳</td>
      </tr>
      <tr>
        <td class="text-right">Discount:</td>
        <td class="text-right">{{ number_format($invoice->discountAmount ?? 0, 2, '.', ',') }} ৳</td>
      </tr>
      <tr class="total">
        <td class="text-right">Grand Total:</td>
        <td class="text-right">{{ number_format($invoice->grandTotal ?? 0, 2, '.', ',') }} ৳</td>
      </tr>
      <tr>
        <td class="text-right">Paid:</td>
        <td class="text-right">{{ number_format($invoice->paidAmount ?? 0, 2, '.', ',') }} ৳</td>
      </tr>
      <tr>
        <td class="text-right">Previous Due:</td>
        <td class="text-right">{{ number_format($invoice->prevDue ?? 0, 2, '.', ',') }} ৳</td>
      </tr>
      <tr>
        <td class="text-right">Current Due:</td>
        <td class="text-right">{{ number_format($invoice->curDue ?? 0, 2, '.', ',') }} ৳</td>
      </tr>
    </table>

    <div class="qr-code">
      <p><strong>Scan to Verify:</strong></p>
      <img src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&data=INV-2025-001" alt="QR Code">
    </div>

    <div class="footer">
      Thank you for shopping with GreenTech!<br>
      Powered by YourPOS Software
    </div>
  </div>
  
@endsection
