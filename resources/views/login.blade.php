<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Login</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon/favicon.ico')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/css/core.css')}}" class="template-customizer-core-css'" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}" />
    <!-- Helpers -->
    <script src="{{asset('assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('assets/js/config.js')}}"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                  <span class="app-brand-logo demo">
                    <h1 class="title">Admin Login</h1>
                  </span>
                  
              </div>
              <!-- /Logo -->
              <form id="LoginFrom" class="mb-3" >
                <div class="mb-3">
                  <label for="email" class="form-label">Email or Username</label>
                  <input
                    type="text"
                    class="form-control"
                    id="userName"
                    name="username" value="{{ old('username') }}"
                    placeholder="Enter your email or username"
                    autofocus required
                  />
                  <span class="text-danger" id="nameErrorMsg"></span>
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    {{-- <a href="auth-forgot-password-basic.html">
                      <small>Forgot Password?</small>
                    </a> --}}
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password" value="{{ old('password') }}"
                      required 
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                  <span id="passwordErrorMsg" class="text-danger" ></span>
                </div>
               
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                </div>
              </form>

             
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

   

   
    <script src="{{asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('assets/vendor/js/menu.js')}}"></script>
 
    <script src="{{asset('assets/js/main.js')}}"></script>

   
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{asset('assets/sweetalert/sweetalert2.all.min.js')}}"></script>  
    <script src="{{asset('assets/sweetalert/sweetalert2.min.css')}}"></script>  
    <script type="text/javascript">
      $('#LoginFrom').on('submit',function(e){
        e.preventDefault();
        // alert('submit');
        let userName = $('#userName').val();
        let password = $('#password').val();
        $.ajax({
          url :"{{route('admin-login-check')}}",
          type : "POST",
          data : {
            "_token": "{{ csrf_token() }}",
            userName: userName,
            password:password
          },
          success:function(response){
            console.log(response);
            swal("Great!", "You Login Successfully!", "success"); 
            // alert('login Success');
            window.location.href = 'admin/product';
          },
          error: function(response) {
            console.log(response.responseJSON.errors);
            // var errorData = responseJSON.errors;
            $('#nameErrorMsg').text(response.responseJSON.errors.userName);
            $('#passwordErrorMsg').text(response.responseJSON.errors.password);
            swal("Error!", response.responseJSON.errors.userName ? response.responseJSON.errors.userName : response.responseJSON.errors.password , "error"); 
            },
        });
      })
     
        </script>
  </body>
</html>
