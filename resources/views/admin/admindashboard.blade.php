<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('Bootstrap Css/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('Custom Css/custom.css') }}">
</head>

<body class="bg-light">
    <h1 class="text-center color">Welcome In Admin Panel</h1>
    <div class="py-5 container-fluid">
        <div class="row">
            <div class="col-12 col-md-2 bg-light border-end">
                <h2 class="text-center">Faculties</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Dashboard</li>
                    <li class="list-group-item">Manage Students <img src="{{ asset('images/student.png') }}" alt="" style="width: 28px; height: 50px;"></li>
                    <li class="list-group-item">Manage Faculties <img src="{{ asset('images/staff.png') }}" alt=""  style="width: 29px; height: 50px;"></li>
                    <li class="list-group-item">Settings <img src="{{ asset('images/setting.png') }}" alt="" class="w-25"></li>
                </ul>
            </div>

            <div class="col-12 col-md-10 text-center">
                <h3>Manage Students</h3>
                <div class="d-flex flex-wrap justify-content-between mb-3">
                    <button class="btn btn-primary my-1">Add Student </button>
                    <button class="btn btn-secondary my-1">View All Students</button>
                    <button class="btn btn-primary my-1">Add Faculty</button>
                    <button class="btn btn-secondary my-1">View All Faculties</button>
                </div>
                
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sr No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Course</th>
                                <th>ProfilePic</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>john@example.com</td>
                                <td>Computer Science</td>
                                <td><img src="{{ asset('images/profile.jpg') }}" alt="Profile Pic" class="img-fluid"
                                        style="width: 100px; height: 50px;"></td>
                                <td>
                                    <button class="btn btn-primary">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                    <button class="btn btn-info">Details</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('Bootstrap Css/js/bootstrap.js') }}"></script>
</body>

</html>