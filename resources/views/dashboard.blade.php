<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <center>
        <h1>Selamat Datang</h1>
        <a href="{{ url('dashboard') }}" style="text-decoration:none;margin-left:.2rem;color:black">Dashboard</a>
        <a href="{{ url('catatanperjalanan') }}" style="text-decoration:none;margin-left:.2rem;color:black">Catatan Perjalanan</a>
        <a href="{{ url('logout') }}" style="text-decoration:none;margin-left:.2rem;color:black">Logout</a>
        </center>
    
        <table class="table container mt-5"> 
            <thead class="text-dark"> 
              <tr> 
                <th scope="col">No</th>  
                <th scope="col">Date</th> 
                <th scope="col">Time</th> 
                <th scope="col">Location</th> 
                <th scope="col">Body Temprature</th> 
              </tr> 
            </thead> 
            <tbody>
              <tr class="text-dark"> 
                <td scope="col">1</td>
                <td scope="col">18-02-2005</td>
                <td scope="col">20.30</td>
                <td scope="col">Jakarta</td>
                <td scope="col">20</td> 
              </tr> 
              <tr class="text-dark"> 
                <td scope="col">2</td>
                <td scope="col">10-12-2020</td>
                <td scope="col">10.40</td>
                <td scope="col">Bandung</td>
                <td scope="col">15</td> 
              </tr> 
              <tr class="text-dark"> 
                <td scope="col">3</td>
                <td scope="col">20-03-2014</td>
                <td scope="col">12.00</td>
                <td scope="col">Bekasi</td>
                <td scope="col">60</td> 
              </tr> 
              <button type="button" class="btn btn-primary mt-3" style="margin-left:8%">Tambah</button>
            </tbody>      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>