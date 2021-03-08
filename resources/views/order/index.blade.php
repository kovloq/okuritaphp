@extends('layouts.app')

@section('content')
<div class="page page--account bg-light-green">
    <div class="container">
        <div class="row">
            @include('layouts.sidebar')
            <div class="col-lg-9 col-md-9">
                <section class="account-detail pt-5">
                    <h1 class="mb-2">My Profile</h1>
                    <div class="card mb-0">
                        <div class="card-body p-4">
                            <form>
                                <div class="row justify-content-center pt-3">
                                    <div class="col-lg-10">
                                        <div class="row mb-3">
                                            <label for="userId" class="col-md-3 col-form-label">
                                                User ID (e-mail)
                                            </label>
                                            <div class="col-md-9">
                                              <input type="email" class="form-control" id="userId">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="name" class="col-md-3 col-form-label">
                                                Name<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-md-9">
                                              <input type="text" class="form-control" id="name" placeholder="Name" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="email" class="col-md-3 col-form-label">
                                                Email Address<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-md-9">
                                              <input type="email" class="form-control" id="email" placeholder="Email Address" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="orderId" class="col-md-3 col-form-label">
                                                Auction ID / Order No
                                            </label>
                                            <div class="col-md-9">
                                              <input type="text" class="form-control" id="orderId" placeholder="Auction ID / Order No">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="linkToProduct" class="col-md-3 col-form-label">
                                                Link to Product/Site
                                            </label>
                                            <div class="col-md-9">
                                              <input type="url" class="form-control" id="linkToProduct" placeholder="Link to Product/Site">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inquiryContent" class="col-md-3 col-form-label">
                                                Inquiry Content<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-md-9">
                                                <select class="form-select" id="inquiryContent" aria-label="Please Select" required>
                                                    <option selected>Please select</option>
                                                    <option value="9">Pre-Order Inquiry</option>
                                                    <option value="5">Auction Bidding</option>
                                                    <option value="4">Shopping</option>
                                                    <option value="11">Payment</option>
                                                    <option value="10">Shipping Instructions</option>
                                                    <option value="3">International Shipping</option>
                                                    <option value="8">Dispatched Shipment / Items</option>
                                                    <option value="12">Prohibited Items</option>
                                                    <option value="-1">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inquiryDetails" class="col-md-3 col-form-label">
                                                Inquiry Details<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-md-9">
                                              <textarea class="form-control" rows="5" id="inquiryDetails" placeholder="Inquiry Details" required></textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="attachment" class="col-md-3 col-form-label">
                                                Attachment
                                            </label>
                                            <div class="col-md-9">
                                              <input type="file" class="form-control" id="attachment">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-9 ms-auto">
                                                <p>Please make sure you write your inquiry in the language associated with your FROM JAPAN account.<br>
                                                    Please do not make inquiries in multiple languages at the same time, as this may lead to delays in responding to your message.</p>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection