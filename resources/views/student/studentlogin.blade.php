<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login Page</title>
</head>
<!-- Bootstrap css -->
<link rel="stylesheet" href="{{ asset('Bootstrap Css/css/bootstrap.css') }}">
<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('Custom Css/custom.css') }}">

{{-- Custom JS --}}
<script src="{{ asset('Js/custom.js') }}"></script>

<body class="bg-official ">

    <div class=" bg-official p-3 p-md-5 d-flex flex-column justify-content-center align-items-center min-vh-100 ">
        <form action="{{ url('studentlogin') }}" method="post"
            class="bg-white p-3  shadow-lg rounded-3  w-100 form-container ">
            <h1 class="color text-center">Student Login </h1>
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                @error('name')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <input type="text" placeholder="Please enter your name" id="name" name="name" class="form-control">
            </div>

            <label for="password">Password <span class="text-danger">*</span></label>
            @error('password')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <div class="toggle-password">

                <input type="password" placeholder="Please enter your password" id="password" name="password"
                    class="form-control ">
                <span onclick="togglePassword()">👁️</span>
            </div>
            <div class="d-flex justify-content-center ">

                <input type="submit" value="Go To Dashboard" class="btn btn-primary  my-4 " name="submit">

            </div>

            <div class="row text-center text-md-start g-2">
                <div class="col-12 col-md-8 ">
                    <a href="{{route('studentsignup')}}" target="_blank" class="p-2" rel="noopener noreferrer">Create an
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
