<!DOCTYPE HTML>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <style>
            * {
                margin: 0;
                padding: 0;
                outline: 0;
                font-family: 'Open Sans', sans-serif;
            }
    
            body {
                height: 100vh;
                background-image: url(https://dosenit.com/wp-content/uploads/2020/10/Gunung-Fuji-Jepang-1024x640-1.jpg);
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
    
            p {
                color: white;
                font-family: 'Open Sans', sans-serif;
                padding-top: 10px;
            }
    
            h1 {
                text-align: center;
                padding-left: 100px;
                padding-bottom: 20px;
            }
    
            a {
                color: white;
                font-family: 'Open Sans', sans-serif;
            }
    
            .container {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                padding: 20px 25px;
                width: 300px;
    
                background-color: rgba(0, 0, 0, .7);
                box-shadow: 0 0 10px rgba(255, 255, 255, .3);
            }
    
            .container h1 {
                text-align: left;
                color: #fafafa;
                margin-bottom: 30px;
                text-transform: uppercase;
                border-bottom: 4px solid #752BEA;
            }
    
            .container label {
                text-align: left;
                color: #90caf9;
            }
    
            .container form input {
                width: calc(100% - 20px);
                padding: 8px 10px;
                margin-bottom: 15px;
                border: none;
                background-color: transparent;
                border-bottom: 2px solid #752BEA;
                color: #fff;
                font-size: 20px;
            }
    
            .container form button {
                width: 100%;
                height: 40px;
                padding: 5px 0;
                border: none;
                background-color: #752BEA;
                font-size: 18px;
                color: #fafafa;
                border-radius: 20px;
            }
    
        </style>
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <form action="{{ route('login.post') }}" method="POST">
            @csrf

            <div class="form-group mt-3"> <input type="number" class="form-control form-control-lg" name="nik"
                    placeholder="NIK" required autofocus> @if ($errors->has('nik')) <span
                    class="text-danger">{{ $errors->first('nik') }}</span> @endif </div>
            <div class="form-group"> <input type="text" class="form-control form-control-lg" name="namalengkap"
                    placeholder="Nama Lengkap" required autofocus> @if ($errors->has('namalengkap')) <span
                    class="text-danger">{{ $errors->first('namalengkap') }}</span> @endif </div>
            <div class="form-group"> <input type="password" class="form-control form-control-lg" name="password"
                    id="exampleInputPassword1" placeholder="Password" required> @if ($errors->has('password')) <span
                    class="text-danger">{{ $errors->first('password') }}</span> @endif </div>
            <div class="mt-3"> <button type="submit"
                    class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"> Login </button>
                <p> Belum punya akun?
                    <a href="register.html">Register di sini</a>
                </p>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
