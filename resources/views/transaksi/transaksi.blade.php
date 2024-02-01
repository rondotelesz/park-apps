@extends('layouts/main')

@section('container')
<a href="mall/create">Tambah</a>
<table>
    <thead>
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
            <td><a href="/mall/edit/{{$item->id}}">Edit</a> <a href="/mall/delete/{{ $item->id }}">Hapus</a></td>                       
        </tr>
        @endforeach
    </tbody>
</table>


@endsection