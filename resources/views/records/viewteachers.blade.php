<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Teachers Record</title>

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

<body>
    <h1>All Teahers records will update Soon.....</h1>
    <div>
        <div class="table-responsive">
            <table class="table  table-striped">
                <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Phone</th>
                        <th>Roll</th>
                        <th>Fee</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Rohan</td>
                        <td>1</td>
                        <td>9897294141</td>
                        <td>1</td>
                        <td class="text-danger">1000 pending</td>
                        <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Mohan</td>
                        <td>2</td>
                        <td>9897294141</td>
                        <td>2</td>
                        <td class="text-danger">No pending</td>
                        <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
</body>

</html>
