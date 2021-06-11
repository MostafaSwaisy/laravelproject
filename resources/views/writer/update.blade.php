@extends('layout')
@section("Forms")
<form class="d-block" action="{{URL('/writer/update/'.$writerItem->id)}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Writer Name</label>
        <input type="text" value="{{$writerItem->Name}}" class="form-control" name="writerName" id="writerName"
            placeholder="writerName">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection