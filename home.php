<?php
ob_start();
?>

<style>
    .section-card {
        transition: all 0.25s ease-in-out;
    }
    .section-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    }
    .icon-box {
        width: 64px;
        height: 64px;
        display: grid;
        place-items: center;
        border-radius: 16px;
        font-size: 28px;
    }
    .soft-gradient {
        background: linear-gradient(135deg, #f8fafc 0%, #eef6ff 100%);
    }
    .module-btn {
        text-decoration: none !important;
        border: 1px solid;
        border-radius: 10px;
        padding: 7px 14px;
        display: inline-block;
        margin-top:12px;
    }
    .btn-primary-outline{
        color:#0d6efd;
        border-color:#0d6efd;
    }
    .btn-success-outline{
        color:#198754;
        border-color:#198754;
    }
    .btn-warning-outline{
        color:#ffc107;
        border-color:#ffc107;
    }
    .btn-danger-outline{
        color:#dc3545;
        border-color:#dc3545;
    }
</style>

<div class="container py-5">
    <div class="row align-items-center mb-5">
        <div class="col-lg-7">
            <h1 class="fw-bold text-dark mb-3">Woola Company Admin System</h1>
            <p class="text-secondary fs-5 mb-4">
                Woola Company is a retail business specialising in premium cashmere sweaters from multiple well-known brands.
                This internal backend platform supports staff management, customer records, product inventory and sales order processing,
                helping the team organise cashmere sweater sales and generate customer invoices efficiently.
            </p>
            <div class="d-flex gap-3">
                <a href="dashboard.php" class="btn btn-primary px-4 py-2">
                    <i class="bi bi-speedometer2 me-2"></i>Open Dashboard
                </a>
                <a href="orders.php" class="btn btn-outline-primary px-4 py-2">
                    <i class="bi bi-cart-plus me-2"></i>Create New Order
                </a>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card border-0 shadow-sm rounded-4 soft-gradient p-4 h-100">
                <div class="card-body text-center">
                    <i class="bi bi-bar-chart-line text-primary" style="font-size:5rem;"></i>
                    <p class="mt-3 text-secondary">Centralised management for cashmere sweater sales</p>
                </div>
            </div>
        </div>
    </div>
    <h3 class="fw-semibold text-dark mb-4">Quick Modules</h3>
    <div class="row g-4 mb-5">
        <div class="col-md-3">
            <div class="card section-card border-0 shadow-sm rounded-4 p-4 h-100">
                <div class="icon-box bg-primary bg-opacity-10 text-primary mb-3">
                    <i class="bi bi-people"></i>
                </div>
                <h5 class="fw-bold">Staff</h5>
                <p class="text-secondary small">Register and manage employee profiles</p>
                <a href="staffs.php" class="module-btn btn-primary-outline">Enter module</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card section-card border-0 shadow-sm rounded-4 p-4 h-100">
                <div class="icon-box bg-success bg-opacity-10 text-success mb-3">
                    <i class="bi bi-person-heart"></i>
                </div>
                <h5 class="fw-bold">Customers</h5>
                <p class="text-secondary small">Maintain customer information database</p>
                <a href="customers.php" class="module-btn btn-success-outline">Enter module</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card section-card border-0 shadow-sm rounded-4 p-4 h-100">
                <div class="icon-box bg-warning bg-opacity-10 text-warning mb-3">
                    <i class="bi bi-box"></i>
                </div>
                <h5 class="fw-bold">Products</h5>
                <p class="text-secondary small">Manage multi-brand cashmere sweater stock & pricing</p>
                <a href="products.php" class="module-btn btn-warning-outline">Enter module</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card section-card border-0 shadow-sm rounded-4 p-4 h-100">
                <div class="icon-box bg-danger bg-opacity-10 text-danger mb-3">
                    <i class="bi bi-cart"></i>
                </div>
                <h5 class="fw-bold">Orders</h5>
                <p class="text-secondary small">Create, track and review sales orders</p>
                <a href="orders.php" class="module-btn btn-danger-outline">Enter module</a>
            </div>
        </div>
    </div>
    <div class="card border-0 shadow-sm rounded-4 p-5 soft-gradient">
        <h3 class="fw-semibold mb-4">System Features</h3>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="d-flex gap-3">
                    <i class="bi bi-check-circle-fill text-primary fs-4 mt-1"></i>
                    <div>
                        <h6 class="fw-bold">Order Tracking</h6>
                        <p class="text-secondary small">Record all cashmere sweater sales orders</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex gap-3">
                    <i class="bi bi-check-circle-fill text-success fs-4 mt-1"></i>
                    <div>
                        <h6 class="fw-bold">Data Management</h6>
                        <p class="text-secondary small">CRUD for staff, customer and sweater product data</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex gap-3">
                    <i class="bi bi-check-circle-fill text-warning fs-4 mt-1"></i>
                    <div>
                        <h6 class="fw-bold">Invoice Export</h6>
                        <p class="text-secondary small">Generate printable sales invoice for customers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
