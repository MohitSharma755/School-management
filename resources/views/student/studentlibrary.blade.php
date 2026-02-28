<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Panel</title>
    <link rel="stylesheet" href="{{ asset('Bootstrap Css/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('Custom Css/custom.css') }}">
    <script src="{{ asset('Js/custom.js') }}"></script>
    <script src="{{ asset('Bootstrap Css/js/bootstrap.js') }}"></script>
    <script src="{{ asset('Js/jquery.js') }}"></script>
    <!-- 3. Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">


</head>

<body>
    <center>
        <h1 class="color">This is Digital Library for you........</h1>
        <div>
            <select name="category" class=" m-2">
                <option value="">-- Select Book Category --</option>

                option value="History">History</option>
                <option value="Study">Study</option>
                <option value="Technology">Technology</option>
                <option value="Current Affair">Current Affair</option>
                <option value="Self-Help">Self-Help</option>
                <option value="Spiritual">Spiritual</option>
            </select>

        </div>
    </center>



    {{-- Dynamic Book --}}
    <div class=" container p-2 book border">




        <div class="container">
            <div class="row">

                @foreach ($allbooks as $book)

                <div class="col-4 mb-4"> {{-- 4 books per row --}}
                    <div class="card  shadow-sm">

                        <a href="{{ asset('upload/Bookwithimage/'.$book->pdf_file) }}" target="_blank"
                            style="text-decoration: none; color: black;">

                            <img src="{{ asset('upload/Bookwithimage/'.$book->cover_image) }}" class="card-img-top"
                                style="height: 250px; object-fit: cover;">

                            <div class="card-body">

                                <h5 class="card-title">{{ $book->title }}</h5>

                                <p class="card-text">
                                    <strong>Author:</strong> {{ $book->author }} <br>
                                    <strong>Category:</strong> {{ $book->category }}
                                </p>

                            </div>

                        </a>

                    </div>
                </div>

                @endforeach

            </div>
        </div>



    </div>



</body>

</html>