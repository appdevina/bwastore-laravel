@extends('layouts.dashboard')

@section('title')
    Account Setting
@endsection

@section('content')
<!-- Section Content -->
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
    <div class="dashboard-heading">
    <h2 class="dashboard-title">My Account</h2>
    <p class="dashboard-subtitle">Edit your Account</p>
    </div>
    <div class="dashboard-content">
    <div class="row">
        <div class="col-12">
        <form action="">
            <div class="card">
            <div class="card-body">
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="fullname">Your Name</label>
                    <input
                        type="text"
                        class="form-control"
                        id="fullname"
                        name="fullname"
                        value="Devina Viantie"
                    />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="email">Your Email</label>
                    <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        value="dvnviantie@gmail.com"
                    />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="addressOne">Address 1</label>
                    <input
                        type="text"
                        class="form-control"
                        id="addressOne"
                        name="addressOne"
                        value="Jl. Soka No.18 Tuparev"
                    />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="addressTwo">Address 2</label>
                    <input
                        type="text"
                        class="form-control"
                        id="addressTwo"
                        name="addressTwo"
                        value="Jl. Flamboyan No.10 Tuparev"
                    />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="province">Province</label>
                    <select
                        name="province"
                        id="province"
                        class="form-control"
                    >
                        <option value="West Java">West Java</option>
                    </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="city">City</label>
                    <select
                        name="city"
                        id="city"
                        class="form-control"
                    >
                        <option value="Cirebon">Cirebon</option>
                    </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="postalCode">Postal Code</label>
                    <input
                        type="text"
                        class="form-control"
                        id="postalCode"
                        name="postalCode"
                        value="45153"
                    />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="country">Country</label>
                    <input
                        type="text"
                        class="form-control"
                        id="country"
                        name="country"
                        value="Indonesia"
                    />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input
                        type="text"
                        class="form-control"
                        id="mobile"
                        name="mobile"
                        value="0812345678"
                    />
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col text-right">
                    <button
                    type="submit"
                    class="btn btn-success px-5"
                    >
                    Save Now
                    </button>
                </div>
                </div>
            </div>
            </div>
        </form>
        </div>
    </div>
    </div>
</div>
</div>
@endsection