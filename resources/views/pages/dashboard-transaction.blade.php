@extends('layouts.dashboard')

@section('title')
    Store Dashboard Transaction
@endsection

@section('content')

<!-- Section Content -->
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
    <div class="dashboard-heading">
    <h2 class="dashboard-title">Transactions</h2>
    <p class="dashboard-subtitle">
        Big result start from the small one
    </p>
    </div>
    <div class="dashboard-content">
    <ul class="nav nav-pills" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
        <a
            class="nav-link active"
            id="sell-tab"
            data-toggle="pill"
            href="#sell"
            role="tab"
            aria-controls="sell"
            aria-selected="true"
        >
            Sell Product
        </a>
        </li>
        <li class="nav-item" role="presentation">
        <a
            class="nav-link"
            id="buy-tab"
            data-toggle="pill"
            href="#buy"
            role="tab"
            aria-controls="buy"
            aria-selected="false"
        >
            Buy Product
        </a>
        </li>
    </ul>
    <div class="row">
        <div class="col-12 mt-2">
        <div class="tab-content" id="myTabContent">
            <div
            class="tab-pane fade show active"
            id="sell"
            role="tabpanel"
            aria-labelledby="sell-tab"
            >
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
            <div
            class="tab-pane fade"
            id="buy"
            role="tabpanel"
            aria-labelledby="buy-tab"
            >
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
</div>
@endsection