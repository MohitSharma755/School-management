<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Login Page</title>
</head>
<!-- Bootstrap css -->
<link rel="stylesheet" href="{{ asset('Bootstrap Css/css/bootstrap.css') }}">
<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('Custom Css/custom.css') }}">

{{-- Custom JS --}}
<script src="{{ asset('Js/custom.js') }}"></script>

<body class=" library">


    <div class="   p-3 p-md-5 d-flex flex-column justify-content-center align-items-center min-vh-100 ">
        <form action="{{ url('Login') }}" method="post" class=" p-3  shadow-lg rounded-3  w-100 form-container ">
            <h1 class="color text-center">Library Login </h1>
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                <input type="text" placeholder="Please enter your name" id="name" name="name" class="form-control">
            </div>

            <label for="password">Password <span class="text-danger">*</span></label>
            <div class="toggle-password">

                <input type="password" placeholder="Please enter your password" id="password" name="password"
                    class="form-control ">
                <span onclick="togglePassword()">👁️</span>
            </div>
            <div class="d-flex justify-content-center ">

                <button class="btn btn-primary  my-4 ">Go To Dashboard</button>

            </div>

            <div class="row text-center text-md-start g-2">
                <div class="col-12 col-md-8 ">
                    <a href="{{ route('Teachersignup') }}" target="_blank" class="p-2" rel="noopener noreferrer">Create
                        an
                        account?</a>
                </div>
                <div class="col-12 col-md-4 text-md-end ">
                    <a href="http://" target="_blank" class="p-2" rel="noopener noreferrer">Forgot Password?</a>
                </div>
            </div>

        </form>

    </div>


</body>

</html>
