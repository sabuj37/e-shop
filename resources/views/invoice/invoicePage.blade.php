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
        <strong>GreenTech Store</strong><br>
        123 Main Street, City<br>
        Phone: 0123456789<br>
        Email: info@example.com
      </div>
    </div>

    <table class="info-table">
      <tr>
        <td><strong>Invoice #:</strong> INV-2025-001</td>
        <td class="text-right"><strong>Date:</strong> 2025-07-06</td>
      </tr>
      <tr>
        <td ><strong>Customer:</strong> John Doe</td>
        <td class="text-right"><strong>Phone:</strong> 017xxxxxxxx</td>
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
      <tbody>
        <tr>
          <td>1</td>
          <td>Wireless Mouse</td>
          <td>2</td>
          <td>500</td>
          <td>1000</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Keyboard</td>
          <td>1</td>
          <td>800</td>
          <td>800</td>
        </tr>
      </tbody>
    </table>

    <table class="summary-table">
      <tr>
        <td class="text-right">Subtotal:</td>
        <td class="text-right">1800</td>
      </tr>
      <tr>
        <td class="text-right">Discount:</td>
        <td class="text-right">100</td>
      </tr>
      <tr class="total">
        <td class="text-right">Grand Total:</td>
        <td class="text-right">1700</td>
      </tr>
      <tr>
        <td class="text-right">Paid:</td>
        <td class="text-right">1700</td>
      </tr>
      <tr>
        <td class="text-right">Change:</td>
        <td class="text-right">0</td>
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
