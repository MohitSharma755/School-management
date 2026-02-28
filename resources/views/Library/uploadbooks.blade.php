<!DOCTYPE html>
<html lang="en">
@if(session('success'))
<script>
    alert("{{ session('success') }}");
</script>
@endif

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

        <form action="{{ url('uploadbook')}}" method="post" class="form-control" enctype="multipart/form-data">
            @csrf
            <h1 class="text">Upload Books </h1>
            <div>Enter Book name</div>
            <input type="text" class="form-control form-group" name="bookname">
            <div>Enter Author Name</div>
            <input type="text" class="form-control form-group" name="Author">
            <div>Enter Book Descripton</div>
            <input type="text" class="form-control form-group" name="Description">
            <div>Select Category</div>
            <select name="category" class="form-control">
                <option value="">-- Select Category --</option>

                option value="History">History</option>
                <option value="Study">Study</option>
                <option value="Technology">Technology</option>
                <option value="Current Affair">Current Affair</option>
                <option value="Self-Help">Self-Help</option>
                <option value="Spiritual">Spiritual</option>
            </select>
            <div>Select Cover image for Your Book</div>
            <input type="file" name="img" id="" class="form-control">
            <div>Upload Your Book</div>
            <input type="file" name="book" id="" class="form-control">
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>

</body>



</head>

</html>