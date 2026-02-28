<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Library Portal</title>
    <link rel="stylesheet" href="{{ asset('Bootstrap Css/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('Custom Css/custom.css') }}">
    <script src="{{ asset('Js/custom.js') }}"></script>
    <script src="{{ asset('Bootstrap Css/js/bootstrap.js') }}"></script>
    <script src="{{ asset('Js/jquery.js') }}"></script>
    <!-- 3. Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>





</head>

<body class="bg-light">

    <div class="bg-official p-2 d-flex justify-content-between align-items-center">
        <h1 class="text-center p-3 text-white">
            Welcome in Library Portal MR. {{ session('staff')->name ?? '' }}
        </h1>

        <form action="{{ url('librarylogout') }}">
            <h5> <button type="submit" class="btn btn-danger text-white">Logout</button></h5>
            @csrf
        </form>
    </div>
    <!-- Navbar -->

    {{-- <form> --}}
        {{-- Token will come here--}}
        <div class="d-flex">

            <!-- Sidebar -->
            <aside id="sidebar" class="sidebar bg-official">
                <li class="list-group-item active" aria-current="true">
                    <h1 class="text-white">Dashboard</h1>
                </li>
                {{-- <h2 class="text-center mb-4">Faculties</h2> --}}
                <ul class="list-group list-group-flush ">

                    <button type="" class="button" data-toggle="collapse" data-target="#demo">
                        <li class="list-group-item"> 📚📖
                            Manage Books Section
                        </li>
                    </button>
                    <div id="demo" class="collapse">



                        {{-- <li class="list-group-item">Upload Book</li> --}}
                        <a href="{{ route('booksoperation') }}" target="_blank" rel="noopener noreferrer">
                            <li class="list-group-item">📚 Edit Book Information </li>
                        </a>
                        <li class="list-group-item">
                            <a href="{{ route('Book') }}" target="_blank" rel="noopener noreferrer"
                                class="list-group-item border">
                                <div> 📚 Upload a Book</div>
                            </a>

                        </li>
                        <li class="list-group-item">Due Fee</li>
                    </div>

                    {{-- Staff Management --}}

                    <a href="http://" target="_blank" rel="noopener noreferrer">
                        <li class="list-group-item ">💡 Member`s Suggestions</li>
                    </a>
                    <a href="{{ route('FeedbackPage') }}" target="_blank" rel="noopener noreferrer">
                        <li class="list-group-item">👍 Member`s Feedback</li>
                    </a>
                    {{-- <a href="{{ route('Book') }}" target="_blank" rel="noopener noreferrer"
                        class="list-group-item border">
                        <div> 📚 Upload a Book</div>
                    </a> --}}
                    {{-- <a href="http://" target="_blank" rel="noopener noreferrer" class="list-group-item border">
                        <div> 📚 Remove a Book</div>
                    </a> --}}
                    <a href="http://" target="_blank" rel="noopener noreferrer" class="list-group-item border">
                        <div> 📚📖 Check all books</div>
                    </a>
                    <a href="http://" target="_blank" rel="noopener noreferrer" class="list-group-item border">
                        <div> ✅️ Issued books</div>
                    </a>
                    <a href="http://" target="_blank" rel="noopener noreferrer" class="list-group-item border">
                        <div>
                            🙍🏻‍♂️ Make a member</div>
                    </a>

                    <a href="http://" target="_blank" rel="noopener noreferrer" class="list-group-item border">
                        <div>

                            ❌ Remove a member</div>
                    </a>


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
                    <h3 class="fw-bold text-dark">Manage Books Records</h3>
                    <div class="d-flex flex-wrap gap-5 mt-4">

                        <div class="bg-official rounded p-4 shadow-lg text-white">
                            <h4> 🙍🏻‍♂️ Total Members</h4>
                            <h4>
                                <center>600</center>
                            </h4>

                        </div>
                        <div class="bg-official rounded p-4 shadow-sm text-white">
                            <h4> 📚 Total Books</h4>
                            <h4>
                                <center>1500</center>
                            </h4>
                        </div>
                        <di class="bg-official rounded p-4 text-white shadow-sm ">
                            <h4>
                                🙍🏻‍♂️ Active Members
                            </h4>

                            <h4 class="text-align-center">
                                <center>450</center>
                            </h4>

                    </div>
                </div>

        </div>
        </div>



        </main>
        </div>
        {{--
    </form> --}}


</body>

</html>