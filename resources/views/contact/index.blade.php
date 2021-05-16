@extends('layouts.app')

@section('content')
<script src="https://www.google.com/recaptcha/api.js"></script>

<div class="page page--contact bg-light-green bg-leaf">
    <section class="contact pt-5">
        <div class="container">
            <form method="post" id="contact_form" action="{{ url("contact") }}">
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
                                              <input type="text" name="name" placeholder="Your Name" class="form-control @if($errors->has('name')) is-invalid @endif" id="name" required>
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
                                              <input type="email" name="email" placeholder="email@domain.com" class="form-control @if($errors->has('email')) is-invalid @endif" id="name" aria-describedby="emailHelp" required>
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
                                                <select class="form-select" name="contact_category" id="inquiryContent" aria-label="Please Select" required>
                                                    <option value="Payment">Payment</option>
											      	<option value="Error">Error</option>
											      	<option value="Shopping">Shopping</option>
											      	<option value="Shipping">Shipping</option>
											      	<option value="Prohibited Item">Prohibited Item</option>
											      	<option value="Other">Other</option>
                                                </select>
                                                @if($errors->has('contact_category'))
                                                <div class="invalid-feedback">
                                                    {{$errors->first('contact_category')}}
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inquiryDetails" class="col-md-3 col-form-label">
                                                Message<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-md-9">
                                              <textarea rows="8" class="form-control @if($errors->has('message')) is-invalid @endif" name="message"></textarea>
												@if($errors->has('message'))
										      	<div class="invalid-feedback">
										        	{{$errors->first('message')}}
										      	</div>
										    	@endif
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary"
                                            class="g-recaptcha" 
                                            data-sitekey="6LcOpqgaAAAAAN3nmJJ6xa2E3GsQv3qWm-7bVWlw" 
                                            data-callback='onSubmit' 
                                            data-action='submit'
                                            >Send Message</button>
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
<script>
   function onSubmit(token) {
     document.getElementById("contact_form").submit();
   }
 </script>

@endsection