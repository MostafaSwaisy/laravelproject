@include('sub.subview')

<div class="container">



    <form class="form-inline form-control form-control-lg mx-auto row" action="{{URL('/home/search')}}" method="GET">
        <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>


        <a style="margin-inline-start: 15px" href="{{URL('/home')}}" type="button"
            class="btn  btn-primary  ">back home</a>

    </form>

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

            @foreach ($booksss as $item )
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->bookName}}</td>
                <td>{{$item->writerName}}</td>
                <td>{{$item->publisherName}}</td>
                <td>{{$item->categoryName}}</td>
                <td>{{$item->versionNumber}}</td>

            </tr>

            @endforeach
        </tbody>

    </table>
</div>