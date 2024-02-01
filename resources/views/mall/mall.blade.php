<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- import bootstrap  -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    
    <body>
        <div class="card">
                <div class="container" style="margin-top: 80px">
                    <div class="row">
                        <div class="col-md-12">
                                 <div class="card-header">
                                    <div class="container">
                                        <div class="child" style=>MALL</div>
                                        </div>
                    <a href="mall/create" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH MALL</a>
             <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>           
                <th>id</th>                                                              
                <th>nama</th>        
            </tr>            
        </thead>

        <tbody>
            @foreach($data as $index => $item)
            <tr>                
                <td>{{$index + 1}}</td>
                <td>{{$item->nama}}</td>             
            </tr>
            @endforeach
            <tr>
                <td><a  href="/dashboard" class="btn btn-primary" role="button" data-bs-toggle="button">Kembali</>
            </tr>
        </tbody>
    </table>
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