@extends('layout')
@section("Forms")
<form class="d-block" action="{{URL('/publisher/update/'.$publisherItem->id)}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">publisher Name</label>
        <input type="text" value="{{$publisherItem->publisherName}}" class="form-control" name="publisherName" id="writerName"
            placeholder="publisherName">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection