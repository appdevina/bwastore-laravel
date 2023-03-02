@extends('layouts.dashboard')

@section('title')
    Store Dashboard Transaction Detail
@endsection

@section('content')
    <!-- Section Content -->
    <div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
        <h2 class="dashboard-title">#STORE1283</h2>
        <p class="dashboard-subtitle">Transaction Details</p>
        </div>
        <div class="dashboard-content" id="transactionDetails">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-4">
                    <img
                        src="/images/product-details-dashboard.png"
                        alt=""
                        class="w-100 mb-3"
                    />
                    </div>
                    <div class="col-12 col-md-8">
                    <div class="row">
                        <div class="col-12 col-md-6">
                        <div class="product-title">Customer Name</div>
                        <div class="product-subtitle">
                            Devina Viantie
                        </div>
                        </div>
                        <div class="col-12 col-md-6">
                        <div class="product-title">Product Name</div>
                        <div class="product-subtitle">Sirup Marjan</div>
                        </div>
                        <div class="col-12 col-md-6">
                        <div class="product-title">
                            Date of Transaction
                        </div>
                        <div class="product-subtitle">
                            13 Maret 2023
                        </div>
                        </div>
                        <div class="col-12 col-md-6">
                        <div class="product-title">Payment Status</div>
                        <div class="product-subtitle text-danger">
                            Pending
                        </div>
                        </div>
                        <div class="col-12 col-md-6">
                        <div class="product-title">Total Amount</div>
                        <div class="product-subtitle">239</div>
                        </div>
                        <div class="col-12 col-md-6">
                        <div class="product-title">Mobile</div>
                        <div class="product-subtitle">085364625281</div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-4">
                    <h5>Shipping Information</h5>
                    </div>
                    <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-6">
                        <div class="product-title">Address I</div>
                        <div class="product-subtitle">
                            Jl. Sooka No.18 Tuparev
                        </div>
                        </div>
                        <div class="col-12 col-md-6">
                        <div class="product-title">Address II</div>
                        <div class="product-subtitle">
                            Jl.Flamboyan No.10 Tuparev
                        </div>
                        </div>
                        <div class="col-12 col-md-6">
                        <div class="product-title">Province</div>
                        <div class="product-subtitle">West Java</div>
                        </div>
                        <div class="col-12 col-md-6">
                        <div class="product-title">City</div>
                        <div class="product-subtitle">Cirebon</div>
                        </div>
                        <div class="col-12 col-md-6">
                        <div class="product-title">Postal Code</div>
                        <div class="product-subtitle">45153</div>
                        </div>
                        <div class="col-12 col-md-6">
                        <div class="product-title">Country</div>
                        <div class="product-subtitle">Indonesia</div>
                        </div>
                        <div class="col-12 col-md-3">
                        <div class="product-title">Shipping Status</div>
                        <select
                            name="status"
                            id="status"
                            class="form-control"
                            v-model="status"
                        >
                            <option value="PENDING">PENDING</option>
                            <option value="SHIPPING">SHIPPING</option>
                            <option value="SUCCESS">SUCCESS</option>
                        </select>
                        </div>
                        <template v-if="status == 'SHIPPING'">
                        <div class="col-md-3">
                            <div class="product-title">Input Resi</div>
                            <input
                            type="text"
                            class="form-control"
                            name="resi"
                            v-model="resi"
                            />
                        </div>
                        <div class="col-md-2">
                            <button
                            type="submit"
                            class="btn btn-success btn-block mt-4"
                            >
                            UPDATE RESI
                            </button>
                        </div>
                        </template>
                    </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 text-right">
                    <button
                        type="submit"
                        class="btn btn-success btn-lg mt-4"
                    >
                        SAVE NOW
                    </button>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection

@push('addon-script')
<script src="/vendor/vue/vue.js"></script>
<script>
    var transactionDetails = new Vue({
    el: "#transactionDetails",
    data: {
        status: "SHIPPING",
        resi: "BD203848847103",
    },
    });
</script>
@endpush