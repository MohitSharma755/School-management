<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members Registration</title>
    <!-- Bootstrap CSS -->
    <!-- Bootstrap css -->
<link rel="stylesheet" href="{{ asset('Bootstrap Css/css/bootstrap.css') }}">
<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('Custom Css/custom.css') }}">
   
</head>

<body class="bg-light">
    <div class="bg-official p-3 p-md-5 d-flex justify-content-center align-items-center min-vh-100">
        <form action="{{ url('') }}" method="post" class="form-container bg-white shadow border rounded-3 p-3 p-md-4 w-100">
            @csrf
            <h1 class="text-success text-center mb-4">Members Registration</h1>
            
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
                <label for="class" class="form-label">Faculty Type <span class="text-danger">*</span></label>
                <select name="class" id="class" class="form-control">
                    <option value="">Please Select Your Type</option>
                    <option value="1">Librariyan</option>
                    <option value="2">Driver</option>
                    <option value="3">Staff</option>
                    <option value="4">Others</option>
                   
                </select>
            </div>

            {{-- <div class="mb-3">
                <label for="usertype" class="form-label">User Type</label>
                <input type="text" required placeholder="Please enter your user type" id="usertype" name="usertype"
                    value="Student" class="form-control" readonly>
            </div> --}}

            {{-- <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="datetime-local" name="date" id="date" class="form-control" value="{{ date('Y-m-d\TH:i') }}" readonly>
            </div> --}}

            <div class="mb-3">
                <label for="img" class="form-label">Profile Picture</label>
                <input type="file" accept="image/*" id="img" name="img" class="form-control">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg">Register</button>
                <div class="mt-3">
                    <span class="d-block d-sm-inline">If you have an account, please </span>
                    <a href="#" class="text-decoration-none">Login</a>
                </div>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="{{asset('Bootstrap Css/js/bootstrap.js')}}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> --}}
</body>

</html>