@extends('layout')
@section("Forms")

@if (\Session::get('msgDelete'))
<div class="alert alert-danger">
    {{\Session::get('msgDelete')}}
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form class="d-block" action="{{URL('book/store')}}" method="POST">
    @csrf
    <div class=" form-group">
        <input type="hidden" style="visibility: hidden" name="is_token" value="{{csrf_token()}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Book Name</label>
        <input type="text" class="form-control" name="bookName" id="bookName" aria-describedby="emailHelp"
            placeholder="Book Name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Writer</label>
        <div class="d-block">
            <select class="form-select form-select-lg mb-3" aria-label="Default select example" name="writer"
                id="Writer">
                <option value="-1">Open this select menu</option>
                @foreach ($writerItems as $item )
                <option value="{{$item->id}}">{{$item->Name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"> publisher</label>
        <div class="d-block">
            <select class="form-select form-select-lg mb-3" aria-label="Default select example" name="publisher"
                id="publisher">
                <option value="-1">Open this select menu</option>
                @foreach ($publisherItems as $item )
                <option value="{{$item->id}}">{{$item->publisherName}}</option>
                @endforeach
            </select>
        </div>

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"> Category</label>
        <div class="d-block">
            <select class="form-select form-select-lg mb-3" aria-label="Default select example" name="category"
                id="category">
                <option value="-1">Open this select menu</option>
                @foreach ($categoryItems as $item )
                <option value="{{$item->id}}">{{$item->Name}}</option>
                @endforeach
            </select>
        </div>

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"> Version Number</label>
        <input type="number" class="form-control" name="versionNumber" id="versionNumber" placeholder="Version Number">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a class=" btn btn-danger" style="margin-inline-start: 15px;" href="{{URL('category/index')}}">Cancel</a>
</form>
@endsection