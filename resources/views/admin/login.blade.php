<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>Cuba - Premium Admin Template</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/fontawesome.css") }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/icofont.css") }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/themify.css") }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/flag-icon.css") }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/feather-icon.css") }}">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/bootstrap.css") }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/style.css") }}">
    <link id="color" rel="stylesheet" href="{{ asset("assets/css/color-1.css") }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/responsive.css") }}">
    </head>
<body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
      <div class="container-fluid p-0">
        <!-- login page start-->
        <div class="authentication-main no-bg">
          <div class="row">
            <div class="col-md-12">
              <div class="auth-innerright">
                <div class="authentication-box">
                  <div class="mt-4">
                    <div class="card-body">
                      <div class="cont text-center">
                        <div> 
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                          <form class="theme-form" method="POST" action="{{ url("admin/login") }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" value="{{ old("email") }}" class="form-control" id="email" placeholder="example@domain.com">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" class="custom-control-input" id="customControlInline" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customControlInline">Remember me</label>
                            </div>
                            
                            <div class="mt-3">
                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                            </div>
                          </form>
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
    </div>
    
     <!-- latest jquery-->
    <script src="{{ asset("assets/js/jquery-3.5.1.min.js") }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset("assets/js/popper.min.js") }}"></script>
    <script src="{{ asset("assets/js/bootstrap.js") }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset("assets/js/feather.min.js") }}"></script>
    <script src="{{ asset("assets/js/feather-icon.js") }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset("assets/js/sidebar-menu.js") }}"></script>
    <script src="{{ asset("assets/js/config.js") }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset("assets/js/tooltip-init.js") }}"></script>
    <!-- Plugins JS Ends-->
  </body>
  </html>