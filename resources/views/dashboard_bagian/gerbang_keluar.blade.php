<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<x-app-layout>   
    <x-slot name="header">        
        {{'Gerbang Keluar'}}
            
        <table border="1" cellpadding="0" cellspacing="3">
            <thead>
                <tr>
                    <td>Nama Petugas : {{$user->name}}</td>            
                </tr>
                <tr>
                    <td>Mall : {{$mall->nama}}</td>
                </tr>           
            </thead>        
            <tbody>

                <tr>
                    <th>Nomor Kendaraan</th> 
                    <th>Waktu Masuk</th>                                        
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                @foreach($transaksi as $item)
                <form method="POST" action="/gerbang_keluar">
                @csrf               
                    <tr>    
                        <input type="text" name="transaksi_id" value="{{ $item->id }}" size="75"required="required" style="display:none;">
                        <td>                                                                    
                            {{$item->nomor_kendaraan}}
                        </td>            
                        <td>                                                                    
                            {{$item->waktu_masuk}}
                        </td>
                        <td>
                            @if($item->lahan_parkir_id)
                                Parking
                            @else
                                Belum
                                @endif                    
                            </td>                                                    
                            <td colspan="2">                                                                             
                                <input type="submit" value="Keluar">
                            </td>
                        </tr>                
                </form>        
                @endforeach                                                            
            </tbody>
        </table>
    </x-slot>        
    
    
</x-app-layout>

<style>
    tbody {
        border: 1px solid;
    }
    tr th {
        text-align: center;
        font-size: 20px;        
    }    
    tr td {
        text-align: center;
        font-size: 20px;        
    }        

    a {
        color: black;
    }  

    tr:nth-child(even) {background-color: #f2f2f2;}

    th {
        background-color: #04AA6D;
        color: white;
    }

    th, td {    
    padding: 15px;
  text-align: left;
}
        
</style>
</html>