<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Upload Books </title>
    <link rel="stylesheet" href="{{ asset('Bootstrap Css/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('Custom Css/custom.css') }}">
    <script src="{{ asset('Js/custom.js') }}"></script>
    <script src="{{ asset('Bootstrap Css/js/bootstrap.js') }}"></script>
    <script src="{{ asset('Js/jquery.js') }}"></script>
    <!-- 3. Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<body class="bg-official">

    <div class="container py-5 w-50">
        <form action="" method="post" class="form-control ">
            <h1>Upload Books </h1>
            <div>Enter Book name</div>
            <input type="text" class="form-control form-group">
            <div>Select Category</div>
            <select name="" id="" class="form-control">
                <option value="">
                    History
                </option>
                <option value="">
                    Study
                </option>
                <option value="">
                    Technology
                </option>
                <option value="">
                    Current Afair
                </option>
                <option value="">
                    Self-Help
                </option>
                <option value="">
                    Spritual
                </option>
            </select>
            <div>Upload Your Book</div>
            <input type="file" name="" id="" class="form-control">
            <center class="m-2"> <input type="submit" value="Upload" class="btn btn-primary "></center>
        </form>
    </div>
    </center>
</body>



</head>

</html>
