<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Register</title>
    <!-- Bootstrap CSS -->
    <!-- Bootstrap css -->
<link rel="stylesheet" href="{{ asset('Bootstrap Css/css/bootstrap.css') }}">
<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('Custom Css/custom.css') }}">
   <link rel="stylesheet" href="{{ asset('Bootstrap Css/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('Custom Css/custom.css') }}">
    <script src="{{ asset('Js/custom.js') }}"></script>
    <script src="{{ asset('Bootstrap Css/js/bootstrap.js') }}"></script>
    <script src="{{ asset('Js/jquery.js') }}"></script>
    <!-- 3. Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

</head>

<body class="bg-light">
    <div class="bg-official p-3 p-md-5 d-flex justify-content-center align-items-center min-vh-100">
        <form action="{{ url('adminsignup') }}" enctype="multipart/form-data" method="post" class="form-container bg-white shadow border rounded-3 p-3 p-md-4 w-100">
            @csrf
            <h1 class="text-success text-center mb-4">Admin Registration</h1>
            
            <div class="mb-3">
                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                <input type="text" required placeholder="Please enter your name" id="name" name="name"
                    class="form-control">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" required placeholder="Please enter your email" id="email" name="email"
                    class="form-control">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                <input type="password" required placeholder="Please enter your password" id="password" name="password"
                    class="form-control">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
                <input type="text" required placeholder="Please enter your address" id="address" name="address"
                    class="form-control">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number <span class="text-danger">*</span></label>
                <input type="tel" required placeholder="Please enter your phone number" id="phone" name="phoneNumber"
                    class="form-control">
            </div>

            <div class="mb-3">
                <label for="emergency" class="form-label">Emergency Contact <span class="text-danger">*</span></label>
                <input type="tel" required placeholder="Please enter emergency contact number" id="emergency" name="emergency"
                    class="form-control">
            </div>

            <div class="mb-3">
                <label for="class" class="form-label">Role <span class="text-danger">*</span></label>
                <select name="class" id="class" class="form-control">
                    <option value="">Please Select Your Role</option>
                    <option value="1">Super Admin</option>
                    <option value="1">Admin</option>
                    
                </select>
            </div>

         

            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="datetime-local" name="date" id="date" class="form-control" value="{{ date('Y-m-d\TH:i') }}" readonly>
            </div>

            <div class="mb-3">
                <label for="img" class="form-label">Profile Picture</label>
                <input type="file" accept="image/*" id="img" name="img" class="form-control">
            </div>

            <div class="text-center">
                <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Register"></input>
                <div class="mt-3">
                    <span class="d-block d-sm-inline">If you have an account, please </span>
                    <a href="{{route('admin')}}" target="_blank" class="text-decoration-none">Login</a>
                </div>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="{{asset('Bootstrap Css/js/bootstrap.js')}}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> --}}
</body>

</html>