@extends('layouts/main')

@section('container')
<a href="/lahan_parkir/create" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH</a>
<div class="container">           
  <table class="table table-bordered">
    <thead>
        <tr>                
            <th>id</th>                                                              
            <th>mall_id</th>        
            <th>lokasi</th>
            <th>petak</th>
            <th>lantai</th>
        </tr>            
    </thead>

    <tbody>
        @foreach($data as $index => $item)
        <tr>                
            <td>{{$index + 1}}</td>
            <td>{{$item->mall->nama}}</td>
            <td>{{$item->lokasi}}</td> 
            <td>{{$item->petak}}</td>
            <td>{{$item->lantai}}</td>
            <td><a href="/lahan_parkir/edit/{{$item->id}}">Edit</a> <a href="/lahan_parkir/delete/{{ $item->id }}">Hapus</a></td>                       
        </tr>
        @endforeach
    </tbody>
</table>


@endsection