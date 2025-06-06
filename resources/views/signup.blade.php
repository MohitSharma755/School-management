<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<!-- Bootstrap css -->
<link rel="stylesheet" href="{{ asset('Bootstrap Css/css/bootstrap.css') }}">
<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('Custom Css/custom.css') }}">

<body class="bg-light ">
    <div class="position-absolute top-100 start-50 translate-middle w-50">
        <form type="submit" method="post" class="form-control  shadow p-5 bg-white rounded-3">
            @csrf
            <div>
                <label for="name" class="form-label">Name</label>
                <input type="text" required placeholder=" Please enter your name" id="name"
                    class="form-control">

            </div>
            <div>
                <label for="email" class="form-label">Email</label>
                <input type="email" required placeholder=" Please enter your email" id="email" class="form-control">

            </div>
            <div>
                <label for="password" class="form-label">Password</label>
                <input type="password" required placeholder=" Please enter your password"
                    id="password"class="form-control">
                <div>
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" required placeholder=" Please confirm your password" id="confirm_password"
                        class="form-control">
                </div>
                <div>
                    <label for="add" class="form-label">Address</label>
                    <input type="text" required placeholder=" Please enter your address" id="add"
                        class="form-control">
                </div>
                <div>
                    <label for="class" class="form-label">Class</label>
                    <select name="" id=""class="form-control">
                        <option value="">Please Select Your Class</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                        <option value="">6</option>
                        <option value="">7</option>
                        <option value="">8</option>
                        <option value="">9</option>
                        <option value="">10</option>
                        <option value="">11</option>
                        <option value="">12</option>
                    </select>
                </div>
                <div>
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" required placeholder=" Please enter your phone number" id="phone" class="form-control">

                </div>
                <div>
                    <label for="emergency">Emergency Contact</label>
                    <input type="tel" required placeholder=" Please enter emergency contact number" id="emergency" class="form-control">
                </div>
                <div> <label for="name">User Type</label></div>
                <input type="text" required placeholder=" Please enter your user type" id="name" value="Student" class="form-control"
                    readonly>

            </div>
            <div>
                <label for="date">Date</label>
                <input type="datetime" name="date" id="date" value="{{ now() }}" class="form-control">

            </div>
            <div>
                <label for="img" class="form-label">Profile Picture</label>
                <input type="file" accept="image/*" id="img">

            </div>
            <div>
                <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</body>

</html>
