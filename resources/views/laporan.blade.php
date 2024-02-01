<!DOCTYPE html>
    <html lang="en" data-bs-theme="dark">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LAPORAN</title>
        <!-- import bootstrap  -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    
    <body>
            <br>
           <form method="POST" action="/laporan">
            @csrf         
              <div class="card">
                <div class="container" style="margin-top: 80px">
                    <div class="row">
                        <div class="col-md-12">
                                 <div class="card-header">
                                    <div class="container">
                                        <div class="child" style=>LAPORAN</div>
                                        </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>                                               
                        <th>Jumlah Mobil</th>
                        <th>Biaya</th>                                                                    
                        <th>Jumlah(Rp)</th>
                    </tr>
                </thead>                  
                <tbody>                           
                    <tr>
                        <td>{{$data["jumlah_mobil"]}}</td>
                        <td>{{$data["biaya"]}}</td>
                        <td>{{$data["total"]}}</td>                          
                    </tr>                       
                    <tr>
                        <td><a  href="/dashboard" class="btn btn-primary" role="button" data-bs-toggle="button">Kembali</>
                    </tr>
                </tbody>
            </table>         
        </form>   
</body>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>
    </body>
    
    </html>

<style>
.child {
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  font-size: 34px;
  text-align: center;
  font-weight: bold;
  margin: 0 auto;
}
</style>
</html>