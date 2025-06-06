<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
  <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('Bootstrap Css/css/bootstrap.css') }}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('Custom Css/custom.css') }}">
<body>
    <div class = "py-5">
        <form type="submit" method ="post">
          <div><label for = "name">Name *</label></div>
            <input type = "text" id= "name" required placeholder =" please enter your name" >
             <div><label for = "pass">Password *</div>
            <input type = "text" id = " pass"required placeholder =" please enter your name" >
            <button>Login</button>
        </form>

    </div>
</body>
</html>