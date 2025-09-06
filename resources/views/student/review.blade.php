<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Review</title>
    <link rel="stylesheet" href="{{ asset('Bootstrap Css/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('Custom Css/custom.css') }}">
    <script src="{{ asset('Js/custom.js') }}"></script>
    <script src="{{ asset('Bootstrap Css/js/bootstrap.js') }}"></script>
    <script src="{{ asset('Js/jquery.js') }}"></script>

</head>

<body class="bg-official">

    <h1 class="text-center text-white py-3">Feedback and Suggestions</h1>
    <div class="container py-5">
        <form action="" method="POST" class=" bg-white shadow-lg  form-container p-3">
            @csrf
            <h2 class="color text-center mb-4">We would love to hear from you!</h2>
            <div>
                <label for="exampleFormControlInput1" class="form-label color">Book Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Name">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label color">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label color">Demand a book</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Book Title">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label color">Your Feedback</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <center> <button type="submit" class="btn btn-primary ">Post Your Feedback ⭐</button></center>
        </form>
    </div>
</body>

</html>
