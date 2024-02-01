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
        {{'Ruang Parkir'}}
    
    <form method="POST" action="/ruang_parkir">
        @csrf
        <table border="0" cellpadding="0" cellspacing="3">
            <thead>
                <tr>
                    <td>Nama Petugas : {{$user->name}} </td>            
                </tr>
                <tr>
                    <td>Mall : {{$mall->nama}}</td>
                </tr>           
            </thead>        
            <tbody>

                <tr>
                    <th>Nomor Kendaraan</th>
                </tr>
                <tr>                                        
                    <td>                        
                        <select name="transaksi_id" id="transaksi_id">
                            @foreach($transaksi as $item)
                            <option value="{{$item->id}}">{{$item->nomor_kendaraan}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>                                
                <tr>
                    <th>Lahan Parkir</th>
                </tr>
                <tr>
                    <td>
                        <select name="lahan_parkir_id" id="lahan_parkir_id">
                        @foreach($lahan_parkir as $item)
                        <option value="{{$item->id}}">Lantai {{$item->lantai}} - Lokasi {{$item->lokasi}}</option>                        
                        @endforeach
                        </select> 
                    </td>
                </tr>                                
                <tr>
                    <td colspan="2">                                                                        
                            <input type="submit" value="Submit">                          
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    </x-slot>        
    
    
</x-app-layout>

<style>    
    tr td {
        text-align: center;
        font-size: 20px;        
    }
    .input-kendaraan {                    
        font-size: 20px;
        width: 200px;
        height: 50px;
        text-align: center;
    }

    .lahan-parkir {                
        font-size: 20px;
        width: 200px;
        height: 50px;
        text-align: center;
    }

    a {
        color: black;
    }     
   

    input[type=submit] {
        background-color: #04AA6D;
        border: none;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
    }
</style>
</html>