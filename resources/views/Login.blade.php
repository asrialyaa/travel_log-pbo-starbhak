<!DOCTYPE HTML>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <form action="{{ route('login.post') }}" method="POST">
            @csrf>

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
