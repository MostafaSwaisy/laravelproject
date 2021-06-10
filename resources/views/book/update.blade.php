@extends('layout')
@section("Forms")
<form class="d-block" action="{{URL('/book/update/'.$book->id)}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Book Name</label>
        <input type="text" value="{{$book->bookName}}" class="form-control" name="bookName" id="bookName"
            aria-describedby="emailHelp" placeholder="Book Name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Writer</label>
        <div class="d-block">
            <select class="form-select form-select-lg mb-3" aria-label="Default select example" name="writer"
                id="Writer">
                <option value="-1">Open this select menu</option>
                @foreach ($writerItems as $item )
                <option value="{{$item->id}}" @if ($book->id==$item->id)
                    selected
                    @endif>{{$item->Name}}</option>
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
                <option value="{{$item->id}}" @if ($book->id == $item->id)
                    selected
                    @endif>{{$item->publisherName}}</option>
                @endforeach
            </select>
        </div>

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"> Version Number</label>
        <input type="number" value="{{$book->versionNumber}}" class="form-control" name="versionNumber" id="versionNumber" placeholder="Version Number">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection