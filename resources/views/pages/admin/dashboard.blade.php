@extends('layouts.admin')

@section('title')
    Store Dashboard
@endsection

@section('content')
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <nav
        class="navbar navbar-expand-lg navbar-light navbar-store fixed-top scrolled"
        data-aos="fade-down"
        >
        <div class="container-fluid">
            <button
            class="btn btn-secondary d-md-none mr-auto mr-2"
            id="menu-toggle"
            >
            &laquo; Menu
            </button>
            <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            >
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Desktop Menu -->
            <ul class="navbar-nav d-none d-lg-flex ml-auto">
                <li class="nav-item dropdown">
                <a
                    href="#"
                    class="nav-link"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                >
                    <img
                    src="/images/icon-user.png"
                    alt=""
                    class="rounded-circle mr-2 profile-picture"
                    />
                    Hi, Devina
                </a>
                <div class="dropdown-menu">
                    <a href="/dashboard.html" class="dropdown-item"
                    >Dashboard</a
                    >
                    <a href="/dashboard-account.html" class="dropdown-item"
                    >Settings</a
                    >
                    <div class="dropdown-divider"></div>
                    <a href="/" class="dropdown-item">Logout</a>
                </div>
                </li>
                <li class="nav-item">
                <a href="#" class="nav-link d-inline-block mt-2">
                    <img src="/images/icon-cart-filled.svg" alt="" />
                    <div class="badge badge-success">3</div>
                </a>
                </li>
            </ul>

            <!-- Mobile Menu -->
            <ul class="navbar-nav d-block d-lg-none">
                <li class="nav-item">
                <a href="#" class="nav-link"> Hi, Devina </a>
                </li>
                <li class="nav-item">
                <a href="#" class="nav-link d-inline-block"> Cart </a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

        <!-- Section Content -->
        <div
        class="section-content section-dashboard-home"
        data-aos="fade-up"
        >
        <div class="container-fluid">
            <div class="dashboard-heading">
            <h2 class="dashboard-title">Admin Dashboard</h2>
            <p class="dashboard-subtitle">This is BWASTORE Administrator Panel</p>
            </div>
            <div class="dashboard-content">
            <div class="row">
                <div class="col-md-4">
                <div class="card mb-2">
                    <div class="card-body">
                    <div class="dashboard-card-title">Customer</div>
                    <div class="dashboard-card-subtitle">{{ $customer }}</div>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="card mb-2">
                    <div class="card-body">
                    <div class="dashboard-card-title">Revenue</div>
                    <div class="dashboard-card-subtitle">Rp. {{ $revenue }}</div>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="card mb-2">
                    <div class="card-body">
                    <div class="dashboard-card-title">Transaction</div>
                    <div class="dashboard-card-subtitle">{{ $transaction }}</div>
                    </div>
                </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12 mt-2">
                <h5 class="mb-3">Recent Transactions</h5>
                <a
                    href="/dashboard-transactions-details.html"
                    class="card card-list d-block"
                >
                    <div class="card-body">
                    <div class="row">
                        <div class="col-md-1">
                        <img
                            src="/images/dashboard-icon-product-1.png"
                            alt=""
                        />
                        </div>
                        <div class="col-md-4">Sirup Marjan</div>
                        <div class="col-md-3">Devina Viantie</div>
                        <div class="col-md-3">12 Maret 2023</div>
                        <div class="col-md-1 d-none d-md-block">
                        <img
                            src="/images/dashboard-arrow-right.svg"
                            alt=""
                        />
                        </div>
                    </div>
                    </div>
                </a>
                <a
                    href="/dashboard-transactions-details.html"
                    class="card card-list d-block"
                >
                    <div class="card-body">
                    <div class="row">
                        <div class="col-md-1">
                        <img
                            src="/images/dashboard-icon-product-2.png"
                            alt=""
                        />
                        </div>
                        <div class="col-md-4">LeBrone X</div>
                        <div class="col-md-3">Devina Viantie</div>
                        <div class="col-md-3">12 Maret 2023</div>
                        <div class="col-md-1 d-none d-md-block">
                        <img
                            src="/images/dashboard-arrow-right.svg"
                            alt=""
                        />
                        </div>
                    </div>
                    </div>
                </a>
                <a
                    href="/dashboard-transactions-details.html"
                    class="card card-list d-block"
                >
                    <div class="card-body">
                    <div class="row">
                        <div class="col-md-1">
                        <img
                            src="/images/dashboard-icon-product-3.png"
                            alt=""
                        />
                        </div>
                        <div class="col-md-4">Sofa Ternyaman</div>
                        <div class="col-md-3">Devina Viantie</div>
                        <div class="col-md-3">12 Maret 2023</div>
                        <div class="col-md-1 d-none d-md-block">
                        <img
                            src="/images/dashboard-arrow-right.svg"
                            alt=""
                        />
                        </div>
                    </div>
                    </div>
                </a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection