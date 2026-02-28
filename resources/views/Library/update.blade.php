<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Update Books </title>
    <link rel="stylesheet" href="{{ asset('Bootstrap Css/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('Custom Css/custom.css') }}">
    <script src="{{ asset('Js/custom.js') }}"></script>
    <script src="{{ asset('Bootstrap Css/js/bootstrap.js') }}"></script>
    <script src="{{ asset('Js/jquery.js') }}"></script>
    <!-- 3. Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<body class="bg-official">

    <div class="container py-5 w-50">

        <form action="{{ route('updatebook', $book->id) }}" method="POST" enctype="multipart/form-data"
            class="form-control">
            @csrf
            @method('PUT')


            <h1 class="text">Update Books </h1>
            <div>Enter Book name</div>
            <input type="text" class="form-control form-group" name="bookname" value="{{ $book->title }}">
            <div>Enter Author Name</div>
            <input type="text" class="form-control form-group" name="Author" value="{{ $book->author }}">
            <div>Enter Book Descripton</div>
            <input type="text" class="form-control form-group" name="Description" value="{{ $book->description }}">
            <div>Select Category</div>
            <select name="category" class="form-control">

                <option value="">-- Select Category --</option>

                <option value="History" {{ $book->category == 'History' ? 'selected' : '' }}>History</option>

                <option value="Study" {{ $book->category == 'Study' ? 'selected' : '' }}>Study</option>

                <option value="Technology" {{ $book->category == 'Technology' ? 'selected' : '' }}>Technology</option>

                <option value="Current Affair" {{ $book->category == 'Current Affair' ? 'selected' : '' }}>Current
                    Affair</option>

                <option value="Self-Help" {{ $book->category == 'Self-Help' ? 'selected' : '' }}>Self-Help</option>

                <option value="Spiritual" {{ $book->category == 'Spiritual' ? 'selected' : '' }}>Spiritual</option>

            </select>
            <div>Current Cover Image</div>
            <img src="{{ asset('upload/Bookwithimage/'.$book->cover_image) }}" width="100" class="mb-2">

            <input type="file" name="img" class="form-control">
            <div>Current PDF</div>

            <a href="{{ asset('upload/Bookwithimage/'.$book->pdf_file) }}" target="_blank">
                View Current PDF
            </a>

            <input type="file" name="book" class="form-control mt-2">
            <button type="submit" class="btn btn-primary">Update</button>

        </form>
    </div>

</body>



</head>

</html>