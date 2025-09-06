<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback`s Review</title>
    <link rel="stylesheet" href="{{ asset('Bootstrap Css/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('Custom Css/custom.css') }}">
    <script src="{{ asset('Js/custom.js') }}"></script>
    <script src="{{ asset('Bootstrap Css/js/bootstrap.js') }}"></script>
    <script src="{{ asset('Js/jquery.js') }}"></script>

</head>

<body>
    <h1 class="text-center py-3 color">
        All Feedbacks and Suggestions will be resolved here.
    </h1>
    <div class="container text-center mb-3">
        <h5> <a href="{{route('libraryportal')}}">Go Back to Dashboard</a></h5>
    </div>
    <div>
        <div class="container py-5">

            <div class="bordercustom p-2">
                <div class="d-flex justify-content-between bg-white shadow-lg p-3 mb-3">
                    <h5>Student Feedback (Discover Of India) </h5>
                    <h5>Really This Book is Amazing.</h5>
                </div>

                <div class="d-flex justify-content-between bg-official text-white shadow-lg p-3 mb-3">
                    <div>
                        <h5>Student Name</h5>
                        <h5>Course</h5>
                        <h5>Addmession Number</h5>
                    </div>
                    <div>
                        <h5>Mohit Sharma</h5>
                        <h5>MCA 2nd Year</h5>
                        <h5>123456</h5>
                    </div>
                </div>

                <div class="d-flex justify-content-between bg-white shadow-lg p-3 mb-2">
                    <h5>Demanded Book</h5>
                    <h5>Harry Potter</h5>
                </div>
            </div>

        </div>
    </div>
</body>

</html>