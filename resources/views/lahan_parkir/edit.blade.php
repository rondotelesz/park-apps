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
    <form method="POST" action="/lahan_parkir/update/{{$lahan_parkir->id}}">   
            @csrf         
            <table border="1" cellspacing="0" cellpadding="5"> 
                <tr>
                    <td>                    
                        <label for="nama">Mall</label>                                        
                    </td>
                    <td>
                        <select name="mall_id" id="mall">
                        @foreach($mall as $item)
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                        @endforeach
                        </select>
                    </td>                                        
                </tr>                  
                <tr>
                    <td>
                        <label for="lokasi">Lokasi</label>
                    </td>
                    <td>
                        <input type="text" name="lokasi" required="required">
                    </td>  
                </tr>
                    <td>
                        <label for="petak">Petak</label>
                    </td>
                    <td>
                        <input type="text" name="petak" required="required">
                </tr>            
                <tr>
                    <td>
                        <label for="lantai">Lantai</label>
                    </td>
                    <td>
                        <input type="text" name="lantai" required="required">
                    </td>
                </tr>                    
                    <td colspan="2">                                                 
                            <button id="submit"><a href="/lahan_parkir">Batal</a></button>
                            <input type="submit" value="Simpan Data">                          
                    </td>
                
            </table>         
    </form>
</body>
</html>