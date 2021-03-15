@extends('layouts.app')

@section('content')
<div class="page page--policy bg-light-green bg-ornament bg-ornament--sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <aside class="aside-policy pt-5">
                    <div class="list-group">
                        <a href="{{ url("help/privacy-policy") }}" class="list-group-item">Privacy Policy</a>
                        <a href="{{ url("help/corporate-profile") }}" class="list-group-item">Corporate Profile</a>
                        <a href="{{ url("help/terms-of-service") }}" class="list-group-item">Terms of Service</a>
                        <a href="{{ url("help/usage-fee") }}" class="list-group-item">Usage Fee</a>
                        <a href="{{ url("help/shipping-method") }}" class="list-group-item">Shipping Method</a>
                        <a href="{{ url("help/payment-method") }}" class="list-group-item active">Payment Method</a>
                    </div>
                </aside>
            </div>
            <div class="col-lg-9 col-md-9">
                <section class="policy pt-5">
                    <div class="card mb-0">
                        <div class="card-body perfect-scrollbar">
                            <h3 class="policy-title">Okurita Payment </h3>
                            <p class="policy-date">Last Update [10/10/2020]</p>

                            <h6 class="policy-subtitle" id="introduction">INTRODUCTION</h6>
                            <p>
                                [BUSINESS ENTITY NAME] (“we” or “us” or “our”) respects the privacy of our users (“user” or “you”). This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website [name of website.com] [and our mobile application], including any other media form, media channel, mobile website, or mobile application related or connected thereto (collectively, the “Site”). Please read this privacy policy carefully. If you do not agree with the terms of this privacy policy, please do not access the site.
                                We reserve the right to make changes to this Privacy Policy at any time and for any reason. We will alert you about any changes by updating the “Last Updated” date of this Privacy Policy. Any changes or modifications will be effective immediately upon posting the updated Privacy Policy on the Site, and you waive the right to receive specific notice of each such change or modification.
                                You are encouraged to periodically review this Privacy Policy to stay informed of updates. You will be deemed to have been made aware of, will be subject to, and will be deemed to have accepted the changes in any revised Privacy Policy by your continued use of the Site after the date such revised Privacy Policy is posted. This template was created using Termly’s privacy policy generator.
                            </p>

                            <h6 class="policy-subtitle" id="collection-information">COLLECTION OF YOUR INFORMATION</h6>
                            <p>We may collect information about you in a variety of ways. The information we may collect on the Site includes:</p>
                            <p>Personal Data</p>
                            <p>Personally identifiable information, such as your name, shipping address, email address, and telephone number, and demographic information, such as your age, gender, hometown, and interests, that you voluntarily give to us [when you register with the Site [or our mobile application,] or] when you choose to participate in various activities related to the Site [and our mobile application], such as online chat and message boards. You are under no obligation to provide us with personal information of any kind, however your refusal to do so may prevent you from using certain </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

@endsection