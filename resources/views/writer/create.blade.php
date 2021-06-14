@extends('layout')
@section("Forms")
<form class="d-block" action="{{URL('/writer/store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Writer Name</label>
        <input type="text" class="form-control" name="writerName" id="writerName" placeholder="writerName">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a class=" btn btn-danger" style="margin-inline-start: 15px;" href="{{URL('category/index')}}">Cancel</a>
</form>
@endsection