@extends('layout')
@section("dataTable")
@if (\Session::get('msg'))
<div class="alert alert-success">
    {{\Session::get('msg')}}
</div>
@endif
@if (\Session::get('msgINFO'))
<div class="alert alert-info">
    {{\Session::get('msgINFO')}}
</div>
@endif
@if (\Session::get('msgDelete'))
<div class="alert alert-danger">
    {{\Session::get('msgDelete')}}
</div>
@endif
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <td><a href="{{URL('writer/create')}}" type="button" class="btn btn-primary">Create New</a></td>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item )
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->Name}}</td>
            <td><a href="{{URL('/writer/edit/'.$item->id)}}" type="button" class="btn btn-info">edit</a></td>
            <td><a href="{{URL('/writer/destroy/'.$item->id)}} type="button" class="btn btn-danger">delete</button></td>
        </tr>

        @endforeach
    </tbody>
</table>
@endsection