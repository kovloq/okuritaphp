@extends('layouts.app')

@section('content')
<div class="page page--contact bg-light-green bg-leaf">
    <section class="contact pt-5">
        <div class="container">
            <form method="post" action="{{ url("contact") }}">
				@csrf
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="section-title">
                                    <h3>Contact Us</h3>
                                </div>
                                <p>
                                  If you have any questions, comments, or concerns about any of our services, please use this contact form to get in touch with us. We will reply to all inquiries within up to two business days during our operating hours from 9:00 - 18:00 JST.
                                </p>
                                <p>
                                  You will receive an automatic email after submitting your inquiry. If you have not received reply from us within 2 business days Please contact us through our <a href="https://www.facebook.com/okurita.japan/" target="_blank">Facebook</a> or <a href="mail:contact@okurita.com" target="_blank">Email</a>.
                                </p>

                                <div class="row justify-content-center pt-3">
                                    <div class="col-lg-10">
                                        <div class="row mb-3">
                                            <label for="name" class="col-md-3 col-form-label">
                                                Name<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-md-9">
                                              <input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" id="name" value="John Doe">
										      @if($errors->has('name'))
										      	<div class="invalid-feedback">
										        	{{$errors->first('name')}}
										      	</div>
										    	@endif
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="email" class="col-md-3 col-form-label">
                                                Email<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-md-9">
                                              <input type="email" class="form-control @if($errors->has('email')) is-invalid @endif" id="name" aria-describedby="emailHelp" value="email@example.com">
										      <div id="emailHelp" class="form-text ">We'll never share your email with anyone else.</div>
										      	@if($errors->has('email'))
										      	<div class="invalid-feedback">
										        	{{$errors->first('email')}}
										      	</div>
										    	@endif
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inquiryContent" class="col-md-3 col-form-label">
                                                Inquiry Content<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-md-9">
                                                <select class="form-select" id="inquiryContent" aria-label="Please Select" required>
                                                    <option value="Payment">Payment</option>
											      	<option value="Error">Error</option>
											      	<option value="Shopping">Shopping</option>
											      	<option value="Shipping">Shipping</option>
											      	<option value="Prohibited Item">Prohibited Item</option>
											      	<option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inquiryDetails" class="col-md-3 col-form-label">
                                                Message<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-md-9">
                                              <textarea class="form-control @if($errors->has('message')) is-invalid @endif" name="message"></textarea>
												@if($errors->has('message'))
										      	<div class="invalid-feedback">
										        	{{$errors->first('message')}}
										      	</div>
										    	@endif
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
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Confirm Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>

@endsection