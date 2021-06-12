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
<ul class="nav justify-content-end " style="margin-right: 15px ; margin-top:20px;">
    <li class="nav-item ">
        <a href="{{URL('book/create')}}" type="button" class="btn  btn-primary text-center ">Create New</a>
    </li>
</ul>
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">writer</th>
            <th scope="col">publisher</th>
            <th scope="col">Category</th>
            <th scope="col">versionNumber</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item )
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->bookName}}</td>
            <td>{{$item->writerId}}</td>
            <td>{{$item->PublisherId}}</td>
            <td>{{$item->categoryid}}</td>
            <td>{{$item->versionNumber}}</td>
            <td><a href="{{URL('/book/edit/'.$item->id)}}" type="button" class="btn btn-info">edit</a></td>
            <td><a href="{{URL('/book/delete/'.$item->id)}} type=" button" class="btn btn-danger">delete</button></td>
        </tr>

        @endforeach
    </tbody>
</table>
@endsection