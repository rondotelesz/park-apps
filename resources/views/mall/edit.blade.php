<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="judul">Masukkan Nama Mall</div>
    <form method="POST" action="/mall/update/{{$mall->id}}">   
            @csrf         
            <table border="1" cellspacing="0" cellpadding="5"> 
                <tr>
                    <td>                    
                        <label for="nama">Nama Mall</label>                                        
                    </td>
                    <td>                        
                        <input type="text" name="nama" value="{{$mall->nama}}" required="required">                        
                    </td>                     
                </tr>                  
                    <td colspan="2">                                                 
                            <button id="submit"><a href="/mall">Batal</a></button>
                            <input type="submit" value="Simpan Data">                          
                    </td>
                </tr>            
            </table>         
    </form>
</body>
</html>