@extends('layout')
@section("Forms")
<form class="d-block" action="{{URL('/publisher/store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">publisher Name</label>
        <input type="text"class="form-control" name="publisherName" id="publisherName"
            placeholder="publisherName">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection