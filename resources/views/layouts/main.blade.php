<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CAR-PARK | {{ $title }}</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">        
    <div class="container">        
        
        <a class="navbar-brand" href="/dashboard">Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link {{ ($title === 'Mall') ? 'active' : ''" aria-current="page" href="/mall">Mall</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ ($title === 'Users') ? 'active' : '' " href="/users">Users</a>
            </li>              
            <li class="nav-item">
            <a class="nav-link {{ ($title === 'Lahan Parkir') ? 'active' : '' " href="/lahan_parkir">Lahan Parkir</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ ($title === 'Transaksi') ? 'active' : '' " href="/laporan">Laporan</a>
            </li>         
        </ul>   
        </div>

        <div class="header">
            <h1 class="judul">-</h1>
            <img class="image" src="gambar.png" alt="car-park" width="150"></div>            
            <br>
        </div>    
    </div>
    </nav>
    <hr size="5">

<style>
.header {    
    height: auto;
    font-family: 'Courier New', Courier, monospace;    
    font-size: 20px;
    margin: -27px -8px;
}

.header .judul {
    color: #457b9d;
    margin-left: 130px;
    margin-top: 50px;
}

.header .image {
    margin: -97px 0px 0px -35px;
}

hr {
    margin-top: -3px;
    border-style: inset;
}


</style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <div class="container mt-4">
        @yield('container')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>