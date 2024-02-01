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
        {{'Gerbang Masuk'}}
    <form method="POST" action="/gerbang_masuk">
        @csrf
    <table border="0" cellpadding="0" cellspacing="3">
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
                <th><label for="nomor_kendaraan">Nomor Kendaraan</label></th>
            </tr>
            <tr>
                <th>
                    <input type="text" name="nomor_kendaraan" size="75"required="required">
                </th> 
            </tr>
            <tr>
                <td colspan="2">                       
                        <input type="submit" value="Simpan Data">                          
                </td>
            </tr>
        </tbody>
    </table>
    </form>                
        
    </x-slot>        
    
    
</x-app-layout>
<body>      
    
        
           
</body>

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
    
    input[type=text] {
        width: 100%;
        box-sizing: border-box;
        border: none;
        border-bottom: 1px solid;
        text-align: center;
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