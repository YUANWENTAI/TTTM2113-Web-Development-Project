<?php
ob_start();
?>
 
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="mb-1">Invoice</h2>
                <p class="text-muted mb-0">Order #O001</p>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-primary" onclick="window.print();">
                 <i class="bi bi-printer me-1"></i>Print
                </button>
            </div>
        </div>
    </div>
</div>
 
<div class="card shadow-sm">
    <div class="card-body p-4">
        <div class="row mb-4">
            <div class="col-md-6">
                <h4>Woola Company</h4>
                <p class="text-muted mb-0">Sales Invoice</p>
            </div>
            <div class="col-md-6 text-md-end">
                <strong>Invoice No.: </strong>O001<br>
                <strong>Date: </strong>2026-10-03
            </div>
        </div>
        <hr>
        <div class="row mb-4">
            <div class="col-md-6">
                <strong>Customer</strong><br>
                Alice Johnson<br>
                012-3456789
            </div>
            <div class="col-md-6 text-md-end">
                <strong>Staff</strong><br>
                Jane Smith<br>
                janesmith@example.com
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th>Brand</th>
                        <th class="text-end">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Wool Sweater</td>
                        <td>RM 89.00</td>
                        <td>1</td>
                        <td>WoolCraft</td>
                        <td class="text-end">RM 89.00</td>
                    </tr>
                    <tr><td colspan="6" class="text-center">No products added to this order</td></tr>
                </tbody>
                <tfoot><tr><th colspan="5" class="text-end">Grand Total</th><th class="text-end">RM 89.00</th></tr></tfoot>
            </table>
        </div>
        <a href="orderdetails.php" class="btn btn-secondary"><i class="bi bi-arrow-left me-1"></i>Back to Details</a>
    </div>
</div>
 
<style>
@media print {
 .sidebar {
    display: none !important;
  }
  .btn {
    display: none !important;
  }
  .card {
    box-shadow: none !important;
    border: 0 !important;
  }
  .border-start {
    border-left: none !important;
  }
  .card, .table {
    page-break-inside: avoid !important;
  }
  .card:last-child {
    page-break-after: avoid !important;
  }
@page {
    margin: 1cm;
    size: A4;
  }
  body {
    margin: 0 !important;
  }
}
</style>
 
<?php
$content = ob_get_clean();
require_once 'layout.php';
?>