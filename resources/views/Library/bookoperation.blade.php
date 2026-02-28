<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Operation</title>
    <link rel="stylesheet" href="{{ asset('Bootstrap Css/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('Custom Css/custom.css') }}">
    <script src="{{ asset('Js/custom.js') }}"></script>
    <script src="{{ asset('Bootstrap Css/js/bootstrap.js') }}"></script>
    <script src="{{ asset('Js/jquery.js') }}"></script>
    <!-- 3. Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<body>

    <h1 class="text">
        This is Book Correction Portal
    </h1>

    <div class="container border py-4 ">
        <div class="row align-items-center px-4 bg-official">
            @foreach ($allbook as $book)


            <!-- Book Cover -->
            <p>{{ $book->id }}</p>
            <div class="col-md-2">
                <a href="{{ asset('upload/Bookwithimage/'.$book->pdf_file) }}" target="_blank"
                    style="text-decoration: none; color: black;">
            </div>




            <!-- PDF Preview -->
            <div class="col-md-4">
                <img src="{{ asset('upload/Bookwithimage/'.$book->cover_image) }}" class=""
                    style="height: 25px; object-fit: cover;">
            </div>
            <p class="card-title">{{ $book->title }}</p>
            <strong>Author:</strong> {{ $book->author }} <br>
            <strong>Category:</strong> {{ $book->category }}
            </a>
            <!-- Buttons -->
            <div class="col-md-6 d-flex justify-content-end gap-2">
                <div class="d-flex justify-content-end gap-2">

                    <a href="{{ route('Edit', $book->id) }}" class="btn btn-primary btn-sm">
                        Edit
                    </a>

                    {{-- <a href="{{ route('Update', $book->id) }}" class="btn btn-outline-success btn-sm">
                        Update
                    </a> --}}

                    <form action="{{ route('Delete', $book->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete(this)">
                            Delete
                        </button>
                    </form>

                </div>


            </div>
            @endforeach
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function confirmDelete(button) {

    Swal.fire({
        title: 'Are you sure?',
        text: "This book will be permanently deleted!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {

        if (result.isConfirmed) {
            button.closest("form").submit();
        }

    });
}
</script>

</html>