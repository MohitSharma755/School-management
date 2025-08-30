<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('Bootstrap Css/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('Custom Css/custom.css') }}">
    <script src="{{ asset('Js/custom.js') }}"></script>
    <script src="{{ asset('Bootstrap Css/js/bootstrap.js') }}"></script>
    <script src="{{ asset('Js/jquery.js') }}"></script>
    <!-- 3. Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    {{--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}



</head>

<body class="bg-official">
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-official shadow-sm fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold text-white" href="">Admin Panel</a>
            <!-- Hamburger button for mobile only -->
            {{-- <button class="btn btn-outline-secondary d-md-none" type="button" id="sidebar-toggle">

            </button> --}}
            <div class="collapse navbar-collapse d-none d-md-flex justify-content-end">
                <div class="navbar-text me-4 text-white">Welcome, Admin</div>
            </div>
        </div>
    </nav>
    <form action="{{ url('adminlogout') }}" method="post">
        @csrf
        <div class="d-flex">

            <!-- Sidebar -->
            <aside id="sidebar" class="sidebar">
                <h2 class="text-center mb-4">Faculties</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item active" aria-current="true">
                        Dashboard
                    </li>


                    <button type="" class="button" data-toggle="collapse" data-target="#demo">
                        <li class="list-group-item">
                            <svg height="50" width="40" viewBox="0 0 72 72" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M54.862 58.804s2-14-10-14c-3.192 2.128-5.926 3.598-9 3.592h.125c-3.074.006-5.808-1.464-9-3.592c-12 0-10 14-10 14"
                                    fill="#3F3F3F" />
                                <path d="m45.131 12.155l-9.31.91l-9.07-.88l-5.44-.53l13.88-2.53l15.13 2.53z"
                                    fill="#9B9B9A" />
                                <path
                                    d="M45.131 12.155v7.97s-6.72-.26-9.19 2.64c-2.47-2.9-9.19-2.64-9.19-2.64v-7.94l9.07.88l9.31-.91z"
                                    fill="#3F3F3F" />
                                <path
                                    d="M35.969 51.38h-.109c-3.198-.031-5.986-1.464-9.428-3.76a1 1 0 1 1 1.109-1.664c3.153 2.103 5.66 3.41 8.383 3.425c2.722-.014 5.228-1.322 8.383-3.425a1 1 0 1 1 1.109 1.664c-3.443 2.296-6.231 3.729-9.428 3.76h-.02z"
                                    fill="#FFF" />
                                <path
                                    d="M26.578 20.098a15.773 15.773 0 0 0-1.588 4l-.028.069s3.98.784 7.961-3.079l.036-.102c-2.869-.996-6.333-.86-6.333-.86m18.386-.001s-3.408-.201-6.325.905l.028.058c3.98 3.863 7.96 3.079 7.96 3.079l-.01.002a15.785 15.785 0 0 0-1.605-4.071"
                                    fill="#F4AA41" />
                                <path
                                    d="M46.541 24.187c-.704.094-4.26.362-7.826-3.099l-.028-.058l.022-.008c-1.09.39-2.09.947-2.768 1.743c-2.069-2.43-7.104-2.64-8.687-2.645c1.127.011 3.578.127 5.705.866l-.036.102c-3.565 3.46-7.122 3.193-7.826 3.099a17.253 17.253 0 0 0-.616 4.593c0 7.827 5.076 14.173 11.338 14.173s11.339-6.346 11.339-14.173c0-1.61-.22-3.153-.617-4.593z"
                                    fill="#FCEA2B" />
                                <path
                                    d="M41.942 26.951a2 2 0 1 1-4.002-.001a2 2 0 0 1 4.002.001m-8 0a2 2 0 1 1-4.002-.001a2 2 0 0 1 4.002.001m1.999 10.003c-1.151 0-2.303-.286-3.447-.858a1 1 0 1 1 .895-1.79c1.717.86 3.387.86 5.105 0a1 1 0 0 1 .895 1.79c-1.144.572-2.296.858-3.448.858z" />
                                <path
                                    d="M46.13 19.77c-.57-1.03-1.24-1.97-2-2.79v2.15c-.22 0-.48.01-.76.03c.46.6.87 1.26 1.23 1.96c1.06 2.07 1.68 4.54 1.68 7.19c0 7.27-4.64 13.18-10.34 13.18S25.6 35.58 25.6 28.31c0-2.66.62-5.13 1.69-7.2c.36-.7.77-1.35 1.22-1.95c-.28-.02-.54-.03-.76-.03v-2.15c-.75.82-1.43 1.76-2 2.79c-1.36 2.43-2.15 5.37-2.15 8.54c0 8.37 5.54 15.18 12.34 15.18c6.81 0 12.34-6.81 12.34-15.18c0-3.17-.79-6.11-2.15-8.54z" />
                                <path d="m21.311 11.655l5.44.53l9.07.88l9.31-.91l5.19-.5" fill="none" stroke="#000"
                                    strokeLinecap="round" strokeLinejoin="round" strokeMiterlimit="10"
                                    strokeWidth="2" />
                                <path
                                    d="M36.74 23.37c-.02.01-.03.03-.04.04c-.13.16-.29.26-.47.31c-.04.02-.08.03-.12.03c-.06.02-.11.02-.17.02s-.12 0-.17-.02c-.04 0-.08-.01-.12-.03a.897.897 0 0 1-.36-.19a.752.752 0 0 1-.15-.16c-1.65-1.86-5.85-2.25-7.85-2.26c-.19 0-.36.01-.5.01a.978.978 0 0 1-.73-.27a.992.992 0 0 1-.31-.72v-8.47c0-.56.45-1 1-1s1 .44 1 1v7.47c.22 0 .48.01.76.03c2.04.12 5.36.57 7.43 2.24c.28.21.53.45.76.72c.31.36.32.88.04 1.25z" />
                                <path
                                    d="M46.13 11.66v8.47c0 .27-.11.53-.3.72c-.2.18-.44.28-.74.28c-.14-.01-.31-.01-.49-.01c-2.01 0-6.22.38-7.86 2.25c-.02.01-.03.03-.04.04c-.13.16-.29.26-.47.31c-.04.02-.08.03-.12.03c-.06.02-.11.02-.17.02s-.12 0-.17-.02c-.04 0-.08-.01-.12-.03a.897.897 0 0 1-.36-.19a.752.752 0 0 1-.15-.16a.994.994 0 0 1 .04-1.25c.23-.27.48-.51.76-.72c2.07-1.67 5.39-2.12 7.43-2.24c.28-.02.54-.03.76-.03v-7.47c0-.56.45-1 1-1s1 .44 1 1z" />
                                <path d="m50.321 11.655l-15.13-2.53l-13.88 2.53" fill="none" stroke="#000"
                                    strokeLinecap="round" strokeLinejoin="round" strokeMiterlimit="10"
                                    strokeWidth="2" />
                                <path d="M21.313 21a1 1 0 0 1-1-1v-8.12a1 1 0 1 1 2 0V20a1 1 0 0 1-1 1z" />
                                <path
                                    d="M19.285 23.58a.999.999 0 0 1-.785-1.618l2.026-2.58a1 1 0 0 1 1.573 1.236l-2.027 2.58a.998.998 0 0 1-.787.382z" />
                                <path
                                    d="M21.313 25.101a1 1 0 0 1-1-1v-4.1a1 1 0 1 1 2 0v4.1a1 1 0 0 1-1 1zm24.581.131c-1.594 0-4.688-.45-7.753-3.426a1 1 0 1 1 1.392-1.436c3.522 3.419 6.936 2.842 7.078 2.815a1.004 1.004 0 0 1 1.165.796a.996.996 0 0 1-.785 1.167a6.16 6.16 0 0 1-1.097.084zm-19.904 0a6.034 6.034 0 0 1-1.098-.084a1 1 0 0 1 .38-1.963c.162.03 3.567.594 7.078-2.815a1 1 0 0 1 1.392 1.436c-3.065 2.975-6.159 3.426-7.753 3.426zm28.769 33.571a1 1 0 0 1-.99-1.15c.008-.057.827-5.74-2.13-9.177c-1.475-1.715-3.689-2.613-6.585-2.67c-3.31 2.186-6.029 3.547-9.126 3.59h-.218c-3.1-.043-5.816-1.404-9.126-3.59c-2.897.057-5.11.955-6.586 2.67c-2.956 3.436-2.138 9.12-2.129 9.177a1 1 0 0 1-1.976.303c-.042-.27-.973-6.633 2.58-10.775c1.923-2.241 4.752-3.377 8.408-3.377a1 1 0 0 1 .554.168c3.154 2.102 5.66 3.41 8.383 3.424c2.722-.013 5.229-1.322 8.383-3.424a.997.997 0 0 1 .555-.168c3.656 0 6.484 1.135 8.407 3.377c3.554 4.142 2.622 10.506 2.581 10.775a.999.999 0 0 1-.986.847z" />
                            </svg> Manage Students
                        </li>
                    </button>
                    <div id="demo" class="collapse">



                        <li class="list-group-item">Student`s Application</li>
                        <li class="list-group-item">Student`s Attendence</li>
                        <li class="list-group-item">Students`s Feedback</li>
                        <li class="list-group-item">Due Fee</li>
                    </div>
                    {{-- Staff Management --}}
                    <button type="" class="button" data-toggle="collapse" data-target="#staff">
                        {{-- <li class="list-group-item"> --}}
                        <li class="list-group-item">
                            <img src="{{ asset('images/staff.png') }}" alt="Manage Faculties"
                                style="width: 40px; height: 40px; "> Manage Faculties
                        </li>
                    </button>
                    <div id="staff" class="collapse">

                        <li class="list-group-item">Staff`s Application</li>
                        <li class="list-group-item">Teacher`s Application</li>
                        <li class="list-group-item">Teacher`s Salary</li>
                        <li class="list-group-item">Staff`s Salary</li>
                        <li class="list-group-item">Teacher`s Feedback</li>
                        <li class="list-group-item">Library Record</li>
                    </div>


                    <button type="" class="button" data-toggle="collapse" data-target="#st">

                        <li class="list-group-item">
                            <svg height="30" width="30" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                <g fill="none" strokeLinejoin="round" strokeWidth="4">
                                    <path
                                        d="M36.686 15.171C37.9364 16.9643 38.8163 19.0352 39.2147 21.2727H44V26.7273H39.2147C38.8163 28.9648 37.9364 31.0357 36.686 32.829L40.0706 36.2137L36.2137 40.0706L32.829 36.686C31.0357 37.9364 28.9648 38.8163 26.7273 39.2147V44H21.2727V39.2147C19.0352 38.8163 16.9643 37.9364 15.171 36.686L11.7863 40.0706L7.92939 36.2137L11.314 32.829C10.0636 31.0357 9.18372 28.9648 8.78533 26.7273H4V21.2727H8.78533C9.18372 19.0352 10.0636 16.9643 11.314 15.171L7.92939 11.7863L11.7863 7.92939L15.171 11.314C16.9643 10.0636 19.0352 9.18372 21.2727 8.78533V4H26.7273V8.78533C28.9648 9.18372 31.0357 10.0636 32.829 11.314L36.2137 7.92939L40.0706 11.7863L36.686 15.171Z"
                                        fill="#2F88FF" stroke="#000" />
                                    <path
                                        d="M24 29C26.7614 29 29 26.7614 29 24C29 21.2386 26.7614 19 24 19C21.2386 19 19 21.2386 19 24C19 26.7614 21.2386 29 24 29Z"
                                        fill="#43CCF8" stroke="#fff" />
                                </g>
                            </svg>
                            Logout
                        </li>
                    </button>

                    <!-- A long list of placeholder items to enable scrolling -->



                </ul>
            </aside>

            <!-- Main Content -->
            <main id="main-content" class="main-content flex-grow-1 p-4 p-md-5">
                <div class="bg-white p-4 p-md-5 rounded-3 shadow-sm mb-4">
                    <h3 class="fw-bold text-dark">Manage Students</h3>
                    <div class="d-flex flex-wrap gap-2 mt-4">
                        <a href="{{route('student')}}" target="_blank" rel="noopener noreferrer"
                            class="btn btn-primary shadow-sm rounded-pill">Add Student</a>
                        <a href="#" class="btn btn-secondary shadow-sm rounded-pill">View All Students</a>
                        <a href="#" class="btn btn-primary shadow-sm rounded-pill">Add Faculty</a>
                        <a href="#" class="btn btn-secondary shadow-sm rounded-pill">View All Faculties</a>
                    </div>
                </div>

                <div class="bg-white p-4 rounded-3 shadow-sm overflow-x-auto">
                    <table class="table table-bordered table-striped align-middle">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">Sr No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Course</th>
                                <th scope="col">ProfilePic</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>john@example.com</td>
                                <td>Computer Science</td>
                                <td>
                                    <img src="{{ asset('images/school.png') }}" alt="Profile Pic" class="rounded-circle"
                                        style="width: 50px; height: 50px; object-fit: cover;">
                                </td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-primary ">Edit</button>
                                        <button class="btn btn-danger ">Delete</button>
                                        <button class="btn btn-info  text-white">Details</button>

                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </main>
        </div>
    </form>


</body>

</html>

{{-- <nav class="navbar navbar-inverse bg-official">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

            </button>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active">
                    <button type="" class="button" data-toggle="collapse" data-target="#stafff">
                <li class="list-group-item">
                <li class="list-group-item">
                    <img src="{{ asset('images/staff.png') }}" alt="Manage Faculties"
                        style="width: 40px; height: 40px; "> Manage Faculties
                </li>
                </button>
        </div>
        <div id="stafff" class="collapse">

            <li class="list-group-item">Staff`s Application</li>
            <li class="list-group-item">Teacher`s Application</li>
            <li class="list-group-item">Teacher`s Salary</li>
            <li class="list-group-item">Staff`s Salary</li>
            <li class="list-group-item">Teacher`s Feedback</li>
            <li class="list-group-item">Library Record</li>
            </li>

        </div>
    </div>

</nav> --}}
