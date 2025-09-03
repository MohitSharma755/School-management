<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>School Management System</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('Bootstrap Css/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('Custom Css/custom.css') }}">
</head>

<body>
    <header class="container-fluid p-3 bg-light ">
        <div class="row ">
            <div class="col-12 col-md-8 ">
                <h1 class="text-success fs-3">Welcome to our School Management System</h1>
            </div>

            <div class="col-12 col-md-4 d-flex justify-content-md-end justify-content-start mt-2 mt-md-0">
                <div class="dropdown">
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Login
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="{{ route('teachers') }}" target="_blank">Teacher Login</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('staff') }}" target="_blank">Faculty</a></li>
                        <li><a class="dropdown-item" href="{{ route('student') }}" target="_blank">Student</a></li>
                        <li><a class="dropdown-item" href="{{ route('library') }}" target="_blank">Library</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main class="container-fluid">
        <div class="row">
            <div class="col-12">
                <img src="{{ asset('images/school-carton.jpg') }}" alt="School Image" class="img-fluid w-100">
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>